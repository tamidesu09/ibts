@extends('layouts.admin-layout')


@section('title', 'Apply Job')
@section('content')
<title>Job Information</title>


<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">Jobs</div>
                @if(auth()->user()->user_type == 1)
                <h2 class="page-title">Apply Job</h2>
                @elseif(auth()->user()->user_type != 1)
                <h2 class="page-title">Job Information</h2>
                @endif
            </div>

            @if((auth()->user()->user_type == 0))
            <div class="col-auto ms-auto d-print-none">
                <a href="{{ route('jobs.index') }}" class="btn btn-primary">
                    <span class="nav-link-icon d-md-none d-lg-inline-block text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 14l-4 -4l4 -4" />
                            <path d="M5 10h11a4 4 0 1 1 0 8h-1" />
                        </svg>
                    </span>
                    Back
                </a>
            </div>
            @else
            <div class="col-auto ms-auto d-print-none">
                <a href="{{ route('careers') }}" class="btn btn-primary">
                    <span class="nav-link-icon d-md-none d-lg-inline-block text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 14l-4 -4l4 -4" />
                            <path d="M5 10h11a4 4 0 1 1 0 8h-1" />
                        </svg>
                    </span>
                    Back
                </a>
            </div>
            @endif
        </div>
    </div>
</div>


@if (session('success'))
<div class="alert alert-success alert-dismissible fade show position-absolute"
    style="top: 1rem; right: 1rem; z-index: 1050;" role="alert">
    <div class="d-flex">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-check">
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


<div class="page-body">
    <div class="container">
        <div class="row">

            <!-- Job Details -->
            <div class="col-sm-6">
                <div class="card mb-5">
                    <div class="card-header bg-dark text-white">
                        <h1 class="card-title fw-bold">{{ $job->title }}</h1>
                    </div>
                    <div class="card-body">
                        <p>{!! $job->description !!}</p>
                        <p>{{ $job->type }}</p>
                        <p>{{ $job->hours_start }} - {{ $job->hours_end }}</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h1 class="card-title fw-bold">Job Requirements</h1>
                    </div>
                    <div class="card-body">
                        @php
                        $requirements = json_decode($job->requirements, true);
                        @endphp

                        @if ($requirements)
                        <ul>
                            @foreach ($requirements as $requirement)
                            <li>{{ $requirement }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </div>
            </div>



            @if(auth()->user()->user_type == 1)
            <!-- Application Form -->
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">

                        @if($hasApplied === false)
                        <h1 class="text-primary fw-bold">Join our team today!</h1>
                        <h4>Send us your <span class="text-primary">CV</span>.</h4>
                        @else
                        <h3 class="text-success fw-bold">You have already applied for this job.</h3>
                        <a class="btn btn-success" href="{{route('applicants.getJobApplications')}}"> View your application.</a></p>
                        @endif


                        @if($hasApplied === false)
                        <form action="{{ route('applications.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="job_id" value="{{ $job->id }}">
                            <!-- Make sure to set this value -->

                            <!-- Name Field -->
                            <div class="mb-3 mt-5">
                                <label class="form-label">Complete Name </label>
                                <input type="text" class="form-control @error('complete_name') is-invalid @enderror"
                                    name="complete_name" value="{{ auth()->user()->name  }}" placeholder="FN, MI, S"
                                    required disabled />
                                @error('complete_name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Email Field -->
                            <div class="mb-3">
                                <label class="form-label">Email </label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ auth()->user()->email }}" placeholder="Your email address."
                                    required disabled />
                                @error('email')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Phone Field -->
                            <div class="mb-3">
                                <label class="form-label">Phone Number <span
                                        class="text-danger fw-bold">*</span></label>
                                <input type="tel" class="form-control @error('phone_number') is-invalid @enderror"
                                    name="phone_number" value="{{ old('phone_number') }}" placeholder="+639-111-111-111"
                                    required />
                                @error('phone_number')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Sex Field (Optional) -->
                            <div class="mb-3">
                                <label class="form-label">Sex <span class="text-muted">(Optional)</span></label>
                                <div class="@error('sex') is-invalid @enderror">
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sex" value="Male"
                                            {{ old('sex') == 'Male' ? 'checked' : '' }}>
                                        <span class="form-check-label">Male</span>
                                    </label>
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sex" value="Female"
                                            {{ old('sex') == 'Female' ? 'checked' : '' }}>
                                        <span class="form-check-label">Female</span>
                                    </label>
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sex"
                                            value="Prefer not to say"
                                            {{ old('sex') == 'Prefer not to say' ? 'checked' : '' }}>
                                        <span class="form-check-label">Prefer not to say</span>
                                    </label>
                                </div>
                                @error('sex')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- CV Upload Field -->
                            <div class="mb-3">
                                <label class="form-label">Attach Your CV <span
                                        class="text-danger fw-bold">*<!-- Button to Trigger the Modal -->
                                        <button type="button" class="badge badge-pill bg-blue" data-bs-toggle="modal" data-bs-target="#imageModal">
                                            ?
                                        </button></label>

                                <!-- Modal Structure -->
                                <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="imageModalLabel">Sample CV</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <img src="{{ asset('img/samplecv.png') }}" alt="Sample CV" style="width: 100%; height: auto; max-width: 710px;">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="file" class="form-control" name="cv" id="cv-upload">


                                <div class="dz-message">
                                    <span class="dropzone-msg-desc text-muted">CV should be in a *.pdf format</span>
                                </div>
                                @error('cv')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Privacy Policy Agreement Checkbox -->
                            <div class="mb-3">
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" name="privacy_policy" id="privacy_policy" required>
                                    <label class="form-check-label" for="privacy_policy">
                                        By submitting this form, you agree to our <a href="{{ route('terms') }}" target="_blank">Privacy Policy</a>.
                                    </label>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-outline-primary w-100">Submit</button>
                        </form>
                        @endif

                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/libs/dropzone/dist/dropzone.css"
    rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/libs/dropzone/dist/dropzone-min.js"></script>


<style>
    /* Custom Dropzone Style */
    #dropzone-custom {
        border: 1px dashed #999999;
        border-radius: 5px;
        min-height: 150px;
        padding: 20px;
        text-align: center;
    }
</style>

@endsection