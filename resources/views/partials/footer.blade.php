@if(isset($only_body) && $only_body != true || !isset($only_body) )
            @if(!isset($is_backend) || isset($is_backend) && $is_backend != true)
                <div class="container container-fixed-lg footer">
                    <div class="copyright sm-text-center">
                        <p class="small no-margin pull-left sm-pull-reset">
                            <span class="hint-text">Copyright &copy; {{ date('Y') }} </span>
                            <span class="font-montserrat">{{ config('app.name') }}</span>.
                            <span class="hint-text">All rights reserved. </span>
                            <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> <span class="muted">|</span> <a href="#" class="m-l-10">Privacy Policy</a></span>
                        </p>
                        <p class="small no-margin pull-right sm-pull-reset">
                            Hand-crafted <span class="hint-text">&amp; made with Love</span>
                        </p>
                        <div class="clearfix"></div>
                    </div>
                </div>

            @else
                    </div> {{--Ends inner contents after sidebar since it's backend--}}
                </div>{{--Ends sidebar container--}}
            @endif

        </div>

    </div>

@endif


{{--Quickview i.e right side offcanvas--}}
{{--@include('partials.sub-partials.quickview')--}}

{{--Pop up search form--}}
@include('partials.sub-partials.search')

{{--Loads js scripts--}}
@include('partials.sub-partials.foot')

</body>
</html>
