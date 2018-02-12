<!DOCTYPE html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="{{ app()->getLocale() }}"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Basic Page Needs
    ================================================== -->
    <title>{{ isset($title) && $title != '' ? $title . " - Kyese - A place for everything" : 'Kyese - A place for everything'}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{ asset('assets/apple-touch-icon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/selectize.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flags.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/prettyPhoto.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/uikit/css/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>

    <!--Dynamic Page styles-->

@if( isset($styles) )
{!! $styles !!}
@endif
<style>
@if( isset($xcss) )
{{ $xcss }}
@endif
</style>

@yield('dynamic-styles')

</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

{{-- Notifier --}}
<div class="row justify-content-center">
    <div class="col-md-6" style="position:fixed; z-index: 9999; top: 0;">
        <div class="add-shadow">
            {!! session('notice') !!}
        </div>
    </div>
</div>
<!--************************************
        Wrapper Start
*************************************-->
<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
    <!--************************************
            Header Start
    *************************************-->
    @if(!isset($only_body) || isset($only_body) && $only_body != true)
    <header id="tg-header" class="tg-header tg-haslayout">
        <div class="tg-topbar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="tg-navcurrency">
                            <li><a href="#" data-toggle="modal" data-target="#tg-modalselectcurrency">select currency</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#tg-modalpriceconverter">Price converter</a></li>
                        </ul>
                        <div class="dropdown tg-themedropdown tg-userdropdown">
                            <a href="javascript:void(0);" id="tg-adminnav" class="tg-btndropdown" data-toggle="dropdown">
                                <span class="tg-userdp"><img src="images/author/img-01.jpg" alt="image description"></span>
                                <span class="tg-name">Hi! Angelena</span>
                                <span class="tg-role">Administrator</span>
                            </a>
                            <ul class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-adminnav">
                                <li>
                                    <a href="dashboard.html">
                                        <i class="icon-chart-bars"></i>
                                        <span>Insights</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard-profile-setting.html">
                                        <i class="icon-cog"></i>
                                        <span>Profile Settings</span>
                                    </a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="javascript:void(0);">
                                        <i class="icon-layers"></i>
                                        <span>My Ads</span>
                                    </a>
                                    <ul>
                                        <li><a href="dashboard-myads.html">All Ads</a></li>
                                        <li><a href="dashboard-myads.html">Featured Ads</a></li>
                                        <li><a href="dashboard-myads.html">Active Ads</a></li>
                                        <li><a href="dashboard-myads.html">Inactive Ads</a></li>
                                        <li><a href="dashboard-myads.html">Sold Ads</a></li>
                                        <li><a href="dashboard-myads.html">Expired Ads</a></li>
                                        <li><a href="dashboard-myads.html">Deleted Ads</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="dashboard-postanad.html">
                                        <i class="icon-layers"></i>
                                        <span>Dashboard Post Ad</span>
                                    </a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="javascript:void(0);">
                                        <i class="icon-envelope"></i>
                                        <span>Offers/Messages</span>
                                    </a>
                                    <ul>
                                        <li><a href="dashboard-offermessages.html">Offer Received</a></li>
                                        <li><a href="dashboard-offermessages.html">Offer Sent</a></li>
                                        <li><a href="dashboard-offermessages.html">Trash</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="dashboard-payments.html">
                                        <i class="icon-cart"></i>
                                        <span>Payments</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard-myfavourites.html">
                                        <i class="icon-heart"></i>
                                        <span>My Favourite</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard-privacy-setting.html">
                                        <i class="icon-star"></i>
                                        <span>Privacy Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="icon-exit"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tg-navigationarea">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <strong class="tg-logo"><a href="index-2.html"><img src="images/logo.png" alt="company logo here"></a></strong>
                        <a class="tg-btn" href="dashboard-postanad.html">
                            <i class="icon-bookmark"></i>
                            <span>Create</span>
                        </a>
                        <nav id="tg-nav" class="tg-nav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index-2.html">Home V1</a></li>
                                            <li><a href="indexv2.html">Home V2</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children current-menu-item">
                                        <a href="javascript:void(0);">Listings</a>
                                        <ul class="sub-menu">
                                            <li><a href="adlistinggrid.html">Ad Grid</a></li>
                                            <li><a href="adlistinglist.html">Ad Listing</a></li>
                                            <li><a href="addetail.html">Listing Detail</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Dashboard</a>
                                        <ul class="sub-menu">
                                            <li><a href="dashboard.html">Dashboard</a></li>
                                            <li><a href="dashboard-myads.html">Dashboard My Ads</a></li>
                                            <li><a href="dashboard-myfavourites.html">Dashboard Favorites</a></li>
                                            <li><a href="dashboard-offermessages.html">Dashboard Offer Message</a></li>
                                            <li><a href="dashboard-payments.html">Dashboard Payment</a></li>
                                            <li><a href="dashboard-postanad.html">Dashboard Post Ad</a></li>
                                            <li><a href="dashboard-privacy-setting.html">Dashboard privacy Setting</a></li>
                                            <li><a href="dashboard-profile-setting.html">Dashboard Profile Setting</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="aboutus.html">About</a></li>
                                            <li><a href="contactus.html">Contact Us</a></li>
                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0);">News</a>
                                                <ul class="sub-menu">
                                                    <li><a href="newsgrid.html">News grid</a></li>
                                                    <li><a href="newslist.html">News list</a></li>
                                                    <li><a href="newsdetail.html">News detail</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="404error.html">404 Error</a></li>
                                            <li><a href="comingsoon.html">Coming Soon</a></li>
                                            <li><a href="packages.html">Packages</a></li>
                                            <li><a href="loginsignup.html">Login/Register</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

        @if(isset($has_search) && $has_search == true)
            @include('partials_old.search')
        @endif

    @endif
    <!--************************************
            Header End
    *************************************-->

