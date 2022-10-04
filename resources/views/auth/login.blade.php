{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
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
@extends('layouts.masterlogin')

@section('title', 'Ingresar')
@section('subtitle1', 'Ingre')
@section('subtitle2', 'sar')

@section('body')
    <!-- Login Form - Main -->
    <!--Default Section / Other Info-->
    <section class="default-section other-info">
    	<!--Login Form Main-->
    <!-- <div class="modal fade pop-box"  tabindex="-1" role="dialog" aria-labelledby="donate-popup" aria-hidden="true"> -->
        <div class="modal-dialog">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Hay un error.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="modal-content">
                <!--SignUp Section-->
                <section class="donation-section">
                    <div class="donation-form-outer">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!--Form Portlet-->
                            <div class="form-portlet">
                                <h4>Ingrese sus datos de cuenta</h4>
                                <div class="row clearfix">

                                    <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                        <div class="field-label">Correo electronico<span class="required">*</span></div>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email" required autocomplete="email" autofocus>

                                        {{-- <input type="email" name="name" value="" placeholder="Nombre" required> --}}
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                        <div class="field-label">Contraseña <span class="required">*</span></div>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" name="password" required autocomplete="current-password">
                                        {{-- <input type="text" name="name" value="" placeholder="Contraseña" required> --}}
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                            <label class="form-check-label" for="remember">
                                                {{ __('Recuerdame') }}
                                            </label>
                                        </div>
                                    </div>   
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                    {{-- <div class="text-center"><button type="submit" class="theme-btn btn-style-two">Ingresar</button></div> --}}

                                </div>
                            </div>

                            <br>
                                <!-- Google button -->
                                <h5>Ingresa directamente con tu cuenta de Google</h5>
                                    <div class="g-signin2" data-width="300" data-height="200" data-longtitle="true">
                                        <a href="{{ url('auth/google') }}">
                                        <button type="button" class="login-with-google-btn">
                                            Log in with Google
                                        </button>
                                    </a>
                                    </div>
                                    <!-- Forgot pasword -->
                                        <h4>Si no estas registrado dale click a <a href="{{ url('register') }}"> Registrarse</a> </h4>
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            <h5>{{ __('Olvidaste tu contrasenia?') }}</h5>
                                        </a>
                                        @endif
                                    </div>

                            </div>


                        </form>
                    </div>
    </section>
    <!-- Login Form - End -->

@endsection



