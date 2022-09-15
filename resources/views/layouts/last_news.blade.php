    <!--Blog News Section-->
    <section class="blog-news-section latest-news">
    	<div class="auto-container">

            <div class="sec-title text-center">
                <h2>Ultimas <span class="normal-font theme_color">Noticias</span></h2>
                <div class="text">Las ultimas noticias sobre reciclaje en el pais. </div>
            </div>
        	<div class="row clearfix">

                @foreach ($latests as $latest )
                <!--News Column-->
                <div class="column blog-news-column col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<article class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                		<figure class="image-box">
                        	<a href="{{ route('latests.show',$latest->id) }}"><img src="{{$latest->photo->path}}"  alt="Greenture"></a>
                            <div class="news-date">{{ $latest->name }}<span class="month">{{ $latest->photo->path }}</span></div>
                        </figure>
                        <div class="content-box">
                        	<h3><a href="#">{{ $latest->photo->path }}</a></h3>
                        	<div class="post-info clearfix">
                            	<div class="post-author">{{ $latest->author }}</div>
                                <div class="post-options clearfix">
                                	<a href="{{url('/news/newsn')}}" class="comments-count"><span class="icon flaticon-communication-2"></span> 6</a>
                                    <a href="{{url('/news/newsn')}}" class="fav-count"><span class="icon flaticon-favorite-1"></span> 14</a>
                                </div>
                            </div>
                            <div class="text">{{ $latest->description }}</div>
                            <a href="project-single.html" class="theme-btn read-more">Saber Mas</a>
                        </div>
                    </article>
                </div>

                @endforeach

            </div>
        </div>
    </section>
