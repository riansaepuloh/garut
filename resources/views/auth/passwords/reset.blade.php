@extends('layouts.app')

@section('content')
<div class="authentication">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-9 col-md-7 col-xs-12">
                <div class="l-detail">
                <h5>Reset</h5>
                <h1>Admin<span>CC</span></h1>
                <h3>Reset your Password to start your session</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>                            
                <ul class="list-unstyled l-social">
                    <li><a href="#"><i class="zmdi zmdi-facebook-box"></i></a></li>                                
                    <li><a href="#"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                    <li><a href="#"><i class="zmdi zmdi-pinterest-box"></i></a></li>
                    <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                    <li><a href="#"><i class="zmdi zmdi-youtube-play"></i></a></li>
                    <li><a href="#"><i class="zmdi zmdi-google-plus-box"></i></a></li>
                    <li><a href="#"><i class="zmdi zmdi-behance"></i></a></li>
                    <li><a href="#"><i class="zmdi zmdi-dribbble"></i></a></li>
                    <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                </ul>
                <ul class="list-unstyled l-menu">
                    <li><a href="#">Contact Us</a></li>                                
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
            </div>
            <div class="col-lg-3 col-md-5 col-xs-12">
            <div class="card">
                <h4 class="l-login">Forgot Password? <div class="msg">Enter your e-mail address below to reset your password.</div></h4>
                <div class="panel-body">
                    <!-- start form -->
                    <form class="col-md-12" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}
                        <!-- token -->
                        <input type="hidden" name="token" value="{{ $token }}">
                        <!-- email address -->
                        <div class="form-group form-float{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="form-line">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>
                            <label class="form-label">Email Address</label>
                            </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <!-- password -->
                        <div class="form-group form-float{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="form-line">
                                <input id="password" type="password" class="form-control" name="password" required>
                            <label class="form-label">Password</label>
                            </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <!-- confirm password -->
                        <div class="form-group form-float{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <div class="form-line">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                 <label class="form-label">Confirm Password</label>
                            </div>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- button -->
                        <div class="row">                    
                            <div class="col-xs-12">
                                <button class="btn btn-raised waves-effect bg-red" type="submit">RESET MY PASSWORD</button>
                            </div>
                        </div>
                    </form>
                    <!-- end form -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $("body").gradientify({
            gradients: [
                { start: [49,76,172], stop: [242,159,191] },
                { start: [255,103,69], stop: [240,154,241] },
                { start: [33,229,241], stop: [235,236,117] }
            ]
        });
    });
</script>

@endsection
