<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon"/>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" async="" src="{{asset('js/recaptcha_en.js')}}"></script>
    <script type="text/javascript" async="" src="{{asset('js/sdk.js')}}"></script>
    <script async="" src="{{asset('js/snowday262.js')}}"></script>
    <script type="text/javascript" async="" src="{{asset('js/stl.js')}}"></script>
    <script type="text/javascript" async="" src="{{asset('js/ga.js')}}"></script>
    <script type="text/javascript" async="" src="{{asset('js/osd.js')}}"></script>
    <script type="text/javascript" async="" src="{{asset('js/nxe1ajf.js')}}"></script>
    <script type="text/javascript" async="" src="{{asset('js/gdprscript.js')}}"></script>

    <script src="{{asset('js/templateArtifacts.js')}}"></script>
    <script>
        var STATIC_BASE = '//cdn1.editmysite.com/';
        var ASSETS_BASE = '//cdn2.editmysite.com/';
        var STYLE_PREFIX = 'wsite';
    </script>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main_style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sites.css') }}" rel="stylesheet">
    <link href="{{ asset('css/social-icons.css') }}" rel="stylesheet">

    <script type="text/javascript"> _W = _W || {};
        _W.securePrefix = 'freeroom.us'; </script>
    <script>_W = _W || {};
        _W.customerLocale = "en_US";
        _W.storeName = null;
        _W.isCheckoutReskin = false;
        _W.storeCountry = "US";
        _W.storeCurrency = "USD";
        _W.storeEuPrivacyPolicyUrl = "";
        com_currentSite = "127973575619239655";
        com_userID = "133428619";</script>
    <script type="text/javascript">_W.configDomain = "www.weebly.com";</script>
    <script>_W.relinquish && _W.relinquish()</script>

    <script> _W.themePlugins = [];</script>
    <script type="text/javascript"> _W.recaptchaUrl = "https://www.google.com/recaptcha/api.js"; </script>

    <script type="text/javascript">
        function subScribeSuccess() {
            $('#subscribe-form').hide();
            $('#subscribe-msg').show();
        }

        function subscribeSubmit(e) {
            var form = $(this);
            var url = form.attr('action');

            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function(data)
                {
                    console.log(data);
                    subScribeSuccess();
                },
                error: function(data) {
                    console.log(data);
                    subScribeSuccess();
                }
            });
        }

    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{--{{ config('app.name', 'Laravel') }}--}}
                    <img src="{{asset('/favicon.ico')}}" width="100px" height="100px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="https://freeroom.us/" class="nav-link">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://freeroom.us/" class="nav-link">
                                Start A Room
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/terms')}}" class="nav-link">
                                Terms
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/privacy')}}" class="nav-link">
                                Privacy
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/blog')}}" class="nav-link">
                                Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/about')}}" class="nav-link">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="mailto:info@freeroom.us" class="nav-link">
                                Contact
                            </a>
                        </li>

                        <!-- Authentication Links -->
                        {{--@guest--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                            {{--</li>--}}
                            {{--@if (Route::has('register'))--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                                {{--</li>--}}
                            {{--@endif--}}
                        {{--@else--}}
                            {{--<li class="nav-item dropdown">--}}
                                {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                    {{--{{ Auth::user()->name }}--}}
                                {{--</a>--}}

                                {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--{{ __('Logout') }}--}}
                                    {{--</a>--}}

                                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
                                        {{--@csrf--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--@endguest--}}
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
</body>
</html>
