@extends('layouts.index')

{{-- @section('content')
<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
    <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
        @csrf
        <img src="mypackage/images/logo4.jpg" alt="Login" class="login100-logo p-b-40">
        
        <div class="wrap-input100 validate-input m-b-23" data-validate = "Email is required">
            <span class="label-input100">Email</span>
            <input id="email" class="input100" type="email" name="email" placeholder="Type your email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <span class="focus-input100" data-symbol="&#xf206;"></span>
        </div>
        
        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <span class="label-input100">Password</span>
            <input id="password" class="input100" type="password" name="pass" placeholder="Type your password" required autocomplete="current-password">
            <span class="focus-input100" data-symbol="&#xf190;"></span>
        </div>

        <div class="text-left p-l-15 p-t-31 p-b-20">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
        
        
        @if (Route::has('password.request'))
        <div class="text-center p-t-8 p-b-31">
            <a href="{{ route('password.request') }}">
                Forgot password?
            </a>
        </div>
        @endif
        
        <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button type="submit" class="login100-form-btn">
                    {{ __('Login') }}
                </button>
            </div>
        </div>

        <div class="flex-col-c p-t-55">
            <span class="txt1 p-b-17">
                Don't Have An Account?
            </span>

            <a href="/register" class="txt2">
                Sign Up
            </a>
        </div>
    </form>
</div>
@endsection --}}




<!-----------------------Laravel---------------------------------->
{{-- @section('content')
<div class="container"> 
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}







<!--------------------------------------------------------------------------------------->
@section('content')
<div class="wrap-reg100 p-l-55 p-r-55 p-t-65 p-b-54">
    <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
        @csrf
        <img src="mypackage/images/logo4.jpg" alt="Login" class="login100-logo p-b-40">

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Type Your Email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Type Your Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between pb-3" >
            <div>
                <input type="radio" id="admin" name="user" value="admin">
                <label for="admin">Admin</label>
            </div>
            <div>
                <input type="radio" id="owner" name="user" value="owner">
                <label for="owner">Owner</label>
            </div>
            <div>
                <input type="radio" id="user" name="user" value="user" checked>
                <label for="user">User</label>
            </div>
        </div>

        <div class="d-flex justify-content-center pb-3">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>
        </div>

        <div class="d-flex justify-content-center pb-2">
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>

        <a class="btn btn-link d-flex justify-content-center" href="/register">
            {{ __('Sign Up!') }}
        </a>
    </form>
</div>
@endsection