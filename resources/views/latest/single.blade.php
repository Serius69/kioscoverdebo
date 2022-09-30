@extends('layouts.master')

@section('title', 'Noticia')
@section('subtitle1', '')
@section('subtitle2', ' ')

@section('body')
{{-- @extends('layouts.components.latest_relational') --}}
    <!--Sidebar Page-->
    <div class="sidebar-page">
    	<div class="auto-container">
        	<div class="row clearfix">

                <!--Content Side-->
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">

                    <!--Projects Section-->
                    <section class="projects-section project-details no-padd-bottom no-padd-top padd-right-20">

                        <div class="column default-featured-column">
                            <article class="inner-box">
                                <figure class="image-box">
                                    <a href="#"><img src="{{ url('img/latest/'.$latest->photo->path)}}" width="600" height="800"  alt=""></a>
                                </figure>
                                <div class="content-box padd-top-40">
                                    <div class="row detail-header clearfix">
                                        <div class="col-md-8 col-sm-12">
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
                                    <h3 class="text-uppercase">URL </h3>

                                    <ul class="styled-list-two">
                                        <li>{{$latest->url}}</li>
                                    </ul>

                                </div>
                            </article>
                        </div>
                    </section>
                    <hr>
                </div>
                <!--Content Side-->

                <!--Sidebar-->
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">

                        <!-- Search Form -->
                        <div class="widget search-box">

                            <form method="post" action="http://world5.commonsupport.com/html/greenture-new/index.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Buscar">
                                    <button type="submit"><span class="icon flaticon-tool-5"></span></button>
                                </div>
                            </form>

                        </div>

                        <!-- Popular Categories -->
                        <div class="widget popular-categories wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title"><h3>Categorias</h3></div>

                            <ul class="list">
                            	@foreach ($typelatests as $typelatest)
                                <li><a class="clearfix" href="{{ route('noticia.show',$latest->id) }}">{{$typelatest->type}}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Recent Posts -->
                        <div class="widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title"><h3>Ultimos proyectos</h3></div>

                            @foreach ($projects as $project)
                            <article class="post">
                            	<figure class="post-thumb"><img src="{{ url('img/projects/'.$project->photo->path)}}" alt=""></figure>
                                <h4><a href="project-single.html">{{$project->name}}</a></h4>
                                <div class="post-info"><span class="icon flaticon-people-1"></span>{{$project->description}}</div>
                            </article>
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

