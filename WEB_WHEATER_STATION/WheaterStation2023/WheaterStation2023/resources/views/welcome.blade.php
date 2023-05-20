<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather STATION</title>
    <link rel="shortcut icon" href="./images/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">

    <meta name="theme-color" content="#2091F9">

    <meta name="title" content="Weather STATION">
    <meta name="description"
        content="Hola, soy una descripción que verás cuando busques algo de mi temática en Google.">


    <meta property="og:type" content="website">
    <meta property="og:url" content="https://alexcgdesign.github.io">
    <meta property="og:title" content="Aprende CSS desde cero">
    <meta property="og:description"
        content="Hola, soy una descripción que verás cuando busques algo de mi temática en Google.">
    <meta property="og:image" content="https://alexcgdesign.github.io/images/css.jpg">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.jordanalex.com/">
    <meta property="twitter:title" content="Aprende CSS desde cero">
    <meta property="twitter:description"
        content="Hola, soy una descripción que verás cuando busques algo de mi temática en Google.">
    <meta property="twitter:image" content="https://alexcgdesign.github.io/images/css.jpg">

    <style type="text/css">
        img.grande{width: 90px; height: 90px;}
      </style>
</head>

<body>
    <header class="hero">
        <nav class="nav container">
            <div class="nav__logo">
                <a href="{{ url('/home') }}" class="nav__links">Weather STATION</a>
            </div>
            <div class="nav__link nav__link--menu">
            @if (Route::has('login'))
                <div class="nav__items">
                    @auth
                    @else
                        <a href="{{ route('login') }}" class="nav__links">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav__links">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="nav__menu">
                <img src="./images/menu.svg" class="nav__img">
            </div>
        </nav>
        <section class="hero__container container">
            <h1 class="hero__title">Weather STATION</h1>
            <p class="hero__paragraph">" Elige y conoce un poco las variables meteorológicas que han crecido en importancia ya que 
                la información suministrada por las estaciones, ha llegado a  monitorear el cambio climático en nuestro medio ambiente "</p>
        </section>
    </header>

    <main>
        <section class="container about">
            <h2 class="subtitle">¿Qué miraras en este aplicativo Web?</h2>
            <p class="about__paragraph">Toda instalación destinada a medir y registrar regularmente diversas variables meteorológicas</p>

            <div class="about__main">
                <article class="about__icons">
                    <img src="./images/shapes.svg" class="about__icon">
                    <h3 class="about__title">SENSOR de viento</h3>
                    <p class="about__paragrah">Es un instrumento que puede medir la velocidad del viento. Está compuesto por la carcasa, la copa de viento y el módulo de circuito.</p>
                </article>

                <article class="about__icons">
                    <img src="./images/paint.svg" class="about__icon">
                    <h3 class="about__title">SENSOR de lluvia</h3>
                    <p class="about__paragrah">Cuando las gotas de lluvia caen en esta placa, algunas partes de los caminos de cobre se conectan entre sí y la resistencia general de la placa se reduce.</p>
                </article>

                <article class="about__icons">
                    <img src="./images/code.svg" class="about__icon">
                    <h3 class="about__title">SENSOR de humedad</h3>
                    <p class="about__paragrah">Es un sensor sencillo que mide la humedad del suelo por la variación de su conductividad.</p>
            </div>
        </section>
    <footer class="footer">
        <section class="footer__container container">
        </section>

        <section class="footer__copy container">
            <div class="footer__social">
                <a href="#" class="footer__icons"><img src="./images/facebook.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./images/twitter.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./images/youtube.svg" class="footer__img"></a>
            </div>

            <h3 class="footer__copyright">Derechos reservados &copy; Kenny Bermudez</h3>
        </section>
    </footer>

    <script src="./js/slider.js"></script>
    <script src="./js/questions.js"></script>
    <script src="./js/menu.js"></script>
</body>

</html>