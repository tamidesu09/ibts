@extends('layouts.app')

@section('content')

        <title>Services</title>

    <div class="hero-image">
        <div class="hero-text">
            <h1 style="font-size:50px">Services</h1>
            <p>i-Bear True Solutions Inc.</p>
        </div>
    </div>

    <div class="container mt-5">
        <h1 class="fw-bold">WHAT WE PROVIDE</h3>
            <ul>
                <li class="mt-3">
                    <h3>iBTS brings together a perfect blend of IT and business management expertise in the solutions we
                        provide to our clients.</h3>
                </li>
                <li>
                    <h3>iBTS believes that IT is not the end, but a means to an end i.e. creating or enhancing the value of
                        the business through its innovative and practical IT solutions.</h3>
                </li>
            </ul>
    </div>

    <div class="container mt-4">
        <div class="text-center" style="background-color: #0054a6; color: white; padding: 10px; border-radius: 20px;">
            <h1 class="fw-bold">Technical Support Services on the go!</h1>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body" style="text-align: center;">
                        <div style="display: flex; justify-content: center; align-items: center; height: 100px;">
                            <i class="fa-solid fa-print text-primary" style="font-size: 48px;"></i>
                        </div>
                        <h3 class="card-title fw-bold">DOCUMENT MANAGEMENT SOLUTIONS AND SCANNING SERVICES</h3>
                        <p class="text-secondary">Transform the way you handle documents with our comprehensive solutions. From high-quality scanning to secure digital archiving, we help you digitize, store, and manage records efficiently. Access your files anytime, anywhere, while ensuring compliance, security, and streamlined workflows that save time and resources.</p>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body" style="text-align: center;">
                        <div style="display: flex; justify-content: center; align-items: center; height: 100px;">
                            <i class="fa-solid fa-network-wired text-primary" style="font-size: 48px;"></i>
                        </div>
                        <h3 class="card-title fw-bold">INFRASTRUCTURE SET-UP AND SUPPORT</h3>
                        <p class="text-secondary">Lay the foundation for your business success with our reliable infrastructure setup and support services. From network design to server installation and maintenance, we ensure your systems are optimized for maximum performance and scalability. Our expert team provides ongoing support to keep your operations running smoothly and securely.</p>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body" style="text-align: center;">
                        <div style="display: flex; justify-content: center; align-items: center; height: 100px;">
                            <i class="fa-solid fa-eye text-primary" style="font-size: 48px;"></i>
                        </div>
                        <h3 class="card-title fw-bold">RFID SOLUTIONS</h3>
                        <p class="text-secondary">Revolutionize your tracking systems with our innovative RFID solutions. Whether for inventory management, asset tracking, or access control, our RFID technology ensures real-time visibility, increased accuracy, and operational efficiency. Tailored to your needs, our solutions integrate seamlessly into your processes to provide smarter management capabilities.</p>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body" style="text-align: center;">
                        <div style="display: flex; justify-content: center; align-items: center; height: 100px;">
                            <i class="fa-solid fa-eye text-primary" style="font-size: 48px;"></i>
                        </div>
                        <h3 class="card-title fw-bold">CCTV WIRELESS TECHNOLOGY</h3>
                        <p class="text-secondary">Protect what matters most with our advanced wireless CCTV technology. Our solutions offer high-definition video surveillance, remote monitoring capabilities, and easy installation without the limitations of wired setups. Whether for homes or businesses, we deliver customized security systems that provide peace of mind and comprehensive coverage.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="text-center" style="background-color: #0054a6; color: white; padding: 10px; border-radius: 20px;">
            <h1 class="fw-bold">Implementation of Face Recognition Attendance System</h1>
        </div>
    </div>

    <div class="container mt-4">
    <!-- Main Card -->
    <div class="card" style="border-radius: 20px; padding: 20px;">
        <!-- Card Body -->
        <div class="card-body">
            <div class="d-flex flex-column flex-md-row align-items-center">
                <!-- Product Overview (Left) -->
                <div class="flex-grow-1 p-4">
                    <h1 class="fw-bold mb-4">Product Overview</h1>
                    <p><i class="fa-solid fa-check text-primary"></i> High performance, High reliability, High stability Android
                        system</p>
                    <p><i class="fa-solid fa-check text-primary"></i> With the industry-leading deep learning algorithm as the
                        core</p>
                    <p><i class="fa-solid fa-check text-primary"></i> Standard local <span class="text-primary">20,000</span>
                        level face library, face recognition
                        accuracy > <span class="text-primary">99.97%</span>, recognition speed <<span class="text-primary">
                            100ms</span></p>
                    <p><i class="fa-solid fa-check text-primary"></i> Binocular living anti-counterfeiting function,
                        anti-photo, video and other deception</p>
                    <p><i class="fa-solid fa-check text-primary"></i> 8-inch A-gauge LCD display, projection capacitive
                        touch screen technology, full graphic design of operation interface</p>
                    <p><i class="fa-solid fa-check text-primary"></i> Adopt two million intelligent wide dynamic sensor
                        camera</p>
                    <p><i class="fa-solid fa-check text-primary"></i> Support the body temperature detection,
                        temperature display function, temperature abnormal automatic alarm</p>
                    <p><i class="fa-solid fa-check text-primary"></i> Infrared and TGB double complement light, weak
                        light identification without interference</p>
                    <p><i class="fa-solid fa-check text-primary"></i> Support optional wired /WIFI/4G communication</p>
                    <p><i class="fa-solid fa-check text-primary"></i> Support multi-language broadcasting</p>
                    <p><i class="fa-solid fa-check text-primary"></i> Multifunctional inductive disinfectant sprayer
                        disinfects the hands</p>
                </div>

                <!-- Image Card (Right) -->
                <div class="card" style="border-radius: 10px; overflow: hidden; max-width: 300px;">
                    <img src="{{ asset('img/product.jpg') }}" class="w-100 object-cover" alt="Product Image"
                        style="height: 450px " />
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="container">
        <div class="hr-text text-primary mb-4" style="font-size: 16px;">Product Features</div>
    </div>

    <div class="container mt-4">
    <!-- Card Container -->
    <div class="card" style="border-radius: 20px; padding: 20px;">
        <!-- Card Body -->
        <div class="card-body">
            <ul class="timeline">
                <!-- Left Column -->
                <li class="timeline-event">
                    <div class="timeline-event-icon">
                        <i class="fa-solid fa-shield-virus text-primary" style="font-size: 22px;"></i>
                    </div>
                    <div class="card timeline-event-card">
                        <div class="card-body text-center">
                            <p>Hand disinfection, temperature detection, and face recognition were conducted simultaneously.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-event">
                    <div class="timeline-event-icon">
                        <i class="fa-solid fa-spray-can text-primary" style="font-size: 22px;"></i>
                    </div>
                    <div class="card timeline-event-card">
                        <div class="card-body text-center">
                            <p>Hand infrared induction, disinfectant intelligent quantitative liquid refinement spray.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-event">
                    <div class="timeline-event-icon">
                        <i class="fa-solid fa-0 text-primary" style="font-size: 22px;"></i>
                    </div>
                    <div class="card timeline-event-card">
                        <div class="card-body text-center">
                            <p>Intelligent sense, zero contact to avoid the risk of cross infection.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-event">
                    <div class="timeline-event-icon bg-facebook-lt">
                        <i class="fa-solid fa-leaf text-primary" style="font-size: 22px;"></i>
                    </div>
                    <div class="card timeline-event-card">
                        <div class="card-body text-center">
                            <p>The disinfectant sprayer is made of ABS material, which is environmentally friendly and safe,
                                corrosion resistant, insulating current and not easy to be deformed.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-event">
                    <div class="timeline-event-icon">
                        <i class="fa-solid fa-tint text-primary" style="font-size: 22px;"></i>
                    </div>
                    <div class="card timeline-event-card">
                        <div class="card-body text-center">
                            <p>Hand 1000ml large capacity tank, long-term use, disinfectant easy to change.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
        <p class="mt-5">At <span class="text-primary fw-bold">i-Bear True Solutions Inc.</span>, we take pride in
            serving a diverse range of clients across various
            industries. Our commitment to excellence has earned us the trust of numerous partners, from small
            startups to
            large corporations. We strive to understand the unique needs of each client, ensuring tailored solutions
            that
            foster growth and innovation. Together, we build lasting relationships that drive success and create value
            in
            every collaboration.</p>

        <div class="container mt-4">
            <div class="row align-items-center">
                <!-- Left Column: Image -->
                <div class="col-md-6">
                    <div class="position-relative">
                        <div class="solid-shape"></div> <!-- Solid shape underneath -->
                        <div class="card"
                            style="border-radius: 10px; overflow: hidden; position: relative; z-index: 1; padding: 10px;">
                            <img src="{{ asset('img/recruit.jpg') }}" class="w-100 object-cover" alt="Product Image"
                                style="height: 430px; border-radius: 5px;" /> <!-- Adjusted height -->
                        </div>
                    </div>
                </div>

                <!-- Right Column: Text -->
                <div class="col-md-6 ml-4 text-center">
                    <h1 class="mt-5" style="font-size: 40px;">
                        BE PART OF <br />
                        <span class="font-weight-bold text-primary">I-BEAR TRUE SOLUTIONS INC.</span>
                        <br />
                        <a href="{{ url('careers') }}" class="btn btn-outline-primary mt-4">Explore Careers</a>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    @include('layouts.hero-image')
@endsection
