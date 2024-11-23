<!-- resources/views/admin/index.blade.php -->
@extends('layouts.admin-layout')

@section('content')
<div class="container">
    <!-- APPLICATION STATUS -->
    <div class="row g-4 mb-5">
        <h1>INDIVIDUAL JOB APPLICATION STATUS COUNT</h1>
        @foreach($statuses as $status)
        <div class="col-sm-3">
            <div class="card">
                <div class="card-status-top bg-primary"></div>
                <div class="card-body">
                    <h3 class="card-title">{{$status->status}}</h3>
                    <h1 class="text-secondary">{{$status->count}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- PARSED RESUME COUNT -->
    <div class="row g-4 mb-5">
        <h1>RESUME PARSED</h1>
        @foreach($parsedCounts as $count)
        <div class="col-sm-3">
            <div class="card">
                <div class="card-status-top bg-primary"></div>
                <div class="card-body">
                    <h3 class="card-title">{{$count->status}}</h3>
                    <h1 class="text-secondary">{{$count->count}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- FEEDBACKS COUNT -->
    <div class="row g-0 mb-5">
        <h1>FEEDBACKS COUNT</h1>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-status-top bg-primary"></div>
                <div class="card-body">
                    <h3 class="card-title">Feedbacks Count</h3>
                    <h1 class="text-secondary">{{$feedbacksCount}}</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- NOTES COUNT -->
    <div class="row g-0 mb-5">
        <h1>NOTES COUNT</h1>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-status-top bg-primary"></div>
                <div class="card-body">
                    <h3 class="card-title">Notes Count</h3>
                    <h1 class="text-secondary">{{$notesCount}}</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- APPLICATION STATUS -->
    <div class="row g-4 mb-5">
        <h1>INDIVIDUAL ACTIVITIES TYPE COUNT</h1>
        @foreach($activities as $activity)
        <div class="col-sm-3">
            <div class="card">
                <div class="card-status-top bg-primary"></div>
                <div class="card-body">
                    <h3 class="card-title">{{$activity->type}}</h3>
                    <h1 class="text-secondary">{{$activity->count}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- GENDERS -->
    <figure class="highcharts-figure">
        <div id="gender-container"></div>
        <h3 class="highcharts-description">
            Pie charts are very popular for showing a compact overview of a
            composition or comparison. While they can be harder to read than
            column charts, they remain a popular choice for small datasets.
        </h3>
    </figure>

    <!-- JOB TYPE -->
    <figure class="highcharts-figure">
        <div id="job-type-container"></div>
        <h3 class="highcharts-description">
            Chart showing browser market shares. Clicking on individual columns
            brings up more detailed data. This chart makes use of the drilldown
            feature in Highcharts to easily switch between datasets.
        </h3>
    </figure>

    <!-- APPLIED JOBS -->
    <figure class="highcharts-figure">
        <div id="applied-jobs-container"></div>
        <h3 class="highcharts-description">
            Chart showing browser market shares. Clicking on individual columns
            brings up more detailed data. This chart makes use of the drilldown
            feature in Highcharts to easily switch between datasets.
        </h3>
    </figure>

    <!-- SKILL COUNT FOR ALL CANDIDATES -->
    <figure class="highcharts-figure">
        <div id="skill-count-container"></div>
        <h3 class="highcharts-description">
            Chart showing browser market shares. Clicking on individual columns
            brings up more detailed data. This chart makes use of the drilldown
            feature in Highcharts to easily switch between datasets.
        </h3>
    </figure>


</div>



<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

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