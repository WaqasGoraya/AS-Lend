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
    <title>Register</title>
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
                <div class="col-md-8 col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <img src="{{asset('/assets/images/register.png')}}" alt="icon" class="img-top">
                            <h1 class="title text-uppercase">register</h1>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-md-4">
                                <a href="{{route('loan_taker')}}" class="btn btn-loan-taker">Loan Taker</a>
                                <a href="{{route('loan_giver')}}" class="btn btn-loan-giver">Loan Giver</a>  
                            </div>
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