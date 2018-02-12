<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Basic Page Needs
    ================================================== -->
    <title>{{ isset($title) && $title != '' ? $title . " - Kyese - A place for everything" : 'Kyese - A place for everything'}}</title>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/selectize.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendors/uikit/css/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/user.css') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="" type="image/x-icon">

    <!--Dynamic Page styles-->

    @if( isset($styles) )
        {!! $styles !!}
    @endif

    @if( isset($xcss) )
        <style>
            {{ $xcss }}
        </style>
    @endif
</head>

<body>

<div class="page {{ isset($hero_form) && $hero_form == 'closed'? 'sub-page' : 'home-page' }}">
    <!--*********************************************************************************************************-->
    <!--************ HERO ***************************************************************************************-->
    <!--*********************************************************************************************************-->
    @if(!isset($only_body) || isset($only_body) && $only_body != true)
    <header class="hero">
        <div class="hero-wrapper">
        @include('sections_old.sub_headers.top_menu')
        <!--============ Hero Form ==========================================================================-->
            <!--============ Page Title =========================================================================-->
        @if(isset($hero_form) && $hero_form == 'closed')
        @include('sections_old.sub_headers.hero_form_closed')
        <!--============ End Hero Form ======================================================================-->
            @if(isset($page_title) && $page_title != '')
            <div class="page-title">
                <div class="container">
                    <h1 class="{{ $page_title_class ?? '' }}">{{ $page_title }}</h1>
                </div>
                <!--end container-->
            </div>
            @endif
        <!--============ End Page Title =====================================================================-->
            <div class="background"></div>
            <!--end background-->

            @elseif (isset($hero_form) && $hero_form == 'opened')
            <div class="page-title">
                <div class="container">
                    <h1 class="opacity-40 center">
                        {{ isset( $page_title ) ?  $page_title : '<a href="#">Buy</a>, <a href="#">Sell</a> or <a href="#">Find</a> What You need' }}
                    </h1>
                </div>
                <!--end container-->
            </div>
            @include('sections_old.sub_headers.hero_form_opened')
        <!--============ End Hero Form ======================================================================-->
            @else

            @endif
        </div>
        <!--end hero-wrapper-->
    </header>
    <!--end hero-->

@endif

<!--*********************************************************************************************************-->