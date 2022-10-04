<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('header')</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/revolution-slider.css') }}"/>
    {{-- scripts --}}
    <script src="{{asset('/js/jquery.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/jquery.fancybox.pack.js')}}"></script>
    <script src="{{asset('/js/jquery.fancybox-media.js')}}"></script>
    <script src="{{asset('/js/owl.js')}}"></script>
    <script src="{{asset('/js/map-script.js')}}"></script>
    <script src="{{asset('/js/validate.js')}}"></script>
    <script src="{{asset('/js/wow.js')}}"></script>
    <script src="{{asset('/js/script.js')}}"></script>
    {{-- responsive --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header -->
    <header class="main-header">
    	<!-- Header Upper -->
    	<div class="header-upper">
        	<div class="auto-container clearfix">
            	<!-- Logo -->
                <div class="logo">
                    <a href="{{ url('/admin') }}"><img src="{{ asset('/images/logo-1.png') }}"  alt="Greenture"></a>
                 </div>

                 <!--Nav Outer-->
                <div class="nav-outer clearfix">

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                    <p>{{ $message }}</p>
                    </div>
                    <a onclick="{{ route('/') }}" class="theme-btn btn-donate" data-toggle="modal" data-target="#login-popup">cerrar sesion</a>
                    @else
                    {{-- <a href="{{ url('/') }}" class="theme-btn btn-donate" data-toggle="modal" data-target="signup-popup">ingresar</a> --}}
                    @endif
                    <!-- Main Menu -->
                    <nav class="main-menu">

                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation">

                                <li><a href="{{ url('/admin/home') }}">INICIO</a>
                                </li>
                                
                                <li class="dropdown"><a href="#">ADMIN</a>
                                    <ul>
                                        <li><a href="{{ url('/admin/event') }}">ADMIN EVENTO</a></li>
                                        <li><a href="{{ url('/admin/latest') }}">ADMIN NOTICIA</a></li>
                                        <li><a href="{{ url('/admin/project') }}">ADMIN PROYECTO</a></li>
                                        <li><a href="{{ url('/admin/banner') }}">ADMIN BANNER</a></li>
                                        <li><a href="{{ url('/admin/typelatest') }}">ADMIN TIPO NOTICIA</a></li>
                                        <li><a href="{{ url('/admin/operator') }}">ADMIN OPERADORES</a></li>
                                    </ul>
                                </li>
                                 
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->

                </div>

            </div>
        </div><!-- Header Top End -->

    </header><!--End Main Header -->

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('/images/background/page-title-bg.jpg') }});">
    <div class="auto-container">
        <div class="sec-title">
            <h1>@yield('subtitle1')<span class="normal-font">@yield('subtitle2')</span></h1>
            <div class="bread-crumb"><a href="{{ url('/') }}">inicio</a> / <a href="#" class="current">@yield('subtitle1') @yield('subtitle2')</a></div>
        </div>
    </div>
</section>

    @yield('body')


    <!--SignUp Popup-->
<div class="modal fade pop-box" id="signup-popup" tabindex="-1" role="dialog" aria-labelledby="signup-popup" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        	<!--SignUp Section-->
            <section class="donation-section">
                <div class="donation-form-outer">
                    <form method="post" action="http://world5.commonsupport.com/html/greenture-new/contact.html">
                        <!--Form Portlet-->
                        <div class="form-portlet">
                            <h4>Ingrese sus datos personales de manera correcta</h4>
                            <div class="row clearfix">

                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <div class="field-label">Nombre <span class="required">*</span></div>
                                    <input type="text" name="name" value="" placeholder="Nombre" required>
                                </div>

                                 <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <div class="field-label">Contraseña <span class="required">*</span></div>
                                    <input type="text" name="name" value="" placeholder="Last Name" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <div class="field-label">Correo electronico <span class="required">*</span></div>
                                    <input type="email" name="name" value="" placeholder="Email" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <div class="field-label">Telefono <span class=""></span></div>
                                    <input type="text" name="name" value="" placeholder="Telefono" required>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                    <div class="field-label">Direccion <span class=""></span></div>
                                    <input type="text" name="name" value="" placeholder="Direccion" required>
                                </div>


                                    <div class="text-center"><button type="submit" class="theme-btn btn-style-two">Registrate</button></div>

                            </div>
                        </div>

                        <br>
                        <br>
                              <!-- Google button -->
                            <h3>Ingresa directamente con tu cuenta de Google</h3>
                            <div class="g-signin2" data-width="300" data-height="200" data-longtitle="true">

                        </div>
                        <div>
                            <a href="{{ url('auth/google') }}" style="margin-top: 0px !important;background: green;color: #ffffff;padding: 5px;border-radius:7px;" class="ml-2">
                                <strong>Google Login</strong>
                              </a>
                        </div>


                    </form>
                </div>
            </section>
        </div>
    <!-- /.modal-content -->
    </div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- End SignUp PopUp -->

</body>
</html>
