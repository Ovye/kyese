<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title) && $title != '' ? $title . " - Kyese - A place for everything" : 'Kyese - A place for everything'}}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="{{ asset('main/ico/60.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('main/ico/76.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('main/ico/120.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('main/ico/152.png') }}">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description"/>
    <meta content="" name="keywords"/>
    <meta content="" name="author" />

    @include('partials.sub-partials.head')

@if(session('notice'))
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5" style="position: fixed; z-index: 9999;">
                {!! session('notice') !!}
            </div>
        </div>
    </div>
@endif
@if(isset($only_body) && $only_body != true || !isset($only_body) )
<body class="fixed-header horizontal-menu horizontal-app-menu">
    <div class="header p-r-0 bg-primary">
        <div class="header-inner header-md-height">
            <a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-menu text-white" data-toggle="horizontal-menu"></a>
            <div class="">
                <div class="brand inline no-border hidden-xs-down">
                    <img src="{{ asset('assets/img/ky-logo-white.png') }}" alt="logo" data-src="{{ asset('assets/img/ky-logo-white.png') }}" data-src-retina="{{ asset('assets/img/ky-logo-white-lg.png') }}" style="width: 120px">
                </div>

                <ul class="hidden-md-down notification-list no-margin hidden-sm-down b-grey b-l b-r no-style p-l-30 p-r-20">
                    <li class="p-r-10 inline">
                        <div class="dropdown">
                            <a href="javascript:;" id="notification-center" class="header-icon pg pg-world" data-toggle="dropdown">
                                <span class="bubble"></span>
                            </a>

                            <div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">

                                <div class="notification-panel">

                                    <div class="notification-body scrollable">

                                        <div class="notification-item unread clearfix">

                                            <div class="heading open">
                                                <a href="#" class="text-complete pull-left">
                                                    <i class="pg-map fs-16 m-r-10"></i>
                                                    <span class="bold">Carrot Design</span>
                                                    <span class="fs-12 m-l-10">David Nester</span>
                                                </a>
                                                <div class="pull-right">
                                                    <div class="thumbnail-wrapper d16 circular inline m-t-15 m-r-10 toggle-more-details">
                                                        <div><i class="fa fa-angle-left"></i>
                                                        </div>
                                                    </div>
                                                    <span class=" time">few sec ago</span>
                                                </div>
                                                <div class="more-details">
                                                    <div class="more-details-inner">
                                                        <h5 class="semi-bold fs-16">“Apple’s Motivation - Innovation <br>
                                                            distinguishes between <br>
                                                            A leader and a follower.”</h5>
                                                        <p class="small hint-text">
                                                            Commented on john Smiths wall.
                                                            <br> via pages framework.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                                                <a href="#" class="mark"></a>
                                            </div>

                                        </div>


                                        <div class="notification-item  clearfix">
                                            <div class="heading">
                                                <a href="#" class="text-danger pull-left">
                                                    <i class="fa fa-exclamation-triangle m-r-10"></i>
                                                    <span class="bold">98% Server Load</span>
                                                    <span class="fs-12 m-l-10">Take Action</span>
                                                </a>
                                                <span class="pull-right time">2 mins ago</span>
                                            </div>

                                            <div class="option">
                                                <a href="#" class="mark"></a>
                                            </div>

                                        </div>


                                        <div class="notification-item  clearfix">
                                            <div class="heading">
                                                <a href="#" class="text-warning-dark pull-left">
                                                    <i class="fa fa-exclamation-triangle m-r-10"></i>
                                                    <span class="bold">Warning Notification</span>
                                                    <span class="fs-12 m-l-10">Buy Now</span>
                                                </a>
                                                <span class="pull-right time">yesterday</span>
                                            </div>

                                            <div class="option">
                                                <a href="#" class="mark"></a>
                                            </div>

                                        </div>


                                        <div class="notification-item unread clearfix">
                                            <div class="heading">
                                                <div class="thumbnail-wrapper d24 circular b-white m-r-5 b-a b-white m-t-10 m-r-10">
                                                    <img width="30" height="30" data-src-retina="{{ asset('assets/img/profiles/1x.jpg') }}" data-src="{{ asset('assets/img/profiles/1.jpg') }}" alt="" src="{{ asset('assets/img/profiles/1.jpg') }}">
                                                </div>
                                                <a href="#" class="text-complete pull-left">
                                                    <span class="bold">Revox Design Labs</span>
                                                    <span class="fs-12 m-l-10">Owners</span>
                                                </a>
                                                <span class="pull-right time">11:00pm</span>
                                            </div>

                                            <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                                                <a href="#" class="mark"></a>
                                            </div>

                                        </div>

                                    </div>


                                    <div class="notification-footer text-center">
                                        <a href="#" class="">Read all notifications</a>
                                        <a data-toggle="refresh" class="portlet-refresh text-black pull-right" href="#">
                                            <i class="pg-refresh_new"></i>
                                        </a>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </li>
                    <li class="p-r-10 inline">
                        <a href="#" class="header-icon pg pg-link"></a>
                    </li>
                    <li class="p-r-10 inline">
                        <a href="#" class="header-icon pg pg-thumbs"></a>
                    </li>
                </ul>

                <a href="#" class="search-link hidden-md-down" data-toggle="search"><i class="pg-search"></i>Type anywhere to <span class="bold">search</span></a>
            </div>
            <div class="d-flex align-items-center">

                <div class="pull-left p-r-10 fs-14 font-heading hidden-md-down text-white">
                    <span class="semi-bold">
                        @auth
                            {{ auth()->user()->fname }}</span> <span class="">{{ auth()->user()->lname }}
                        @endauth

                        @guest()
                            Account
                        @endguest
                    </span>
                </div>
                <div class="dropdown pull-right">
                    <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="thumbnail-wrapper d32 circular inline sm-m-r-5">
                        <img src="{{ asset('assets/img/profiles/no-img.jpg') }}" alt="" data-src="{{ asset('assets/img/profiles/no-img.jpg') }}" data-src-retina="{{ asset('assets/img/profiles/no-img.jpg') }}" width="32" height="32">
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
                        <a href="#" class="dropdown-item"><i class="pg-settings_small"></i> Settings</a>
                        <a href="#" class="dropdown-item"><i class="pg-outdent"></i> Feedback</a>
                        <a href="#" class="dropdown-item"><i class="pg-signals"></i> Help</a>
                        @auth()
                            <a class="pointer">
                                <form action="{{ url('logout') }}" method="post">
                                    {{ csrf_field() }}
                                    <button type="submit" class="clearfix btn-link logout-btn pointer bg-master-lighter dropdown-item">
                                        <span class="pull-left">Logout</span>
                                        <span class="pull-right"><i class="pg-power"></i></span>
                                    </button>
                                </form>
                            </a>
                        @endauth
                    </div>
                </div>

                <a href="#" class="header-icon pg pg-alt_menu btn-link m-l-10 sm-no-margin d-inline-block" data-toggle="quickview" data-toggle-element="#quickview"></a>
            </div>
        </div>
        <div class="bg-white">
            <div class="container">
                <div class="menu-bar header-sm-height" data-pages-init='horizontal-menu' data-hide-extra-li="4">
                    <a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-close" data-toggle="horizontal-menu">
                    </a>
                    <ul>
                        <li>
                            <a href="index.html">Dashboard</a>
                        </li>
                        <li>
                            <a href="social.html"><span class="title">Social</span></a>
                        </li>
                        <li>
                            <a href="javascript:;"><span class="title">Calendar</span>
                                <span class=" arrow"></span></a>
                            <ul class="">
                                <li class="">
                                    <a href="calendar.html">Basic</a>
                                </li>
                                <li class="">
                                    <a href="calendar_lang.html">Languages</a>
                                </li>
                                <li class="">
                                    <a href="calendar_month.html">Month</a>
                                </li>
                                <li class="">
                                    <a href="calendar_lazy.html">Lazy load</a>
                                </li>
                                <li class="">
                                    <a href="../../../2.1.0/doc/index.html#calendar" target="_blank">Documentation</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;"><span class="title">UI Elements</span>
                                <span class=" arrow"></span></a>
                            <ul class="">
                                <li class="">
                                    <a href="color.html">Color</a>
                                </li>
                                <li class="">
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li class="">
                                    <a href="icons.html">Icons</a>
                                </li>
                                <li class="">
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li class="">
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li class="">
                                    <a href="modals.html">Modals</a>
                                </li>
                                <li class="">
                                    <a href="progress.html">Progress &amp; Activity</a>
                                </li>
                                <li class="">
                                    <a href="tabs_accordian.html">Tabs &amp; Accordions</a>
                                </li>
                                <li class="">
                                    <a href="sliders.html">Sliders</a>
                                </li>
                                <li class="">
                                    <a href="tree_view.html">Tree View</a>
                                </li>
                                <li class="">
                                    <a href="nestables.html">Nestable</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <span class="title">Forms</span>
                                <span class=" arrow"></span>
                            </a>
                            <ul class="">
                                <li class="">
                                    <a href="form_elements.html">Form Elements</a>
                                </li>
                                <li class="">
                                    <a href="form_layouts.html">Form Layouts</a>
                                </li>
                                <li class="">
                                    <a href="form_wizard.html">Form Wizard</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="builder.html">
                                <span class="title">Builder</span>
                            </a>
                        </li>
                        <li>
                            <a href="cards.html">
                                <span class="title">Cards</span>
                            </a>
                        </li>
                        <li>
                            <a href="views.html">
                                <span class="title">Views</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;"><span class="title">Tables</span>
                                <span class=" arrow"></span></a>
                            <ul class="">
                                <li class="">
                                    <a href="tables.html">Basic Tables</a>
                                </li>
                                <li class="">
                                    <a href="datatables.html">Data Tables</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;"><span class="title">Maps</span>
                                <span class=" arrow"></span></a>
                            <ul class="">
                                <li class="">
                                    <a href="google_map.html">Google Maps</a>
                                </li>
                                <li class="">
                                    <a href="vector_map.html">Vector Maps</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="charts.html"><span class="title">Charts</span></a>
                        </li>
                        <li>
                            <a href="javascript:;"><span class="title">Extra</span>
                                <span class=" arrow"></span></a>
                            <ul class="">
                                <li class="">
                                    <a href="invoice.html">Invoice</a>
                                </li>
                                <li class="">
                                    <a href="404.html">404 Page</a>
                                </li>
                                <li class="">
                                    <a href="500.html">500 Page</a>
                                </li>
                                <li class="">
                                    <a href="blank_template.html">Blank Page</a>
                                </li>
                                <li class="">
                                    <a href="login.html">Login</a>
                                </li>
                                <li class="">
                                    <a href="register.html">Register</a>
                                </li>
                                <li class="">
                                    <a href="lock_screen.html">Lockscreen</a>
                                </li>
                                <li class="">
                                    <a href="gallery.html">Gallery</a>
                                </li>
                                <li class="">
                                    <a href="timeline.html">Timeline</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <a href="#" class="search-link d-flex justify-content-between align-items-center hidden-lg-up" data-toggle="search">Tap here to search <i class="pg-search float-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-container ">
        <div class="page-content-wrapper">
        {{--Open dashboard sidebar--}}
        @if(isset($is_backend) && $is_backend == true)
            @include('backend.partials.sidebar')
        @endif
@else
    {{--Open new body for pages without header and footer like sign and register--}}
    <body class="fixed-header @if(isset($body_class)) {{ $body_class }} @endif ">
@endif