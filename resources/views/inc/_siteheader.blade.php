<header class="site-header">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-8">
                    <h1 class="logo"> <a href="{{ url('/') }}"><img src="{{ asset('template/images/logo.png') }}" alt="Logo"></a> </h1>
                </div>
                <div class="col-md-8 col-sm-6 col-xs-4">
                    <div class="social-icons pull-right hidden-sm hidden-xs">
                        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="http://www.pinterest.com/" target="_blank"><i class="fab fa-pinterest"></i></a>
                        <a href="https://plus.google.com/" target="_blank"><i class="fab fa-google-plus"></i></a>
                        <a href="http://www.pinterest.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="{{ url('/') }}"><i class="fa fa-rss"></i></a>
                    </div>
                    <a href="{{ url('/') }}" class="visible-sm visible-xs menu-toggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-menu-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navigation">
                        <ul class="sf-menu">
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li><a href="{{ url('/about') }}">About Us</a>
                                <ul class="dropdown">
                                    <li><a href="{{ url('/about') }}">Overview</a></li>
                                    <li><a href="{{ url('/contact') }}">Where we meet</a></li>
                                    <li><a href="{{ url('/staff') }}">Our Staff</a></li>

                                </ul>
                            </li>
                            <li >
                                <a href="{{ url('/ministries') }}">Ministries</a>
                            </li>
                            <li>
                                <a href="{{ url('/events') }}">Events</a>
                            </li>
                            <li>
                                <a href="{{ url('/sermons') }}">Sermons</a>
                            </li>
                            <li>
                                <a href="{{ url('/gallery') }}">Gallery</a>
                            </li>
                            <li>
                                <a href="blog-masonry.html">Blog</a>
                            </li>
                            <li>
                                <a href="causes.html">Causes</a>
                            </li>
                            <li>
                                <a href="{{ url('/contact') }}">Contact</a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>