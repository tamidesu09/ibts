@extends('layouts.app')

@section('content')
    @include('layouts.hero-image')

        <title>About Us</title>


    <div class="hero-image">
        <div class="hero-text">
            <h1 style="font-size:50px">About Us</h1>
            <p>i-Bear True Solutions Inc.</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-20">
                <div class="card shadow-md border-0">
                    <div class="card-body p-5">
                        <h2 class="fw-bold text-primary text-center mb-4">Welcome to i-BEAR TRUE SOLUTIONS INC. (iBTS)</h2>
                        <p>
                            Founded by a team of seasoned IT and business management professionals, iBTS is committed to
                            addressing the most pressing IT challenges faced by businesses and individuals alike. With over
                            30 years of combined experience, our mission is to enhance the business value of our clients
                            through innovative IT solutions.
                        </p>
                        <h3 class="fw-bold mt-4">Our Services</h3>
                        <p>
                            At iBTS, we offer a comprehensive range of services designed to streamline business operations
                            and promote a paper-less environment. Our services include:
                        </p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fa-solid fa-check text-primary"></i> Automation Services</li>
                            <li class="list-group-item"><i class="fa-solid fa-check text-primary"></i> Design and System Integration</li>
                            <li class="list-group-item"><i class="fa-solid fa-check text-primary"></i> Information and Communication Technology Solutions</li>
                            <li class="list-group-item"><i class="fa-solid fa-check text-primary"></i> Nationwide Technical Support Services</li>
                        </ul>
                        <h3 class="fw-bold mt-4">Our Approach</h3>
                        <p>
                            We combine IT expertise with business management strategies, ensuring our solutions go beyond
                            resolving technical issues to enhancing overall business performance. Our vision is to transform
                            business landscapes and drive the world towards a more efficient, technology-driven future.
                        </p>
                        <p class="fw-bold text-center text-primary mt-4">
                            Join us in embracing innovation and advancing towards success.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
