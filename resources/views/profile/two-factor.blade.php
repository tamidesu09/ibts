@extends('layouts.app')
@section('content')
@if (session('status') == 'two-factor-authentication-disabled')
<script>
    Swal.fire({
        icon: 'info',
        text: 'Two factor authentication has been disabled.',
    })
</script>
</div>
@elseif (session('status') == 'two-factor-authentication-confirmed')
<script>
    Swal.fire({
        icon: 'success',
        text: 'Two factor authentication has been enabled.',
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
                    <form action="{{route('two-factor.enable')}}" method="post">
                        @csrf

                        <div class="card-body">
                            <h2 class="mb-4">My Account</h2>

                            <h3 class="card-title mt-4">Two-factor Authentication</h3>
                            <p class="card-subtitle">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae, illum.</p>

                            @if(auth()->user()->two_factor_secret)
                            @method('delete')
                            <p class="card-text">When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone's Google Authenticator application.</p>
                            <div class="my-3">

                                <div class="">
                                    <div class="">
                                        <div class="mb-3 text-sm">
                                            <p class="card-text"> Two factor authentication is now enabled. Scan the following QR code using your phone's authenticator application.</p>
                                            {!!auth()->user()->twoFactorQrCodeSvg()!!}

                                            <ul class="mt-3">
                                                @foreach(json_decode(decrypt(auth()->user()->two_factor_recovery_codes)) as $code)
                                                <li>{{$code}}</li>
                                                @endforeach
                                            </ul>
                                            <div>
                                                <p class="card-text">Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.</p>
                                            </div>
                                            <button class="btn btn-danger mt-3">Disable</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <p class="card-text">Add additional security to your account using two factor authentication.</p>
                            <button class="btn btn-primary">Enable</button>
                            @endif

                        </div>

                        <div class="card-footer bg-transparent mt-auto">
                            <div class="btn-list justify-content-end">
                                <a href="{{route('home')}}" class="btn">
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection