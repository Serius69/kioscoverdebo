<!--Related Posts Section-->
<section class="related-posts-section padd-right-20">
    <h2>Noticias <span class="normal-font">Relacionados</span></h2>

    <!--Related Posts Carousel-->
    <div class="related-posts-carousel">
        <!--Post-->
        @foreach ($latests as $latest)
        <div class="column default-featured-column">
            <article class="inner-box">
                <figure class="image-box">
                    <a href="{{ route('noticia.show',$latest->id) }}"><img src="{{ url('img/latest/'.$latest->photo->path)}}" alt=""></a>
                </figure>
                <div class="content-box">
                    <h3><a href="{{ route('noticia.show',$latest->id) }}">{{$latest->name}}</a></h3>
                    <div class="column-info">{{$latest->description}}</div>
                    <a href="{{ route('noticia.show',$latest->id) }}" class="theme-btn btn-style-three">Saber Mas</a>
                </div>
            </article>
        </div>
        @endforeach
    </div>

</section>
