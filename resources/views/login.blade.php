@extends('layouts.master')

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
            <div class="modal-content">
                <!--SignUp Section-->
                <section class="donation-section">
                    <div class="donation-form-outer">
                        <form method="post" action="http://world5.commonsupport.com/html/greenture-new/contact.html">
                            <!--Form Portlet-->
                            <div class="form-portlet">
                                <h4>Ingrese sus datos de cuenta</h4>
                                <div class="row clearfix">

                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                        <div class="field-label">Nombre | Correo electronico <span class="required">*</span></div>
                                        <input type="text" name="name" value="" placeholder="Nombre" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                        <div class="field-label">Contraseña <span class="required">*</span></div>
                                        <input type="text" name="name" value="" placeholder="Contraseña" required>
                                    </div>
                                    <div class="text-center"><button type="submit" class="theme-btn btn-style-three">Ingresar</button></div>

                                </div>
                            </div>

                            <br>
                                <!-- Google button -->
                                <h5>Ingresa directamente con tu cuenta de Google</h5>
                                    <div class="g-signin2" data-width="300" data-height="200" data-longtitle="true">
                                        <button type="button" class="login-with-google-btn" href="{{ url('auth/google') }}">
                                            Log in with Google
                                        </button>
                                    </div>
                                    <!-- Login -->
                                        <h4>Si no estas registrado dale click a <a href="{{ url('signup') }}"> Registrarse</a> </h4>
                                </div>

                            </div>


                        </form>
                    </div>
    </section>
    <!-- Login Form - End -->

@endsection

