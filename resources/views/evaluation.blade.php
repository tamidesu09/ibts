@extends('layouts.app')

@section('content')

<title>Evaluation</title>

<!-- Success Alert -->



<div class="container mt-5">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <div class="d-flex">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 12l5 5l10 -10" />
                </svg>
            </div>
            <div class="ms-2">
                <h4 class="alert-title">Success!</h4>
                <p class="text-secondary mb-0">{{ session('success') }}</p>
            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="card">
        <div class="card-header text-light bg-dark">
            <h3 class="card-title">Evaluation Test</h3>
        </div>
        <div class="card-body">
            @if(empty($application->answers))

            <p class="text-muted mb-4">Please answer the following questions carefully and submit your responses.</p>

            <form action="{{ route('applicants.evaluate') }}" method="POST">
                @csrf
                @foreach ($questions as $index => $question)
                <div class="mb-3">
                    <label for="answer_{{ $index }}" class="form-label fw-semibold">{{ $question }}</label>
                    <input type="text" name="answers[{{ $index }}]" id="answer_{{ $index }}"
                        class="form-control" placeholder="Enter your answer here" required>
                </div>
                @endforeach

                <input type="hidden" name="job_id" value="{{ $job->id }}">
                <input type="hidden" name="application_id" value="{{ $application_id }}">

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit Answers</button>
                </div>
            </form>
            @else
            <div class="card shadow-sm my-4">
                <div class="card-body text-center">
                    <h1 class="badge bg-red-lt">You have answered already</h1>
                    <p class="text-muted">Your answers have been submitted for evaluation. Thank you!</p>
                    <a href="{{ route('applicants.getJobApplications') }}" class="btn badge bg-blue mt-3">Go Back to My Applications</a>
                </div>
            </div>
            @endif

        </div>
    </div>
</div>

@endsection