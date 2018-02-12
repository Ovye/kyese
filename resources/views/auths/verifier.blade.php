<div class="tg-main tg-haslayout">
    <div class="container">
        <div class="row justify-content-center" style="padding-top: 100px">
            <div class="col-md-5 col-xs-10 pt-5 pb-5">
                <div class="box clearfix mt-5 mb-5">
                    <form action="{{ url('verify-user') }}" class="form" method="post" id="verifyForm">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ $userId }}">
                        <input type="hidden" value="{{ $token }}" name="token">
                        <input type="hidden" name="type" value="{{ $type }}">
                        @if($type != 'email')
                            <div class="form-group form-group-default">
                                <label for="">Verification Code</label>
                                <div class="controls">
                                    <input type="text" class="form-control" name="verification_code" placeholder="Enter the code here" value="{{ old('verification_code') }}" minlength="6" required>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success btn-lg btn-bloc">Verify Now</button>
                            </div>
                        @else
                            <div class="form-group clearfix">
                                <p>Check your mailbox to verify your email or click the button below to resend a new link.</p>
                                <input type="hidden" name="resend-link" value="true">
                                <input type="hidden" name="reovery_token" value="{{ md5($userId . "kyese_recovery_token") }}">
                                <button type="submit" class="btn btn-primary btn-lg btn-block btn-rounded">Resend Verification Link</button>
                            </div>
                        @endif
                    </form>

                    @if($type != 'email')
                        <form action="{{ route('resend.code') }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="user_id" value="{{ $userId }}">
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group text-center">
                                Want to get a new code? <br/>
                                <button type="submit" class="btn btn-default btn-outline uk-text-bold text-uppercase text-success">Click here</button>
                            </div>
                        </form>
                    @endif

                    <div class="clearfix mt-4 text-center">
                        <a href="{{ url('/') }}/">Back to home</a> | <a href="{{ url('login') }}/">Back to login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <script>
        $('#verifyForm').validate({
            rules: {
                verification_code: {
                    digits: true
                }
            }
        });
    </script>
@endsection