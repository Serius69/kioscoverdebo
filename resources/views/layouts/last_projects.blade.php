    <!--Recent Projects Section-->
    <section class="recent-projects">
    	<div class="auto-container">

            <div class="sec-title clearfix">
            	<div class="pull-left">
                    <h2>PROYECTOS<span class="normal-font theme_color">RECIENTES</span></h2>
                </div>
                <div class="pull-right padd-top-30">
                	<a href="{{ url('project/listproject')}}" class="theme-btn btn-style-three">Ver todos los PROYECTOS</a>
                </div>
            </div>
        	<div class="row clearfix">

                <!--Default Featured Column-->
                @foreach ($projects as $project)
                @if (($project->status)==1)
                <div class="column default-featured-column col-md-3 col-sm-6 col-xs-12">
                    <article class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="image-box">
                            <a href="{{ route('projects.show',$project->id) }}"><img src="{{$project->photo->path}}" alt=""></a>
                        </figure>
                        <div class="content-box">
                            <h3><a href="{{ route('projects.show',$project->id) }}">{{ $project->name }}</a></h3>
                            <div class="column-info">{{ $project->information }}</div>
                            <div class="text">{{ $project->description }}</div>
                            <a href="{{ route('projects.show',$project->id) }}" class="theme-btn btn-style-three">Saber Mas</a>
                        </div>
                    </article>
                </div>
                @endif
                @endforeach

            </div>
        </div>
    </section>
