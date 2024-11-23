@extends('layouts.app')

@section('content')

    <title>Application Status</title>

    <div class="hero-image">
        <div class="hero-text">
            <h1 style="font-size:50px">Application Status</h1>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Your Application Status</h3>
                </div>
                <div class="card-body">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="justify-content-between">
                                <!-- Left side: Table -->
                                <div class="table-responsive">
                                    <div class="hr-text hr-text-left">Information</div>
                                    <table class="table table-vcenter table-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Job Applied</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Sample Name</td>
                                                <td>Sample Job</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                   
                        <div class="hr-text hr-text-left">Application Status</div>

                            <!-- Right side: Status and Steps -->
                            <div class="status-section">
                                <div class="steps">
                                    <a href="#" class="step-item">
                                        Step 1
                                    </a>
                                    <a href="#" class="step-item">
                                        Step 2
                                    </a>
                                    <a href="#" class="step-item active">
                                        Step 3
                                    </a>
                                    <span href="#" class="step-item">
                                        Step 4
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.hero-image')

    <style>
        /* Flexbox for aligning table and status/steps side by side */
        .d-flex {
            display: flex;
            justify-content: space-between; /* Ensure space between the table and steps */
        }

        /* Status and steps container */
        .status-section {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            gap: 10px;
            margin-top: 20px;
        }

        /* Steps Styling */
        .steps {
            display: flex;
            gap: 10px;
        }

        .step-item {
            padding: 10px 15px;
            background-color: #f8f9fa;
            border-radius: 5px;
            text-decoration: none;
            color: #333;
        }

        .step-item.active {
            background-color: #163673;
            color: white;
        }

        /* Tabler HR style */
        .tabler {
            border-top: 2px solid #f8f9fa; /* Light line for separation */
            margin-top: 20px;
            margin-bottom: 20px;
        }

        /* Style adjustments for card sizes */
        .custom-card {
            height: 250px;
            overflow: hidden;
        }

        .fixed-card-img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        /* Overlay for work arrangement cards */
        .custom-overlay {
            background-color: rgba(255, 255, 255, 0.9);
            transition: background-color 0.3s ease-in-out;
        }

        .custom-card:hover .custom-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
    </style>
@endsection
