    <!--News Section-->
    <section class="events-section latest-events">
    	<div class="auto-container">

            <!--Filters Section-->
            <div class="filters-section">
            	<div class="filter-form">
                	<form method="post" action="http://world5.commonsupport.com/html/greenture-new/index.html">
                    	<div class="row clearfix">
                        	<div class="form-group col-md-5 col-sm-5 col-xs-12">
                            	<div class="field-label">Noticias desde: </div>
                                <input type="text" name="date" class="datepicker" value="" placeholder="Fecha">
                            </div>
                            <div class="form-group col-md-5 col-sm-5 col-xs-12">
                            	<div class="field-label">Buscar por</div>
                                <input type="text" name="keyword" value="" placeholder="Palabra clave">
                            </div>
                            <div class="form-group col-md-2 col-sm-2 col-xs-12">
                            	<div class="field-label">&nbsp;</div>
                                <button type="button" class="theme-btn btn-style-two">Buscar Noticias</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        	<div class="row clearfix">

                <!--Featured Column-->
                <div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<article class="inner-box">
                		<figure class="image-box">
                        	<a href="{{url('/news/newsn')}}"><img src="{{asset('/images/resource/featured-image-24.jpg')}}" alt=""></a>
                            <div class="post-tag">Noticia N</div>
                        </figure>
                        <div class="content-box">
                        	<h3><a href="">Titulo</a></h3>
                            <div class="column-info">Fecha</div>
                            <div class="text">Descripcion. </div>
                            <a href="{{url('/news/newsn')}}" class="theme-btn btn-style-three">Saber Mas</a>
                        </div>
                    </article>
                </div>

                <!--Featured Column-->
                <div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<article class="inner-box">
                		<figure class="image-box">
                        	<a href="{{url('/news/newsn')}}"><img src="{{asset('/images/resource/featured-image-24.jpg')}}" alt=""></a>
                            <div class="post-tag">Noticia N</div>
                        </figure>
                        <div class="content-box">
                        	<h3><a href="{{url('/news/newsn')}}">Titulo</a></h3>
                            <div class="column-info">Fecha</div>
                            <div class="text">Descripcion. </div>
                            <a href="{{url('/news/newsn')}}" class="theme-btn btn-style-three">Saber Mas</a>
                        </div>
                    </article>
                </div>
                <!--Featured Column-->
                <div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<article class="inner-box">
                		<figure class="image-box">
                        	<a href="{{url('/news/newsn')}}"><img src="{{asset('/images/resource/featured-image-24.jpg')}}" alt=""></a>
                            <div class="post-tag">Noticia N</div>
                        </figure>
                        <div class="content-box">
                        	<h3><a href="{{url('/news/newsn')}}">Titulo</a></h3>
                            <div class="column-info">Fecha</div>
                            <div class="text">Descripcion. </div>
                            <a href="{{url('/news/newsn')}}" class="theme-btn btn-style-three">Saber Mas</a>
                        </div>
                    </article>
                </div>



            </div>

            <!-- Styled Pagination -->
            <div class="styled-pagination text-center padd-top-20 margin-bott-40">
                <ul>
                    <li><a class="prev" href="{{url('/news/news')}}"><span class="fa fa-angle-left"></span>&ensp;Anterior</a></li>
                    <li><a href="{{url('/news/news')}}">1</a></li>
                    <li><a href="{{url('/news/news')}}" class="active">2</a></li>
                    <li><a href="{{url('/news/news')}}">3</a></li>
                    <li><a class="next" href="{{url('/news/news')}}">Siguiente&ensp;<span class="fa fa-angle-right"></span></a></li>
                </ul>
            </div>

        </div>
    </section>
