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
                <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                    <li class="nav-item">
                        <a href="#tabs-home-ex1" class="nav-link active" data-bs-toggle="tab">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tabs-profile-ex1" class="nav-link" data-bs-toggle="tab">Profile</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active show" id="tabs-home-ex1">
                        <h4>Home tab</h4>
                        <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                    </div>
                    <div class="tab-pane" id="tabs-profile-ex1">
                        <h4>Profile tab</h4>
                        <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
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
        justify-content: space-between;
        /* Ensure space between the table and steps */
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
        border-top: 2px solid #f8f9fa;
        /* Light line for separation */
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