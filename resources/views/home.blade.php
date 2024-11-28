@extends('layouts.app')

@section('content')

@section('title','Home')



<!-- Hero Section -->
<section class="hero-section d-flex align-items-center" style="margin-top: 0;background-image: url('{{ asset('img/bg2.gif') }}')">
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-12 mx-auto" data-aos="fade-up" data-aos-duration="1000"> <!-- 1 second -->
        <h1 class="display-4 fw-bold text-white">TECHNICAL SUPPORT SERVICES <span class="text-primary">ON THE GO</span></h1>
        <p class="lead text-white-50 mt-3 mb-4">Enhancing the value of the business through its innovative and practical IT solutions.</p>
        <div class="hero-buttons">
          <a href="{{ route('services') }}" class="btn btn-primary btn-lg me-3">Explore Our Services</a>
          <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">Get In Touch</a>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container mt-5">
  <!-- Header Section -->
  <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
    <h2>Our <span style="color: #163673">Featured</span> Services</h2>
    <p>Explore some of our key services designed to help your business succeed.</p>
  </div>

  <!-- Cards Section -->
  <div class="container mt-5 mb-5">
    <div class="row row-cols-1 row-cols-md-4 g-4">
      <div class="col" data-aos="zoom-in" data-aos-duration="1000">
        <div class="card h-100 shadow border-0">
          <img src="{{ asset('img/serv1.png') }}" class="card-img-top" alt="Automation Services" />
          <div class="card-body">
            <h5 class="card-title fw-bold">Automation Services</h5>
            <p class="card-text">Document Management System, Contactless Employee Face Recognition Attendance System and Financials Solutions. This is our response to the growing call for “a paper-less environment</p>
          </div>
        </div>
      </div>
      <div class="col" data-aos="zoom-in" data-aos-duration="1000">
        <div class="card h-100 shadow border-0" style="transform: translateY(-20px);">
          <img src="{{ asset('img/serv2.png') }}" class="card-img-top" alt="Design and System" />
          <div class="card-body">
            <h5 class="card-title fw-bold">Design and System Integration</h5>
            <p class="card-text">From concept to realization of your desired business hub.
            </p>
          </div>
        </div>
      </div>
      <div class="col" data-aos="zoom-in" data-aos-duration="1000">
        <div class="card h-100 shadow border-0">
          <img src="{{ asset('img/serv3.png') }}" class="card-img-top" alt="ICT" />
          <div class="card-body">
            <h5 class="card-title fw-bold">Information & Communication Technology</h5>
            <p class="card-text">CCTV , SERVER/STORAGE, ATM FLM , NETWORK AND RFID TECHNOLOGY.
            </p>
          </div>
        </div>
      </div>
      <div class="col" data-aos="zoom-in" data-aos-duration="1000">
        <div class="card h-100 shadow border-0" style="transform: translateY(-20px);">
          <img src="{{ asset('img/serv4.png') }}" class="card-img-top" alt="Tech Support" />
          <div class="card-body">
            <h5 class="card-title fw-bold">Technical Support</h5>
            <p class="card-text">Let our expertise do the job for your after-sales/preventive maintenance NATIONWIDE
            </p>
          </div>
        </div>
      </div>
    </div>

    <h1 class="mt-5">Announcements</h1>
    @foreach($announcements as $announcement)
    <div class="bg-success p-5 mb-5">
      {{$announcement->title}}
      <br>
      {!!$announcement->body!!}
    </div>
    @endforeach
  </div>
</div>



<!-- Optional Styling -->
<style>
  .hero-section {
    background: no-repeat center center/cover;
    height: 100vh;
    position: relative;
    padding-top: 0;
    margin-top: 0;
    /* Adjust to remove space from the navbar */
  }

  .hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.9);
    /* Adds a dark overlay to improve text readability */
  }

  .hero-section .container {
    z-index: 1;
    position: relative;
  }

  .hero-section .text-white-50 {
    color: rgba(255, 255, 255, 0.7) !important;
  }

  .hero-buttons .btn {
    padding: 10px 30px;
    font-size: 1.2rem;
  }

  .navbar {
    z-index: 1000;
    /* Ensure navbar is always above the hero section */
  }

  body,
  html {
    margin: 0;
    padding: 0;
  }
</style>




@endsection