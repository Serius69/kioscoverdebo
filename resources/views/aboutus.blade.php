@extends('layouts.master')

@section('title', 'Quienes Somos')
@section('subtitle1', 'Quienes')
@section('subtitle2', ' Somos')

@section('titlebar')


@section('body')

 <!--Default Section-->
 <section class="default-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Column-->
            <div class="column image-column col-md-6 col-sm-12 col-xs-12">
                <article class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <figure class="image-box video-box">
                        <img src="https://sp-ao.shortpixel.ai/client/to_auto,q_glossy,ret_img,w_800,h_420/https://www.elaltoesnoticia.com/wp-content/uploads/2016/11/reciclaje-800x420.jpg" alt="">
                        <a href="{{ asset('/video/Presentación1-Kiosco-Verde.mp4')}}" class="lightbox-image video-link"><div class="icon-outer"><span class="img-circle fa fa-play"></span></div></a>
                    </figure>
                </article>
            </div>

            <!--Column-->
            <div class="column default-text-column with-margin col-md-6 col-sm-12 col-xs-12">
                <article class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <h2> <span class="theme_color normal-font">¿Qué es el Kiosco Verde?</span></h2>
                    <div class="text">
                        <p>
                            EL Kiosco Verde es una iniciativa de la Cámara Nacional de Industrias, anteriormente llamada Bolsa de Residuos Industriales (BRI), que tiene por objetivo la reducción del impacto ambiental
                            que ocasiona los residuos provenientes de la producción industrial manufacturera. Esto a través del apoyo de la intermediación de la gestión eficiente, responsable e integral de los mismos.

                        </p></div>
                        <div class="row clearfix">

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <!--Accordion Box-->
                                <div class="accordion-box">
                                    <!-- Accordion -->
                                    <div class="accordion accordion-block">
                                        <div class="accord-btn"><h2>nuestra <span class="normal-font theme_color">Mision</span></h2></div>
                                        <div class="accord-content">
                                            <p> Ser la mejor alternativa para facilitar la correcta disposición de residuos promoviendo su recuperación y aprovechamiento, a través del intercambio, comercialización y
                                                gestión ambientalmente responsable.
                                                Incentivar el sector de gestión de residuos de forma eficiente e inclusiva con el propósito de promover la valorización del tratamiento de todo tipo de residuos .</p>
                                        </div>
                                    </div>
                                    <!-- Accordion -->
                                    <div class="accordion accordion-block">
                                        <div class="accord-btn"><h2>nuestra <span class="normal-font theme_color">vision</span></h2></div>
                                        <div class="accord-content">
                                            <p>Ofrecemos estudios de trazabilidad de residuos, certificando la buena gestión de los mismos por procesos validados y certificados de tratamiento. Para ello se realizan
                                                inspecciones y se hace el seguimiento correspondiente.
                                            El certificado es otorgado con el aval de la Cámara Nacional de Industrias.</p>
                                             <h4>¿Desea certificar la responsabilidad de gestionar y disponer correctamente un lote de residuos? </h4>
                                                <p>Entre a la página y utilice este servicio.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!--Two Column Fluid -->
<section class="two-column-fluid">

    <div class="outer clearfix">

        <article class="column left-column" style="background-image:url({{ asset('/images/background/fluid-image-3.jpg') }});">

            <div class="content-box pull-right">
                <h2>Que <span class="normal-font theme_color">hacemos</span></h2>
                <div class="title-text">Que ofrecemos como organizacion</div>
                <div class="text">EL Kiosco Verde es una iniciativa de la Cámara Nacional de Industrias, anteriormente llamada Bolsa de Residuos Industriales (BRI),
                    que tiene por objetivo la reducción del impacto ambiental que ocasiona los residuos provenientes de la producción industrial manufacturera. Esto a
                    través del apoyo de la intermediación de la gestión eficiente, responsable e integral de los mismos.</div>
                <br>

                <div class="clearfix">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-shapes-1"></span></div>
                        <div class="lower-box">
                            <h4>+<span class="count-text" data-stop="7845910" data-speed="1500">43</span></h4>
                            <span class="title">Empresas</span>
                        </div>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-tool-4"></span></div>
                        <div class="lower-box">
                            <h4>+<span class="count-text" data-stop="13360" data-speed="1500">140</span></h4>
                            <span class="title">Proyectos</span>
                        </div>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-favorite"></span></div>
                        <div class="lower-box">
                            <h4>+<span class="count-text" data-stop="78459" data-speed="1500">100</span></h4>
                            <span class="title">ambientes</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </article>

        <article class="column left-column" style="background-image:url({{ asset('/images/background/fluid-image-3.jpg') }});">
            <!--Accordion Box-->
            <div class="accordion-box">
            <!-- Accordion -->
            <div class="accordion accordion-block">
                <div class="accord-btn"><h4>Gestion de Residuos</h4></div>
                <div class="accord-content">
                    <p> El Kiosco Verde se encarga de revisar en su base de datos, opciones de operadores que puedan recibir sus residuos y tratarlos.</p>
                        <h4>¿Su empresa o institución genera residuos?</h4>
                        Inscriba a su industria o institución a nuestra base de datos y acceda a varias opciones para realizar transacciones con un Operador o Gestor de residuos.
                        Algunos residuos serán reutilizados, otros simplemente serán estabilizados, pero todos deben ser gestionados hasta su disposición final.
                        <h4>¿Es usted un operador de residuos?</h4>
                    <p>¿Tiene una empresa que recicla, trata, o gestiona residuos? Amplíe sus operaciones. Regístre a su empresa en nuestra plataforma</p>
                </div>
            </div>
            <!-- Accordion -->
            <div class="accordion accordion-block">
                <div class="accord-btn"><h4>Asesoramiento</h4></div>
                <div class="accord-content">
                    <p>Ofrecemos estudios de trazabilidad de residuos, certificando la buena gestión de los mismos por procesos validados y certificados de tratamiento.
                        Para ello se realizan inspecciones y se hace el seguimiento correspondiente.
                        El certificado es otorgado con el aval de la Cámara Nacional de Industrias.</p>
                    <h4>¿Desea certificar la responsabilidad de gestionar y disponer correctamente un lote de residuos? </h4>
                    <p>Entre a la página y utilice este servicio.</p>
                </div>
            </div>
            <!-- Accordion -->
            <div class="accordion accordion-block">
                <div class="accord-btn"><h4>¿Qué otros servicios presta el Kiosco Verde?</h4></div>
                <div class="accord-content">
                    <p>Se programan jornadas técnicas de corta duración dirigidas al estudio de casos de comercialización y valorización de residuos y subproductos industrializables.
                        También, se promueven proyectos de investigación y desarrollo tecnológico para la recuperación, el reciclaje y la reintroducción de estos materiales. Se brinda
                        el servicio de validación de operadores autorizados, realizando la verificación de trazabilidad que tienen las empresas que gestionan residuos. Se brinda asistencia
                        técnica para la conformación de grupos de trabajo en torno a residuos y subproductos industrializables específicos. Mediante seminarios, ferias y ruedas de negocios
                        se promueven tecnologías para la recuperación, el reciclaje y la reintroducción de residuos y subproductos. Se brindan a solicitud, presentaciones del Kiosco Verde a
                        interesados agrupados por áreas y sectores definidos.</p>
                </div>
            </div>
            <!-- Accordion -->
            <div class="accordion accordion-block">
                <div class="accord-btn"><h4>Operadores afiliados</h4></div>
                <div class="accord-content">
                    <p>Operadores afiliados a KioscoVerde</p>
                </div>
            </div>
        </div>        
        </article>
    </div>   
</section>
@endsection