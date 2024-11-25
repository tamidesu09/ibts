@extends('layouts.app')

@section('content')

<form action="{{ route('applicants.evaluate') }}" method="POST">
    @csrf
    @foreach ($questions as $index => $question)
    <div>
        <label for="answer_{{ $index }}">{{ $question }}</label>
        <input type="text" name="answers[{{ $index }}]" id="answer_{{ $index }}">
    </div>
    @endforeach

    <input type="text" name="job_id" value="{{$job->id}}">

    <button type="submit">Submit Answers</button>
</form>


@endsection