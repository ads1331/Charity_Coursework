<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Сбор средств</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Mansalva|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <!-- ОСНОВНОЙ CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <div class="bg-primary py-3 top-bar shadow d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-md-left pl-0">
                    <a href="#" class=" pr-3 pl-0">Главная</a>
                    <a href="#" class="p-3">События</a>
                    <a href="#" class="p-3">Стать волонтером</a>
                </div>
                <div class="col-md-6 text-md-right">
                    <a href="#" class="p-3"><span class="icon-twitter"></span></a>
                    <a href="#" class="p-3"><span class="icon-facebook"></span></a>
                </div>
            </div>
        </div>
    </div>

    <header class="site-navbar site-navbar-target bg-secondary shadow" role="banner">
        <div class="container">
            <div class="row align-items-center position-relative">

                <div class="site-logo">
                    <a href="{{route('index')}}" class="text-white">SWO</a>
                </div>

                <nav class="site-navigation text-left ml-auto" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                        <li><a href="{{route('index')}}" class="nav-link">Главная</a></li>
                        <li><a href="{{route('about')}}" class="nav-link">О нас</a></li>
                        <li><a href="{{route('causes')}}" class="nav-link">Наши цели</a></li>
                        <li><a href="{{route('blogs.index')}}" class="nav-link">Блог</a></li>
                        <li><a href="{{route('contact')}}" class="nav-link">Контакты</a></li>
                        <li><a href="{{route('donate.create')}}" class="nav-link">Донат</a></li>
                        
                    </ul>
                </nav>

                <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3 text-white"></span></a></div>

            </div>
        </div>
    </header>
</div>
</body>
</html>
