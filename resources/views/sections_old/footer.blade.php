<!--************ FOOTER *************************************************************************************-->
<!--*********************************************************************************************************-->
@if(!isset($only_body) || isset($only_body) && $only_body != true)
<footer class="footer">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <a href="#" class="brand">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="">
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit amet
                        fermentum sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
                    </p>
                </div>
                <!--end col-md-5-->
                <div class="col-md-3 col-sm-6">
                    <h2>Navigation</h2>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <nav>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">Listing</a>
                                    </li>
                                    <li>
                                        <a href="#">Pages</a>
                                    </li>
                                    <li>
                                        <a href="#">Extras</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                    <li>
                                        <a href="#">Submit Ad</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <nav>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">My Ads</a>
                                    </li>
                                    <li>
                                        <a href="#">Sign In</a>
                                    </li>
                                    <li>
                                        <a href="#">Register</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--end col-md-3-->
                <div class="col-md-4 col-sm-6">
                    <h2>Contact</h2>
                    <address>
                        <figure>
                            6, Old otukpo road High Level<br>
                            Makurdi, Benue Nigeria
                        </figure>
                        <br>
                        <strong>Email:</strong> <a href="#">hello@kyese.com</a>
                        <br>
                        <strong>Skype: </strong> Kyese
                        <br>
                        <br>
                        <a href="contact.html" class="btn btn-primary text-caps btn-framed">Contact Us</a>
                    </address>
                </div>
                <!--end col-md-4-->
            </div>
            <!--end row-->
        </div>
        <div class="background">
            <div class="background-image original-size">
                <img src="{{ asset('assets/img/footer-background-icons.jpg') }}" alt="">
            </div>
            <!--end background-image-->
        </div>
        <!--end background-->
    </div>
    <div id="backtotop">
        <a href="" uk-totop class="float-right btn btn-primary btn-rounded"></a>
    </div>
</footer>
<!--end footer-->
@endif
</div>
<!--end page-->


<!-- Scripts
================================================== -->


<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
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

@yield ('scripts')
</body>
</html>
