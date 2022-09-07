

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('/images/background/page-title-bg.jpg') }});">
    <div class="auto-container">
        <div class="sec-title">
            <h1>@yield('subtitle1')<span class="normal-font">@yield('subtitle2')</span></h1>
            <div class="bread-crumb"><a href="{{ url('/') }}">inicio</a> / <a href="#" class="current">@yield('subtitle1') @yield('subtitle2')</a></div>
        </div>
    </div>
</section>


@yield('content')
