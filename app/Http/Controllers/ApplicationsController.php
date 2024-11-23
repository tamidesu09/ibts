<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicationsCreateRequest;
use App\Http\Requests\ApplicationsUpdateRequest;
use App\Models\Applications;
use App\Models\Notes;
use App\Models\User;
use Illuminate\Http\Request;



class ApplicationsController extends Controller
{
    public function index()
    {
        if (auth()->user()->user_type != 0) {
            abort(404);
        }
        $applications = Applications::all();
        $applicationsCount = Applications::count(); // Get total number of applications
        return view('candidate.index', compact('applications', 'applicationsCount'));
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
                    ->with('success', 'Application submitted successfully.');
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
        if (auth()->user()->user_type != 0) {
            abort(404);
        }
        $application = Applications::findOrFail($application_id);

        $request->validate([
            'appstatus' => 'required|in:Application Received,Screen,Under Review,Interview Schedule,Offer'
        ]);

        $application->status =  $request->appstatus;
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

        if ($application->is_parsed === 0) {
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
}
