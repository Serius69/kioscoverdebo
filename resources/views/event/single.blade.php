    @extends('layouts.master')

@section('title', 'Evento')
@section('subtitle1', '')
@section('subtitle2', ' ')

@section('body')
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
                                        <a href="#"><img src="{{ url('img/events/'.$event->photo->path)}}"  alt=""></a>
                                    </figure>
                                    <div class="content-box padd-top-40">
                                        <div class="row detail-header clearfix">
                                            <div class="col-md-8 col-sm-12">
                                                <h2>{{$event->name}}</h2>
                                            </div>
                                            {{-- <div class="col-md-4 col-sm-12 pull-right text-right"><a href="#" class="theme-btn btn-style-two">DOnate NOW</a></div> --}}
                                        </div>
                                        <div class="text">
                                            <br>
                                            <p class="bigger-text">{{$event->media}} <strong class="theme_color">Ne essent feugiat vim, et soluta reprimique instructior mel</strong>, ne nonumes deserunt. Vix in dico vivendum forensibus. Munere tamquam referrentur ad duo, ei tibique dissentias.</p>
                                            <p>{{$event->description}}</p>
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
    
                        <!--Related Posts Section-->
                        <section class="related-posts-section padd-right-20">
                            <h2>Eventos <span class="normal-font">Relacionados</span></h2>
    
                            <!--Related Posts Carousel-->
                            <div class="related-posts-carousel">
                                <!--Post-->
                                @foreach($events as $event)  
                                @if (($event->status)==1)                            
                                <div class="column default-featured-column">
                                    <article class="inner-box">
                                        <figure class="image-box">
                                            <a href="noticy-single.html"><img src="{{ url('img/events/'.$event->photo->path)}}" width="200" height="400" alt="image"></a>
                                        </figure>
                                        <div class="content-box">
                                            <h3><a href="project-single.html">{{$event->name}}</a></h3>
                                            <div class="column-info">{{$event->description}}</div>
                                            <a href="project-single.html" class="theme-btn btn-style-three">Saber Mas</a>
                                        </div>
                                    </article>
                                </div>
                                @endif
                                @endforeach
    
                                
                            </div>
    
                        </section>
    
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
                                 
    
                            </div>
    
                            <!-- Archives -->
                            <div class="widget archives-list wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="sidebar-title"><h3>Archivos</h3></div>
    
                                <ul class="list">
                                    <li><a href="#">April 2022</a></li>
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
@endsection

