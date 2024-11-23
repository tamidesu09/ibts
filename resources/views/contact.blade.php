@extends('layouts.app')

@section('content')

        <title>Contact</title>

    <div class="hero-image">
        <div class="hero-text">
            <h1 style="font-size:50px">Contact Us</h1>
            <p>i-Bear True Solutions Inc.</p>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <!-- Left Column: Form in a Card -->
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <!-- Success Alert positioned at the top of the card -->
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                                <div class="d-flex">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icon-tabler-check">
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

                        <h1 class="mb-4">Tell us your concerns!</h1>
                        <form action="{{ route('feedback.store') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="namefield" class="form-label">Your Full Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="namefield" name="name"
                                    placeholder="Your Name" required>
                            </div>

                            <div class="mb-4">
                                <label for="emailfield" class="form-label">Your Email <span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="emailfield" name="email"
                                    placeholder="Your Email" required>
                            </div>

                            <div class="mb-4">
                                <label for="phonefield" class="form-label">Your Phone Number <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="phonefield" name="phone"
                                    placeholder="+63 994 932 2386" required>
                            </div>

                            <div class="mb-4">
                                <label for="msgfield" class="form-label">Your Message <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" id="msgfield" name="message" rows="3" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-outline-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Right Column: Maps with Address Cards -->
            <div class="col-md-6">
                <!-- First Card: TIP Manila -->
                <div class="card border-0 mb-3" data-aos="fade-up" data-aos-duration="1500">
                    <div class="card-body">
                        <div class="map-container mb-3" style="height: 260px;">
                            <iframe class="map"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930.799198538013!2d120.98279231744385!3d14.609877860558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9b0cd38332d%3A0x2ccbf65b9a7f803f!2sTechnological%20Institute%20of%20the%20Philippines!5e0!3m2!1sen!2sph!4v1611051602882!5m2!1sen!2sph"
                                allowfullscreen="" loading="lazy" style="border: 0; width: 100%; height: 100%;"></iframe>
                        </div>
                        <p class="card-text">
                            363 Pascual Casal St, Quiapo, Manila, 1001 Metro Manila<br>
                            Phone: <span class="text-primary">(+63) 2 8735 6616</span>
                        </p>
                    </div>
                </div>

                <!-- Second Card: TIP Quezon City -->
                <div class="card border-0" data-aos="fade-up" data-aos-duration="1500">
                    <div class="card-body">
                        <div class="map-container mb-3" style="height: 260px;">
                            <iframe class="map"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930.799198538013!2d121.0478926!3d14.6519452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b75964a95f47%3A0xf40ae3a48dca5ae8!2sTechnological%20Institute%20of%20the%20Philippines%20Quezon%20City!5e0!3m2!1sen!2sph!4v1611051902883!5m2!1sen!2sph"
                                allowfullscreen="" loading="lazy" style="border: 0; width: 100%; height: 100%;"></iframe>
                        </div>
                        <p class="card-text">
                            938 Aurora Blvd, Cubao, Quezon City, 1109 Metro Manila<br>
                            Phone: <span class="text-primary">(+63) 2 8721 4866</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.hero-image')
@endsection
