<div class="login-wrapper ">
    <div class="bg-pic">

        <img src="{{ asset('assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg') }}" data-src="{{ asset('assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg') }}" data-src-retina="{{ asset('assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg') }}" alt="" class="lazy">

        <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
            <h2 class="semi-bold text-white">
                Kyese makes it easy to find and create all your desires.</h2>
            <p class="small">
                Images displayed are solely for representation purposes only, All work copyright of respective
                owner, otherwise © {{ date('Y') }} Kyese.
            </p>
        </div>

    </div>

    <div class="login-container">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
            <img src="{{ asset('assets/img/ky-icon.png') }}" alt="logo" data-src="{{ asset('assets/img/ky-icon.png') }}" data-src-retina="{{ asset('assets/img/ky-icon.png') }}" width="78" height="22" style="margin-top: -20px"> <span style="font-size: 36px; margin-left: -5px; letter-spacing: -1px" class="bold">KYESE</span>
            <p class="p-t-35">Sign into your kyese account</p>

            <form id="form-login" class="p-t-15" role="form" action="{{ route('do.login') }}" method="post">

                {{ csrf_field() }}

                <div class="form-group form-group-default">
                    <label>Enter</label>
                    <div class="controls">
                        <input type="text" name="user_name" placeholder="Username, email or phone" class="form-control" value="{{ old('user_name') }}" required >
                    </div>
                </div>


                <div class="form-group form-group-default input-group">
                   <div class="form-input-group">
                       <label>Password</label>
                       <div class="controls">
                           <input type="password" class="form-control" data-kp="login-password" name="password" placeholder="Your password" required>
                       </div>
                   </div>
                    <div class="input-group-addon kp-control show-hide-password" id="login-password">Show</div>
                </div>

                <div class="row">
                    <div class="col-md-6 no-padding sm-p-l-10">
                        <div class="checkbox check-primary checkbox-circle remember-me-wrap">
                            <input type="checkbox" value="on" name="remember_me" id="checkbox1">
                            <label for="checkbox1">Keep Me Signed in</label>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-end">
                        <a href="#modalFillIn" data-toggle="modal" class="small text-success">Forgot Password ?</a>
                    </div>
                </div>

                <button class="btn btn-primary m-t-10 btn-lg btn-block" type="submit">Sign in</button>
            </form>

            <div class="pull-bottom sm-pull-bottom">
                <div class="m-b-30 sm-m-t-20 sm-p-b-20 clearfix">
                    <div class="col-sm-3 col-md-2 no-padding">
                        {{--<img alt="" class="m-t-5" data-src="{{ asset('assets/img/demo/pages_icon.png') }}" data-src-retina="{{ asset('assets/img/demo/pages_icon_2x.png') }}" height="60" src="{{ asset('assets/img/demo/pages_icon.png') }}" width="60">--}}
                    </div>
                    <div class="col-sm-9 col-lg-12 no-padding m-t-10">
                        <p>
                            <span><a href="{{ url('register') }}" class="btn btn-block btn-lg btn-default">Create a kyese account </a></span>
                        </p>
                        <p>
                            <small>
                                Or Sign in with<br/>
                                <a href="{{ url('login/social/facebook') }}" class="btn btn-sm btn-info"><i class="fa fa-facebook-official"></i> Facebook</a>
                                <a href="{{ url('login/social/google') }}" class="btn btn-danger btn-sm"><i class="fa fa-google-plus"></i> Google</a>
                                <a href="{{ url('login/social/twitter') }}" class="btn btn-complete btn-sm"><i class="fa fa-twitter"></i> Twitter</a>
                            </small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade fill-in" id="modalFillIn" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        <i class="pg-close"></i>
    </button>
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-left p-b-5"><span class="semi-bold">Recover</span> Password</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('recover.password') }}" id="recoverPasswordForm" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-9 ">
                            <div class="form-group form-group-default">
                                <label>Email or Phone</label>
                                <div class="controls">
                                    <input type="text" name="phone_email" placeholder="Enter email or phone number" class="form-control" value="{{ old('phone_email') }}" required>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <button type="submit" class="btn btn-primary btn-lg btn-block btn-large fs-20">Recover now</button>
                            </div>
                            <div class="form-group clearfix text-right">
                                <button class="btn btn-link" data-dismiss="modal">Remembered ? Login here</button>
                            </div>
                        </div>
                        <div class="col-lg-3 no-padding sm-m-t-10 sm-text-center">

                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>