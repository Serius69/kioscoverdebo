@extends('layouts.masterADMIN')

@section('header', 'Kiosco Verde | INICIO ADMIN')
@section('title', 'INICIO ADMIN')
@section('subtitle1', 'INICIO')
@section('subtitle2', 'ADMIN')

@section('body')

    <!--Events Section-->
    <section class="events-section latest-events">
    	<div class="auto-container">
        	
            <div class="sec-title text-center">
                <h2>Que puedes <span class="normal-font theme_color">Editar</span> como ADMINISTRADOR</h2>
                <div class="text">Estos son algunos de los elementos que puedes editar como ADMINISTRADOR </div>
            </div>
        	<div class="row clearfix">
                
                <!--Featured Column-->
                <div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<article class="inner-box">
                		<figure class="image-box">
                        	<a href="{{ url('/admin/banner') }}"><img src="" alt=""></a>
                            <div class="post-tag">BANNERS</div>
                        </figure>
                        <div class="content-box">
                        	<h3><a href="{{ url('/admin/banner') }}">BANNERS</a></h3>
                            <div class="text">Editar los banners de la pagina de inicio</div>
                            <a href="{{ url('/admin/banner') }}" class="theme-btn btn-style-three">Editar</a>
                        </div>
                    </article>
                </div>
                <!--Featured Column-->
                <div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<article class="inner-box">
                		<figure class="image-box">
                        	{{-- <a href="{{ url('/admin/latest') }}"><img src="https://scontent.flpb3-1.fna.fbcdn.net/v/t39.30808-6/283985233_1427527297686797_7759706822366468450_n.jpg?stp=dst-jpg_p526x296&_nc_cat=109&ccb=1-7&_nc_sid=730e14&_nc_ohc=tzMT-nRbAE4AX91snaC&_nc_ht=scontent.flpb3-1.fna&oh=00_AT8_X1sDcUesMpTdHJnXGUAeOuMgkyCDQBHrYeDvuIWHeg&oe=6309CFF8" alt=""></a> --}}
                            <div class="post-tag">NOTICIAS</div>
                        </figure>
                        <div class="content-box">
                        	<h3><a href="{{ url('/admin/latest') }}">NOTICIAS</a></h3>
                            <div class="text">Editar las NOTICIAS de la pagina de inicio                                
                            </div>
                            <a href="{{ url('/admin/latest') }}" class="theme-btn btn-style-three">Editar</a>
                        </div>
                    </article>
                </div>             
                <!--Featured Column-->
                <div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<article class="inner-box">
                		<figure class="image-box">
                        	{{-- <a href="{{ url('/admin/project') }}"><img src="https://scontent.flpb3-1.fna.fbcdn.net/v/t39.30808-6/283985233_1427527297686797_7759706822366468450_n.jpg?stp=dst-jpg_p526x296&_nc_cat=109&ccb=1-7&_nc_sid=730e14&_nc_ohc=tzMT-nRbAE4AX91snaC&_nc_ht=scontent.flpb3-1.fna&oh=00_AT8_X1sDcUesMpTdHJnXGUAeOuMgkyCDQBHrYeDvuIWHeg&oe=6309CFF8" alt=""></a> --}}
                            <div class="post-tag">PROYECTOS</div>
                        </figure>
                        <div class="content-box">
                        	<h3><a href="{{ url('/admin/project') }}">PROYECTOS</a></h3>
                            <div class="text">
                                Editar los PROYECTOS de la pagina de inicio  
                            </div>
                            <a href="{{ url('/admin/project') }}" class="theme-btn btn-style-three">Editar</a>
                        </div>
                    </article>
                </div> 
                <!--Featured Column-->
                <div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<article class="inner-box">
                		<figure class="image-box">
                        	{{-- <a href="{{ url('/admin/typelatest') }}"><img src="https://scontent.flpb3-1.fna.fbcdn.net/v/t39.30808-6/283985233_1427527297686797_7759706822366468450_n.jpg?stp=dst-jpg_p526x296&_nc_cat=109&ccb=1-7&_nc_sid=730e14&_nc_ohc=tzMT-nRbAE4AX91snaC&_nc_ht=scontent.flpb3-1.fna&oh=00_AT8_X1sDcUesMpTdHJnXGUAeOuMgkyCDQBHrYeDvuIWHeg&oe=6309CFF8" alt=""></a> --}}
                            <div class="post-tag">TIPOS NOTICIAS</div>
                        </figure>
                        <div class="content-box">
                        	<h3><a href="{{ url('/admin/typelatest') }}">TIPOS NOTICIAS</a></h3>
                            <div class="text">Editar los TIPOS de NOTICIAS de la pagina de inicio</div>
                            <a href="{{ url('/admin/typelatest') }}" class="theme-btn btn-style-three">Editar</a>
                        </div>
                    </article>
                </div>
                <!--Featured Column-->
                <div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<article class="inner-box">
                		<figure class="image-box">
                        	{{-- <a href="{{ url('/admin/operator') }}"><img src="https://scontent.flpb3-1.fna.fbcdn.net/v/t39.30808-6/283985233_1427527297686797_7759706822366468450_n.jpg?stp=dst-jpg_p526x296&_nc_cat=109&ccb=1-7&_nc_sid=730e14&_nc_ohc=tzMT-nRbAE4AX91snaC&_nc_ht=scontent.flpb3-1.fna&oh=00_AT8_X1sDcUesMpTdHJnXGUAeOuMgkyCDQBHrYeDvuIWHeg&oe=6309CFF8" alt=""></a> --}}
                            <div class="post-tag">OPERADORES</div>
                        </figure>
                        <div class="content-box">
                        	<h3><a href="{{ url('/admin/operator') }}">OPERADORES</a></h3>
                            <div class="text">Editar las OPERADORES de la pagina de inicio                                
                            </div>
                            <a href="{{ url('/admin/operator') }}" class="theme-btn btn-style-three">Editar</a>
                        </div>
                    </article>
                </div>             
                <!--Featured Column-->
                <div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<article class="inner-box">
                		<figure class="image-box">
                        	{{-- <a href="{{ url('/admin/event') }}"><img src="https://scontent.flpb3-1.fna.fbcdn.net/v/t39.30808-6/283985233_1427527297686797_7759706822366468450_n.jpg?stp=dst-jpg_p526x296&_nc_cat=109&ccb=1-7&_nc_sid=730e14&_nc_ohc=tzMT-nRbAE4AX91snaC&_nc_ht=scontent.flpb3-1.fna&oh=00_AT8_X1sDcUesMpTdHJnXGUAeOuMgkyCDQBHrYeDvuIWHeg&oe=6309CFF8" alt=""></a> --}}
                            <div class="post-tag">EVENTOS</div>
                        </figure>
                        <div class="content-box">
                        	<h3><a href="{{ url('/admin/event') }}">EVENTOS</a></h3>
                            <div class="text">
                                Editar los EVENTOS de la pagina de inicio  
                            </div>
                            <a href="{{ url('/admin/event') }}" class="theme-btn btn-style-three">Editar</a>
                        </div>
                    </article>
                </div>                            
            </div>
        </div>
    </section>


@endsection

