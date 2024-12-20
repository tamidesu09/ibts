<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobsCreateRequest;
use App\Http\Requests\JobsUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\User;


class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::paginate(10);
        return view('jobs.index', compact('jobs'));
    }

    public function create()
    {
        if (auth()->user()->user_type != 0) {
            abort(404);
        }
        return view('jobs.create');
    }

    public function store(JobsCreateRequest $request)
    {
        if (auth()->user()->user_type != 0) {
            abort(404);
        }

        $validatedData = $request->validated();

        if (!empty($validatedData['requirements'])) {
            $validatedData['requirements'] = json_encode(
                array_map('trim', explode(',', $validatedData['requirements']))
            );
        }

        if ($request->has('questions') && !empty($request->questions)) {
            $questions = $request->input('questions');
            $validatedData['questions'] = json_encode($questions);
        }

        Job::create($validatedData);
        return back()->with('success', 'Job has been created successfully.');
    }

    public function show($job_id)
    {
        $user = User::findOrFail(auth()->user()->id);
        $job = Job::findOrFail($job_id);
        $hasApplied = $user->applications()->where('job_id', $job->id)->exists();

        return view('jobs.show', compact('job', 'hasApplied'));
    }

    public function edit($job_id)
    {
        if (auth()->user()->user_type != 0) {
            abort(404);
        }
        $job = Job::findOrFail($job_id); // Retrieves the job by ID or throws a 404 error if not found
        $job->requirements = implode(', ', json_decode($job->requirements, true));
        $questions = !empty($job->questions) ? json_decode($job->questions, true) : [];

        return view('jobs.edit', compact('job', 'questions')); // Pass the job data to the edit view
    }

    public function update(JobsUpdateRequest $request, $job_id)
    {
        if (auth()->user()->user_type != 0) {
            abort(404);
        }
        // Validate the request data
        $validatedData = $request->validated();

        if (!empty($validatedData['requirements'])) {
            $validatedData['requirements'] = json_encode(
                array_map('trim', explode(',', $validatedData['requirements']))
            );
        }

        // Handle questions
        if ($request->has('questions') && !empty($request->questions)) {
            $questions = $request->input('questions');
            $validatedData['questions'] = json_encode($questions); // Encode as JSON
        }

        // Find the job by ID
        $job = Job::findOrFail($job_id);

        // Update the job with the validated data
        $job->update($validatedData);

        // Redirect to the jobs index with a success message
        return redirect()->route('jobs.index')->with('success', 'Job has been updated successfully.');
    }


    public function destroy($job_id)
    {
        if (auth()->user()->user_type != 0) {
            abort(404);
        }
        // Find the job or throw a 404 error
        $job = Job::findOrFail($job_id);

        // Delete the job from the database
        $job->delete();

        // Redirect back to the jobs index page with a success message
        return redirect()->route('jobs.index')->with('success', 'Job has been deleted successfully.');
    }
}
