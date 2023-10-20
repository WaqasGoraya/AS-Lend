
    <head>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <style>
    .text-danger{
        color: red !important;
    }
  </style>
    </head>

 
<div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="title">loan taker</h1>
                        </div>
                        <div class="card-body">
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                           @csrf
                                <div class="row g-4">
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
                                        <input type="text" class="form-control" placeholder="Social Security Number" name="scnumber">
                                        @error('scnumber')
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
                                        <input type="file" class="form-control"
                                        name="proof_address">
                                        @error('proof_address')
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
                                        <input type="file" class="form-control" name="income">
                                        @error('income')
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
        <script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
   