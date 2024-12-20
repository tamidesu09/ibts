<!-- resources/views/admin/index.blade.php -->
@extends('layouts.admin-layout')

@section('title', 'Create Job')
@section('content')

<title>Create Job</title>
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Job Management
                </div>
                <h2 class="page-title">
                    New Job Listing
                </h2>
            </div>
            <!-- Back to Jobs button -->
            <div class="col-auto ms-auto d-print-none">
                <a href="{{ route('jobs.index') }}" class="btn btn-primary">
                    <span class="nav-link-icon d-md-none d-lg-inline-block text-light">
                        <!-- SVG back arrow icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-back-up">
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

        <div class="card">
            <div class="card-body">
                <form action="{{ route('jobs.store') }}" method="post">
                    @csrf

                    <!-- Title Field -->
                    <div class="mb-3">
                        <label class="form-label">Job Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                            value="{{ old('title') }}" placeholder="Enter job title" />
                        @error('title')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description Field -->
                    <div class="mb-3">
                        <label class="form-label">Job Description</label>
                        <textarea id="tinymce-job-description" class="form-control @error('description') is-invalid @enderror"
                            name="description" placeholder="Enter job description">{{ old('description') }}</textarea>
                        @error('description')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Job Type -->
                    <div class="mb-3">
                        <label class="form-label">Job Type</label>
                        <select class="form-select @error('type') is-invalid @enderror" name="type">
                            <option value="" disabled selected>Select job type</option>
                            <option value="Full-time">Full-time</option>
                            <option value="Part-time">Part-time</option>
                            <option value="Contractual">Contractual</option>
                        </select>
                        @error('type')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Working Hours -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Start Time</label>
                                <input type="time" class="form-control @error('hours_start') is-invalid @enderror"
                                    name="hours_start" value="{{ old('hours_start') }}" />
                                @error('hours_start')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">End Time</label>
                                <input type="time" class="form-control @error('hours_end') is-invalid @enderror"
                                    name="hours_end" value="{{ old('hours_end') }}" />
                                @error('hours_end')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Requirements -->
                    <div class="mb-3">
                        <label class="form-label">Job Requirements</label>
                        <input type="text" class="form-control @error('requirements') is-invalid @enderror" name="requirements"
                            value="{{ old('requirements') }}" placeholder="Enter job requirements" />
                        <p class="text-muted">Enlist the skill requirements separated by comma</p>
                        @error('requirements')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="hr-text text-azure fw-bold">Evaluation Test Section</div>


                    <div class="card mb-2">
                        <div class="card-header bg-dark">
                            <h3 class="card-title text-light">Evaluation Tests</h3>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-primary mb-3" onclick="addQuestion()"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-circle-plus">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4.929 4.929a10 10 0 1 1 14.141 14.141a10 10 0 0 1 -14.14 -14.14zm8.071 4.071a1 1 0 1 0 -2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0v-2h2a1 1 0 1 0 0 -2h-2v-2z" />
                                    </svg></span>Question</button>
                            <div id="questions-container">
                                <!-- First input field is pre-rendered -->
                                <div class="form-group row mb-2" id="question-1">
                                    <div class="col-md-10">
                                        <input type="text" name="questions[]" class="form-control" placeholder="Enter question">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-danger remove-btn" onclick="removeQuestion('question-1')">&nbsp&nbsp<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M4 7l16 0" />
                                                    <path d="M10 11l0 6" />
                                                    <path d="M14 11l0 6" />
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                </svg></span>Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>







                    <!-- Save Button -->
                    <button type="submit" class="btn btn-dark float-end">Save Job</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- TinyMCE Script -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let options = {
            selector: '#tinymce-job-description', // Updated selector to match your textarea
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
    });
</script>

<script>
    let questionCount = 1;

    // Function to add a new question input field
    function addQuestion() {
        questionCount++;

        const newQuestion = `
                <div class="form-group row mb-2" id="question-${questionCount}">
                    <div class="col-md-10">
                        <input type="text" name="questions[]" class="form-control" placeholder="Enter question">
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger remove-btn" onclick="removeQuestion('question-${questionCount}')">Remove</button>
                    </div>
                </div>
            `;

        $('#questions-container').append(newQuestion);
    }

    // Function to remove a question input field
    function removeQuestion(id) {
        $('#' + id).remove();
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/libs/tinymce/tinymce.min.js" defer></script>

@endsection