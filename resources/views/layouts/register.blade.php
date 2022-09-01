<!--Register Section-->
@yield('register')
<section class="parallax-section" style="background-image:url({{ asset('/images/parallax/image-1.jpg') }});">
    <div class="auto-container">
        <div class="text-center">
            <h2>El mejor momento para <span class="theme_color">reciclar</span> es ahora</h2>
            <a href="signup.html" class="theme-btn btn-style-two">Registrate Ahora</a>
            <a href="error.html" class="theme-btn btn-style-one">Ingresa a un evento</a>
        </div>
    </div>
</section>
    <!--Intro Section-->
    <section class="subscribe-intro">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Column-->
                <div class="column col-md-9 col-sm-12 col-xs-12">
                	<h2>Contactate con nosotros</h2>
                    Envia un mensaje para consultas
                </div>
                <!--Column-->
                <div class="column col-md-3 col-sm-12 col-xs-12">
                	<div class="text-right padd-top-20">
                		<a href="{{url('/contactus/contactus')}}" class="theme-btn btn-style-one">MENSAJE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
