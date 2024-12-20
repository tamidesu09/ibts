<!-- resources/views/admin/index.blade.php -->
@extends('layouts.admin-layout')

@section('content')
<div class="container">

    <title>Dashboard</title>


    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs nav-fill" data-bs-toggle="tabs">
                <li class="nav-item">
                    <a href="#tabs-charts" class="nav-link active" data-bs-toggle="tab">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-analytics">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                            <path d="M9 17l0 -5" />
                            <path d="M12 17l0 -1" />
                            <path d="M15 17l0 -3" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#tabs-applications-rankings" class="nav-link" data-bs-toggle="tab">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-sort-ascending-2">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M16.852 5.011l.058 -.007l.09 -.004l.075 .003l.126 .017l.111 .03l.111 .044l.098 .052l.104 .074l.082 .073l3 3a1 1 0 1 1 -1.414 1.414l-1.293 -1.292v9.585a1 1 0 0 1 -2 0v-9.585l-1.293 1.292a1 1 0 0 1 -1.32 .083l-.094 -.083a1 1 0 0 1 0 -1.414l3 -3q .053 -.054 .112 -.097l.11 -.071l.114 -.054l.105 -.035z" />
                            <path d="M9.5 4a1.5 1.5 0 0 1 1.5 1.5v4a1.5 1.5 0 0 1 -1.5 1.5h-4a1.5 1.5 0 0 1 -1.5 -1.5v-4a1.5 1.5 0 0 1 1.5 -1.5z" />
                            <path d="M9.5 13a1.5 1.5 0 0 1 1.5 1.5v4a1.5 1.5 0 0 1 -1.5 1.5h-4a1.5 1.5 0 0 1 -1.5 -1.5v-4a1.5 1.5 0 0 1 1.5 -1.5z" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#tabs-status-count" class="nav-link" data-bs-toggle="tab">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-analytics">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                            <path d="M9 17l0 -5" />
                            <path d="M12 17l0 -1" />
                            <path d="M15 17l0 -3" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#tabs-count" class="nav-link" data-bs-toggle="tab">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-number-123">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 10l2 -2v8" />
                            <path d="M9 8h3a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-2a1 1 0 0 0 -1 1v2a1 1 0 0 0 1 1h3" />
                            <path d="M17 8h2.5a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1 -1.5 1.5h-1.5h1.5a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1 -1.5 1.5h-2.5" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#tabs-activities-type-count" class="nav-link" data-bs-toggle="tab">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-activity">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 12h4l3 8l4 -16l3 8h4" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>


        <div class="card-body">
            <div class="tab-content">


                <div class="tab-pane active show" id="tabs-charts">
                    <div class="container my-5">
                        <div class="row g-4">
                            <!-- GENDERS -->
                            <div class="col-md-6">
                                <div class="card shadow-sm">
                                    <div class="card-header bg-dark text-white">
                                        <h4 class="card-title mb-0">Gender Composition</h4>
                                    </div>
                                    <div class="card-body">
                                        <figure class="highcharts-figure">
                                            <div id="gender-container"></div>
                                            <h4 class="highcharts-description" style="text-align: justify;">
                                                The chart visualizes the distribution of respondents by sex. Each category is displayed as a proportion of the total, providing a clear view of the sex demographics within the dataset.
                                            </h4>
                                        </figure>
                                    </div>
                                </div>
                            </div>

                            <!-- JOB TYPE -->
                            <div class="col-md-6">
                                <div class="card shadow-sm">
                                    <div class="card-header bg-dark text-white">
                                        <h4 class="card-title mb-0">Job Types</h4>
                                    </div>
                                    <div class="card-body">
                                        <figure class="highcharts-figure">
                                            <div id="job-type-container"></div>
                                            <h4 class="highcharts-description" style="text-align: justify;">
                                                The chart illustrates the distribution of job types among the dataset. The visualization highlights the proportion of each job type, providing insight into employment structures.
                                            </h4>
                                        </figure>
                                    </div>
                                </div>
                            </div>

                            <!-- APPLIED JOBS -->
                            <div class="col-md-6">
                                <div class="card shadow-sm">
                                    <div class="card-header bg-dark text-white">
                                        <h4 class="card-title mb-0">Applied Jobs</h4>
                                    </div>
                                    <div class="card-body">
                                        <figure class="highcharts-figure">
                                            <div id="applied-jobs-container"></div>
                                            <h4 class="highcharts-description" style="text-align: justify;">
                                                The chart showcases the total count of jobs applied for by users. This visualization provides insights into application trends and user activity levels over a specific period.
                                            </h4>
                                        </figure>
                                    </div>
                                </div>
                            </div>

                            <!-- SKILL COUNT FOR ALL CANDIDATES -->
                            <div class="col-md-6">
                                <div class="card shadow-sm">
                                    <div class="card-header bg-dark text-white">
                                        <h4 class="card-title mb-0">Skill Count for All Candidates</h4>
                                    </div>
                                    <div class="card-body">
                                        <figure class="highcharts-figure">
                                            <div id="skill-count-container"></div>
                                            <h4 class="highcharts-description" style="text-align: justify;">
                                                The chart displays the total number of skills listed by all candidates, categorized to highlight the most common competencies. This visualization helps identify the overall skill pool and highlights key areas of expertise among candidates.
                                            </h4>
                                        </figure>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card shadow-sm">
                                    <div class="card-header bg-dark text-white">
                                        <h4 class="card-title mb-0">Correct Answer Count for All Job Applications</h4>
                                    </div>
                                    <div class="card-body">
                                        <figure class="highcharts-figure">
                                            <div id="job-answers-container"></div>
                                            <h4 class="highcharts-description" style="text-align: justify;">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto tempora placeat soluta hic modi, tempore ipsum suscipit iste adipisci odio ea alias, corrupti ex molestias autem praesentium aut beatae impedit voluptatem enim. Ad, sint porro possimus nesciunt quibusdam amet fugiat sed consectetur qui facere, ullam soluta nobis deleniti magnam repellat enim tempora? Rem excepturi recusandae architecto perspiciatis aspernatur expedita, officia aliquam, eveniet nostrum sunt quis dolorem? Quisquam, obcaecati dolor, a id, reprehenderit sint ipsum quis error facilis natus repudiandae dolores sequi aperiam. Corporis molestias quia eius quae, earum officia numquam ducimus consectetur cum deserunt et, pariatur ab vero accusantium perferendis.
                                            </h4>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tabs-applications-rankings">
                    <h1 class="text-center mb-4">Individual Applications and Applicants Rankings</h1>
                    <div class="container mt-5">
                        <div class="row g-4">
                            @foreach ($results as $jobId => $jobData)
                            <div class="col-lg-6">
                                <div class="card shadow border-0">
                                    <div class="card-header card-header bg-dark text-white">
                                        <div class="d-flex justify-content-between align-items-center w-100">
                                            <h3 class="card-title mb-0">
                                                {{ $jobData['job_name'] }}
                                            </h3>
                                            <div class="text-end">
                                                <span class="badge bg-azure text-dark" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    title="Total Applications">
                                                    {{ $jobData['applications'] }} applications
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row g-3 mb-4">
                                            <div class="col-12">
                                                <h5 class="text-center text-azure card card-header fw-bold">Top Ranking Candidates</h5>
                                                <ul class="list-group">
                                                    @php
                                                    $sortedUsers = collect($jobData['users'])
                                                    ->sortByDesc(function ($user) {
                                                    return [$user['experience_count'], $user['matched_skill_percentage'], $user['correct_answers']];
                                                    })
                                                    ->toArray();

                                                    $topUsers = array_slice($sortedUsers, 0, 3);
                                                    @endphp

                                                    @foreach ($topUsers as $userIndex => $user)
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        <span>
                                                            <a href="{{ route('candidates.show', $user['application_id']) }}" class="text-dark">
                                                                <strong>
                                                                    @if ($userIndex === 0)
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#4299e1" stroke="#4299e1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-crown me-2">
                                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                        <path d="M12 6l4 6l5 -4l-2 10h-14l-2 -10l5 4z" />
                                                                    </svg>
                                                                    @endif
                                                                    {{ $userIndex + 1 }}.

                                                                    @if(!empty($user['profile_picture']))
                                                                    <img class="img mx-3" src="{{ asset($user['profile_picture'])}}" width=50 height=50>
                                                                    @endif

                                                                    {{ $user['name'] }}
                                                                </strong>
                                                                <br>
                                                                <small class="text-muted">Skills: {{ $user['skill_count'] }}</small>
                                                            </a>
                                                        </span>

                                                        <div class="d-flex flex-column align-items-start">
                                                            <span class="badge bg-warning mb-2">Years of Experience: {{$user['experience_count'] ?? "n/a"}}</span>
                                                            <span class="badge bg-azure mb-2">Matched Skills: {{ $user['matched_skill_percentage'] }}%</span>
                                                            <span class="badge bg-lime">Correct Answers: {{$user['correct_answers']}}</span>
                                                        </div>

                                                    </li>


                                                    @if(isset($user['experience_list']))
                                                    <div class="hr-text my-3">Work Experience</div>
                                                    <div class="row">
                                                        @foreach(json_decode($user['experience_list'], true) as $experienceIndex => $experience)
                                                        <div class="col-md-6 mb-4">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h5 class="card-title"><strong>{{ $experience['title'] }}</strong></h5>
                                                                    <p class="card-text">
                                                                        <small>Location: {{ $experience['location'] ?? 'N/A' }}</small><br>
                                                                        <small>Organization: {{ $experience['organization'] ?? 'N/A' }}</small><br>

                                                                        <small>Dates:
                                                                            @if(isset($experience['dates']) && is_array($experience['dates']))
                                                                            @foreach($experience['dates'] as $date)
                                                                            {{ $date }} @if(!$loop->last), @endif
                                                                            @endforeach
                                                                            @else
                                                                            N/A
                                                                            @endif
                                                                        </small><br>

                                                                        @if(isset($experience['date_start']) && isset($experience['date_end']))
                                                                        <small>Start Date: {{ $experience['date_start'] }}</small><br>
                                                                        <small>End Date: {{ $experience['date_end'] }}</small><br>
                                                                        @endif
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    @else
                                                    <p class="text-muted">No experience listed.</p>
                                                    @endif


                                                    @endforeach
                                                    <div class="hr-text">See also</div>



                                                </ul>

                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            @foreach ($jobData['users'] as $user)
                                            @if (!in_array($user['application_id'], array_column($topUsers, 'application_id')))
                                            <div class="col-sm-12">
                                                <a href="{{ route('candidates.show', $user['application_id']) }}"
                                                    class="d-block p-3 rounded shadow-sm text-decoration-none"
                                                    style="background-color: #f9f9f9; transition: transform 0.2s, box-shadow 0.2s;">
                                                    <strong class="text-dark">{{ $user['name'] }}</strong><br>
                                                    <span class="text-muted">Years of Experience: {{ $user['experience_count'] }}</span><br>
                                                    <span class="text-muted">Matched Skills: {{ $user['matched_skill_percentage'] }}%</span><br>
                                                    <span class="text-muted">Skills Count: {{ $user['skill_count'] }}</span>
                                                    <h5 class="text-success">CORRECT ANSWERS: {{$user['correct_answers']}}</h1>
                                                </a>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>



                <div class="tab-pane" id="tabs-status-count">
                    <!-- APPLICATION STATUS -->
                    <center>
                        <h1>Summary of Application Status</h1>
                    </center>
                    <div class="row g-4 mb-5">
                        @foreach($statuses as $status)
                        <div class="col-sm-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-status-top" style="height: 5px; background-color: #007bff;"></div>
                                <div class="card-body text-center">
                                    <h4 class="card-title fw-bold mb-3" style="color: #343a40;">{{ $status->status }}</h4>
                                    <h1 class="text-primary display-4">{{ $status->count }}</h1>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="tab-pane" id="tabs-count">
                    <h1 class="text-center mb-5 font-weight-bold">Resume Parsed, Feedbacks, and Notes Count</h1>

                    <!-- PARSED RESUME COUNT, FEEDBACKS COUNT, NOTES COUNT in a single row -->
                    <div class="row g-4 mb-5">

                        <!-- RESUME PARSED -->
                        <div class="col-md-4">
                            <div class="card shadow-sm border-0">
                                <div class="card-status-top" style="height: 5px; background-color: #007bff;"></div>
                                <div class="card-body text-center">
                                    <h3 class="card-title fw-bold mb-3">Resume Parsed</h3>
                                    <h2 class="text-primary display-4">{{ $parsedCounts->sum('count') }}</h2>
                                </div>
                            </div>
                        </div>

                        <!-- FEEDBACKS COUNT -->
                        <div class="col-md-4">
                            <div class="card shadow-sm border-0">
                                <div class="card-status-top" style="height: 5px; background-color: #007bff;"></div>
                                <div class="card-body text-center">
                                    <h3 class="card-title fw-bold mb-3">Feedbacks Count</h3>
                                    <h2 class="text-primary display-4">{{ $feedbacksCount }}</h2>
                                </div>
                            </div>
                        </div>

                        <!-- NOTES COUNT -->
                        <div class="col-md-4">
                            <div class="card shadow-sm border-0">
                                <div class="card-status-top" style="height: 5px; background-color: #007bff;"></div>
                                <div class="card-body text-center">
                                    <h3 class="card-title fw-bold mb-3">Notes Count</h3>
                                    <h2 class="text-primary display-4">{{ $notesCount }}</h2>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="tab-pane" id="tabs-activities-type-count">
                    <h1 class="text-center mb-5 font-weight-bold">Individual Activities Type</h1>
                    <!-- APPLICATION STATUS -->
                    <div class="row g-4 mb-5">
                        @foreach($activities as $activity)
                        <div class="card shadow-sm border-0">
                            <div class="card">
                                <div class="card-status-top" style="height: 5px; background-color: #007bff;"></div>
                                <div class="card-body text-center">
                                    <h3 class="card-title fw-bold mb-3">{{$activity->type}}</h3>
                                    <h1 class="text-primary display-4">{{$activity->count}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <h1 class="text-center mb-5 font-weight-bold">Announcements Publication Status</h1>
                    <div class="row g-4 mb-5">
                        @foreach($announcements as $announcement)
                        <div class="card shadow-sm border-0">
                            <div class="card">
                                <div class="card-status-top" style="height: 5px; background-color: #007bff;"></div>
                                <div class="card-body text-center">
                                    <h3 class="card-title fw-bold mb-3">{{$announcement->status}}</h3>
                                    <h1 class="text-primary display-4">{{$announcement->count}}</h1>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>



<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Manually initialize the popover
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    });
</script>
<!-- GENDERS -->
<script>
    const chartData = @json($gendersData);

    Highcharts.chart('gender-container', {
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Gender Percentage of Applicants'
        },
        tooltip: {
            valueSuffix: ''
        },
        plotOptions: {
            series: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: [{
                    enabled: true,
                    distance: 20
                }, {
                    enabled: true,
                    distance: -40,
                    format: '{point.percentage:.0f}%',
                    style: {
                        fontSize: '1.2em',
                        textOutline: 'none',
                        opacity: 0.7
                    },
                    filter: {
                        operator: '>',
                        property: 'percentage',
                        value: 10
                    }
                }]
            }
        },
        series: [{
            name: 'Count',
            colorByPoint: true,
            data: chartData
        }]
    });
</script>

<!-- JOB TYPE -->
<script>
    const jobTypeSeries = @json($jobTypeSeries);
    Highcharts.chart('job-type-container', {
        chart: {
            type: 'column'
        },
        title: {
            align: 'left',
            text: 'Job Type'
        },

        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Total count of job type share'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.0f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: ' +
                '<b>{point.y:.0f}</b> of total<br/>'
        },

        series: [{
            name: 'Browsers',
            colorByPoint: true,
            data: jobTypeSeries
        }],

    });
</script>

<!-- APPLIED JOBS -->
<script>
    const jobCountSeries = @json($jobCountSeries);
    Highcharts.chart('applied-jobs-container', {
        chart: {
            type: 'column'
        },
        title: {
            align: 'left',
            text: 'Job Title'
        },

        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Total count of applied jobs share'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.0f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: ' +
                '<b>{point.y:.0f}</b> of total<br/>'
        },

        series: [{
            name: 'Browsers',
            colorByPoint: true,
            data: jobCountSeries
        }],

    });
</script>

<!-- JOB ANSWERS -->
<script>
    const jobAnswerSeries = @json($jobAnswersSeries);
    Highcharts.chart('job-answers-container', {
        chart: {
            type: 'column'
        },
        title: {
            align: 'left',
            text: 'Job Title'
        },

        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Total count of correct answers per jobs applied to'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.0f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: ' +
                '<b>{point.y:.0f}</b> of total<br/>'
        },

        series: [{
            name: 'Browsers',
            colorByPoint: true,
            data: jobAnswerSeries
        }],

    });
</script>


<!-- SKILL COUNT FOR ALL CONTAINERS -->
<script>
    const skillsData = @json($skillsData);

    Highcharts.chart('skill-count-container', {
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Skill Percentage of Applicants'
        },
        tooltip: {
            valueSuffix: ''
        },
        plotOptions: {
            series: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: [{
                    enabled: true,
                    distance: 20
                }, {
                    enabled: true,
                    distance: -40,
                    format: '{point.percentage:.1f}%',
                    style: {
                        fontSize: '1.2em',
                        textOutline: 'none',
                        opacity: 0.7
                    },
                    filter: {
                        operator: '>',
                        property: 'percentage',
                        value: 10
                    }
                }]
            }
        },
        series: [{
            name: 'Count',
            colorByPoint: true,
            data: skillsData
        }]
    });
</script>

@endsection