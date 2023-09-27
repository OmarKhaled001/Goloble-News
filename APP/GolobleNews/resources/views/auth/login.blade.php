@extends('layouts.app')

@section('content')

<div id="form" class="container vh-100 vw-100 d-flex justify-content-center align-items-center ">
        <form method="POST" action="{{ route('login') }}" class="shadow rounded px-3 py-2 mb-5 bg-body rounded col-lg-4 col-sm-6">
            @csrf
            <div class="h1 text-center fw-bold">Login <i class="fa-solid fa-shield-halved fa-flip fa-l" style="color: #197471;"></i> </div>
            <label for="email" class="form-label fw-bold">{{ __('Email') }}</label>
            <input type="email" class="form-control mt-2  @error('email') is-invalid @enderror" name="email" placeholder="Please enter your email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label for="password" class="form-label mt-4 fw-bold"> Password</label>
            <input id="password" placeholder="Please enter your password" type="password" class="form-control mt-2 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="submit" class="btn fw-bold form-control my-4" name="login" value="Submit">
        </form>
    </div>


@endsection
