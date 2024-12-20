@extends('layouts.app')


@section('content')
@if (session('status') == 'profile-information-updated')

<title>Edit Profile</title>

<script>
    Swal.fire({
        icon: 'success',
        text: 'Profile information has been updated.',
    })
</script>
@endif
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle" style="margin-top:100px">
                    Settings
                </div>
                <h2 class="page-title">
                    Profile
                </h2>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container">

        <div class="card">
            <div class="row g-0">
                <div class="col-4 border-end">
                    <div class="card-body">
                        <h4 class="subheader">Profile Settings</h4>
                        @include('profile.sidebar')
                    </div>
                </div>
                <div class="col-8 d-flex flex-column">
                    <form method="POST" action="{{ route('user-profile-information.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <h2 class="mb-4">My Account</h2>
                            <!-- Image Preview Container -->
                            <div class="mt-3">
                                <img id="image_preview" src="#" alt="Profile Picture Preview" style="max-width: 235px; display: none; border-radius: 5px;" />
                            </div>

                            <!-- Profile Picture Section -->
                            <h3 class="card-title mt-4">Profile Picture</h3>
                            <input type="file" class="form-control @error('profile_picture') is-invalid @enderror" name="profile_picture" id="profile_picture" style="max-width:235px" onchange="previewImage(event)">

                            <!-- Profile Information Section -->
                            <h3 class="card-title mt-4">Profile Information</h3>
                            <div class="row g-3">
                                <div class="col-md">
                                    <div class="form-label">Name</div>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? auth()->user()->name }}" required autocomplete="name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md">
                                    <div class="form-label">Email Address</div>
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? auth()->user()->email }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent mt-auto">
                            <div class="btn-list justify-content-end">
                                <a href="{{route('home')}}" class="btn">
                                    Cancel
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    Save Changes
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- JavaScript to preview the image -->
<script>
    function previewImage(event) {
        const file = event.target.files[0];
        const reader = new FileReader();

        // Once the file is read, display the image
        reader.onload = function() {
            const imagePreview = document.getElementById('image_preview');
            imagePreview.src = reader.result; // Set the image source to the result
            imagePreview.style.display = 'block'; // Make the preview visible
        };

        // Read the file as a data URL
        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>
@endsection