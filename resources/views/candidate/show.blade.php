@extends('layouts.admin-layout')
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', 'Candidates Information')

@section('content')

<title>Candidate Information</title>


<div class="page-body">
    <div class="container">
        <div class="col-sm-6 d-print-none mb-2">
            <a href="{{ route('candidate.index') }}" class="btn btn-primary">
                <span class="nav-link-icon d-md-none d-lg-inline-block text-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 14l-4 -4l4 -4" />
                        <path d="M5 10h11a4 4 0 1 1 0 8h-1" />
                    </svg>
                </span>
                Back
            </a>
        </div>


        <div class="card border-0 shadow-sm col-md-6 mt-5">
            <div class="card-body">
                <div class="d-flex align-items-center">

                    <span class="avatar avatar-xl">
                        <img src="{{ asset('img/avatar.png') }}" alt="Recruit Image">
                    </span>

                    <div class="ms-3">
                        <div class="d-flex align-items-center">
                            <h2 class="mb-0 text-primary">{{ $application->complete_name }}</h2>
                            <hr>
                        </div>
                        <div class="d-flex align-items-center mt-2">
                            <span class="me-2 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-mail">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" />
                                    <path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" />
                                </svg>
                            </span>
                            <h4 class="text-muted mb-0">{{ $application->email }}</h4>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-briefcase-2">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M14 2a3 3 0 0 1 3 3v1h2a3 3 0 0 1 3 3v9a3 3 0 0 1 -3 3h-14a3 3 0 0 1 -3 -3v-9a3 3 0 0 1 3 -3h2v-1a3 3 0 0 1 3 -3zm0 2h-4a1 1 0 0 0 -1 1v1h6v-1a1 1 0 0 0 -1 -1" />
                                </svg>
                            </span>
                            <h4 class="text-muted mb-0">{{ $application->job->title }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card border-0 mt-5">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist" data-bs-toggle="tabs">
                    <li class="nav-item">
                        <a href="#tabs-summary" class="nav-link" id="summary-tab" data-bs-toggle="tab">Summary</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tabs-resume" class="nav-link" id="resume-tab" data-bs-toggle="tab">Resume</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tabs-notes" class="nav-link" id="notes-tab" data-bs-toggle="tab">Notes</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tabs-history" class="nav-link" id="history-tab" data-bs-toggle="tab">History</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tabs-status" class="nav-link" id="status-tab" data-bs-toggle="tab">Application
                            Status</a>
                    </li>
                </ul>
            </div>

            <div class="card-body">
                <div class="tab-content">
                    <!-- Summary Tab Content -->
                    <div class="tab-pane active show" id="tabs-summary">
                        <div class="row">
                            <!-- Left Side: Candidate Details and Notes -->
                            <div class="col-sm-6">
                                <!-- Candidate Details Card -->
                                <div class="card">
                                    <div class="card-header bg-dark">
                                        <h3 class="card-title text-light">Candidate Details</h3>
                                    </div>


                                    <div class="table-responsive">
                                        <table class="table table-vcenter">
                                            <tbody>
                                                <tr>
                                                    <td>Candidate Full Name</td>
                                                    <td class="text-secondary">{{ $application->complete_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Sex</td>
                                                    <td class="text-secondary">{{ $application->sex }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Candidate Email Address</td>
                                                    <td class="text-secondary"><span
                                                            class="text-primary fw-bold">@</span>&nbsp;{{ $application->email }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Candidate Phone</td>
                                                    <td class="text-secondary">{{ $application->phone_number }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Notes Card -->
                                <div class="card mt-3">
                                    <div class="card-header bg-dark">
                                        <h3 class="card-title text-light">Notes</h3>
                                    </div>
                                    <div class="card-body">
                                        @if($notes->count() > 0)
                                        <ul class="list-unstyled">
                                            @foreach($notes as $note)
                                            <li class="mb-3">
                                                <strong>{{ $note->name }}</strong> <!-- Use 'note_name' if that's the correct field -->
                                                <p>{{ $note->content }}</p> <!-- Use 'note_content' if that's the correct field -->
                                                <small class="text-muted">Added on: {{ $note->created_at->format('M d, Y') }}</small>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @else
                                        <p>No notes added yet.</p>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- Right Side: Skills, Additional Information, and Experience -->
                            <div class="col-sm-6 mt-3 mt-sm-0">
                                <!-- Skills Card -->
                                @if($application->is_parsed == true)
                                <div class="card">
                                    <div class="card-header bg-dark">
                                        <h3 class="card-title text-light">Skills</h3>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled">
                                            <li class="d-flex flex-wrap gap-2">
                                                @foreach(json_decode($application->skills) as $skill)
                                                <span class="badge badge-pill bg-green-lt">{{ $skill }}</span>
                                                @endforeach
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @endif

                                @if($application->is_parsed == true)
                                <!-- Additional Information Card -->
                                <div class="card mt-3">
                                    <div class="card-header bg-dark">
                                        <h3 class="card-title text-light">Education Background</h3>
                                    </div>
                                    <div class="card-body">

                                        @if(!empty($application->educations) && count(json_decode($application->educations)) > 0)
                                        @foreach(json_decode($application->educations) as $education)
                                        <div>
                                            <h4>{{ $education->name ?? "" }}</h4>
                                            <p>{{!empty($education->dates) ? implode(',', $education->dates) : '' }}</p>
                                        </div>
                                        @unless($loop->last)
                                        <hr>
                                        @endunless
                                        @endforeach
                                        @endif

                                    </div>
                                </div>
                                @endif

                                @if($application->is_parsed == true)
                                <!-- Experience Card -->
                                <div class="card mt-3">
                                    <div class="card-header bg-dark">
                                        <h3 class="card-title text-light">Experience</h3>
                                    </div>
                                    <div class="card-body">

                                        @if(!empty($application->experiences) && count(json_decode($application->experiences)) > 0)
                                        @foreach(json_decode($application->experiences) as $experience)
                                        <div>
                                            <h4>{{ $experience->title ?? "" }}</h4>
                                            <p>{{!empty($experience->dates) ? implode(',', $experience->dates) : '' }}</p>
                                            <p><strong>Location:</strong> {{ $experience->location ?? "" }}</p>
                                            <p><strong>Organization:</strong> {{ $experience->organization ?? "" }}</p>
                                        </div>
                                        @unless($loop->last)
                                        <hr>
                                        @endunless
                                        @endforeach
                                        @endif

                                    </div>

                                </div>
                                @endif

                                @if($application->is_parsed == false)
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
                                    <p class="text-muted mt-2">Candidate's resume is not parsed yet</p>
                                </div>
                                @endif


                            </div>
                        </div>
                    </div>

                    <!-- Additional Tab Contents (Resume, Notes, History) -->
                    <div class="tab-pane" id="tabs-resume">

                        @if($application->is_parsed == false)
                        <button id="parse-resume" class="btn btn-dark mb-3">Parse Resume</button>
                        @endif
                        <iframe src="{{ asset($application->cv_path) }}" style="width: 100%; height: 100vh">
                        </iframe>
                    </div>



                    <div class="tab-pane" id="tabs-notes">
                        <div class="container">
                            <div class="row">
                                <!-- Note Form (Left Side) -->
                                <div class="col-sm-6">

                                    <!-- Success Alert -->
                                    @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <div class="d-flex">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
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
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                    @endif

                                    <div class="card">
                                        <form action="{{ route('notes.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="application_id"
                                                value="{{ $application->id }}">

                                            <div class="card-body">
                                                <!-- Name Field -->
                                                <div class="mb-3 mt-5">
                                                    <label class="form-label">Name</label>
                                                    <input type="text" class="form-control" name="note_name"
                                                        placeholder="Your note name" required />
                                                </div>

                                                <!-- Related To Field -->
                                                <div class="mb-3">
                                                    <label class="form-label">Related to</label>
                                                    <span
                                                        class="badge bg-lime-lt">{{ $application->complete_name }}</span>
                                                </div>

                                                <!-- Note Field -->
                                                <div class="mb-3">
                                                    <label class="form-label">Note</label>
                                                    <textarea id="tinymce-default" name="note_content" placeholder="Add your note here" class="form-control" required></textarea>
                                                </div>

                                                <!-- Add Note Button -->
                                                <button type="submit" class="btn btn-primary mt-5 mb-5">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-plus" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 5l0 14"></path>
                                                        <path d="M5 12l14 0"></path>
                                                    </svg>
                                                    Add Note
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Right Side: Display Notes -->
                                <div class="col-sm-6 mt-3 mt-sm-0">
                                    <div class="card">
                                        <div class="card-header bg-dark">
                                            <h3 class="card-title text-light">Notes</h3>
                                        </div>
                                        <div class="card-body">
                                            <!-- Display each note -->
                                            @if($notes->count() > 0)
                                            <ul class="list-unstyled">
                                                @foreach($notes as $note)
                                                <li class="mb-3">
                                                    <strong>{{ $note->name }}</strong> <!-- Use 'note_name' if that's the correct field -->
                                                    <p>{{ $note->content }}</p> <!-- Use 'note_content' if that's the correct field -->
                                                    <small class="text-muted">Added on: {{ $note->created_at->format('M d, Y') }}</small>
                                                </li>
                                                @endforeach
                                            </ul>
                                            @else
                                            <p>No notes added yet.</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tabs-history">
                        <h4>History Tab</h4>
                        <div>History content goes here.</div>
                    </div>
                    <div class="tab-pane" id="tabs-status">
                        @if (session('update-status-success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <div class="d-flex">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l5 5l10 -10" />
                                    </svg>
                                </div>
                                <div class="ms-2">
                                    <h4 class="alert-title">Success!</h4>
                                    <p class="text-secondary mb-0">{{ session('update-status-success') }}</p>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                        @endif
                        <form action="{{route('candidates.updateStatus', $application->id)}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Application Status</label>


                                <select class="form-select mb-2 @error('appstatus') is-invalid @enderror"
                                    name="appstatus">
                                    <option value="Application Received" @selected(old('appstatus', $application->status) == 'Application Received') disabled>
                                        Application Received
                                    </option>
                                    <option value="Screen" @selected(old('appstatus', $application->status) == 'Screen')>
                                        Screen
                                    </option>
                                    <option value="Under Review" @selected(old('appstatus', $application->status) == 'Under Review')>
                                        Under Review
                                    </option>
                                    <option value="Interview Schedule" @selected(old('appstatus', $application->status) == 'Interview Schedule')>
                                        Interview Schedule
                                    </option>
                                    <option value="Accepted" @selected(old('appstatus', $application->status) == 'Accepted')>
                                        Accepted
                                    </option>
                                    <option value="Rejected" @selected(old('appstatus', $application->status) == 'Rejected')>
                                        Rejected
                                    </option>
                                </select>
                                @error('appstatus')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div class="steps my-5">
                                    <a href="#" class="step-item @if($application->status == 'Application Received') active @endif">
                                        Application Received
                                    </a>
                                    <a href="#" class="step-item @if($application->status == 'Screen') active @endif">
                                        Screen
                                    </a>
                                    <a href="#" class="step-item @if($application->status == 'Under Review') active @endif">
                                        Under Review
                                    </a>
                                    <a href="#" class="step-item @if($application->status == 'Interview Schedule') active @endif">
                                        Interview Schedule
                                    </a>
                                    <span class="step-item @if($application->status == 'Accepted') active @endif">
                                        Onboarding
                                    </span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Manually Edit Correct Answer Count</label>
                                <input type="number" class="form-control @error('correct_answers') is-invalid @enderror" name="correct_answers" value="{{$application->correct_answers}}">
                                <p class="text-muted">You may edit the actual correct answer count for better accurary and fairness</p>
                                @error('correct_answers')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>

                        </form>

                        <div class="hr-text hr-text-right text-blue">Evaluation Test Section</div>

                        @if(!empty($application->answers))
                        <div class="container my-4">
                            <div class="card">
                                <div class="card-header bg-blue text-white">
                                    <h2 class="mb-0">Job Questions</h2>
                                </div>
                                <div class="card-body">
                                    @foreach(json_decode($application->job->questions) as $question)
                                    <div class="mb-3">
                                        <h5 class="text-secondary">{{ $question }}</h5>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="card mt-4">
                                <div class="card-header bg-azure text-white">
                                    <h2 class="mb-0">Candidate Answers</h2>
                                </div>
                                <div class="card-body">
                                    @foreach(json_decode($application->answers) as $answer)
                                    <div class="mb-3">
                                        <h5 class="text-secondary">{{ $answer }}</h5>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="card mt-4">
                                <div class="card-header bg-indigo text-white">
                                    <h2 class="mb-0">Correct Answers</h2>
                                </div>
                                <div class="card-body">
                                    <h5 class="text-secondary">{{ $application->correct_answers }}</h5>
                                </div>
                            </div>

                            <div class="card mt-4">
                                <div class="card-header bg-success text-white">
                                    <h2 class="mb-0">AI Insights/Analysis</h2>
                                </div>
                                <div class="card-body">
                                    @php
                                    $analyses = json_decode($application->analysis, true);
                                    @endphp
                                    @foreach($analyses as $count => $analysis)
                                    <h5 class="text-secondary">{{$count}}: {{ $analysis }}</h5>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.7/axios.min.js" integrity="sha512-DdX/YwF5e41Ok+AI81HI8f5/5UsoxCVT9GKYZRIzpLxb8Twz4ZwPPX+jQMwMhNQ9b5+zDEefc+dcvQoPWGNZ3g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- JavaScript to preserve active tab -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Retrieve the active tab from sessionStorage (or default to 'tabs-summary')
        let activeTab = sessionStorage.getItem('activeTab') || 'tabs-summary';

        // Add active classes manually for both the tab and the tab content
        let tabLinks = document.querySelectorAll('.nav-link');
        let tabContents = document.querySelectorAll('.tab-pane');

        // Loop through tabs and contents to remove the 'active' class
        tabLinks.forEach(tab => {
            tab.classList.remove('active');
            if (tab.getAttribute('href') === `#${activeTab}`) {
                tab.classList.add('active'); // Add 'active' class to the clicked tab
            }
        });

        // Loop through tab contents to remove 'show' and 'active' classes
        tabContents.forEach(content => {
            content.classList.remove('show', 'active');
            if (content.getAttribute('id') === activeTab) {
                content.classList.add('show',
                    'active'); // Add 'active' class to the content of the active tab
            }
        });

        // Save the active tab when a tab is clicked
        tabLinks.forEach(tab => {
            tab.addEventListener('click', function() {
                let targetTab = this.getAttribute('href').slice(
                    1); // Get target tab ID from href
                sessionStorage.setItem('activeTab',
                    targetTab); // Store active tab in sessionStorage
            });
        });


        $("#parse-resume").on("click", async function() {
            const resumeUrl = "{{ asset($application->cv_path) }}";
            const apiUrl = 'https://api.apilayer.com/resume_parser/upload';
            const apiKey = 'EvYEHCEeqjc2IFghCoRNj5UAGDEeChYD';

            const button = $(this);
            button.prop('disabled', true);
            button.html('Loading... <i class="fa fa-spinner fa-spin"></i>');

            try {
                // Step 1: Fetch the file from Laravel localhost
                const fileResponse = await axios.get(resumeUrl, {
                    responseType: 'arraybuffer'
                });
                const fileData = fileResponse.data;

                // Step 2: Send the file to the API
                const response = await axios.post(apiUrl, fileData, {
                    headers: {
                        'Content-Type': 'application/octet-stream',
                        'apikey': apiKey
                    }
                });
                saveResume(response);

            } catch (error) {
                console.error("Error:", error);
                alert("An error occurred while uploading the resume.");
            } finally {
                button.prop('disabled', false);
                button.html('Parse Resume');
            }
        });

        async function saveResume(response) {

            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            const skill_list = response.data.skills;
            const education_list = response.data.education;
            const experience_list = response.data.experience;

            console.log(skill_list, education_list, experience_list);

            const button = $("#parse-resume");
            button.prop('disabled', true);
            button.html('Saving... <i class="fa fa-spinner fa-spin"></i>');

            try {
                const response = await axios.post('{{route("candidates.parseResume")}}', {
                    application_id: "{{$application->id}}",
                    skills: skill_list,
                    educations: education_list,
                    experiences: experience_list
                }, {
                    headers: {
                        'X-CSRF-TOKEN': csrfToken // Add the CSRF token here
                    }
                });
            } catch (error) {
                console.error("Error:", error);

            } finally {
                button.prop('disabled', false);
                button.html('Parse Resume');
                location.reload();
            }
        }

    });
</script>


@endsection