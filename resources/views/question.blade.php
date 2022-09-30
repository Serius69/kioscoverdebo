@extends('layouts.components.titlebar')
@extends('layouts.master')

@section('title', 'Preguntas')
@section('subtitle1', 'Preguntas')
@section('subtitle2', ' Frecuentes')

@section('body')
    <!--Question Section-->
    <section class="faqs-section">
    	<div class="auto-container">
        	<div class="sec-title text-center small-container padd-bott-30">
            	<h3 class="bigger-text">Algunas de las preguntas que con mas frecuencia nos realizan</h3>
                <div class="text">En el Kiosco Verde, tú eres primero! Por eso sabemos que tienes o tendrás dudas sobre quiénes somos y cómo funciona realmente todo nuestra plataforma por eso te habilitamos el sector de “Preguntas Frecuentes”

                    Se ofrece aquí respuesta a una selección de las preguntas más frecuentes planteadas por los usuarios del servicio de consultas lingüísticas.

                    Puede seleccionar las respuestas en función del tipo de consulta:</div>
            </div>

        	<div class="row clearfix">

                <div class="col-md-6 col-sm-12 col-xs-12">

                    <!--Accordion Box-->
                    <div class="accordion-box">
                        <!-- Accordion -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>¿Cómo anunciar?</h4></div>
                            <div class="accord-content">
                                <p>Esto puede hacerse mediante el registro de datos de la empresa ofertante o demandante en el formulario encontrado en esta página. Alternativamente, si la empresa lo desea, puede solicitar al Kiosco Verde un modelo de formulario para ser enviado por correo o fax.</p>
                            </div>
                        </div>
                        <!-- Accordion -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>¿Cómo solicitar información de un determinado anuncio?</h4></div>
                            <div class="accord-content">
                                <p>Si se encuentra interesado en cierto anuncio de oferta o demanda, debe llenarse la ficha electrónica de contacto ubicada en en kioscoverde.bo</p>
                            </div>
                        </div>
                        <!-- Accordion -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>¿Qué pasa si no hay respuesta al anuncio?</h4></div>
                            <div class="accord-content">
                                <p>El Kiosco Verde se encarga en estos casos de promover las transacciones, desplegando una labor de mercadeo del residuo o subproducto en situaciones más allá de su aplicación tradicional o natural. Así mismo, explorando el aprovechamiento del material en otros ámbitos productivos. </p>
                            </div>
                        </div>


                    </div>

                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">

                    <!--Accordion Box-->
                    <div class="accordion-box">
                        <!-- Accordion -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>¿Qué debe hacerse cuando se realiza la transacción o el aprovechamiento?</h4></div>
                            <div class="accord-content">
                                <p>Debe informarse de esto inmediatamente l Kiosco Verde con el fin de registrar los indicadores de éxito y gestión, y además para proceder a suspender el anuncio respectivo. </p>
                            </div>
                        </div>
                        <!-- Accordion -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>¿Qué otros servicios presta el Kiosco Verde?</h4></div>
                            <div class="accord-content">
                                <p>Se programan jornadas técnicas de corta duración dirigidas al estudio de casos de comercialización y valorización de residuos y subproductos industrializables. También, se promueven proyectos de investigación y desarrollo tecnológico para la recuperación, el reciclaje y la reintroducción de estos materiales. Se brinda el servicio de validación de operadores autorizados, realizando la verificación de trazabilidad que tienen las empresas que gestionan residuos. Se brinda asistencia técnica para la conformación de grupos de trabajo en torno a residuos y subproductos industrializables específicos. Mediante seminarios, ferias y ruedas de negocios se promueven tecnologías para la recuperación, el reciclaje y la reintroducción de residuos y subproductos. Se brindan a solicitud, presentaciones del Kiosco Verde a interesados agrupados por áreas y sectores definidos.</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
    	</div>
    </section>
@endsection

