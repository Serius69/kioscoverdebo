@extends('layouts.master')

@section('title', 'Noticia')
@section('subtitle1', 'Noticia')
@section('subtitle2', ' ')

@section('body')
{{-- @extends('layouts.components.latest_relational') --}}
    <!--Sidebar Page-->
    <div class="sidebar-page">
    	<div class="auto-container">
        	<div class="row clearfix">

                <!--Content Side-->
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">

                    <!--latests Section-->
                    <section class="latests-section latest-details no-padd-bottom no-padd-top padd-right-20">

                        <div class="column default-featured-column">
                            <article class="inner-box">
                                <figure class="image-box">
                                    <a href="{{ route('noticia.show',$latest->id) }}"><img src="{{ url('img/noticias/'.$latest->photo->path)}}" width="600" height="600"  alt=""></a>
                                    <div class="post-tag">{{ $latest->type->type }}</div>

                                </figure>
                                <ul>
                                    {{-- <li class="post-category"><span>{{$latest->type->type}}</span> </li> --}}
                                    <div class="text"><h2>
                                        <?php $mes = date("m", strtotime($latest->date_publication)); ?>
                                        @if($mes == '01' ) Enero
                                        @endif
                                        @if($mes == '02' ) Febrero
                                        @endif
                                        @if($mes == '03' ) Marzo
                                        @endif
                                        @if($mes == '04' ) Abril
                                        @endif
                                        @if($mes == '05' ) Mayo
                                        @endif
                                        @if($mes == '06' ) Junio
                                        @endif
                                        @if($mes == '07' ) Julio
                                        @endif
                                        @if($mes == '08' ) Agosto
                                        @endif
                                        @if($mes == '09' ) Septiembre
                                        @endif
                                        @if($mes == '10' ) Octubre
                                        @endif
                                        @if($mes == '11' ) Noviembre
                                        @endif
                                        @if($mes == '12' ) Diciembre
                                        @endif

                                        
                                        {{date("d", strtotime($latest->date_publication))}}, {{date("Y", strtotime($latest->date_publication))}}
                                        </h2>
                                    </div>
                                </ul>
                                <div class="content-box padd-top-40">
                                    <div class="row detail-header clearfix">
                                        <div class="col-md-12 col-sm-12">
                                            <h2>{{$latest->name}}</h2>
                                        </div>
                                        {{-- <div class="col-md-4 col-sm-12 pull-right text-right"><a href="#" class="theme-btn btn-style-two">DOnate NOW</a></div> --}}
                                    </div>
                                    <div class="text">
                                        <br>
                                        <p class="bigger-text">{{$latest->media}} 
                                            {{-- <strong class="theme_color">Ne essent feugiat vim, et soluta reprimique instructior mel</strong>, 
                                            ne nonumes deserunt. Vix in dico vivendum forensibus. Munere tamquam referrentur ad duo, ei tibique
                                             dissentias.</p> --}}
                                        <p>{{$latest->description}}</p>
                                    </div>

                                    <br>
                                    <a href=" {{$latest->url}}">
                                    <h3 class="text-uppercase">Descarga información adjunta en el siguiente enlace </h3>
                                    </a>

                                </div>
                            </article>
                        </div>
                    </section>
                    <!--Related Posts Section-->
                    <section class="related-posts-section padd-right-20">
                        <h2>Noticias <span class="normal-font">Relacionadas</span></h2>

                        <!--Related Posts Carousel-->
                        <div class="related-posts-carousel">
                            <!--Post-->
                            @foreach($latests as $latest)  
                            @if (($latest->status)==1)                            
                            <div class="column default-featured-column">
                                <article class="inner-box">
                                    <figure class="image-box">
                                        <a href="{{ route('noticia.show',$latest->id) }}"><img src="{{ url('img/noticias/'.$latest->photo->path)}}" width="200" height="400" alt="image"></a>
                                    </figure>
                                    <div class="content-box">
                                        <h3><a href="{{ route('noticia.show',$latest->id) }}">{{$latest->name}}</a></h3>
                                        {{-- <div class="column-info">{{$latest->description}}</div> --}}
                                        <a href="{{ route('noticia.show',$latest->id) }}" class="theme-btn btn-style-three">Saber Mas</a>
                                    </div>
                                </article>
                            </div>
                            @endif
                            @endforeach

                            
                        </div>

                    </section>
                    <hr>
                </div>
                <!--Content Side-->

                <!--Sidebar-->
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">

                        <!-- Search Form -->
                        {{-- <div class="widget search-box">

                            <form method="post" action="http://world5.commonsupport.com/html/greenture-new/index.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Buscar">
                                    <button type="submit"><span class="icon flaticon-tool-5"></span></button>
                                </div>
                            </form>

                        </div> --}}

                        <!-- Popular Categories -->
                        {{-- <div class="widget popular-categories wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title"><h3>Categorias</h3></div>

                            <ul class="list">
                            	@foreach ($typelatests as $typelatest)
                                <li><a class="clearfix" href="{{ route('noticia.show',$latest->id) }}">{{$typelatest->type}}</a></li>
                                @endforeach
                            </ul>
                        </div> --}}

                        <!-- Recent Posts -->
                        <div class="widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title"><h3>Ultimas noticias</h3></div>

                            @foreach ($latests as $latest)
                            @if (($latest->status)==1)
                            <article class="post">
                            	<a href="{{ route('noticia.show',$latest->id) }}">
                                <figure class="post-thumb"><img src="{{ url('img/noticias/'.$latest->photo->path)}}" width="50px" height="60px" alt="">
                                </figure>
                                </a>
                                <h4><a href="{{ route('noticia.show',$latest->id) }}">{{$latest->name}}</a></h4>
                                <div class="post-info"><span class="icon flaticon-nature"></span>{{$latest->author}}</div>
                                    {{-- <li class="post-category"><span>{{$latest->type->type}}</span> </li> --}}
                                    <div class="text"><h5>
                                        <?php $mes = date("m", strtotime($latest->date_publication)); ?>
                                        @if($mes == '01' ) Enero
                                        @endif
                                        @if($mes == '02' ) Febrero
                                        @endif
                                        @if($mes == '03' ) Marzo
                                        @endif
                                        @if($mes == '04' ) Abril
                                        @endif
                                        @if($mes == '05' ) Mayo
                                        @endif
                                        @if($mes == '06' ) Junio
                                        @endif
                                        @if($mes == '07' ) Julio
                                        @endif
                                        @if($mes == '08' ) Agosto
                                        @endif
                                        @if($mes == '09' ) Septiembre
                                        @endif
                                        @if($mes == '10' ) Octubre
                                        @endif
                                        @if($mes == '11' ) Noviembre
                                        @endif
                                        @if($mes == '12' ) Diciembre
                                        @endif                                        
                                        {{date("d", strtotime($latest->date_publication))}}, {{date("Y", strtotime($latest->date_publication))}}
                                    </h5>
                                    </div>
                            </article>
                            @endif
                            @endforeach                         
                        </div>
                        

                        <!-- Archives -->
                        {{-- <div class="widget archives-list wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title"><h3>Archivos</h3></div>

                            <ul class="list">
                                @foreach ($latests as $latest)                                
                            	<li><a href="#">{{$latest->$datetime}}</a></li>
                                @endforeach
                            </ul>
                        </div> --}}
                    </aside>
                </div>
              <!--Sidebar-->
            </div>
        </div>
    </div>
@endsection

