@extends('layouts.admin-layout')

@section('title', 'Feedbacks')
@section('content')

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        Feedbacks
                    </div>
                    <h2 class="page-title">
                        User Feedbacks
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container">
            <!-- Success Alert -->
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show position-absolute"
                    style="top: 1rem; right: 1rem; z-index: 1050;" role="alert">
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
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">Collection</h4>
                </div>
                <div class="card-body">
                    @foreach ($feedbacks as $feedback)
                        <div class="card mb-3 shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="card-title">{{ $feedback->name }}</h5>
                                <p class="card-text"><strong>Email:</strong> {{ $feedback->email }}</p>
                                <p class="card-text"><strong>Phone:</strong> {{ $feedback->phone }}</p>
                                <p class="card-text"><strong>Message:</strong> {{ $feedback->message }}</p>
                                <p class="card-text"><small
                                        class="text-muted">{{ $feedback->created_at->diffForHumans() }}</small></p>
                                <!-- Button to trigger modal -->
                                <button type="button" class="btn badge bg-red" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal" data-feedback-id="{{ $feedback->id }}">
                                    Delete
                                </button>

                                <!-- Modal -->
                                <div class="modal" id="deleteModal" tabindex="-1">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                            <div class="modal-status bg-danger"></div>
                                            <div class="modal-body text-center py-4">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon mb-2 text-danger icon-lg" width="24" height="24"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M12 9v2m0 4v.01" />
                                                    <path
                                                        d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
                                                </svg>
                                                <h3>Are you sure?</h3>
                                                <div class="text-secondary">Do you really want to remove this feedback? What
                                                    you've done cannot be undone.</div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="w-100">
                                                    <div class="row">
                                                        <div class="col"><button class="btn w-100"
                                                                data-bs-dismiss="modal">Cancel</button></div>
                                                        <div class="col"><button class="btn btn-danger w-100"
                                                                id="confirmDelete">Delete</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Hidden form to handle deletion -->
                                <form id="deleteFeedbackForm" action="" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>

                            </div>
                        </div>
                    @endforeach

                    @if ($feedbacks->isEmpty())
                        <div class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="large-icon text-muted mt-2" width="40" height="40">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                <path d="M14.5 16.05a3.5 3.5 0 0 0 -5 0" />
                                <path d="M8 9l2 2" />
                                <path d="M10 9l-2 2" />
                                <path d="M14 9l2 2" />
                                <path d="M16 9l-2 2" />
                            </svg>
                            <p class="text-muted mt-2">No feedbacks available.</p>
                        </div>
                    @endif

                    <div class="mt-3">
                        {{ $feedbacks->links() }}
                    </div>

                </div> <!-- End of Card Body -->
            </div> <!-- End of Card -->
        </div> <!-- End of Container -->
    </div> <!-- End of Page Body -->


    <!-- JavaScript to handle modal confirmation -->
    <script>
        const deleteModal = document.getElementById('deleteModal');
        const deleteForm = document.getElementById('deleteFeedbackForm');

        deleteModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget; // Button that triggered the modal
            const feedbackId = button.getAttribute('data-feedback-id'); // Extract info from data-* attributes

            // Update the action URL of the form
            deleteForm.action = `/feedback/${feedbackId}`; // Update this to match your route for deletion
        });

        document.getElementById('confirmDelete').addEventListener('click', function() {
            deleteForm.submit(); // Submit the form to delete the feedback
        });
    </script>
@endsection
