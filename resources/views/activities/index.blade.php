@extends('layouts.admin-layout')
@section('title', 'Activity')
@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">
                    Activity Management
                </div>
                <h2 class="page-title">
                    Activities
                </h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <a href="{{ route('activities.create') }}" class="btn btn-primary">
                    <span class="nav-link-icon d-md-none d-lg-inline-block text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-circle-plus">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M9 12h6" />
                            <path d="M12 9v6" />
                        </svg>
                    </span>
                    Create Activity
                </a>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-dark text-white">
                <h4 class="mb-0">List of Activities</h4>
            </div>
            <div class="card-body p-3">
                @if ($activities->isEmpty())
                <div class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="large-icon text-muted mt-2"
                        width="40" height="40">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                        <path d="M12 21h-5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v4.5" />
                        <path d="M16.5 17.5m-2.5 0a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0" />
                        <path d="M18.5 19.5l2.5 2.5" />
                    </svg>
                    <p class="text-muted mt-2">No activities available at the moment.</p>
                </div>
                @else
                <div class="table-responsive">
                    <table class="table table-hover table-bordered mb-0" id="activities-table">
                        <thead class="table-light">
                            <tr>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Date</th>
                                <th>Duration</th>
                                <th>Location</th>
                                <th>Attendee</th>
                                <th>Description</th>
                                <th>URL</th>
                                <th class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($activities as $activity)
                            <tr>
                                <td>{{ $activity->title }}</td>
                                <td>{{ $activity->type }}</td>
                                <td>{{ $activity->date }}</td>
                                <td>{{ $activity->hours_start }} - {{ $activity->hours_end }}</td>
                                <td>{{ $activity->location}}</td>
                                <td>{{ $activity->user->name}}</td>
                                <td>{!! $activity->description !!}</td>
                                <td> <a href="{{ $activity->url}}"> {{ $activity->url}} </a></td>
                                <td class="text-center">
                                    @if($activity->has_accepted === null)
                                    <p class="text-danger">No response / Expired</p>
                                    @elseif($activity->has_accepted == true || $activity->has_accepted === true)
                                    <p class="text-success">Accepted</p>
                                    @else
                                    <p class="text-danger">Declined</p>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>


@include('layouts.datatable')


<script>
    new DataTable('#activities-table');
</script>

@endsection