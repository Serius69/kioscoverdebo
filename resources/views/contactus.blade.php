@extends('layouts.master')
@section('title', 'Contactanos')
@section('subtitle1', 'Contactanos')
{{-- @section('subtitle2', 'Contac') --}}

@section('body')
    <!--Default Section / Other Info-->
    <section class="default-section other-info">
    	<div class="auto-container">

        	<div class="row clearfix">

                <!--Info Column-->
                <div class="column info-column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                	<article class="inner-box">

                		<h3 class="margin-bott-20">Nuestra Dirección.</h3>
                        <div class="text margin-bott-40">Puede encontrarnos mediante:  </div>
                        <ul class="info-box">
                            <li><span class="icon flaticon-location"></span><strong>Direccion</strong> Calacoto, calle 9 N°7898, Zona Sur
                                Edif. Cámara Nacional de Industrias Piso 8</li>
                            <li><span class="icon flaticon-technology-5"></span><strong>Telefono</strong> (591) 63236023</li>
                            <li><span class="icon flaticon-interface-1"></span><strong>Correo electronico</strong> kioscoverde@cnibolivia.com</li>
                        </ul>
                    </article>
                </div>
                <!--Map Column-->
                <div class="column map-column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                	<h3 class="margin-bott-20">Nuestra Locacion en el mapa</h3>

                	<article class="inner-box">
                		<!--Map Container-->
                        <div class="map-container">
                            <!--Map Canvas-->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d956.1786714898839!2d-68.0911735663767!3d-16.54049556489259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f21266964ec6f%3A0x347c49fb9779ef59!2sC%C3%A1mara%20Nacional%20de%20Industrias!5e0!3m2!1sen!2sbo!4v1661288751717!5m2!1sen!2sbo" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </article>  
                </div>

            </div>
        </div>
    </section>
    
@endsection

