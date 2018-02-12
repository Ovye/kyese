<script src="{{ asset('assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/modernizr.custom.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/tether/js/tether.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery/jquery-easy.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery-unveil/jquery.unveil.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery-ios-list/jquery.ioslist.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery-actual/jquery.actual.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/classie/classie.js') }}"></script>
<script src="{{ asset('assets/plugins/switchery/js/switchery.min.js') }}" type="text/javascript"></script>
{{--Push specific page scripts here--}}
@stack('scripts')
{{--End scripts--}}
<script src="{{ asset('assets/plugins/skycons/skycons.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('assets/plugins/uikit/js/uikit.min.js') }}"></script>
<script src="{{ asset('assets/plugins/uikit/js/uikit-icons.min.js') }}"></script>


<script src="{{ asset('main/js/pages.min.js') }}"></script>

<script src="{{ asset('assets/js/scripts.js') }}" type="text/javascript"></script>

<script src="{{ asset('assets/js/demo.js') }}" type="text/javascript"></script>

<!--Custom script-->
<script>
    let baseUrl = "{{ url('/') }}/";
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

@yield ('scripts')