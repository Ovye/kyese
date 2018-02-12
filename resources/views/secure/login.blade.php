<section class="content">
    <section class="block">
        <div class="container">
            <div class="row justify-content-center">
                <h1>My <b class="default-color">Kyese</b></h1>
                <!--                <div class="col-md-6 col-xl-4">-->
                <!--                    <div class="box k-section-wrap white">-->
                <!--                        <h1 class="k-section-title">My <b class="default-color">Kyese</b></h1>-->
                <!--                        <h3 class="k-section-subtitle">Login to manage your account</h3>-->
                <!--                    </div>-->
                <!--                </div>-->
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 col-xs-11">
                    {!! session('notice') !!}
                    {{ Form::open(['url' => url('login'), 'id' => 'userAccountLoginForm', 'class' => 'form clearfix box k-section-wrap white']) }}
                        <input type="hidden" name="after" value="{{ get('rd') }}">
                        <div class="form-group">
                            <input name="user_name" type="text" class="form-control" id="user_name" placeholder="Your Username, Email or Phone" required value="{{ old('user_name') }}">
                        </div>
                        <!--end form-group-->
                        <div class="form-group">
                            <div id="pass" class="text-right kp_control"><i class="fa fa-eye"></i> Show Password</div>
                            <input name="password" type="password" data-kp="pass" class="form-control" id="password" placeholder="Password" required>
                        </div>
                        <!--end form-group-->
                        <div class="d-flex justify-content-between align-items-baseline">
                            <label>
                                <input type="checkbox" name="remember_me" id="remember_me" value="on" {{ isset($_COOKIE['remember_me']) && $_COOKIE['remember_me'] == 'on' ? 'checked' : '' }} >
                                Remember Me
                            </label>
                            {{ Form::submit('Sign In', ['class' => 'uk-button uk-button-primary']) }}
                        </div>
                    <div class="d-block">
                        <a href="#offcanvas-usage" uk-toggle class="link d-block k-green-color text-uppercase" style="color:green;"><i class="sl sl-icon-bubbles k-round-icon bg-success" style="color: #fff;"></i> Sign in with</a>
                    </div>
                    {{ Form::close() }}
                    <a href="{{ url('/') }}" class="link d-block mt-5"><i class="sl sl-icon-home k-round-icon"></i> RETURN HOME</a>
                    <hr>
                    <p>
                        Troubles with signing? <a href="#recoverPasswordModal" class="link" uk-toggle>Click here.</a><br/>
                        Don't have an account? <a href="{{ url('/register/') }}" class="link">Register Now</a>
                    </p>
                </div>
                <div class="clearfix">
                    <div class="uk-offcanvas-content bg-white">

                        <!-- The whole page content goes here -->

                        <div id="offcanvas-usage" uk-offcanvas="mode: push; overlay: true">
                            <div class="uk-offcanvas-bar">
                                <button class="uk-offcanvas-close text-gray-dark" type="button" uk-close></button>
                                <h3 class="text-center">Use any account to sign in.</h3>
                                <div class="clearfix text-center">
                                    <div class="d-block mb-3">
                                        <a href="{{ url('login/social/facebook') }}" class="uk-button btn-info fb-btn"><i class="sl sl-icon-social-facebook"></i> Facebook</a>
                                    </div>
                                    <div class="b-block mb-3">
                                        <a href="{{ url('login/social/twitter') }}" class="uk-button btn-info twit-btn"><i class="sl sl-icon-social-twitter"></i> Twitter</a>
                                    </div>
                                    <div class="d-block">
                                        <a href="{{ url('login/social/google') }}" class="uk-button btn-danger gg-btn"><i class="im im-icon-Google"></i>  Google</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <!--end col-md-6-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end block-->
</section>
<!--end content-->

<div id="recoverPasswordModal" class="uk-flex-top k-modal-with-heads" uk-modal>
    <div class="uk-modal-dialog uk-margin-auto-vertical">
        <button class="uk-modal-close-outside k-modal-outside-close" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h2 class="uk-modal-title">Password Recovery</h2>
        </div>
        <form action="{{  url('login/recover-password/') }}" class="form" method="post" id="recoverPasswordForm">
            {{ csrf_field() }}
            <div class="uk-modal-body">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="alert alert-info">
                            Please, click <b class="alternative-color">I Have Code</b> if we've sent a recovery code to your phone number. Otherwise, enter your email or phone number and click <b>Recover Now</b>.
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone_email" class="form-control" required placeholder="Enter registered email or phone number..." value="{{ old('phone_email') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-modal-footer">
                <a href="{{ url('account/change-password/') }}" class="btn btn-success">I Have Code</a>
                <button type="submit" class="btn btn-primary uk-float-right">Recover Now <i class="im im-icon-Arrow-Right2"></i></button>
            </div>
        </form>
    </div>
</div>