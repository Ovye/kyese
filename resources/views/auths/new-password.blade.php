<div class="container p-t-50">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="clearfix text-center m-b-20">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/img/ky-icon.png') }}" alt="ky-icon" width="100">
                </a>
            </div>
            <div class="">
                <h3 class="text-center">Password reset</h3>
                <form action="{{ route('verify.new-password') }}" method="post" class="m-t-30 m-b-30" id="resetPasswordForm">
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{ request()->segment(2) }}">
                    <input type="hidden" name="token" value="{{ request()->segment(3) }}">
                    <div class="form-group form-group-default input-group">
                        <div class="form-input-group">
                            <label>New Password</label>
                            <div class="controls">
                                <input type="password" class="form-control" id="password" data-kp="reset-new-password" name="password" placeholder="Enter new password" minlength="5" required>
                            </div>
                        </div>
                        <div class="input-group-addon kp-control show-hide-password" id="reset-new-password">Show</div>
                    </div>
                    <div class="form-group form-group-default input-group">
                        <div class="form-input-group">
                            <label>Confirm Password</label>
                            <div class="controls">
                                <input type="password" class="form-control" data-kp="reset-confirm-password" name="confirm_password" placeholder="New password again" minlength="5" required>
                            </div>
                        </div>
                        <div class="input-group-addon kp-control show-hide-password" id="reset-confirm-password">Show</div>
                    </div>

                    <div class="form-group m-t-50">
                        <button type="submit" class="btn btn-success btn-block btn-lg">Change Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@section('scripts')

    <script>
        $('#resetPasswordForm').validate({
            rules: {
                confirm_password: {
                    equalTo: '#password'
                }
            }
        });
    </script>

@endsection