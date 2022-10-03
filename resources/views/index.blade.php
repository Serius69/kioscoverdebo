
@extends('layouts.master')

@section('header', 'Kiosco Verde | Inicio')
@section('body')

<!--Main Slider-->
<section class="main-slider revolution-slider">
    <div class="tp-banner-container" >
        <div class="tp-banner">            
            <ul> 
                @foreach ($banners as $banner)       
                @if(($banner->status)==1)     	
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="{{ url('img/banners/'.$banner->path) }}"  data-saveperformance="off"  data-title="Banners">
                <img src="{{ url('img/banners/'.$banner->path) }}"  alt="" width="500" height="500"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                </li>
                @endif                          
                @endforeach
            </ul>
            
        </div>
    </div>
</section>

<!--Main Features-->
    <section class="main-features">
    	<div class="auto-container">
        	<div class="title-box text-center">
                    <h1>43+</h1>
                    <h2>Industrias</h2>
                    <div class="text">Reciclaron su residuos a traves del kioscoverde</div>
                </div>

                <div class="row clearfix">

                    <!--Feature Column-->
                    <div class="features-column col-lg-3 col-md-6 col-xs-12">
                        <article class="inner-box">
                            <div class="icon-box">
                                <div class="icon"><span class="flaticon-illumination"></span></div>
                                <h3 class="title">INTERMEDIACION DE RESIDUOS</h3>
                            </div>
                        </article>
                    </div>

                <!--Feature Column-->
                <div class="features-column col-lg-3 col-md-6 col-xs-12">
                	<article class="inner-box">
                    	<div class="icon-box">
                        	<div class="icon"><span class="flaticon-arrows-3"></span></div>
                            <h3 class="title">RECICLADO</h3>
                        </div>
                    </article>
                </div>

                <!--Feature Column-->
                <div class="features-column col-lg-3 col-md-6 col-xs-12">
                	<article class="inner-box">
                    	<div class="icon-box">
                        	<div class="icon"><span class="flaticon-nature-1"></span></div>
                            <h3 class="title">RECICLADO DE ACEITES</h3>
                        </div>
                    </article>
                </div>

                <!--Feature Column-->
                <div class="features-column col-lg-3 col-md-6 col-xs-12">
                	<article class="inner-box">
                    	<div class="icon-box">
                        	<div class="icon"><span class="flaticon-summer-3"></span></div>
                            <h3 class="title">DISPOSICION FINAL</h3>
                        </div>
                    </article>
                </div>

            </div>
        </div>
    </section>


    <!--Featured Fluid Section-->
    <section class="featured-fluid-section">


    	<div class="router clearfix">

            <!--Image Column-->
            <div class="image-column" style="background-image:url(images/resource/fluid-image-1.jpg);"></div>

            <!--Text Column-->
            <article class="column text-column dark-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="background-image:url(images/resource/fluid-image-2.jpg);">

                <div class="content-box pull-left">
                    <h2>REVITALIZACION DE <span class="theme_color">ESPACIOS VERDES</span></h2>
                	<div class="title-text">Dale <a href="{{url('/signup')}}"><strong>CLICK</strong></a> para un registro rapido </div>
                    <div class="text">
                        Facilitamos la relación entre entidades que generan residuos sólidos y empresas que los reciclan, recuperan o incluso ofrecen servicio de tratamiento.
                    </div>
                    <a href="{{url('/signup')}}" class="theme-btn btn-style-one">APLICAR</a>
                    <a href="{{url('/service/recicle')}}" class="theme-btn btn-style-two">MAS DETALLES</a>
                </div>

                <div class="clearfix"></div>
            </article>

        </div>

    </section>

        <!--Service Section-->
        <section class="events-section latest-events">
            <div class="auto-container">
    
                <div class="sec-title text-center">
                    <h2>Que servicios <span class="normal-font theme_color">Ofrecemos</span></h2>
                    <div class="text">Estos son algunos de los servicios que ofrecemos como institucion. </div>
                </div>
                <div class="row clearfix">
    
                    <!--Featured Column-->
                    <div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <article class="inner-box">
                            <figure class="image-box">
                                <a href="{{url('/service/recicle')}}"><img src="{{ url('\img\services\gestion.png') }}" width="300" height="250"  alt=""></a>
                                <div class="post-tag">GESTION DE RESIDUOS</div>
                            </figure>
                            <div class="content-box">
                                <h3><a href="{{url('comingsoon')}}">GESTION DE RESIDUOS</a></h3>
                                <div class="text">El Manejo de residuos principia con la recolección de los mismos, su transporte hasta las instalaciones preparadas y su tratamiento intermedio o final. Este tratamiento puede ser el aprovechamiento del residuo o su eliminación.</div>
                                <a href="{{url('comingsoon')}}" class="theme-btn btn-style-three">Saber Mas</a>
                            </div>
                        </article>
                    </div>
                    <!--Featured Column-->
                    <div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <article class="inner-box">
                            <figure class="image-box">
                                <a href="{{url('comingsoon')}}">
                                    <img src="{{ url('img\services\investigacion.png') }}" width="300" height="250" alt=""></a>
                                <div class="post-tag">Investigación</div>
                            </figure>
                            <div class="content-box">
                                <h3><a href="{{url('comingsoon')}}">Investigación</a></h3>
                                <div class="text">
                                    ¿Tiene en mente qué se debe hacer con los residuos que su industria o institución produce, sin embargo, el conocimiento técnico y académico al respecto es una limitante?
    
    ¿Su empresa operadora de residuos cuenta con procesos que deseas optimizar o mejorar? ¿Quiere contar con tecnologías de bajo costo y adaptables a nuestro medio?.
    El Kiosco Verde mantiene convenio con la Universidad Mayor de San Andres. Expondremos su caso para realizar una investigación como solución duradera a sus necesidades.
                                </div>
                                <a href="{{url('comingsoon')}}" class="theme-btn btn-style-three">Saber Mas</a>
                            </div>
                        </article>
                    </div>
                    <!--Featured Column-->
                    <div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <article class="inner-box">
                            <figure class="image-box">
                                <a href="{{url('comingsoon')}}"><img src="{{ url('img\services\asesoramiento.jpg') }}" width="300" height="250" alt=""></a>
                                <div class="post-tag">ASESORAMIENTO</div>
                            </figure>
                            <div class="content-box">
                                <h3><a href="{{url('comingsoon')}}">ASESORAMIENTO</a></h3>
                                <div class="text">Kiosco Verde provee asesoramiento técnico para su empresa o industria ante cualquier situación o necesidad relacionada a residuos. Parte del asesoramiento se proporciona en forma de consultoría y/o talleres: Asistencia en la gestión integral de residuos, Producción Mas Limpia (PML), logística, educación y concientización, aprovechamiento de residuos. Anteponemos el principio de “reducir, reutilizar y reciclar” en los procesos productivos industriales.
                                    Regístrese y describa la situación en la que se encuentra su empresa o industria y le ofrecemos una gama de posibilidades. </div>
                                <a href="{{url('comingsoon')}}" class="theme-btn btn-style-three">Saber Mas</a>
                            </div>
                        </article>
                    </div>  
                </div>
            </div>
        </section>
            <!--Anexo Section-->
    <section class="blog-news-section latest-news">
    	<div class="auto-container">

            <div class="sec-title text-center">
                <h2>Que es un <span class="normal-font theme_color">Residuo</span></h2>
                <div class="text">Un residuo es un material en estado solido, semisólido o liquido generado en procesos de extracción, beneficio, transformación, producción, consumo, utilización, control, reparación o tratamiento, y cuyo generador o poseedor decide que quiere deshacerse, pudiendo volver a ser aprovechado o requiere sujetarse a procesos de tratamiento  o disposición final.t </div>
            </div>
        	<div class="row clearfix">

                <!--News Column-->
                <div class="column blog-news-column col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<article class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                		<figure class="image-box">
                        	<a href="{{url('/comingsoon')}}"><img src="{{ url('img\inicio\reciclaje.jpg')}}" height="200" width="200"></a>
                            <!-- <div class="news-date">dia <span class="month">mes</span></div> -->
                        </figure>
                        <div class="content-box">
                        	<h3><a href="{{url('/comingsoon')}}">Reducir, Reutilizar, Reciclar</a></h3>
                        	<div class="post-info clearfix">
                            	<div class="post-author">Fuente: </div>

                            </div>
                            <div class="text">Diariamente consumimos papel en las oficinas sin darnos cuenta de la gran cantidad. El papel y cartón constituye hasta el 90% de los residuos generados en las oficinas, también es uno de los lugares de mayor utilización del papel por lo que resultan espacios privilegiados para conseguir un uso lo más eficiente posible de productos de papel y cartón.</div>
                            <a href="{{url('/comingsoon')}}" class="theme-btn read-more">Saber mas</a>
                        </div>
                    </article>
                </div>

                <!--News Column-->
                <div class="column blog-news-column col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<article class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                		<figure class="image-box">
                        	<a href="{{url('/comingsoon')}}"><img src="{{ url('img\inicio\importancia.jpg')}}" height="200" width="200"></a>
                            <!-- <div class="news-date">dia <span class="month">mes</span></div> -->
                        </figure>
                        <div class="content-box">
                        	<h3><a href="{{url('/comingsoon')}}">Compra vende recicla</a></h3>
                        	<div class="post-info clearfix">
                                <div class="post-author">Fuente: </div>
                            </div>
                            <div class="text">Definicion</div>
                            <a href="{{url('/comingsoon')}}" class="theme-btn read-more">Saber mas</a>
                        </div>
                    </article>
                </div>

                <!--News Column-->
                <div class="column blog-news-column col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<article class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                		<figure class="image-box">
                        	<a href="{{url('comingsoon')}}"><img src="{{ url('img\inicio\recoleccion.jpg')}}" height="200" width="200"></a>
                            <!-- <div class="news-date">dia <span class="month">mes</span></div> -->
                        </figure>
                        <div class="content-box">
                        	<h3><a href="{{url('comingsoon')}}">Replanteamiento de residuos</a></h3>
                        	<div class="post-info clearfix">
                            	<div class="post-author">Fuente: </div>

                            </div>
                            <div class="text">Los residuos valorizables son una empresa en crecimiento.</div>
                            <a href="{{url('comingsoon')}}" class="theme-btn read-more">Saber mas</a>
                        </div>
                    </article>
                </div>


            </div>
        </div>
    </section>

        <!--Blog News Section-->
        <section class="blog-news-section latest-news">
            <div class="auto-container">
    
                <div class="sec-title text-center">
                    <h2>Ultimas <span class="normal-font theme_color">Noticias</span></h2>
                    <div class="text">Las ultimas noticias sobre reciclaje en el pais. </div>
                </div>
                <div class="row clearfix">
                    @foreach ($latests as $latest )
                    <!--News Column-->
                    <div class="column blog-news-column col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <article class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <figure class="image-box">
                                <a href="{{ route('noticia.show',$latest->id) }}"><img src="{{ url('img/banners/'.$latest->photo->path) }}" width="300" height="250" alt="Greenture"></a>
                                <div class="news-date">{{ $latest->name }}<span class="month">{{ $latest->name }}</span></div>
                            </figure>
                            <div class="content-box">
                                <h3><a href="{{ route('noticia.show',$latest->id) }}">{{ $latest->name }}</a></h3>
                                <div class="post-info clearfix">
                                    <div class="post-author">{{ $latest->author }}</div>
                                    <div class="post-options clearfix">
                                        <a href="{{ route('noticia.show',$latest->id) }}" class="comments-count"></a>
                                        <a href="{{ route('noticia.show',$latest->id) }}" class="fav-count"></a>
                                    </div>
                                </div>
                                <div class="text">{{ $latest->description }}</div>
                                <a href="{{ route('noticia.show',$latest->id) }}" class="theme-btn read-more">Saber Mas</a>
                            </div>
                        </article>
                    </div>    
                    @endforeach
                </div>
            </div>
        </section>
        <!--Sponsors Section-->
        <section class="sponsors-section">
            <div class="auto-container">
                <div class="slider-outer">
                    <!--Sponsors Slider-->
                    <ul class="sponsors-slider">

                        <li><a href="https://www.cni.bo"><img src="{{ url('images/logo-4.png') }}" width="300"></a></li>
                    
                    </ul>
                </div>
            </div>
        </section>
        <section class="parallax-section" style="background-image:url({{ asset('/images/parallax/image-1.jpg') }});">
            <div class="auto-container">
                <div class="text-center">
                    <h2>El mejor momento para <span class="theme_color">reciclar</span> es ahora</h2>
                    <a href="{{url('signup')}}" class="theme-btn btn-style-two">Registrate Ahora</a>
                    <a href="{{url('comingsoon')}}" class="theme-btn btn-style-one">Ingresa a un evento</a>
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
                                <a href="{{url('contactus')}}" class="theme-btn btn-style-one">MENSAJE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection