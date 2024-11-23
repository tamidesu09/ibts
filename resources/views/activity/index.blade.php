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
                    <a href="{{ route('activity.create') }}" class="btn btn-primary">
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


@endsection
