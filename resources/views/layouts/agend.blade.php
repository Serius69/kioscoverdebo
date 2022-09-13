    <!--Events Page-->
    <div class="sidebar-page">
    	<div class="auto-container">

        	<div class="row clearfix">

                <!--Content Side-->
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <!--Events Section / List View-->
                    <section class="events-section list-view no-padd-bottom no-padd-top padd-right-20">
                        @foreach ($events as $event)
                        <!--Featured Column-->
                        <div class="column default-featured-column style-two">
                            <article class="inner-box">
                                <div class="row clearfix">
                                	<div class="col-md-5 col-sm-5 col-xs-12">
                                        <figure class="image-box">
                                            <a href="#"><img src="{{asset('images/resource/featured-image-19.jpg')}}" alt=""></a>
                                            <div class="post-tag">Featured</div>
                                        </figure>
                                    </div>
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <div class="content-box">
                                            <h3><a href="#">{{ $event->name }}</a></h3>
                                            <div class="column-info">{{ $event->name }}</div>
                                            <div class="text">{{ $event->name }}</div>
                                            <a href="#" class="theme-btn btn-style-three">Saber Mas</a>
                                        </div>
                                    </div>

                                </div>
                            </article>
                        </div>

                        @endforeach

                        <!-- Styled Pagination -->
                        <div class="styled-pagination padd-top-20 margin-bott-40">
                            <ul>
                                {{-- <li><a class="prev" href="#"><span class="fa fa-angle-left"></span>&ensp;Prev</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#" class="active">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a class="next" href="#">Next&ensp;<span class="fa fa-angle-right"></span></a></li> --}}
                                {!! $latests->links() !!}
                            </ul>
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
                                    <input type="search" name="search-field" value="" placeholder="Enter keyword">
                                    <button type="submit"><span class="icon flaticon-tool-5"></span></button>
                                </div>
                            </form>
                        </div>
                        <!-- Popular Categories -->
                        <div class="widget popular-categories wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title"><h3>Categorias</h3></div>

                            <ul class="list">
                            	<li><a class="clearfix" href="#">Categoria 1</a></li>
                                <li><a class="clearfix" href="#">Categoria 2</a></li>
                                <li><a class="clearfix" href="#">Categoria 3</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <!--Sidebar-->
            </div>
        </div>
    </div>
    <!-- Events Page -->
