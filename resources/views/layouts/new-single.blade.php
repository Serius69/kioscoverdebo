@extends('layouts.latest_relational')
    <!--Sidebar Page-->
    <div class="sidebar-page">
    	<div class="auto-container">
        	<div class="row clearfix">

                <!--Content Side-->
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">

                    <!--Projects Section-->
                    <section class="projects-section project-details no-padd-bottom no-padd-top padd-right-20">

                        <div class="column default-featured-column">
                            <article class="inner-box">
                                <figure class="image-box">
                                    <a href="#"><img src="{{$latest->photo->path}}"  alt=""></a>
                                </figure>
                                <div class="content-box padd-top-40">
                                    <div class="row detail-header clearfix">
                                        <div class="col-md-8 col-sm-12">
                                            <h2>{{$latest->name}}</h2>
                                        </div>
                                        {{-- <div class="col-md-4 col-sm-12 pull-right text-right"><a href="#" class="theme-btn btn-style-two">DOnate NOW</a></div> --}}
                                    </div>
                                    <div class="text">
                                        <br>
                                        <p class="bigger-text">{{$latest->media}} <strong class="theme_color">Ne essent feugiat vim, et soluta reprimique instructior mel</strong>, ne nonumes deserunt. Vix in dico vivendum forensibus. Munere tamquam referrentur ad duo, ei tibique dissentias.</p>
                                        <p>{{$latest->description}}</p>
                                    </div>

                                    <br>
                                    <h3 class="text-uppercase">Anexos</h3>

                                    <!-- <ul class="styled-list-two">
                                        <li>Lorem ipsum dolor sit amet, usu an quem augue admodum. </li>
                                        <li>Lorem ipsum dolor sit amet, usu an quem augue admodum. </li>
                                        <li>Lorem ipsum dolor sit amet, usu an quem augue admodum. </li>
                                        <li>Lorem ipsum dolor sit amet, usu an quem augue admodum. </li>
                                    </ul> -->

                                </div>
                            </article>
                        </div>

                    </section>

                    <hr>

                    @section('relational')
                    @endsection

                </div>
                <!--Content Side-->

                <!--Sidebar-->
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">

                        <!-- Search Form -->
                        <div class="widget search-box">

                            <form method="post" action="http://world5.commonsupport.com/html/greenture-new/index.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Buscar">
                                    <button type="submit"><span class="icon flaticon-tool-5"></span></button>
                                </div>
                            </form>

                        </div>

                        <!-- Popular Categories -->
                        <div class="widget popular-categories wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title"><h3>Categorias</h3></div>

                            <ul class="list">
                            	<li><a class="clearfix" href="projects-two-column.html">Categoria 1</a></li>
                                <li><a class="clearfix" href="projects-two-column.html">Categoria 2</a></li>
                                <li><a class="clearfix" href="projects-two-column.html">Categoria 3</a></li>
                                <li><a class="clearfix" href="projects-two-column.html">Categoria 4</a></li>
                                <li><a class="clearfix" href="projects-two-column.html">Categoria 5</a></li>
                                <li><a class="clearfix" href="projects-two-column.html">Categoria 6</a></li>
                            </ul>

                        </div>


                        <!-- Recent Posts -->
                        <div class="widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title"><h3>Ultimos proyectos</h3></div>

                            <article class="post">
                            	<figure class="post-thumb"><img src="images/resource/post-thumb-6.jpg" alt=""></figure>
                                <h4><a href="project-single.html">Proyecto N-1</a></h4>
                                <div class="post-info"><span class="icon flaticon-people-1"></span> By Rashed Kabir </div>
                            </article>

                             <article class="post">
                            	<figure class="post-thumb"><img src="images/resource/post-thumb-7.jpg" alt=""></figure>
                                <h4><a href="project-single.html">Proyecto N-2</a></h4>
                                <div class="post-info"><span class="icon flaticon-people-1"></span> By Rashed Kabir </div>
                            </article>

                            <article class="post">
                            	<figure class="post-thumb"><img src="images/resource/post-thumb-8.jpg" alt=""></figure>
                                <h4><a href="project-single.html">Proyecto N-3</a></h4>
                                <div class="post-info"><span class="icon flaticon-people-1"></span> By Rashed Kabir </div>
                            </article>

                        </div>

                        <!-- Archives -->
                        <div class="widget archives-list wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title"><h3>Archivos</h3></div>

                            <ul class="list">
                            	<li><a href="#">April 2022</a></li>
                                <li><a href="#">March  2022</a></li>
                                <li><a href="#">February 2022</a></li>
                                <li><a href="#">January 2022</a></li>
                                <li><a href="#">December 2022</a></li>
                                <li><a href="#">November 2022</a></li>
                            </ul>
                        </div>
                        <!-- Popular Tags -->
                        <!-- <div class="widget popular-tags">
                            <div class="sidebar-title"><h3>KeyWords</h3></div>

                            <a href="#">Child</a>
                            <a href="#">Water</a>
                            <a href="#">Donate</a>
                            <a href="#">Money</a>
                            <a href="#">Volunteer</a>
                        </div> -->

                    </aside>


                </div>
                <!--Sidebar-->


            </div>
        </div>
    </div>
