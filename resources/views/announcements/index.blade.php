@extends('layouts.admin-layout')
@section('title', 'Announcements')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">
                    Announcement Management
                </div>
                <h2 class="page-title">
                    List
                </h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                @if(auth()->user()->user_type == 0)
                <a href="{{ route('announcements.create') }}" class="btn btn-primary">
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
                    New Announcement
                </a>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover table-bordered mb-0" id="announcements-table">
                    <thead class="table-light">
                        <tr>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Status</th>
                            <th>Last Updated</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($announcements as $announcement)
                        <tr>
                            <td>{{ $announcement->title }}</td>
                            <td>{!! $announcement->body !!}</td>
                            <td>@if($announcement->is_published) <span class="text-success">Published</span> @else <span class="text-danger">Unpublished</span> @endif</td>
                            <td>{{ $announcement->updated_at->format('F j, Y') }}</td>
                            <td class="text-center">
                                <a href="{{ route('announcements.edit', $announcement) }}" class="text-primary"
                                    title="Edit Details">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path
                                            d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @empty
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
                            <p class="text-muted mt-2">No job listings available at the moment.</p>
                        </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('layouts.datatable')

<script>
    new DataTable('#announcements-table');
</script>

@endsection