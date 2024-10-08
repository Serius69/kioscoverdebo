@extends('layouts.components.footer')
@extends('layouts.components.register')
@extends('layouts.components.titlebar')
@extends('layouts.master')

@section('title', 'Intermediaciones')
@section('subtitle1', 'Intermed')
@section('subtitle2', 'iaciones')

@section('content')

    <!--Gallery Section-->
    <section class="gallery-section">
        <div class="auto-container">

            <!--Filter-->
            <div class="filters text-center">
                <ul class="filter-tabs filter-btns clearfix anim-3-all">
                    <li class="active filter" data-role="button" data-filter="all">Todos</li>
                    <li class="filter" data-role="button" data-filter=".environment">Area Urbana</li>
                    <li class="filter" data-role="button" data-filter=".eco">Area Rural</li>
                    <!-- <li class="filter" data-role="button" data-filter=".energy">Temporal</li>
                    <li class="filter" data-role="button" data-filter=".animals">Perma</li>
                    <li class="filter" data-role="button" data-filter=".plants">Plants</li> -->
                </ul>
            </div>

            <!--Filter List-->
            <div class="row filter-list clearfix">

                <!--Column-->
                <div class="column mix mix_all eco plants col-md-4 col-sm-6 col-xs-12">
                    <!--Default Portfolio Item-->
                    <div class="default-portfolio-item">
                        <div class="inner-box text-center">
                            <!--Image Box-->
                            <figure class="image-box"><img src="{{asset('/images/gallery/image-1.jpg')}}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="inner-content">
                                    <div class="content">
                                        <h3><a href="#">En diciembre de 2018, realizamos la intermediación de 148 kilos de tóner en desuso de una institución pública y éstos fueron dispuestos de forma segura gracias a un operador de residuos, a través de un proceso de desmantelamiento.</a></h3>
                                        <a class="arrow lightbox-image" href="{{asset('/images/gallery/image-1.jpg')}}" data-width="400" data-height="400" title="Image Caption Here"><span class="icon flaticon-cross-4"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column mix mix_all environment  energy animals col-md-4 col-sm-6 col-xs-12">
                    <!--Default Portfolio Item-->
                    <div class="default-portfolio-item">
                        <div class="inner-box text-center">
                            <!--Image Box-->
                            <figure class="image-box"><img src="{{asset('/images/gallery/image-1.jpg')}}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="inner-content">
                                    <div class="content">
                                        <h3><a href="#">En diciembre de 2018, realizamos la intermediación de 148 kilos de tóner en desuso de una institución pública y éstos fueron dispuestos de forma segura gracias a un operador de residuos, a través de un proceso de desmantelamiento.</a></h3>
                                        <a class="arrow lightbox-image" href="{{asset('/images/gallery/image-1.jpg')}}" title="Image Caption Here"><span class="icon flaticon-cross-4"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--Column-->
                <div class="column mix mix_all environment eco animals col-md-4 col-sm-6 col-xs-12">
                    <!--Default Portfolio Item-->
                    <div class="default-portfolio-item">
                        <div class="inner-box text-center">
                            <!--Image Box-->
                            <figure class="image-box"><img src="{{asset('/images/gallery/image-1.jpg')}}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="inner-content">
                                    <div class="content">
                                        <h3><a href="#">En diciembre de 2018, realizamos la intermediación de 148 kilos de tóner en desuso de una institución pública y éstos fueron dispuestos de forma segura gracias a un operador de residuos, a través de un proceso de desmantelamiento.</a></h3>
                                        <a class="arrow lightbox-image" href="{{asset('/images/gallery/image-1.jpg')}}" title="Image Caption Here"><span class="icon flaticon-cross-4"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column mix mix_all environment eco energy animals plants col-md-4 col-sm-6 col-xs-12">
                    <!--Default Portfolio Item-->
                    <div class="default-portfolio-item">
                        <div class="inner-box text-center">
                            <!--Image Box-->
                            <figure class="image-box"><img src="{{asset('/images/gallery/image-1.jpg')}}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="inner-content">
                                    <div class="content">
                                        <h3><a href="#">En diciembre de 2018, realizamos la intermediación de 148 kilos de tóner en desuso de una institución pública y éstos fueron dispuestos de forma segura gracias a un operador de residuos, a través de un proceso de desmantelamiento.</a></h3>
                                        <a class="arrow lightbox-image" href="{{asset('/images/gallery/image-1.jpg')}}" title="Image Caption Here"><span class="icon flaticon-cross-4"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column mix mix_all energy animals plants col-md-4 col-sm-6 col-xs-12">
                    <!--Default Portfolio Item-->
                    <div class="default-portfolio-item">
                        <div class="inner-box text-center">
                            <!--Image Box-->
                            <figure class="image-box"><img src="{{asset('/images/gallery/image-1.jpg')}}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="inner-content">
                                    <div class="content">
                                        <h3><a href="#">En diciembre de 2018, realizamos la intermediación de 148 kilos de tóner en desuso de una institución pública y éstos fueron dispuestos de forma segura gracias a un operador de residuos, a través de un proceso de desmantelamiento.</a></h3>
                                        <a class="arrow lightbox-image" href="{{asset('/images/gallery/image-1.jpg')}}" title="Image Caption Here"><span class="icon flaticon-cross-4"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--Column-->
                <div class="column mix mix_all environment eco energy animals plants col-md-4 col-sm-6 col-xs-12">
                    <!--Default Portfolio Item-->
                    <div class="default-portfolio-item">
                        <div class="inner-box text-center">
                            <!--Image Box-->
                            <figure class="image-box"><img src="{{asset('/images/gallery/image-1.jpg')}}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="inner-content">
                                    <div class="content">
                                        <h3><a href="#">En diciembre de 2018, realizamos la intermediación de 148 kilos de tóner en desuso de una institución pública y éstos fueron dispuestos de forma segura gracias a un operador de residuos, a través de un proceso de desmantelamiento.</a></h3>
                                        <a class="arrow lightbox-image" href="{{asset('/images/gallery/image-1.jpg')}}" title="Image Caption Here"><span class="icon flaticon-cross-4"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


@section('footer')
@endsection

