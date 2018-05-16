<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js">
<head>
@include('inc._head')
</head>
<body>

<main >
    @yield('content')
</main>
    {{--<div id="app">--}}
        {{--<nav class="navbar navbar-expand-md navbar-light navbar-laravel">--}}
            {{--<div class="container">--}}
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                    {{--{{ config('app.name', 'Laravel') }}--}}
                {{--</a>--}}
                {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
                    {{--<span class="navbar-toggler-icon"></span>--}}
                {{--</button>--}}

                {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
                    {{--<!-- Left Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav mr-auto">--}}

                    {{--</ul>--}}

                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav ml-auto">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@guest--}}
                            {{--<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>--}}
                            {{--<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>--}}
                        {{--@else--}}
                            {{--<li class="nav-item dropdown">--}}
                                {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                                    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--{{ __('Logout') }}--}}
                                    {{--</a>--}}

                                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                        {{--@csrf--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--@endguest--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}
    {{--</div>--}}
<!-- SCRIPTS
  ================================================== -->
<script src="{{ asset('template/js/modernizr.js') }}"></script><!-- Modernizr -->

<script src="{{ asset('template/js/jquery-2.0.0.min.js') }}"></script> <!-- Jquery Library Call -->
<script src="{{ asset('template/plugins/prettyphoto/js/prettyphoto.js') }}"></script> <!-- PrettyPhoto Plugin -->
<script src="{{ asset('template/js/helper-plugins.js') }}"></script> <!-- Plugins -->
<script src="{{ asset('template/js/bootstrap.js') }}"></script> <!-- UI -->
<script src="{{ asset('template/js/waypoints.js') }}"></script> <!-- Waypoints -->
<script src="{{ asset('template/plugins/mediaelement/mediaelement-and-player.min.js') }}"></script> <!-- MediaElements -->
<script src="{{ asset('template/js/init.js') }}"></script> <!-- All Scripts -->
<script src="{{ asset('template/plugins/flexslider/js/jquery.flexslider.js') }}"></script> <!-- FlexSlider -->
<script src="{{ asset('template/plugins/countdown/js/jquery.countdown.min.js') }}"></script> <!-- Jquery Timer -->
<script src="{{ asset('template/style-switcher/js/jquery_cookie.js') }}"></script>
<script src="{{ asset('template/style-switcher/js/script.js') }}"></script>
</body>
</html>
