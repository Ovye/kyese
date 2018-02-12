<link href="{{ asset('assets/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/bootstrap/css/bootstrap-4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">
<link href="{{ asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.css') }}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{ asset('assets/plugins/switchery/css/switchery.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{ asset('assets/plugins/nvd3/nv.d3.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{ asset('assets/plugins/mapplic/css/mapplic.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/rickshaw/rickshaw.min.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/plugins/uikit/css/uikit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/animate/animate.css') }}">
<link href="{{ asset('main/css/pages-icons.css') }}" rel="stylesheet" type="text/css">
<link class="main-stylesheet" href="{{ asset('main/css/themes/corporate.css') }}" rel="stylesheet" type="text/css" />
<link class="custom-stylesheet" href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />

<!--Dynamic Page styles-->

<style>
    @font-face {
        font-family: 'Proxima Nova';
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Regular.ttf') }});
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Regular.ttf') }}) format('truetype');
        font-style: normal;
        font-weight: 400
    }

    @font-face {
        font-family: 'Proxima Nova';
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Regular_Italic.ttf') }});
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Regular_Italic.ttf') }}) format('truetype');
        font-style: italic;
        font-weight: 400
    }

    @font-face {
        font-family: 'Proxima Nova';
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Bold.ttf') }});
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Bold.ttf') }}) format('truetype');
        font-style: normal;
        font-weight: 700
    }

    @font-face {
        font-family: 'Proxima Nova';
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Bold_Italic.ttf') }});
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Bold_Italic.ttf') }}) format('truetype');
        font-style: italic;
        font-weight: 700
    }

    @font-face {
        font-family: 'Proxima Nova';
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Semibold.ttf') }});
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Semibold.ttf') }}) format('truetype');
        font-style: normal;
        font-weight: 600
    }

    @font-face {
        font-family: 'Proxima Nova';
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Semibold_Italic.ttf') }});
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Semibold_Italic.ttf') }}) format('truetype');
        font-style: italic;
        font-weight: 600
    }

    @font-face {
        font-family: 'Proxima Nova';
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Light.ttf') }});
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Light.ttf') }}) format('truetype');
        font-style: normal;
        font-weight: 300
    }

    @font-face {
        font-family: 'Proxima Nova';
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Light_Italic.ttf') }});
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Light_Italic.ttf') }}) format('truetype');
        font-style: italic;
        font-weight: 300
    }
</style>

@if( isset($styles) )
    {!! $styles !!}
@endif
<style>
    @if( isset($xcss) )
        {{ $xcss }}
    @endif
</style>

@stack('dynamic-styles')


<script type="text/javascript">
    window.onload = function()
    {
        // fix for windows 8
        if (navigator.appVersion.indexOf("Windows NT 6.2") != -1) {
            document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="{{ asset('main/css/windows.chrome.fix.css') }}" />'
        }
    }
</script>