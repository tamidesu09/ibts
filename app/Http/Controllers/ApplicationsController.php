<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicationsCreateRequest;
use App\Http\Requests\ApplicationsUpdateRequest;
use App\Models\Applications;
use App\Models\Notes;
use App\Models\User;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ApplicationsController extends Controller
{
    public function index()
    {
        if (auth()->user()->user_type != 0) {
            abort(404);
        }
        $applications = Applications::all();
        $applicationsCount = Applications::count(); // Get total number of applications

        // Fetch statuses with their counts (example query, adjust based on your database structure)
        $statuses = DB::table('applications')
            ->select('status', DB::raw('COUNT(*) as count'))
            ->groupBy('status')
            ->get();

        // Fetch applications grouped by date
        $dateRange = DB::table('applications')
            ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // Prepare data for the chart
        $dates = $dateRange->pluck('date')->toArray(); // Extract dates
        $counts = $dateRange->pluck('count')->toArray(); // Extract counts

        return view('candidate.index', compact('applications', 'applicationsCount', 'statuses', 'dates', 'counts'));
    }

    public function create()
    {
        return view('candidate.create');
    }

    public function store(ApplicationsCreateRequest $request)
    {
        if (auth()->user()->user_type == 1) {

            if ($request->hasFile('cv')) {

                $cv = $request->file('cv');

                $cvPath = 'cvs/' . md5(now()) . '_' . $cv->getClientOriginalName();

                $cv->move(public_path('cvs'), $cvPath);

                Applications::create([
                    'job_id' => $request->job_id,
                    'complete_name' => auth()->user()->name,
                    'email' => auth()->user()->email,
                    'cv_path' => $cvPath,
                    'phone_number' => $request->phone_number,
                    'sex' => $request->sex,
                    'user_id' => auth()->user()->id
                ]);

                return back()
                    ->with('success', 'Application submitted successfully. Please check your Application Status from time to time for updates, or expect a response within 2-3 business days.');
            } else {
                return back()->withErrors(['cv' => 'CV is required']);
            }
        }
    }


    public function show($candidate_id)
    {
        if (auth()->user()->user_type != 0) {
            abort(404);
        }
        // Find the application and eager load the related job information
        $application = Applications::with('job')->findOrFail($candidate_id);

        $notes = Notes::where('application_id', $application->id)->get();

        // Pass the application to the view
        return view('candidate.show', compact('application', 'notes'));
    }

    public function edit($application_id)
    {
        $application = Applications::findOrFail($application_id);
        return view('candidate.edit', compact('application'));
    }

    public function update(ApplicationsUpdateRequest $request, $application_id)
    {
        $validatedData = $request->validated();
        $application = Applications::findOrFail($application_id);
        $application->update($validatedData);

        return redirect()->route('candidate.index')->with('success', 'Application updated successfully.');
    }

    public function updateStatus(Request $request, $application_id)
    {

        $application = Applications::findOrFail($application_id);

        if (auth()->user()->user_type != 0 || $application->status == 'Closed') {
            abort(404);
        }

        $request->validate([
            'appstatus' => 'required|in:Application Received,Screen,Under Review,Interview Schedule,Hired,Rejected',
            'correct_answers' => 'required|numeric'
        ]);

        if ($request->appstatus == 'Hired') {
            Applications::where('job_id', $application->job_id)
                ->update(['status' => 'Closed']);
        }

        $application->status =  $request->appstatus;
        $application->correct_answers =  $request->correct_answers;
        $application->save();

        return back()->with('update-status-success', 'Application status has been updated successfully');
    }

    public function destroy($application_id)
    {
        if (auth()->user()->user_type != 0) {
            abort(404);
        }
        $application = Applications::findOrFail($application_id);
        $application->delete();

        return redirect()->route('candidate.index')->with('success', 'Applicant has been deleted successfully.');
    }

    public function parseResume(Request $request)
    {
        if (auth()->user()->user_type != 0) {
            abort(404);
        }

        $application = Applications::findOrFail($request->application_id);

        if ($application->is_parsed == false) {
            $application->skills = $request->skills;
            $application->educations = $request->educations;
            $application->experiences =  $request->experiences;
            $application->is_parsed = true;
            $application->save();
        }

        return response()->json($application);
    }

    public function getJobApplications()
    {
        if (auth()->user()->user_type != 1) {
            abort(404);
        }

        $user = User::findOrFail(auth()->user()->id);
        $job_applications = $user->applications()->get();
        $activities = $user->activities()->get();

        return view('status', compact('job_applications', 'activities'));
    }

    public function showEvaluation($application_id, $job_id)
    {
        $application = Applications::findOrFail($application_id);

        if (auth()->user()->user_type != 1 || $application->status != 'Under Review') {
            abort(404);
        }

        if (empty($application->access_time) && empty($application->expire_time)) {
            $application->update([
                'access_time' => now(),
                'expire_time' => now()->addMinute(30)
            ]);
        }

        $job = Job::findOrFail($job_id);

        $questions = json_decode($job->questions);

        return view('evaluation', compact('job', 'application_id', 'application', 'questions'));
    }
}
