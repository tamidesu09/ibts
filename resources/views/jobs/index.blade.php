@extends('layouts.admin-layout')

@section('title', 'Job Listings')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        Job Management
                    </div>
                    <h2 class="page-title">
                        Job Opportunities
                    </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <a href="{{ route('jobs.create') }}" class="btn btn-primary">
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
                        New Job Listing
                    </a>
                </div>
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
                <div class="col">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-dark text-white">
                            <h4 class="mb-0">Job Listings Overview</h4>
                        </div>
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
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered mb-0" id="jobs-table">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Title</th>
                                                <th>Type</th>
                                                <th>Working Hours</th>
                                                <th>Upload Date</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($jobs as $job)
                                                <tr>
                                                    <td>{{ $job->title }}</td>
                                                    <td>{{ $job->type }}</td>
                                                    <td>{{ $job->hours_start }} - {{ $job->hours_end }}</td>
                                                    <td>{{ $job->created_at->format('F j, Y') }}</td>
                                                    <td class="text-center">
                                                        <a href="{{ route('jobs.show', $job->id) }}" class="text-primary"
                                                            title="View Details">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                                <path
                                                                    d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                                            </svg>
                                                        </a>

                                                        <a href="{{ route('jobs.edit', $job->id) }}" class="text-warning"
                                                            title="Edit Job">
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

                                                        <form action="{{ route('jobs.destroy', $job->id) }}"
                                                            method="POST" id="deleteJobForm-{{ $job->id }}"
                                                            style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>

                                                        <a href="#" class="text-danger" title="Delete Job"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteJobModal-{{ $job->id }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-tabler icons-tabler-outline icon-tabler-circle-minus">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                                                <path d="M9 12l6 0" />
                                                            </svg>
                                                        </a>

                                                        <!-- Modal -->
                                                        <div class="modal" id="deleteJobModal-{{ $job->id }}"
                                                            tabindex="-1">
                                                            <div class="modal-dialog modal-sm" role="document">
                                                                <div class="modal-content">
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                    <div class="modal-status bg-danger"></div>
                                                                    <div class="modal-body text-center py-4">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="icon mb-2 text-danger icon-lg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" stroke-width="2"
                                                                            stroke="currentColor" fill="none"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                                fill="none" />
                                                                            <path d="M12 9v2m0 4v.01" />
                                                                            <path
                                                                                d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
                                                                        </svg>
                                                                        <h3>Are you sure?</h3>
                                                                        <div class="text-secondary">Do you really want to
                                                                            delete this job? This action cannot be undone.
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <div class="w-100">
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <a href="#" class="btn w-100"
                                                                                        data-bs-dismiss="modal">
                                                                                        Cancel
                                                                                    </a>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <a href="#"
                                                                                        class="btn btn-danger w-100"
                                                                                        onclick="event.preventDefault(); document.getElementById('deleteJobForm-{{ $job->id }}').submit();">
                                                                                        Delete Job
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

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

            <div class="hr-text hr-text-right text-primary">Card View</div>

            <div class="row mb-5 mt-5">
                @foreach ($jobs as $job)
                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow-sm mb-4 border-0">
                            <div class="card-header bg-dark text-white">
                                <h4 class="card-title mb-0 fw-semibold">{{ $job->title }}</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">Type: {{ $job->type }}</p>
                                <p class="text-muted">Hours: {{ $job->hours_start }} - {{ $job->hours_end }}</p>
                                <p class="text-muted">Upload Date: {{ $job->created_at->format('F j, Y') }}</p>
                                <a href="{{ route('jobs.show', $job->id) }}" class="btn btn-outline-dark">View
                                    Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



    <!-- JavaScript to handle modal confirmation -->
    <script>
        const deleteJobModal = document.getElementById('deleteJobModal');
        const deleteJobForm = document.getElementById('deleteJobForm');

        deleteJobModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget; // Button that triggered the modal
            const jobId = button.getAttribute('data-job-id'); // Extract info from data-* attributes

            // Update the action URL of the form
            deleteJobForm.action = `/jobs/${jobId}`; // Update this to match your route for deletion
        });

        document.getElementById('confirmDeleteJob').addEventListener('click', function() {
            deleteJobForm.submit(); // Submit the form to delete the job
        });
    </script>

    <script>
        const updateJobModal = document.getElementById('updateJobModal');
        const updateJobForm = document.getElementById('jobForm'); // Assuming this is the ID of your job form

        updateJobModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget; // Button that triggered the modal
            // Here you can get any data attributes you may want to use, like jobId
        });

        document.getElementById('confirmUpdateJob').addEventListener('click', function() {
            updateJobForm.submit(); // Submit the form to update the job
        });
    </script>

@endsection
