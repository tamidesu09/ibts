@extends('layouts.admin-layout')
@section('title', 'Create Activity')
@section('content')

<title>Create Activity</title>


<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">
                    Activity Management
                </div>
                <h2 class="page-title">
                    Create Activity
                </h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <a href="{{ route('activities.index') }}" class="btn btn-primary">
                    <span class="nav-link-icon d-md-none d-lg-inline-block text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-back-up">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 14l-4 -4l4 -4" />
                            <path d="M5 10h11a4 4 0 1 1 0 8h-1" />
                        </svg>
                    </span>
                    Back
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
                <form action="{{route('activities.store')}}" method="post">
                    @csrf

                    <!-- Title Field -->
                    <div class="mb-3">
                        <label class="form-label">Add Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                            value="{{ old('title') }}" placeholder="Activity Title" />
                        @error('title')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Job Type -->
                    <div class="mb-3">
                        <label class="form-label">Activity Type</label>
                        <select class="form-select @error('type') is-invalid @enderror" name="type">
                            <option value="" disabled selected>Select activity type</option>
                            <option value="Call">Call</option>
                            <option value="Meeting">Meeting</option>
                            <option value="Email">Email</option>
                            <option value="Interview">Interview</option>

                        </select>
                        @error('type')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Working Hours -->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">Date</label>
                                <input id="date" type="date"
                                    class="form-control @error('date') is-invalid @enderror" name="date"
                                    value="{{ old('date') }}" required autocomplete="date" />
                                @error('date')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">Start Time</label>
                                <input type="time" class="form-control @error('hours_start') is-invalid @enderror"
                                    name="hours_start" value="{{ old('hours_start') }}" />
                                @error('hours_start')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4">
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

                    <!-- TLocation -->
                    <div class="mb-3">
                        <label class="form-label">Location</label>
                        <input type="text" class="form-control @error('location') is-invalid @enderror"
                            name="location" value="{{ old('location') }}" placeholder="Input Location" />
                        @error('location')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- TLocation -->
                    <div class="mb-3">
                        <label class="form-label">Activity URL</label>
                        <input type="text" class="form-control @error('url') is-invalid @enderror"
                            name="url" value="{{ old('url') }}" placeholder="Input URL (Optional)" />
                        @error('url')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Assignee</label>
                        <p class="badge bg-lime-lt">Admin</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Attendee</label>
                        <input list="attendees-list" id="user_id_input" class="form-control @error('user_id') is-invalid @enderror"
                            name="user_id"
                            placeholder=" Search candidate or email address" />

                        <datalist id="attendees-list">
                            @foreach($attendees as $attendee)
                            <option value="{{ $attendee->complete_name }}" data-id="{{ $attendee->user_id }}"></option>
                            @endforeach
                        </datalist>

                        <input type="hidden" id="user_id" name="user_id"> <!-- Hidden input to store user_id -->
                        @error('user_id')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description Field -->
                    <div class="mb-3">
                        <label class="form-label">Activity Description</label>
                        <textarea id="tinymce-job-description" class="form-control @error('description') is-invalid @enderror"
                            name="description" placeholder="Enter activity description">{{ old('description') }}</textarea>
                        @error('description')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Save Button -->
                    <button type="submit" class="btn btn-dark float-end">Add Activity</button>
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
    document.getElementById('user_id_input').addEventListener('input', function() {
        const input = this;
        const datalist = document.getElementById('attendees-list');
        const options = datalist.options;

        for (let i = 0; i < options.length; i++) {
            if (options[i].value === input.value) {
                // Set the hidden input with the corresponding user_id
                document.getElementById('user_id').value = options[i].dataset.id;
                break;
            }
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/libs/tinymce/tinymce.min.js" defer></script>

@endsection