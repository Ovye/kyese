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

    <style>
        @if( isset($xcss) )
            {{ $xcss }}
            @else
            @media (min-width: 768px) {
                .form {
                    padding-top: 150px;
                }
            }
        @endif
    </style>
</head>
<body>

    <div class="page">
        <section class="content">
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <img src="{{ asset('assets/img/404.png') }}" class="img-responsive" alt="">
                        </div>
                        <div class="col-lg-5 col-xs-11 form">
                            {{ Form::open(['url' => '', 'class' => '']) }}
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" name="q" placeholder="Search something here instead..." class="form-control">
                            </div>
                            <div class="clearfix text-right">
                                {{ Form::submit('Search', ['class' => 'uk-button uk-button-primary']) }}
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
@if(!isset($only_body) || !isset($gmaps) || isset($only_body) && $only_body != true )
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAxPypQuxb7LY8xOhHLF19RRePrpLWqKJ4&amp;libraries=places"></script>
@endif
<script src="{{ asset('assets/js/selectize.min.js') }}"></script>
<script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/icheck.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/vendors/uikit/js/uikit.min.js') }}"></script>
<script src="{{ asset('assets/vendors/uikit/js/uikit-icons.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

<!--Custom script-->
<script>
    var baseUrl = "{{ url('/') }}/";
</script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<!--Dynamic Page scripts-->

@if( isset($scripts) )
    {!! $scripts !!}
@endif

<script type="text/javascript">
    $(function ()  {
        @if( isset($xjs) )
        {!! $xjs !!}
        @endif
    });

    @if( session()->exists('kNotify') )
        {!! session('kNotify') !!}
    @endif

</script>

</body>
</html>