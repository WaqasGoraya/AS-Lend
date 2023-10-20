@extends('layouts.auth.auth')
@section('content')

    <!-- Section Form Start -->
    <section class="section_form flex-grow-1">
        <div class="text-center mb-3 mb-xl-5">
            <img src="{{asset('/assets/images/logo.png')}}" alt="logo" class="img-logo">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <img src="{{asset('/assets/images/login_icon.png')}}" alt="icon" class="img-top">
                            <h1 class="title text-uppercase">login</h1>
                        </div>
                        <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                           @csrf
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="User Name" name="email">
                                    <span class="input-group-text">
                                        <img src="{{asset('/assets/images/user.svg')}}" alt="user" class="img-icon">
                                    </span>
                                </div>
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                    <span class="input-group-text">
                                        <img src="{{asset('/assets/images/eye_slash.png')}}" alt="eye slash" class="img-icon">
                                    </span>
                                </div>
                                <p class="forget-text">
                                    <a href="{{route('password.request')}}">Forgot password?</a>
                                </p>
                                <button type="submit" class="btn btn-login">login</button>
                            </form>
                            <p class="register-text">Don’t Have an Account? <a href="{{url('/')}}">Register Here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed-bottom">
            <img src="{{asset('/assets/images/bottom_vectors.png')}}" alt="vector" class="img-vector">
        </div>
    </section>
    <!-- Section Form End -->

    
@endsection

