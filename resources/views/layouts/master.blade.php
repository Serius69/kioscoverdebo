<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('header')</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('css/responsive.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('css/revolution-slider.css') }}"/>
    <link rel="stylesheet" href="{{url('css/wp.css')}}">
    
    <!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>  
    <div class="page-wrapper">  
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
                    <a href="{{ url('/') }}"><img src="{{ url('/images/logo-1.png') }}"  alt="Greenture"></a>
                 </div>

                 <!--Nav Outer-->
                <div class="nav-outer clearfix">

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">

                        {{-- Error en el popup --}}
                    <p>{{ $message }}</p>
                    </div>
                    <a onclick="{{ route('/') }}" class="theme-btn btn-donate" data-toggle="modal" data-target="#donate-popup">cerrar sesion</a>
                    @else
                    {{-- <a href="{{ url('/') }}" class="theme-btn btn-donate" data-toggle="modal" data-target="#donate-popup">ingresar</a> --}}
                    {{-- <a href="{{url('login')}}" class="theme-btn btn-donate" data-toggle="modal">ingresar</a> --}}

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
                                        <li><a href="{{ url('agend') }}">EVENTOS</a></li>
                                        <li><a href="{{ url('news') }}">NOTICIAS AMBIENTALES</a></li>
                                        {{-- <li><a href="{{ url('news/investigation') }}">INVESTIGACIÓN</a></li> --}}
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">SERVICIOS</a>
                                    <ul>
                                        <li><a href="{{ url('service/recicle') }}">GESTION DE RESIDUOS</a></li>
                                        <li><a href="{{ url('service/ofert') }}">OFERTAS </a></li>
                                        <li><a href="{{ url('service/advice') }}">ASESORAMIENTO</a></li>
                                        <li><a href="{{ url('operator') }}">OPERADORES</a></li>
                                    </ul>
                                </li>
                                 <li class="dropdown"><a href="#">CONTACTANOS</a>
                                    <ul>
                                        <li><a href="{{ url('contactus/question') }}">PREGUNTAS FRECUENTES</a></li>
                                        <li><a href="{{ url('contactus') }}">ESCRÍBENOS</a></li>
                                        <li><a href="{{ url('standars') }}">BIBLIOTECA</a>


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

    @if(($validate)==1)
<!--Page Title-->

<section class="page-title" style="background-image:url({{ asset('/images/background/page-title-bg.jpg') }});">
    <div class="auto-container">
        <div class="sec-title">
            <h1>@yield('subtitle1')<span class="normal-font">@yield('subtitle2')</span></h1>
            <div class="bread-crumb"><a href="{{ url('/') }}">inicio</a> / <a href="#" class="current">@yield('subtitle1') @yield('subtitle2')</a></div>
        </div>
    </div>
</section>

@endif

    @yield('body')
    

<!--Main Footer-->
<footer class="main-footer" style="background-image:url(images/background/footer-bg.jpg);">
    	
    <!--Footer Upper-->         
    <div class="footer-upper">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Two 4th column-->
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                        <div class="col-lg-8 col-sm-6 col-xs-12 column">
                            <div class="footer-widget about-widget">
                                <div class="logo"><a href="{{url('/')}}"><img src="{{ url('/images/logo-1.png') }}" class="img-responsive" alt=""></a></div>
                                <div class="text">
                                    <p>Nuestra Dirección.</p>
                                </div>
                                
                                <ul class="contact-info">
                                    <li><span class="icon fa fa-map-marker"></span> Calacoto, calle 9 N°7898, Zona Sur
                                        Edif. Cámara Nacional de Industrias Piso 8</li>
                                    <li><span class="icon fa fa-phone"></span> (591) 63236023</li>
                                    <li><span class="icon fa fa-envelope-o"></span> kioscoverde@cnibolivia.com</li>
                                </ul>
                                
                                <div class="social-links-two clearfix">
                                    <a href="https://www.facebook.com/kioscoverdeCNI/" class="facebook img-circle"><span class="fa fa-facebook-f"></span></a>
                                    <!-- <a href="#" class="twitter img-circle"><span class="fa fa-twitter"></span></a>
                                    <a href="#" class="google-plus img-circle"><span class="fa fa-google-plus"></span></a>
                                    <a href="#" class="linkedin img-circle"><span class="fa fa-pinterest-p"></span></a>
                                    <a href="#" class="linkedin img-circle"><span class="fa fa-linkedin"></span></a> -->
                                </div>
                                
                            </div>
                        </div>
                        
                        <!--Footer Column-->
                        <div class="col-lg-4 col-sm-6 col-xs-12 column">
                            <h2>Nuestros Servicios</h2>
                            <div class="footer-widget links-widget">
                                <ul>
                                    <li><a href="{{url('comingsoon')}}">GESTIÓN DE RESIDUOS</a></li>
                                    <!-- <li><a href="">CERTIFICACIÓN VERDE</a></li> -->
                                    <li><a href="{{url('comingsoon')}}">CAPACITACIONES</a></li>
                                    <li><a href="{{url('comingsoon')}}">INVESTIGACIÓN</a></li>
                                    <li><a href="{{url('comingsoon')}}">ASESORAMIENTO</a></li>
                                    <li><a href="{{url('comingsoon')}}">OFERTAS / DEMANDAS</a></li>
                                </ul>
    
                            </div>
                        </div>
                    </div>
                </div><!--Two 4th column End-->
                
                <!--Two 4th column-->
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                        <!--Map Column-->
                        <div class="col-lg-12 col-sm-12 col-xs-12 column">
                            <div class="footer-widget links-widget">
                                <h2>UBICACION GOOGLE MAPS</h2>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d956.1786714898839!2d-68.0911735663767!3d-16.54049556489259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f21266964ec6f%3A0x347c49fb9779ef59!2sC%C3%A1mara%20Nacional%20de%20Industrias!5e0!3m2!1sen!2sbo!4v1661288751717!5m2!1sen!2sbo" width="450" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div><!--Two 4th column End-->
                
            </div>
            
        </div>
    </div>
    
    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="container">
            <!--Copyright--> 
            <div class="col-lg-4 col-sm-7 col-xs-12 column">
                <div class="copyright text-right">Copyright 2022 &copy; Pagina creada por <a href="https://www.cni.bo">CNI-SIS</a></div>
            </div>
            <!-- Privacy Policy -->
            <div class="col-lg-4 col-sm-7 col-xs-12 column">
                <div class="copyright text-center">  <a href="{{url('terms')}}">Terminos y condiciones</a></div>
            </div>
            <!-- Terms and Conditions -->
            <div class="col-lg-4 col-sm-7 col-xs-12 column">
                <div class="copyright text-left">  <a href="{{url('privacy')}}">Politicas de privacidad</a></div>
            </div>
        </div>
        
    </div>
    
</footer>
<!-- End Main Footer -->


<!--Login Popup-->
<div class="modal fade pop-box" id="donate-popup" tabindex="-1" role="dialog" aria-labelledby="donate-popup" aria-hidden="true">
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
                                    <div class="field-label">Usuario / Correo electronico <span class="required">*</span></div>
                                    <input type="text" name="name" value="" placeholder="Nombre" required>
                                </div>
                                
                                 <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <div class="field-label">Contraseña <span class="required">*</span></div>
                                    <input type="text" name="name" value="" placeholder="Contraseña" required>
                                </div>                                
                                
                                <div class="text-center"><button type="submit" class="theme-btn btn-style-two">Ingresar</button></div>
                            </div>
                        <!-- </div> -->
                        </div>
                        <!-- end form -->                                      
                        
                        <br>

                            <!-- Google button -->
                            <h3>Ingresa directamente con tu cuenta de Google</h3>
                            <div class="g-signin2" data-width="300" data-height="200" data-longtitle="true">
                                
                            
                        </div>
                        <div>
                            <button type="button" class="login-with-google-btn" >
                                Sign in with Google
                              </button>
                        </div>

                        <!-- Login option -->
                        <h3>Si aun no esta registrado dele click a<a href="{{url('signup')}}"> Registrarse </a></h3>
                            <!-- <div class="g-signin2" data-width="300" data-height="200" data-longtitle="true"> -->
                        
                        
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

<a href="https://api.whatsapp.com/send?phone=59178983393" class="btn-wsp" target="_blank">
    <i class="fa fa-whatsapp icono"></i>
</a>


</body>

{{-- scripts --}}
<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/revolution.min.js')}}"></script>
<script src="{{url('js/jquery.fancybox.pack.js')}}"></script>
<script src="{{url('js/jquery.fancybox-media.js')}}"></script>
<script src="{{url('js/owl.js')}}"></script>
<script src="{{url('js/wow.js')}}"></script>
<script src="{{url('js/script.js')}}"></script>

</html>
