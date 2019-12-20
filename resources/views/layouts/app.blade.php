<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{--{{ config('app.name', 'Help child') }}--}}Help child </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <link  href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link  href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <script  src="{{ asset('js/jquery.js') }}"></script>
    <script  src="{{ asset('js/main.js') }}"></script>
</head>
<body>

<section class="hero">
    <header>
        <div class="wrapper">
            <a href="#"><img src="{{--{{ asset('logo.png') }}--}}" class="logo" alt="" titl=""/></a>
            <a href="#" class="hamburger"></a>
            <nav>
                @if(Auth::id() == 2)
                    <ul>
                        <li><a href="/new_posts">Новые объявления</a></li>
                    </ul>
                    @if(Auth::id())
                        <a href="/logout" class="login_btn">Выход</a>
                    @else
                        <a href="/login" class="login_btn">Вход</a>
                    @endif
                @else
                <ul>
                    <li><a href="/">Главная</a></li>
                    <li><a href="/list">Дети</a></li>
                    <li><a href="/help">Как помочь</a></li>
                    <li><a href="/contact">Контакты</a></li>
                    <li><a href="/add">Обратиться за помощью</a></li>
                </ul>
                @if(Auth::id())
                    <a href="/logout" class="login_btn">Выход</a>
                @else
                    <a href="/login" class="login_btn">Вход</a>
                @endif
                    @endif
            </nav>
        </div>
    </header><!--  end header section  -->

    <section class="caption">
        <h2 class="caption">Help child</h2>

    </section>
</section><!--  end hero section  -->


{{--<section class="search">
    <div class="wrapper">
        <form action="#" method="post">
            <input type="text" id="search" name="search" placeholder="What are you looking for?"  autocomplete="off"/>
            <input type="submit" id="submit_search" name="submit_search"/>
        </form>
        <a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
    </div>

    <div class="advanced_search">
        <div class="wrapper">
            <span class="arrow"></span>
            <form action="#" method="post">
                <div class="search_fields">
                    <input type="text" class="float" id="check_in_date" name="check_in_date" placeholder="Check In Date"  autocomplete="off">

                    <hr class="field_sep float"/>

                    <input type="text" class="float" id="check_out_date" name="check_out_date" placeholder="Check Out Date"  autocomplete="off">
                </div>
                <div class="search_fields">
                    <input type="text" class="float" id="min_price" name="min_price" placeholder="Min. Price"  autocomplete="off">

                    <hr class="field_sep float"/>

                    <input type="text" class="float" id="max_price" name="max_price" placeholder="Max. price"  autocomplete="off">
                </div>
                <input type="text" id="keywords" name="keywords" placeholder="Keywords"  autocomplete="off">
                <input type="submit" id="submit_search" name="submit_search"/>
            </form>
        </div>
    </div><!--  end advanced search section  -->
</section><!--  end search section  -->--}}


@yield('content')

<footer>
    <div class="wrapper footer">
        <ul>

            <li class="about">
                <p>Help child - благотворительный, некомерческий проект, предназначенный для сбора средств тяжело больным детям.</p>
                <ul>
                    <li><a href="http://facebook.com" class="facebook" target="_blank"></a></li>
                    <li><a href="http://twitter.com" class="twitter" target="_blank"></a></li>
                    <li><a href="http://plus.google.com" class="google" target="_blank"></a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="copyrights wrapper">
        Copyright © 2019 <a href="#" target="_blank" class="ph_link" title="Download more free Templates">Help child</a>. Все права защищены.
    </div>
</footer><!--  end footer  -->




</body>
</html>
