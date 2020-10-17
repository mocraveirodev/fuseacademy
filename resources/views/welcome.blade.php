<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Fuse IoT é uma StartUp especializada em soluções IoT, que fornece transformação digital para empresas e pessoas que querem melhorar seus indicativos, controlar seus ativos e obter melhores resultados com tecnologias baseadas em IoT e Inteligência Artificial.">
    <meta name="keywords" content="IoT,Internet of Things,Internet das Coisas,Inteligência artificial,Big Data,Analytics,Hardware,Conectividade,Segurança">
    <meta name="author" content="Monica Craveiro">
    <title>fuse | IoT Academy</title>
    <!-- Reset CSS -->
    <!-- <link href="{{ asset('css/reset.css') }}" rel="stylesheet"> -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/m-style.css') }}" rel="stylesheet">

    <!-- Styles -->
    <!-- <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style> -->
</head>
<body>
    <header id="header-academy">
        <nav data-scroll-header class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container">
                <a data-scroll class="navbar-brand" href="#header-academy"><img class="header-logo" src="{{ asset('img/Logo Fuse IoT Academy.png') }}" alt="Logo Fuse IoT Academy"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarAcademy" aria-controls="navbarAcademy" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarAcademy">
                <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link btn" href="/carrinho" role="button">
                                <img src="{{ asset('img/01 carrinho de compra.png') }}" class="carrinho" alt="Carrinho de Compras">
                            </a>
                        </li>
                        <?php if(!isset($_SESSION['usuario'])): ?>
                            <li class="nav-item">
                                <a data-scroll class="nav-link btn btn-academy" href="/login">Entrar</a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a data-scroll class="nav-link btn btn-academy" href="/perfil">Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a data-scroll class="nav-link btn btn-academy" href="/logout">Sair</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Laravel
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Docs</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://vapor.laravel.com">Vapor</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
    </div> -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- Smooth Scroll -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@16.1.3/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="{{ asset('js/smoothscroll.js') }}"></script>
</body>
</html>
