
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/main.css')}}">
</head>
<body class="body_bg height-100">

    <!-- Section Form Start -->
    <section class="section_form flex-grow-1">
        <div class="text-center mb-3 mb-xl-5">
            <img src="{{asset('/assets/images/logo.png')}}" alt="logo" class="img-logo">
        </div>
        <div class="container">
            <div class="row">
                @if(Session::has('msg'))
                {{Session('msg')}}
                @endif
                <div class="col-md-8 col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <img src="{{asset('/assets/images/password_protected.png')}}" alt="icon" class="img-top">
                            <h1 class="title">forgot password</h1>
                        </div>
                        <div class="card-body">
                        <form method="POST" action="{{ route('password.email') }}">
                             @csrf
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Register Email" name="email">
                                    <span class="input-group-text">
                                        <img src="{{asset('/assets/images/email_icon.png')}}" alt="email" class="img-icon">
                                    </span>
                                </div>
                                @error('email')
                                    {{$message}}
                                    @enderror
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Confirm Email" name="confirm_email">
                                    <span class="input-group-text">
                                        <img src="{{asset('/assets/images/email_icon.png')}}" alt="email" class="img-icon">
                                    </span>
                                </div>
                                @error('confirm_email')
                                    {{$message}}
                                    @enderror
                                <button type="submit" class="btn btn-request">Request New Password</button>
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

    <script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>