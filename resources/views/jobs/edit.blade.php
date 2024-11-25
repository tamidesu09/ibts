@extends('layouts.admin-layout')

@section('title', 'Edit Job Listing')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">
                    Job Management
                </div>
                <h2 class="page-title">
                    Edit Job
                </h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <a href="{{ route('jobs.index') }}" class="btn btn-primary">
                    <span class="nav-link-icon d-md-none d-lg-inline-block text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icon-tabler-arrow-back-up">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 14l-4 -4l4 -4" />
                            <path d="M5 10h11a4 4 0 1 1 0 8h-1" />
                        </svg>
                    </span>
                    Back to Jobs
                </a>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show position-absolute"
            style="top: 1rem; right: 1rem; z-index: 1050;" role="alert">
            <div class="d-flex">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icon-tabler-check">
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
            <div class="card-body">
                <form action="{{ route('jobs.update', $job->id) }}" method="POST" id="jobUpdateForm">
                    @csrf
                    @method('PUT')

                    <div class="mb-3 mt-3">
                        <label for="title" class="form-label">Job Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $job->title }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Job Type</label>
                        <select class="form-select" id="type" name="type" required>
                            <option value="Full-time" {{ $job->type == 'Full-time' ? 'selected' : '' }}>Full-time</option>
                            <option value="Part-time" {{ $job->type == 'Part-time' ? 'selected' : '' }}>Part-time</option>
                            <option value="Contractual" {{ $job->type == 'Contractual' ? 'selected' : '' }}>Contractual</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea id="tinymce-default" name="description" rows="4" required>{{ $job->description ?? '' }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="hours_start" class="form-label">Start Time</label>
                        <input type="time" class="form-control" id="hours_start" name="hours_start" value="{{ $job->hours_start }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="hours_end" class="form-label">End Time</label>
                        <input type="time" class="form-control" id="hours_end" name="hours_end" value="{{ $job->hours_end }}" required>
                    </div>

                    <!-- Requirements -->
                    <div class="mb-3">
                        <label class="form-label">Job Requirements</label>
                        <input type="text" class="form-control @error('requirements') is-invalid @enderror" name="requirements" value="{{ $job->requirements }}" placeholder="Enter job requirements" />
                        <p class="text-muted">Enlist the skill requirements separated by comma</p>
                        @error('requirements')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="button" class="btn btn-dark float-end" data-bs-toggle="modal" data-bs-target="#confirmModal">
                        Update Job Listing
                    </button>
                </form>
            </div>
        </div>

        <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-status bg-warning"></div>
                    <div class="modal-body text-center py-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon mb-2 text-warning icon-lg">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" />
                            <path d="M12 19l0 .01" />
                        </svg>
                        <h3>Are you sure?</h3>
                        <div class="text-secondary">Do you really want to update this job listing?</div>
                    </div>
                    <div class="modal-footer">
                        <div class="w-100">
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn w-100" data-bs-dismiss="modal">Cancel</button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-warning w-100" id="confirmUpdate">Confirm Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/libs/tinymce/tinymce.min.js" defer></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let options = {
            selector: '#tinymce-default',
            height: 300,
            menubar: false,
            statusbar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat',
            content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; -webkit-font-smoothing: antialiased; }'
        };

        if (localStorage.getItem("tablerTheme") === 'dark') {
            options.skin = 'oxide-dark';
            options.content_css = 'dark';
        }

        tinyMCE.init(options);

        document.getElementById("confirmUpdate").addEventListener("click", function() {
            document.getElementById("jobUpdateForm").submit();
        });
    });
</script>
@endsection
