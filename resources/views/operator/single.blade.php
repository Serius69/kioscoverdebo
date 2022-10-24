@extends('layouts.master')

@section('title', 'Operador')
@section('subtitle1', 'Operador')
@section('subtitle2', ' ')

@section('body')
{{-- @extends('layouts.components.operator_relational') --}}
    <!--Sidebar Page-->
    <div class="sidebar-page">
    	<div class="auto-container">
        	<div class="row clearfix">

                <!--Content Side-->
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">

                    <!--operators Section-->
                    <section class="operators-section operator-details no-padd-bottom no-padd-top padd-right-20">

                        <div class="column default-featured-column">
                            <article class="inner-box">
                                <figure class="image-box">
                                    <a href="{{ route('operador.show',$operator->id) }}"><img src="{{ url('img/operadores/'.$operator->photo->path)}}" width="600" height="600"  alt=""></a>
                                </figure>
                                <div class="content-box padd-top-40">
                                    <div class="row detail-header clearfix">
                                        <div class="col-md-12 col-sm-12">
                                            <h2>{{$operator->name}}</h2>
                                        </div>
                                        {{-- <div class="col-md-4 col-sm-12 pull-right text-right"><a href="#" class="theme-btn btn-style-two">DOnate NOW</a></div> --}}
                                    </div>
                                    

                                    <br>
                                    

                                </div>
                            </article>
                        </div>
                        @if(($operator->path_video)!=null)
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <iframe
                                    id="existing-iframe-example"
                                    width="640" height="360"
                                    src="{{$operator->path_video}}?autoplay=1&mute=1&enablejsapi=1"
                                    frameborder="0"
                                    style="border: solid 4px #37474F"
                                ></iframe>                                
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="text">
                                <h4>{{$operator->description}}</h4>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a href=" {{$operator->url}}">
                                <h3 class="text-uppercase">Descarga información adjunta en el siguiente enlace </h3>
                                </a>
                        </div>
                        @endif

                        
                        
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
                            	@foreach ($typeoperators as $typeoperator)
                                <li><a class="clearfix" href="{{ route('noticia.show',$operator->id) }}">{{$typeoperator->type}}</a></li>
                                @endforeach
                            </ul>
                        </div> --}}

                        <!-- Recent Posts -->
                        <div class="widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title"><h3>Otros Operadores</h3></div>

                            @foreach ($operators as $operator)
                            @if(($operator->status)==1)
                            <article class="post">
                                <a href="{{ route('operador.show',$operator->id) }}">
                            	<figure class="post-thumb"><img src="{{ url('img/operadores/'.$operator->photo->path)}}" width="70" height="70" alt=""></figure>
                                </a>
                                <h4><a href="{{ route('operador.show',$operator->id) }}">{{$operator->name}}</a></h4>
                                <div class="post-info"><span class="icon flaticon-people-1"></span>{{$operator->description}}</div>
                            </article>
                            @endif
                            @endforeach                         
                        </div>
                    </aside>
                </div>
              <!--Sidebar-->
            </div>
        </div>
    </div>
@endsection

