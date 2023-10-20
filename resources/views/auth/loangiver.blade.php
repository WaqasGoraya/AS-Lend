@extends('layouts.auth.auth')
@section('content')

    <!-- Section Form Start -->
    <section class="section_form flex-grow-1 py-90">
        <div class="text-center mb-3 mb-xl-5">
            <img src="{{asset('/assets/images/logo.png')}}" alt="logo" class="img-logo">
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="title">loan giver</h1>
                        </div>
                        <div class="card-body"> 
                        <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                           @csrf
                                <div class="row g-4">
                    <input type="hidden" class="form-control" value="2" name="role">  
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="User Name" name="username">
                                        @error('username')
                                       <div class="text-danger">{{$message}}</div> 
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" class="form-control" placeholder="Email" name="email">
                                        @error('email')
                                       <div class="text-danger">{{$message}}</div> 
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" placeholder="Password" name="password">
                                        @error('password')
                                       <div class="text-danger">{{$message}}</div> 
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                                        @error('password_confirmation')
                                       <div class="text-danger">{{$message}}</div> 
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="Full Name" name="fullname">
                                        @error('fullname')
                                       <div class="text-danger">{{$message}}</div> 
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="Address" name="address">
                                        @error('address')
                                       <div class="text-danger">{{$message}}</div> 
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="Country" name="country">
                                        @error('country')
                                       <div class="text-danger">{{$message}}</div> 
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="Zip Code" name="zipcode">
                                        @error('zipcode')
                                       <div class="text-danger">{{$message}}</div> 
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="Phone Number" name="phone">
                                        @error('phone')
                                       <div class="text-danger">{{$message}}</div> 
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="Social Security Number" name="ssn">
                                        @error('ssn')
                                       <div class="text-danger">{{$message}}</div> 
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="file" class="form-control" name="liscence">
                                        @error('liscence')
                                       <div class="text-danger">{{$message}}</div> 
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="file" class="form-control" name="health">
                                        @error('health')
                                       <div class="text-danger">{{$message}}</div> 
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="file" class="form-control" name="proof_address">
                                        @error('proof_address')
                                       <div class="text-danger">{{$message}}</div> 
                                        @enderror
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-account">register account</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-arrow">
                            <img src="{{asset('/assets/images/arrow.png')}}" alt="arrow" class="img-arrow">
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