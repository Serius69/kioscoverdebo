{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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

@section('title', 'Registrate')
@section('subtitle1', 'Regis')
@section('subtitle2', 'trate')

@section('body')

    <!--Default Section / Other Info-->
    <section class="default-section other-info">

        
    	<!--Login Form Main-->
    <!-- <div class="modal fade pop-box"  tabindex="-1" role="dialog" aria-labelledby="donate-popup" aria-hidden="true"> -->
        <div class="modal-dialog">
            <div class="modal-content">
                <!--SignUp Section-->
            <section class="donation-section">
                <div class="donation-form-outer">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!--Form Portlet-->
                        <div class="form-portlet">
                            <h4>Ingrese sus datos personales de manera correcta</h4>
                            <div class="row clearfix">

                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <div class="field-label">Nombre <span class="required">*</span></div>
                                    {{-- <input type="text" name="name" value="" placeholder="Nombre" required> --}}
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nombre" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <div class="field-label">Correo electronico <span class="required">*</span></div>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    {{-- <input type="email" name="name" value="" placeholder="Email" required> --}}
                                </div>

                                 <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <div class="field-label">Contraseña <span class="required">*</span></div>
                                    
                                    {{-- <input type="text" name="name" value="" placeholder="Last Name" required> --}}
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <div class="field-label">Confirmar Contraseña <span class="required">*</span></div>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Contraseña">
                                    {{-- <input type="text" name="name" value="" placeholder="Last Name" required> --}}
                                </div>

                                {{-- <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <div class="field-label">Telefono <span class=""></span></div>
                                    <input type="text" name="name" value="" placeholder="Telefono" required>
                                </div> --}}

                                {{-- <div class="form-group col-lg-6 col-md-12 col-xs-12">
                                    <div class="field-label">Direccion <span class=""></span></div>
                                    <input type="text" name="name" value="" placeholder="Direccion" required>
                                </div> --}}

                            </div>
                            <div class="text-center"><button type="submit" class="theme-btn btn-style-two">Registrate</button></div>
                        </div>

                        <br>

                        <br>
                            <!-- Google button -->
                            <h3>o Ingresa directamente con tu cuenta de Google</h3>
                            <div class="g-signin2" data-width="300" data-height="200" data-longtitle="true">
                        </div>
                        <div>
                            <a href="{{ url('auth/google') }}">
                            <button type="button" class="login-with-google-btn" >
                                Sign up with Google
                              </button>
                            </a>
                        </div>


                    </form>
                </div>
            </section>
            </div>
        <!-- /.modal-content -->
        <!-- </div> -->
    <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->
<!-- End SignUp PopUp -->
    </section>
@endsection

