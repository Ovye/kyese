<div class="register-container full-height sm-p-t-30">
    <div class="d-flex justify-content-center flex-column full-height ">
        <div class="clearfix text-center m-b-20 m-t-35">
            <img src="{{ asset('assets/img/ky-logo.png') }}" alt="logo" data-src="{{ asset('assets/img/ky-logo.png') }}" data-src-retina="{{ asset('assets/img/ky-logo-lg.png') }}" width="150">
        </div>
        <div class=" clearfix text-center m-b-10">
            <h3>Sign up with</h3>
            <a href="{{ url('login/social/facebook') }}" class="btn btn-info btn-sm">
                <i class="fa fa-facebook"></i> Facebook
            </a>
            <a href="{{ url('login/social/google') }}" class="btn btn-danger btn-sm">
                <i class="fa fa-google-plus"></i>  Google
            </a>
            <a href="{{ url('login/social/twitter') }}" class="btn btn-complete btn-sm">
                <i class="fa fa-twitter"></i> Twitter
            </a>
        </div>
        <div class="clearfix text-center">
            <h4>OR</h4>
        </div>
        <form id="registerForm" class="p-t-15" role="form" action="{{ route('account.doregister') }}" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-group-default">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="Josiah" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-default">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Yahaya" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group form-group-default input-group">
                        <div class="input-group-addon">https://kyese.com/</div>
                        <div class="form-input-group">
                            <label>Username</label>
                            <div class="controls">
                                <input type="text" name="username" placeholder="e.g Josiah (this can be changed later)" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-group-default">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="We will send verification link to you" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-default">
                       <label>Phone</label>
                       <input type="text" name="phone" placeholder="We will send verification code to you" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group form-group-default input-group">
                        <div class="form-input-group">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Minimum of 5 Charactors" data-kp="register-password" class="form-control" required>
                        </div>
                        <div class="input-group-addon kp-control" id="register-password">Show</div>
                    </div>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-lg-6">
                    <p><small>I agree to <a href="#" class="text-info">Kyese Terms</a> and <a href="#" class="text-info">Policies</a>.</small></p>
                </div>
                <div class="col-lg-6 text-right">
                    <a href="{{ url('login') }}/" class="text-danger small">Have account? Sign in</a>
                </div>
            </div>
            <div class="clearfix m-b-30">
                <button class="btn btn-primary btn-bg btn-cons m-t-10" type="submit">Create a new account</button>
            </div>
        </form>
    </div>
</div>

@section('scripts')
    <script>
        let Form = $('#registerForm');
        Form.validate({
            ignore: ':hidden:not([class~=selectized]),:hidden > .selectized, .selectize-control .selectize-input input',
            validClass: "k-has-success",
            rules: {
                password: {
                    required: true,
                    minlength: 5
                },
                phone: {
                    required: true,
                    minlength: 10,
                    maxlength: 12,
                    digits: true,
                    remote: baseUrl + "checkIfPhoneExist"
                },
                email: {
                    required: true,
                    email: true,
                    remote: baseUrl + "checkIfEmailExist"
                }

            },
            messages: {
                password: {
                    required: "Please provide your password.",
                    minlength: "Your password must be at least 5 characters long."
                },
                email: {
                    required: "Provide your email"
                },
                phone: {
                    required: "Provide your phone number"
                },
                fname: {
                    required: "Enter your first name"
                },
                lname: {
                    required: "Enter your last name"
                },
                username: {
                    required: "Enter your username"
                }

            }
        });
    </script>
@stop