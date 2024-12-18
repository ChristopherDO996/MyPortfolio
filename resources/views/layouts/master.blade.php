<!DOCTYPE html>
<html lang="en">

<head>
    <title>Christopher DO | Full Stack Developer</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="HTML5 website template">
    <meta name="keywords" content="global, template, html, sass, jquery">
    <meta name="author" content="Bucky Maler">
    @include('partials.styles')
    <link rel="stylesheet" href="{{ asset('css/threeBackground.css') }}">
    {{-- Font Awesome  --}}
    <script src="https://kit.fontawesome.com/61ab49a963.js" crossorigin="anonymous"></script>
</head>

<body>

    <div id="universe" />

    <div class="perspective effect-rotate-left">
        <div class="container">
            <div class="outer-nav--return"></div>
            <div id="viewport" class="l-viewport">
                <div class="l-wrapper">
                    @include('partials.header')
                    {{-- Main Body separated by list form --}}
                    @yield('content')

                </div>
            </div>
        </div>
    </div>
    <ul class="outer-nav">

        <a href="{{ route('home') }}">
            <li @if (Route::currentRouteName() == 'home') class="is-active" @endif>
                Inicio
            </li>
        </a>
        <a href="{{ route('about') }}">
            <li @if (Route::currentRouteName() == 'about') class="is-active" @endif>
                Sobre mí
            </li>
        </a>
        <a href="{{ route('skills') }}">
            <li @if (Route::currentRouteName() == 'skills') class="is-active" @endif>
                Habilidades
            </li>
        </a>
        <a href="{{ route('portfolio') }}">
            <li @if (Route::currentRouteName() == 'portfolio') class="is-active" @endif>
                Portafolio
            </li>
        </a>
        <a href="{{ route('blog') }}">
            <li @if (Route::currentRouteName() == 'blog') class="is-active" @endif>
                Blog
            </li>
        </a>
        <a href="{{ route('contact') }}">
            <li @if (Route::currentRouteName() == 'contact') class="is-active" @endif>
                Contáctame
            </li>
        </a>
    </ul>

    @include('partials.scripts')
</body>

</html>
