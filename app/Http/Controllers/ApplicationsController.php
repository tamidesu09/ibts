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
        // Handle the CV upload
        if ($request->hasFile('cv')) {

            $cv = $request->file('cv'); // Define the $cv variable here
            // Define the path where the file should be stored
            $cvPath = 'cvs/' . $cv->getClientOriginalName(); // This creates a path like 'cvs/filename.pdf'

            // Move the file to the public/cvs directory
            $cv->move(public_path('cvs'), $cv->getClientOriginalName());

            $data = $request->validated();
            $data['cv_path'] = $cvPath; // Add cv_path to the data array

            if ($request->has('job_id')) {
                $data['job_id'] = $request->input('job_id'); // Include job_id from the request
            } else {
                return back()->withErrors(['job_id' => 'Job ID is required']);
            }

            // Create the application
            Applications::create($data);

            // Redirect to the job show route with job_id
            return redirect()->route('jobs.show', ['job_id' => $data['job_id']])
                ->with('success', 'Application submitted successfully.');
        } else {
            return back()->withErrors(['cv' => 'CV is required']);
        }
    }


    public function show($candidate_id)
    {
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
        $application = Applications::findOrFail($application_id);
        $application->delete();

        return redirect()->route('candidate.index')->with('success', 'Applicant has been deleted successfully.');
    }
}
