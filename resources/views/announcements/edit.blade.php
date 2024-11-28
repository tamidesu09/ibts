@extends('layouts.admin-layout')
@section('title', 'Edit Announcements')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Announcement Management
                </div>
                <h2 class="page-title">
                    Edit Announcement Listing
                </h2>
            </div>
            <!-- Back to Jobs button -->
            <div class="col-auto ms-auto d-print-none">
                <a href="{{ route('announcements.index') }}" class="btn btn-primary">
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
                    Back to Announcements
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
                <form action="{{ route('announcements.update', $announcement) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                            value="{{ $announcement->title }}" placeholder="Enter announcement title" />
                        @error('title')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Body</label>
                        <textarea id="tinymce-job-description" class="form-control @error('body') is-invalid @enderror"
                            name="body" placeholder="Enter announcement body">{{ $announcement->body }}</textarea>
                        @error('body')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Publish Status</label>
                        <select class="form-select @error('is_published') is-invalid @enderror" name="is_published">
                            <option @if($announcement->is_published == false) selected @endif value=0>Unpublished</option>
                            <option @if($announcement->is_published == true) selected @endif value=1>Published</option>
                        </select>
                        @error('is_published')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-dark float-end">Update Announcement</button>
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

<script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/libs/tinymce/tinymce.min.js" defer></script>

@endsection