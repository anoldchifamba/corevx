<div class="nav-bar ">
    <div class="container">
        <div class="row">
            <div class="col-9 col-lg-3">
                <div class="site-branding">
                    <h1 class="site-title"><a href="{{ url('index') }}" rel="home">
{{--                            Ezu<span>ca</span>--}}
                            <img src="{{asset('log/logo.png')}}" alt="Atcademy" class="white-logo animated fadeIn">

                        </a>
                    </h1>
                </div><!-- .site-branding -->
            </div><!-- .col -->

            <div class="col-3 col-lg-9 flex justify-content-end align-content-center">
                <nav class="site-navigation flex justify-content-end align-items-center">
                    <ul class="flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                       <li class="current-menu-item"><a href="{{ url('index') }}"> </a></li>

                        <li><a href="{{ url('index') }}">Courses</a></li>
                        <li><a href="{{ url('about') }}">About</a></li>

{{--                        <li><a href="#">blog</a></li>--}}
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                    </ul>

                    <div class="hamburger-menu d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div><!-- .hamburger-menu -->

                    <div class="header-bar-cart">
                        <a href="#" class="flex justify-content-center align-items-center"><span aria-hidden="true" class="icon_bag_alt"></span></a>
                    </div><!-- .header-bar-search -->
                </nav><!-- .site-navigation -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .nav-bar -->
