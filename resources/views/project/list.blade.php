@extends('layouts.components.footer')
@extends('layouts.components.register')
@extends('layouts.listproject')
@extends('layouts.components.titlebar')
@extends('layouts.master')

@section('title', 'Todos los proyectos')
@section('subtitle1', 'Todos los ')
@section('subtitle2', 'proyectos')

@section('content')

    <!--projects Page-->
    <div class="sidebar-page">
    	<div class="auto-container">

        	<div class="row clearfix">

                <!--Content Side-->
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <!--projects Section / List View-->
                    <section class="projects-section list-view no-padd-bottom no-padd-top padd-right-20">
                        @foreach ($projects as $project)
                        <!--Featured Column-->
                        <div class="column default-featured-column style-two">
                            <article class="inner-box">
                                <div class="row clearfix">
                                	<div class="col-md-5 col-sm-5 col-xs-12">
                                        <figure class="image-box">
                                            <a href="{{ route('projects.show',$project->id) }}"><img src="{{$project->photo->path}}" alt=""></a>
                                            {{-- @if ({{$project->date_ubication}}>{!! Form::datetimeLocal($name, $value, [$options]) !!})
                                            <div class="post-tag">MUY PRONTO</div>
                                            @endif --}}

                                        </figure>
                                    </div>
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <div class="content-box">
                                            <h3><a href="{{ route('projects.show',$project->id) }}">{{ $project->name }}</a></h3>
                                            <div class="column-info">{{ $project->media }}</div>
                                            <div class="text">{{ $project->description }}</div>
                                            <a href="{{ route('projects.show',$project->id) }}" class="theme-btn btn-style-three">Saber Mas</a>
                                        </div>
                                    </div>

                                </div>
                            </article>
                        </div>

                        @endforeach

                        <!-- Styled Pagination -->
                        <div class="styled-pagination padd-top-20 margin-bott-40">
                            <ul>
                                {{-- <li><a class="prev" href="#"><span class="fa fa-angle-left"></span>&ensp;Prev</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#" class="active">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a class="next" href="#">Next&ensp;<span class="fa fa-angle-right"></span></a></li> --}}
                                {!! $projects->links() !!}
                            </ul>
                        </div>
                    </section>
                </div>
                <!--Content Side-->

                <!--Sidebar-->
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">

                        <!-- Search Form -->
                        <div class="widget search-box">
                            <form method="post" action="http://world5.commonsupport.com/html/greenture-new/index.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Enter keyword">
                                    <button type="submit"><span class="icon flaticon-tool-5"></span></button>
                                </div>
                            </form>
                        </div>
                        <!-- Popular Categories -->
                        <div class="widget popular-categories wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title"><h3>Categorias</h3></div>

                            <ul class="list">
                            	<li><a class="clearfix" href="#">Categoria 1</a></li>
                                <li><a class="clearfix" href="#">Categoria 2</a></li>
                                <li><a class="clearfix" href="#">Categoria 3</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <!--Sidebar-->
            </div>
        </div>
    </div>
    <!-- projects Page -->


@section('footer')
@endsection

