@extends('layouts.app')

@section('content')
@include('layouts.hero-image')


<style>
    .section-title {
        color: #FF6F00;
        font-weight: bold;
    }

    .main-title {
        font-size: 2.5rem;
        font-weight: bold;
    }

    .description {
        color: #6c757d;
    }

    .stats {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .stats-description {
        color: #6c757d;
    }

    .team-title {
        color: #00aaff;
        font-weight: bold;
        margin-top: 20px;
    }

    .team-subtitle {
        color: #1a1a1a;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .team-member {
        margin-bottom: 30px;
    }

    .team-member img {
        width: 100%;
        height: auto;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .team-member:hover img {
        transform: scale(1.1);
    }

    .team-member h5 {
        color: #00aaff;
        font-weight: bold;
    }

    .team-member p {
        color: #666666;
    }

    .image-container {
        position: relative;
        display: inline-block;
        overflow: hidden;
        width: 300px;
        height: 300px;
        margin: 0 auto;
    }

    .image-container img {
        width: 100%;
        height: 100%;
        display: block;
        transition: transform 0.3s ease;
    }

    .image-container:hover img {
        transform: scale(1.1);
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 255, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .image-container:hover .overlay {
        opacity: 1;
    }

    .icons {
        display: flex;
        gap: 15px;
        color: #fff;
        font-size: 1.5rem;
    }

    .icons i {
        transition: transform 0.3s ease;
    }

    .icons i:hover {
        transform: scale(1.2);
        color: #ddd;
    }
</style>

<div class="hero-image">
    <div class="hero-overlay">
        <div class="hero-text text-center">
            <h1 class="display-4 text-white">About Us</h1>
            <p class="lead text-white">i-Bear True Solutions Inc.</p>
        </div>
    </div>
</div>

<div class="container my-5 mb-5">
    <div class="row">
        <div class="col-md-6">
            <p class="section-title text-blue">Welcome to iBTS</p>
            <h1 class="main-title">Innovative IT Solutions for Business Growth</h1>
            <p class="description">
                Founded by seasoned IT and business management professionals, iBTS addresses pressing IT challenges for businesses and individuals. With over 30 years of combined experience, we are committed to enhancing business value through cutting-edge IT solutions.
            </p>
            <h3 class="mt-4">Our Services</h3>
            <ul class="description">
                <li></i> Automation Services</li>
                <li></i> Design and System Integration</li>
                <li></i> ICT Solutions</li>
                <li></i> Nationwide Technical Support</li>
            </ul>
        </div>
        <div class="col-md-6">
            <img alt="IT professionals working on solutions" class="img-fluid rounded" src="{{ asset('img/recruit.jpg') }}" />
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="p-3 bg-light rounded text-center">
                <p class="stats text-blue">30+</p>
                <p class="stats-description">Years of Experience</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 bg-light rounded text-center">
                <p class="stats text-blue">100+</p>
                <p class="stats-description">Successful Projects</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 bg-light rounded text-center">
                <p class="stats text-blue">500+</p>
                <p class="stats-description">Happy Clients</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 bg-light rounded text-center">
                <p class="stats text-blue">Philippines</p>
                <p class="stats-description">Technical Support</p>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container text-center mt-5">
        <h2 class="team-title">TEAM MEMBERS</h2>
        <div class="row justify-content-center">
            <div class="col-md-4 team-member">
                <div class="image-container">
                    <img src="{{ asset('author/deguzman.png') }}">
                    <div class="overlay">
                        <div class="icons">
                            <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="mailto:example@example.com">
                                <i class="far fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <h5 class="mt-3">De Guzman, Jaleel Nicole O.</h5>
                <p>Project Manager</p>
            </div>
            <div class="col-md-4 team-member">
                <div class="image-container">
                    <img src="{{ asset('author/araneta.jpg') }}">
                    <div class="overlay">
                        <div class="icons">
                            <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="mailto:example@example.com">
                                <i class="far fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <h5 class="mt-3">Araneta, Jenny Mae</h5>
                <p>Technical Writer</p>
            </div>
            <div class="col-md-4 team-member">
                <div class="image-container">
                    <img src="{{ asset('author/flores.jpg') }}">
                    <div class="overlay">
                        <div class="icons">
                            <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="mailto:example@example.com">
                                <i class="far fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <h5 class="mt-3">Flores, Liam Jed M.</h5>
                <p>Senior Programmer</p>
            </div>
        </div>
    </div>
</div>





@endsection