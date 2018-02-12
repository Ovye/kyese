@include('partials.header')

@if(isset($body))

    @include($body)

@endif

@include('partials.footer')