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
        @if (session('responded'))
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
                    <h4 class="alert-title">Your response has been sent!</h4>
                    <p class="text-secondary mb-0">{{ session('responded') }}</p>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
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

                                        @if($application->status != 'Closed')
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
                                            <span class="step-item @if($application->status == 'Accepted') active @endif">
                                                Accepted
                                            </span>
                                            <span class="step-item @if($application->status == 'Accepted' || $application->status == 'Rejected') active @endif">
                                                @if($application->status == 'Accepted')
                                                Accepted
                                                @elseif($application->status == 'Rejected')
                                                Rejected
                                                @else
                                                Accepted/Rejected
                                                @endif
                                            </span>
                                        </div>
                                        @else
                                        CLOSED ALREADY THANK YOU FOR APPLICATION ETC ETC ETC
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="tab-pane" id="tabs-profile-ex1">
                        <h3 class="mb-4">Activities ({{$activities->count()}})</h3>
                        @foreach($activities as $activity)
                        <table class="table table-bordered mb-5">
                            <tbody>
                                <tr>
                                    <th class="table-light" style="width: 25%;">Title</th>
                                    <td class="fw-bold">{{$activity->title}}</td>
                                </tr>
                                <tr>
                                    <th class="table-light">Type</th>
                                    <td>{{$activity->type}}</td>
                                </tr>
                                <tr>
                                    <th class="table-light">Date</th>
                                    <td>{{\Carbon\Carbon::parse($activity->date)->format('F d, Y')}}</td>
                                </tr>
                                @if($activity->type == 'Interview')
                                <tr>
                                    <th class="table-light">Time</th>
                                    <td>{{$activity->hours_start}} - {{$activity->hours_end}}</td>
                                </tr>
                                <tr>
                                    <th class="table-light">Location</th>
                                    <td>{{$activity->location}}</td>
                                </tr>
                                @endif
                                <tr>
                                    <th class="table-light">Description</th>
                                    <td>{!!$activity->description!!}</td>
                                </tr>
                                @if($activity->type == 'Interview')
                                <tr>
                                    <th class="table-light">URL</th>
                                    <td>
                                        <a href="{{$activity->url}}" target="_blank" class="text-decoration-underline text-primary">
                                            {{$activity->url}}
                                        </a>
                                    </td>
                                </tr>
                                @endif
                                @if($activity->type == 'Message')
                                <tr>
                                    <th class="table-light">Actions</th>
                                    <td>
                                        @if($activity->has_accepted === null && $activity->date >= now()->format('Y-m-d'))
                                        <form action="{{route('activities.accept', $activity)}}" method="post" class="d-flex gap-2">
                                            @csrf
                                            <button class="btn btn-outline-success" name="response" type="submit" value="Accept">Accept</button>
                                            <button class="btn btn-outline-danger" name="response" type="submit" value="Decline">Decline</button>
                                        </form>
                                        @elseif($activity->date < now()->format('Y-m-d'))
                                            <span class="text-danger fw-bold">Expired</span>
                                            @elseif($activity->has_accepted === true || $activity->has_accepted == true)
                                            <span class="text-success fw-bold">Accepted</span>
                                            @elseif($activity->has_accepted === false || $activity->has_accepted == false)
                                            <span class="text-danger fw-bold">Declined</span>
                                            @endif
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.hero-image')

@endsection