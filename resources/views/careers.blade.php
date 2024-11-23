@extends('layouts.app')

@section('content')

        <title>Careers</title>

    <div class="hero-image">
        <div class="hero-text">
            <h1 style="font-size:50px">Careers</h1>
            <p>i-Bear True Solutions Inc.</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <h1 class="mt-5">JOB <span style="color: #163673">OPENINGS</span></h1>

            <div class="container">
                <div class="row mb-5 mt-5">
                    <div class="col-12">
                        <div class="card-body p-3">
                            @if ($jobs->isEmpty())
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
                            @else
                                <div class="row">
                                    @foreach ($jobs as $job)
                                        <div class="col-md-6 col-lg-4">
                                            <div class="card shadow-sm mb-4 border-0">
                                                <div class="card-header bg-dark text-white">
                                                    <h4 class="card-title mb-0 fw-semibold">{{ $job->title }}</h4>
                                                </div>
                                                <div class="card-body">
                                                    <p class="text-muted">Type: {{ $job->type }}</p>
                                                    <p class="text-muted">Hours: {{ $job->hours_start }} -
                                                        {{ $job->hours_end }}</p>
                                                    <a href="{{ route('jobs.show', $job->id) }}"
                                                        class="btn btn-outline-dark">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Sections for Work Arrangements -->
        <div class="container mt-5">
            <div class="row">
                <h1 class="mt-5">WORK <span style="color: #163673">ARRANGEMENT</span></h1>


                <!-- First Card: Onsite -->
                <div class="col-md-4">
                    <div class="card bg-dark text-white custom-card border-0">
                        <img src="{{ asset('img/online.jpg') }}" class="card-img fixed-card-img" alt="Onsite Work">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center custom-overlay">
                            <h1 class="card-title fw-bold" style="font-size: 3rem; color: #163673">Onsite</h1>
                        </div>
                    </div>
                </div>

                <!-- Second Card: Hybrid -->
                <div class="col-md-4">
                    <div class="card bg-dark text-white custom-card border-0">
                        <img src="{{ asset('img/hybrid.jpeg') }}" class="card-img fixed-card-img" alt="Hybrid Work">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center custom-overlay">
                            <h1 class="card-title fw-bold" style="font-size: 3rem; color: #163673">Hybrid</h1>
                        </div>
                    </div>
                </div>

                <!-- Third Card: Work From Home -->
                <div class="col-md-4">
                    <div class="card bg-dark text-white custom-card border-0">
                        <img src="{{ asset('img/wfh.jpg') }}" class="card-img fixed-card-img" alt="Work from Home">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center custom-overlay">
                            <h1 class="card-title fw-bold" style="font-size: 3rem; color: #163673">WFH</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.hero-image')

    <style>
        /* Style adjustments for card sizes */
        .custom-card {
            height: 250px;
            overflow: hidden;
        }

        .fixed-card-img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        /* Overlay for work arrangement cards */
        .custom-overlay {
            background-color: rgba(255, 255, 255, 0.9);
            transition: background-color 0.3s ease-in-out;
        }

        .custom-card:hover .custom-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
    </style>
@endsection
