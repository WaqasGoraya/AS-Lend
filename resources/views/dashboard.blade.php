<!DOCTYPE html>
<html lang="en" data-theme-mode="light" data-header-styles="light" data-menu-styles="light">
<head>
    <!-- ************************************************************************ !-->
    <!-- *****                                                              ***** !-->
    <!-- *****       ¤ Designed and Developed by  LEADconcept               ***** !-->
    <!-- *****               http://www.leadconcept.com                     ***** !-->
    <!-- *****                                                              ***** !-->
    <!-- ************************************************************************ !-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/main.css')}}">
</head>
<body class="main-body app sidebar-mini ltr gray-bg">
    <div class="horizontalMenucontainer">
        <div class="page custom-index">
            <div>
                <div class="main-header side-header sticky nav nav-item" style="margin-bottom: -63px;">
                    <div class="container-fluid main-container ">
                        <div class="main-header-left ">
                            <div class="app-sidebar__toggle" data-bs-toggle="sidebar">
                                <a class="open-toggle" href="javascript:void(0);">
                                    <img src="{{asset('/assets/images/icon_menu.png')}}" alt="icon" class="img-fluid">
                                </a>
                                <a class="close-toggle" href="javascript:void(0);">
                                    <img src="{{asset('/assets/images/icon_menu.png')}}" alt="icon" class="img-fluid">
                                </a> 
                            </div>
                            <div class="main-header-center me-3 d-sm-none d-md-none d-lg-block">
                                <input class="form-control" placeholder="Search for anything..." type="search">
                                <button class="btn"><img src="{{asset('/assets/images/icon_search.png')}}" alt="search" class="img-fluid"></button>
                            </div>
                        </div>
                        <a href="index.html" class="header-logo">
                            <img src="{{asset('/assets/images/logo.png')}}" class="res-logo" alt="logo">
                        </a>
                        <div class="main-header-right">
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                                <img src="{{asset('/assets/images/menu_vertical.png')}}" alt="menu" class="img-fluid">
                            </button>
                            <div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <ul class="nav nav-item align-items-center navbar-nav-right ms-auto justify-content-center gap-4">
                                        <li class="nav-link search-icon d-lg-none d-block">
                                            <form class="navbar-form" role="search">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <span class="input-group-btn">
                                                        <button type="reset" class="btn btn-default">
                                                            <img src="{{asset('/assets/images/close.png')}}" alt="search" class="img-fluid">
                                                        </button>
                                                        <button type="submit" class="btn btn-default nav-link resp-btn">
                                                            <img src="{{asset('/assets/images/icon_search.png')}}" alt="search" class="img-fluid">
                                                        </button>
                                                    </span>
                                                </div>
                                            </form>
                                        </li>
                                        <li class="dropdown nav-item main-header-notification">
                                            <a class="new nav-link d-inline" href="javascript:void(0);">
                                                <span class="main-icons">
                                                    <img src="{{asset('/assets/images/icon_moon.png')}}" alt="moon icon">
                                                </span>
                                            </a>
                                        </li>
                                        <li class="dropdown nav-item main-header-notification">
                                            <a class="new nav-link d-inline" href="javascript:void(0);">
                                                <span class="main-icons">
                                                    <img src="{{asset('/assets/images/icon_bell.png')}}" alt="notifications icon">
                                                </span>
                                            </a>
                                        </li>
                                        <li class="dropdown main-profile-menu nav nav-item nav-link">
                                            <a class="profile-user d-flex" href="">
                                                <img src="{{asset('/assets/images/user_img.png')}}" alt="user" class="img-fluid">
                                            </a>
                                            <div class="dropdown-menu">
                                                <div class="main-header-profile p-3">
                                                    <div class="d-flex wd-100p">
                                                        <div class="main-img-user">
                                                            <img alt="" src="{{asset('/assets/images/user_img.png')}}" class="img-fluid">
                                                        </div>
                                                        <div class="ms-3 my-auto">
                                                            <h6>Petey Cruiser</h6><span>Premium Member</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item" href="#">Edit Profile</a>
                                                <a class="dropdown-item" href="{{route('logout')}}">Sign Out</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="sticky is-expanded" style="margin-bottom: -63px;">
                    <aside class="app-sidebar sidebar-scroll ps ps--active-y open">
                        <div class="main-sidebar-header active">
                            <a class="desktop-logo logo-light active" href="index.html">
                                <img src="{{asset('/assets/images/logo.png')}}" class="main-logo" alt="logo">
                            </a>
                            <a class="logo-icon mobile-logo icon-light active" href="index.html">
                                <img src="{{asset('/assets/images/logo_icon.png')}}" alt="logo">
                            </a>
                        </div>
                        <div class="main-sidemenu is-expanded">
                            <ul class="side-menu" style="margin-right: 0px; margin-left: 0px; padding-top:30px">
                                <li class="slide">
                                    <a class="side-menu__item active" href="index.html">
                                        <img src="{{asset('/assets/images/icon_home.png')}}" alt="icon" class="img-icon">
                                        <span class="side-menu__label">Dashboard</span>
                                    </a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" href="#">
                                        <img src="{{asset('/assets/images/icon_list.png')}}" alt="list" class="img-icon">
                                        <span class="side-menu__label">List</span>
                                    </a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" href="#">
                                        <img src="{{asset('/assets/images/icon_watch.png')}}" alt="list" class="img-icon">
                                        <span class="side-menu__label">History</span>
                                    </a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" href="#">
                                        <img src="{{asset('/assets/images/icon_user.png')}}" alt="list" class="img-icon">
                                        <span class="side-menu__label">Profile</span>
                                    </a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" href="#">
                                        <img src="{{asset('/assets/images/icon_forum.png')}}" alt="list" class="img-icon">
                                        <span class="side-menu__label">Forum</span>
                                    </a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" href="#">
                                        <img src="{{asset('/assets/images/icon_notify.png')}}" alt="list" class="img-icon">
                                        <span class="side-menu__label">Wallet</span>
                                    </a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" href="#">
                                        <img src="{{asset('/assets/images/icon_user_marked.png')}}" alt="list" class="img-icon">
                                        <span class="side-menu__label">Loan Marked</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps__rail-y" style="top: 0px; height: 619px; right: 0px;">
                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 363px;"></div>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="main-content app-content">
                <div class="main-container container-fluid">
                    <div class="row row-sm mg-t-35 gy-5 gx-md-5">
                        <div class="col-md-12 col-lg-12 col-xl-7">
                            <div class="card shadow">
                                <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
                                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                                        <h2 class="card-title mb-0">25% Increase From Last Month</h2>
                                        <span class="card-stat">24,000,033+</span>
                                    </div>
                                </div>
                                <div class="card-body b-p-apex">
                                    <div id="linechart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-xl-5">
                            <div class="row gy-4 gx-md-4">
                                <div class="col-md-3 col-lg-3 col-xl-6">
                                    <div class="card card-insight">
                                        <div class="card-body">
                                            <div class="d-flex flex-column text-center pd-y-15 pd-x-25">
                                                <div class="d-flex justify-content-center mb-2">
                                                    <span class="icon-box">
                                                        <img src="{{asset('/assets/images/icon_arrow.png')}}" alt="icon" class="img-fluid">
                                                    </span>
                                                </div>
                                                <h3 class="card-head">Return</h3>
                                                <p class="card-number">15.000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-6">
                                    <div class="card card-insight">
                                        <div class="card-body">
                                            <div class="d-flex flex-column text-center pd-y-15 pd-x-25">
                                                <div class="d-flex justify-content-center mb-2">
                                                    <span class="icon-box">
                                                        <img src="{{asset('/assets/images/icon_arrow.png')}}" alt="icon" class="img-fluid">
                                                    </span>
                                                </div>
                                                <h3 class="card-head">Return</h3>
                                                <p class="card-number">15.000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-6">
                                    <div class="card card-insight">
                                        <div class="card-body">
                                            <div class="d-flex flex-column text-center pd-y-15 pd-x-25">
                                                <div class="d-flex justify-content-center mb-2">
                                                    <span class="icon-box">
                                                        <img src="{{asset('/assets/images/icon_arrow.png')}}" alt="icon" class="img-fluid">
                                                    </span>
                                                </div>
                                                <h3 class="card-head">Return</h3>
                                                <p class="card-number">15.000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-6">
                                    <div class="card card-insight">
                                        <div class="card-body">
                                            <div class="d-flex flex-column text-center pd-y-15 pd-x-25">
                                                <div class="d-flex justify-content-center mb-2">
                                                    <span class="icon-box">
                                                        <img src="{{asset('/assets/images/icon_arrow.png')}}" alt="icon" class="img-fluid">
                                                    </span>
                                                </div>
                                                <h3 class="card-head">Return</h3>
                                                <p class="card-number">15.000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mg-t-35 row-sm">
                        <div class="col-md-12 col-lg-12 col-xl-12">
                            <div class="card mg-b-35">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
                                            <div class="d-flex justify-content-between">
                                                <h2 class="card-title mb-0">Paid or Non Paid</h2>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="progress mb-5 justify-content-between" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 70%"></div>
                                                <span class="progress-value">70% Paid</span>
                                            </div>
                                            <div class="progress justify-content-between" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar non-paid" style="width: 30%"></div>
                                                <span class="progress-value">30% Non Paid</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="radialChart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-footer">
                <div class="container pd-t-0 ht-100p">
                    <div class="row">
                        <div class="col-md-6 text-center text-lg-start">
                            <p class="copyright-text">&copy; Copyright 2023 LNQ All rights reserved</p>
                        </div>
                        <div class="col-md-6 text-center text-lg-end">
                            <p class="designed-text">Designed &amp; Developed by <a href="https://leadconcept.com/" target="_blank">LEADconcept</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{asset('/assets/js/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('/assets/js/p-scroll.js')}}"></script>
    <script src="{{asset('/assets/js/sidebar.js')}}"></script>
    <script src="{{asset('/assets/js/sidebar-custom.js')}}"></script>
    <script src="{{asset('/assets/js/sticky.js')}}"></script>
    <script src="{{asset('/assets/js/sidemenu.js')}}"></script>
    <script src="{{asset('/assets/js/index.js')}}"></script>
    <script src="{{asset('/assets/js/switcher.js')}}"></script>
    <script src="{{asset('/assets/js/custom.js')}}"></script>
    <div class="main-navbar-backdrop"></div>
</body>
</html>
