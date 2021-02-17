<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zaži Slovensko</title>

    <meta charset="utf-8">
    <!-- Styles -->
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
            crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    <title>{{ config('app.name', 'FinalProject') }}</title>--}}
<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    {{--        toto mam zakomentovane, aby mi fungoval AJAX medzi navbarom a footerom--}}
    {{--        <script src="{{ asset('js/app.js') }}" defer></script>--}}

</head>
<body>

<!--Navigacia/horna lista-->
<nav class="navbar navbar-expand-md bg-warning navbar-light">
    <!-- Brand -->
    <a class="navbar-brand" href="#"><img src={{asset('images/logo.png')}} alt="logo"></a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href={{route('welcome')}}>Domov</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('factsAboutSlovakia')}}">Fakty o Slovensku</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('touristMapSlovakia')}}">Turistická mapa SR</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Kam na VÝLET
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="">Hrady a zámky</a>
                    <a class="dropdown-item" href="#">Historické pamiatky</a>
                    <a class="dropdown-item" href="{{route('caves.index')}}">Jaskyne</a>
                    <a class="dropdown-item" href="{{route('sightseeings.index')}}">Rozhľadne</a>
                    <a class="dropdown-item" href="#">Kúpele</a>
                    <a class="dropdown-item" href="#">Skanzeny</a>
                    <a class="dropdown-item" href="#">Náboženské pamiatky</a>
                    <a class="dropdown-item" href="">Národné parky</a>
                    <a class="dropdown-item" href="#">Náboženské pamiatky</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('article')}}">Príspevky</a>
            </li>
            @can('viewAny', \App\Models\User::class)
                <li class="nav-item">
                    @auth
                        <a class="nav-link" href="{{ route('user.index') }}">{{__('Používatelia')}}</a>
                    @endauth
                </li>
            @endcan



        <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item ml-5">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Prihlásenie') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item ml-5">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrácia') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown ml-5">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Odhlásiť') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>


<main>
    <div>
        @yield('content')
    </div>
</main>


<!--- Footer stranky -->
<footer class="mt-5">
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-6">
                <hr class="light">
                <p><b>Tel.č.</b> 0910243658</p>
                <p><b>Email:</b> zazislovensko@gmail.sk</p>
                <p><b>Web stránka:</b> www.zazislovensko.sk</p>
            </div>
            <div class="col-md-6">
                <hr class="light">
                <h5>Sídlo</h5>
                <hr class="light">
                <p>Fatranská 1213</p>
                <p>02351 Žilina</p>
            </div>
            <div class="col-12">
                <hr class="light">
                <h5>&copy; zazislovensko.sk</h5>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
