@extends('layouts.master')

@section('title', 'Operadores Afiliados a KioscoVerde')
@section('subtitle1', 'Operadores Afiliados')
@section('subtitle2', ' a KioscoVerde')

@section('body')
    <!--News Section-->
    <section class="events-section operator-events">
    	<div class="auto-container">        
        	<div class="row clearfix">
                @foreach ($operators as $operator)
                @if(($operator->status)==1)
                    <!--Featured Column-->
                <div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<article class="inner-box">
                		<figure class="image-box">
                        	<a href="{{ route('operador.show',$operator->id) }}"><img src="{{ url('img/operadores/'.$operator->photo->path)}}" width="300" height="300" alt=""></a>
                            <div class="post-tag">{{ $operator->name }}</div>
                        </figure>
                        <div class="content-box">
                        	<h3><a href="{{ route('operador.show',$operator->id) }}">{{ $operator->author }}</a></h3>
                            <div class="column-info">{{ $operator->datetime }}</div>
                            <div class="text">{{ $operator->description }} </div>
                            <a href="{{ route('operador.show',$operator->id) }}" class="theme-btn btn-style-three">Saber Mas</a>
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
                    {!! $operators->links() !!}
                </ul>
            </div>

        </div>
    </section>

@endsection

