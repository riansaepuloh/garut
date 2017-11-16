@extends('layouts.app')
@section('content')
<div class="authentication">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-9 col-md-8 col-xs-12">
                <div class="l-detail">
                <h5>Welcome</h5>
                <h1>Admin<span>CC</span></h1>
                <h3>Sign in to start your session</h3>
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
            <div class="col-lg-3 col-md-4 col-xs-12">
                <div class="card">
                    <h4 class="l-login">Login</h4>
                    <!-- Start Form Post -->
                    <form class="col-md-12" id="sign_in" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <!-- Text Field Email Address -->
                        <div class="form-group form-float{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="form-line">
                                <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                    <label class="form-label">Username</label>
                            </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <!-- Text Field Password -->
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
                        <!-- Remember Me -->
                        <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                            <label for="remember">Remember Me</label>
                        <button class="btn btn-raised waves-effect bg-red" type="submit">SIGN IN</button>
                        <!-- Forget Password -->
                        <a class="btn btn-link" href="{{ url('/forget') }}">
                             Forgot Your Password?
                        </a>
                        
                        </div>
                    </form>
                    <!-- End Form -->
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

