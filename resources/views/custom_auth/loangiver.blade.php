<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ************************************************************************ !-->
    <!-- *****                                                              ***** !-->
    <!-- *****       ¤ Designed and Developed by  LEADconcept               ***** !-->
    <!-- *****               http://www.leadconcept.com                     ***** !-->
    <!-- *****                                                              ***** !-->
    <!-- ************************************************************************ !-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Giver</title>
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/main.css')}}">
</head>
<body class="body_bg">
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
                            <form action="#">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="User Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" placeholder="Confirm Password">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="Full Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="Address">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="Country">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="Zip Code">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="Phone Number">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="Social Security Number">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="file" class="form-control">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="file" class="form-control">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="file" class="form-control">
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

    <script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>