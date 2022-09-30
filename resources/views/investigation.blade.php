@extends('layouts.master')

@section('title', 'Investigaciones')
@section('subtitle1', 'Investi')
@section('subtitle2', 'gaciones')

@section('body')
    <!--Gallery Section-->
    <section class="gallery-section sortable-masonry">
        <div class="auto-container">
            <!--Filter-->
            <div class="filters text-center">
                <ul class="filter-tabs filter-btns clearfix anim-3-all">
                    <li class="active filter" data-role="button" data-filter=".all">Todo</li>
                    @foreach ($typelatests as $typelatest)
                    <li class="filter" data-role="button" data-filter=".{{$typelatest->type}}">{{$typelatest->type}}</li>
                    @endforeach
                     </ul>
            </div>
            <div class="images-container">
                <div class="items-container row clearfix">
                @foreach ($latests as $latest)
                <!--Column-->
                <div class="column all {{ $latest->latest_photo }} plants col-md-4 col-sm-6 col-xs-12">
                    <!--Default Portfolio Item-->
                    <div class="default-portfolio-item">
                        <div class="inner-box text-center">
                            <!--Image Box-->
                            <figure class="image-box"><img src="{{ url('img/latest/'.$latest->photo->path)}}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="inner-content">
                                    <div class="content">
                                        <h3><a href="{{ route('noticia.show',$latest->id) }}">{{ $latest->name }}</a></h3>
                                        <a class="arrow lightbox-image" href={{ $latest->latest_photo }} title="Image Caption Here"><span class="icon flaticon-cross-4"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

