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
    	<div class="top-bar">
        	<div class="top-container">
            	<!--Info Outer-->
                 <div class="info-outer">
                 	<!--Info Box-->
                    <ul class="info-box clearfix">
                    	<li><span class="icon flaticon-interface"></span><a href="#">kioscoverde@cnibolivia.com</a></li>
                    	<li><span class="icon flaticon-technology-5"></span><a href="#">(591) 63236023</a></li>
                        <li class="social-links-one">
                        	<a href="https://www.facebook.com/kioscoverdeCNI/" class="facebook img-circle"><span class="fa fa-facebook-f"></span></a>
                            <!-- <a href="#" class="twitter img-circle"><span class="fa fa-twitter"></span></a> -->
                            <!-- <a href="#" class="google-plus img-circle"><span class="fa fa-google-plus"></span></a> -->
                            <a href="https://bo.linkedin.com/company/cnibolivia" class="linkedin img-circle"><span class="fa fa-linkedin"></span></a>
                        </li>
                    </ul>
                 </div>
            </div>
        </div>
    	<!-- Header Upper -->
    	<div class="header-upper">
        	<div class="auto-container clearfix">
            	<!-- Logo -->
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('/images/logo-1.png') }}"  alt="Greenture"></a>
                 </div>

                 <!--Nav Outer-->
                <div class="nav-outer clearfix">

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                    <p>{{ $message }}</p>
                    </div>
                    <a onclick="{{ route('/') }}" class="theme-btn btn-donate" data-toggle="modal" data-target="#login-popup">cerrar sesion</a>
                    @else
                    <a href="{{ url('/') }}" class="theme-btn btn-donate" data-toggle="modal" data-target="#login-popup">ingresar</a>
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

                                <li><a href="{{ url('/') }}">INICIO</a>
                                </li>
                                <li><a href="{{ url('/aboutus') }}">Quienes somos </a>
                                </li>
                                <li class="dropdown"><a href="#">NOTICIAS</a>
                                    <ul>
                                        {{-- <li><a href="{{ url('/news/intermediaty') }}">INTERMEDIACIONES</a> </li> --}}
                                        <li><a href="{{ url('/news/agend') }}">AGENDA</a></li>
                                        <li><a href="{{ url('/news/news') }}">NOTICIAS AMBIENTALES</a></li>
                                        <li><a href="{{ url('/news/investigation') }}">INVESTIGACIÓN</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">SERVICIOS</a>
                                    <ul>
                                        <li><a href="{{ url('/service/recicle') }}">GESTION DE RESIDUOS</a></li>
                                        <li><a href="{{ url('/service/ofert') }}">OFERTAS </a></li>
                                        <li><a href="{{ url('/service/advice') }}">ASESORAMIENTO</a></li>

                                    </ul>
                                </li>
                                 <li class="dropdown"><a href="#">CONTACTANOS</a>
                                    <ul>
                                        <li><a href="{{ url('/contactus/question') }}">PREGUNTAS FRECUENTES</a></li>
                                        <li><a href="{{ url('/contactus') }}">ESCRÍBENOS</a></li>
                                        <li><a href="{{ url('/contactus/standars') }}">BIBLIOTECA</a>


                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->

                </div>

            </div>
        </div><!-- Header Top End -->

    </header><!--End Main Header -->

    @yield('content')


    <!--Login Popup-->
<div class="modal fade pop-box" id="login-popup" tabindex="-1" role="dialog" aria-labelledby="signup-popup" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        	<!--SignUp Section-->
            <section class="donation-section">
                <div class="donation-form-outer">
                    <form method="POST" action="{{ route('register.post') }}">
                        @csrf
                        <!--Form Portlet-->
                        <div class="form-portlet">
                            <h4>Ingrese sus datos personales de manera correcta</h4>
                            <div class="row clearfix">
                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <div class="field-label">Nombre | Correo electronico <span class="required">*</span></div>
                                    <input type="text" name="name" value="" placeholder="Nombre" required>
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                 <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <div class="field-label">Contraseña <span class="required">*</span></div>
                                    <input type="text" name="name" value="" placeholder="Last Name" required>
                                    @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                                </div>
                                <div class="text-center"><button type="submit" class="theme-btn btn-style-two">Ingresar</button></div>

                            </div>
                        </div>
                        <br>
                            <h3>Si aun no esta registrado dele click a <a href="{{ url('signup') }}"> Registrarse</a></h3>
                            <div class="g-signin2" data-width="300" data-height="200" data-longtitle="true">
                        <br>
                              <!-- Google button -->
                            <h3>Ingresa directamente con tu cuenta de Google</h3>
                            <div class="g-signin2" data-width="300" data-height="200" data-longtitle="true">
                        </div>
                        <div>
                            <a href="{{ url('auth/google') }}">
                                <button type="button" class="login-with-google-btn" >
                                    Sign in with Google
                                  </button>
                              </a>
                        </div>
                         <!-- SingUp option -->



                    </form>
                </div>
            </section>
        </div>
    <!-- /.modal-content -->
    </div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- End Login PopUp -->

</body>
</html>
