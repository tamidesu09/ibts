@extends('layouts.app')

@section('content')

<!-- Success Alert -->
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

@if(empty($application->answers))
<form action="{{ route('applicants.evaluate') }}" method="POST">
    @csrf
    @foreach ($questions as $index => $question)
    <div>
        <label for="answer_{{ $index }}">{{ $question }}</label>
        <input type="text" name="answers[{{ $index }}]" id="answer_{{ $index }}">
    </div>
    @endforeach

    <div>
        <input type="text" name="job_id" value="{{$job->id}}">
        <input type="text" name="application_id" value="{{$application_id}}">
    </div>

    <button type="submit">Submit Answers</button>
</form>
@else
<h1 class="text text-danger">You have answered already</h1>
<a href="{{route('applicants.getJobApplications')}}">Go back to my applications</a>
@endif

@endsection