@extends('layouts.app')

@section('content')

<title>Application Status</title>

<div class="hero-image">
    <div class="hero-text">
        <h1 style="font-size:50px">Application Status</h1>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                    <li class="nav-item">
                        <a href="#tabs-home-ex1" class="nav-link active" data-bs-toggle="tab">Application Status</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tabs-profile-ex1" class="nav-link" data-bs-toggle="tab">Activities</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active show" id="tabs-home-ex1">
                        <h3>My Job Applications ({{$job_applications->count()}})</h3>

                        @foreach($job_applications as $application)
                        <div class="card border-0 shadow mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4>
                                            <a href="{{route('jobs.show', $application->job_id)}}" class="fw-bold text-blue"> {{$application->job->title}}</a>
                                            <br>
                                            @if($application->status == 'Under Review' && empty($application->answers))
                                            <a class="bg-yellow-lt" href="{{route('applicants.showEvaluation', [$application->id, $application->job_id])}}"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-exclamation-circle">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M17 3.34a10 10 0 1 1 -15 8.66l.005 -.324a10 10 0 0 1 14.995 -8.336m-5 11.66a1 1 0 0 0 -1 1v.01a1 1 0 0 0 2 0v-.01a1 1 0 0 0 -1 -1m0 -7a1 1 0 0 0 -1 1v4a1 1 0 0 0 2 0v-4a1 1 0 0 0 -1 -1" />
                                                    </svg></span> Evaluation</a>
                                            @elseif($application->status == 'Under Review' && !empty($application->answers))
                                            <h1 class="badge bg-lime-lt"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M5 12l5 5l10 -10" />
                                                    </svg></span> You have answered the Evaluation Test for this Job Application.</h1>
                                            @endif
                                        </h4>
                                    </div>
                                    <div class=" col-sm-6">
                                        <div class="steps">
                                            <a href="#" class="step-item @if($application->status == 'Application Received') active @endif">
                                                Application Received
                                            </a>
                                            <a href="#" class="step-item @if($application->status == 'Screen') active @endif">
                                                Screen
                                            </a>
                                            <a href="#" class="step-item @if($application->status == 'Under Review') active @endif">
                                                Under Review
                                            </a>
                                            <a href="#" class="step-item @if($application->status == 'Interview Schedule') active @endif">
                                                Interview Schedule
                                            </a>
                                            <span class="step-item @if($application->status == 'Offer') active @endif">
                                                Offer
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="tab-pane" id="tabs-profile-ex1">
                        <h3>Activities ({{$activities->count()}})</h3>
                        @foreach($activities as $activity)
                        <div class="card mb-5">
                            <div class="card-body">
                                <h3>{{$activity->title}}</h3>
                                <h3>{{$activity->type}}</h3>
                                <h3>{{$activity->date}}</h3>
                                <h3>{{$activity->hours_start}}</h3>
                                <h3>{{$activity->hours_end}}</h3>
                                <h3>{{$activity->location}}</h3>
                                <h3>{!!$activity->description!!}</h3>
                                <h3>{{$activity->url}}</h3>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.hero-image')

@endsection