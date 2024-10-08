@extends('layouts.master')

@section('title', 'Agenda')
@section('subtitle1', 'Age')
@section('subtitle2', 'nda')

@section('body')

    <!--Events Page-->
    <div class="sidebar-page">
    	<div class="auto-container">

        	<div class="row clearfix">

                <!--Content Side-->
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <!--Events Section / List View-->
                    <section class="events-section list-view no-padd-bottom no-padd-top padd-right-20">
                        @foreach ($events as $event)
                        @if(($event->status)==1)
                        <!--Featured Column-->
                        <div class="column default-featured-column style-two">
                            <article class="inner-box">
                                <div class="row clearfix">
                                	<div class="col-md-5 col-sm-5 col-xs-12">
                                        <figure class="image-box">
                                            <a href="{{ route('evento.show',$event->id) }}"><img src="{{ url('img/eventos/'.$event->photo->path)}}" width="400" height="350" alt=""></a>
                                            {{-- @if ({{$event->date_ubication}})
                                            <div class="post-tag">MUY PRONTO</div>
                                            @endif --}}

                                        </figure>
                                    </div>
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <div class="content-box">
                                            <h3><a href="{{ route('evento.show',$event->id) }}">{{ $event->name }}</a></h3>
                                            <div class="column-info">{{ $event->media }}</div>
                                            <div class="text">{{ $event->description }}</div>
                                            <a href="{{ route('evento.show',$event->id) }}" cl  ass="theme-btn btn-style-three">Saber Mas</a>
                                        </div>
                                    </div>

                                </div>
                            </article>
                        </div>
                        @endif
                        @endforeach

                        <!-- Styled Pagination -->
                        <div class="styled-pagination padd-top-20 margin-bott-40">
                            <ul>
                                {{-- <li><a class="prev" href="#"><span class="fa fa-angle-left"></span>&ensp;Prev</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#" class="active">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a class="next" href="#">Next&ensp;<span class="fa fa-angle-right"></span></a></li> --}}
                                {!! $events->links() !!}
                            </ul>
                        </div>
                    </section>
                </div>
                <!--Content Side-->

                <!--Sidebar-->
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">

                        <!-- Search Form -->
                        {{-- <div class="widget search-box">
                            <form method="post" action="http://world5.commonsupport.com/html/greenture-new/index.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Enter keyword">
                                    <button type="submit"><span class="icon flaticon-tool-5"></span></button>
                                </div>
                            </form>
                        </div> --}}
                        <!-- Popular Categories -->
                        {{-- <div class="widget popular-categories wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title"><h3>Categorias</h3></div>

                            <ul class="list">
                            	<li><a class="clearfix" href="#">Categoria 1</a></li>
                                <li><a class="clearfix" href="#">Categoria 2</a></li>
                                <li><a class="clearfix" href="#">Categoria 3</a></li>
                            </ul>
                        </div> --}}
                    </aside>
                </div>
                <!--Sidebar-->
            </div>
        </div>
    </div>
    <!-- Events Page -->

@endsection

