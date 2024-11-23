<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicationsCreateRequest;
use App\Http\Requests\ApplicationsUpdateRequest;
use App\Models\Applications;
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

                $cv->move(public_path('cvs'), $cv->getClientOriginalName());

                Applications::create([
                    'job_id' => $request->job_id,
                    'complete_name' => auth()->user()->name,
                    'email' => auth()->user()->email,
                    'cv_path' => $cvPath,
                    'phone_number' => $request->phone_number,
                    'sex' => $request->sex
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

        // Pass the application to the view
        return view('candidate.show', compact('application'));
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

    public function destroy($application_id)
    {
        if (auth()->user()->user_type != 0) {
            abort(404);
        }
        $application = Applications::findOrFail($application_id);
        $application->delete();

        return redirect()->route('candidate.index')->with('success', 'Applicant has been deleted successfully.');
    }
}
