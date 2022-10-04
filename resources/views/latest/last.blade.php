@extends('layouts.master')

@section('title', 'Noticias Ambientales')
@section('subtitle1', 'Noticias')
@section('subtitle2', ' Ambientales')

@section('body')

    <!--News Section-->
    <section class="events-section operator-events">
    	<div class="auto-container">        
        	<div class="row clearfix">
                @foreach ($latests as $latest)
                @if(($latest->status)==1)
                    <!--Featured Column-->
                <div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<article class="inner-box">
                		<figure class="image-box">
                        	<a href="{{ route('operador.show',$latest->id) }}"><img src="{{ url('img/operadores/'.$latest->photo->path)}}" width="300" height="300" alt=""></a>
                            <div class="post-tag">{{ $latest->name }}</div>
                        </figure>
                        <div class="content-box">
                        	<h3><a href="{{ route('operador.show',$latest->id) }}">{{ $latest->author }}</a></h3>
                            <div class="column-info">{{ $latest->datetime }}</div>
                            <div class="text">{{ $latest->description }} </div>
                            <a href="{{ route('operador.show',$latest->id) }}" class="theme-btn btn-style-three">Saber Mas</a>
                        </div>
                    </article>
                </div>
                @endif
                @endforeach
            </div>

            <!-- Styled Pagination -->
            <div class="styled-pagination text-center padd-top-20 margin-bott-40">

                <ul>

                    {{-- <li><a class="prev" href="{{url('/news/news')}}"><span class="fa fa-angle-left"></span>&ensp;Anterior</a></li>
                    <li><a href="{{url('/news/news')}}">1</a></li>
                    <li><a href="{{url('/news/news')}}" class="active">2</a></li>
                    <li><a href="{{url('/news/news')}}">3</a></li>
                    <li><a class="next" href="{{url('/news/news')}}">Siguiente&ensp;<span class="fa fa-angle-right"></span></a></li> --}}
                    {!! $latests->links() !!}
                </ul>
            </div>

        </div>
    </section>

@endsection

