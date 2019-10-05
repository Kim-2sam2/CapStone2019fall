<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Smart library</title>
        <!-- Styles -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="./js/main.js"></script>
        <link href="./css/main.css" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="./fonts/stylesheet.css" rel="stylesheet" type="text/css">
        <style>
            body{
                width: 100%;
                margin: 0;
                background: url('/images/background.jpg');

            }
            img {
                max-width: 100%;
            }
            .main_title{
                background: url('/images/banner.png') no-repeat top center;
            }
            .contents{
                margin: 0px auto;
                margin-top: 100px;
                width: 100%;
                text-align: center;
            }
            #quickmenu{
                z-index: 0;
            }
            .menu-list{
                font-size: 25px;
                margin: 20px 24px 20px 20px;
                float:right;
            }
            .dropbtn{
                padding: 0px 18px 0px 18px;
                border-left: solid 1px black;
                border-right-width: 1px;
            }
            .menu {
                text-align: center;
                display: inline-block;
            }
            .menu:first-child .dropbtn{
                border-left: none;
            }
            .menu:focus .submenu,
            .menu:focus-within .submenu,
            .menu:hover .submenu {
                visibility: visible;
                opacity: 1;
                z-index: 1;
                transform: translateY(0%);
                transition-delay: 0s, 0s, 0.3s;
            }
            .submenu {
                padding: 20px;
                visibility: hidden;
                position: absolute;
                background-image: url('/images/manu_background.jpg');
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,3);
                opacity: 0;
                top: 80px;
                transform: translateY(-2em);
                z-index: -1;
                transition: all 0.3s ease-in-out 0s, visibility 0s linear 0.3s, z-index 0s linear 0.01s;
            }
            .banner1{
                display: block; margin: 0px auto;
            }
            .main_title{
                display: block; margin: 0px auto;
                color: #f6e7d9;
            }
        </style>
    </head>
    <body>
        @include('partials.topmenu')
        @include('partials.quickmenu')
        <div class="contents">
            @yield('content')
        </div>
        <footer>
            @include('partials.footer')
        </footer>
    </body>
</html>
