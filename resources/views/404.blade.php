<!DOCTYPE html>
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
</head>
<body class="fixed-header error-page">
<div class="d-flex justify-content-center full-height full-width align-items-center">
    <div class="error-container text-center">
        <img src="{{ asset('assets/img/ky-icon.png') }}" alt="logo" data-src="{{ asset('assets/img/ky-icon.png') }}" data-src-retina="{{ asset('assets/img/ky-icon.png') }}" width="100" style="margin-top: -20px">
        <h1 class="error-number">404</h1>
        <h2 class="">We found nothing in the basket.</h2>
        <p class="p-b-10">@if(isset($message)) {{ $message }} @else What you are looking for does not exsist. @endif <a href="#">Report this?</a>
        </p>
        <div class="error-container-innner text-center">
            <form class="error-form" method="post">
                {{ csrf_field() }}
                <div class=" transparent text-left">
                    <div class="form-group form-group-default input-group">
                        <div class="form-input-group">
                            <label>Search</label>
                            <input class="form-control" placeholder="Try searching here" type="text" name="ky-search">
                        </div>
                        <div class="input-group-addon" style="cursor:pointer;">
                            <span class="pg-search"></span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="pull-bottom sm-pull-bottom full-width d-flex align-items-center justify-content-center">
    <div class="error-container">
        <div class="error-container-innner">
            <div class="p-b-30 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix d-flex-md-up row no-margin">
                <div class="col-md-3 no-padding d-flex align-items-center justify-content-center">
                    <img alt="" data-src="assets/img/demo/pages_icon.png" data-src-retina="assets/img/demo/pages_icon_2x.png" height="60" src="assets/img/demo/pages_icon.png" width="60">
                </div>
                <div class="col-md-9 no-padding d-flex align-items-center justify-content-center">
                    <p class="small no-margin flex-1">Create a pages account. If you have a facebook account, log into it for this process.
                        Sign in with <a href="#">Facebook</a> or <a href="#">Google</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>



@include('partials.sub-partials.foot')
</body>
</html>