<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiestas Infantiles | Sazón de Oro</title>

    <link rel="icon" href="{{ asset('img/logo.png') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fiestas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanguches.css') }}">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

<!-- NAVBAR -->
<header class="navbar">

    <a href="/" class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="">
    </a>

    <!-- MENÚ -->
    <nav class="menu" id="main-menu">

        <a href="/promociones">Promociones</a>

        <div class="dropdown">

            <a href="#">
                Categorías
                <i class="fa-solid fa-chevron-down"></i>
            </a>

            <div class="dropdown-menu">

                <a href="/sanguches">Sánguches</a>
                <a href="/pardos-brasa">Pardos a la Brasa</a>
                <a href="/ensaladas">Ensaladas</a>
                <a href="/chicharrones">Chicharrones</a>
                <a href="/postres">Postres</a>

            </div>

        </div>

        <a href="https://maps.app.goo.gl/wrSdyfcs8UNsXhEM9"
           target="_blank">

            Ubicación

        </a>

    </nav>

    <!-- BUSCADOR -->
    <form action="/buscar"
          method="GET"
          class="search-box">

        <button type="submit">

            <i class="fa-solid fa-magnifying-glass"></i>

        </button>

        <input
            type="text"
            name="buscar"
            placeholder="¿Qué se te antoja?"
        >

    </form>

    <!-- BOTÓN -->
    <div class="buttons">

        <a href="https://wa.me/51999999999"
           class="pedido"
           target="_blank">

            <i class="fa-brands fa-whatsapp"></i>

            Pedir Ahora

        </a>

    </div>

    <!-- HAMBURGUESA -->
    <button class="hamburger"
            id="hamburger-btn">

        <span></span>
        <span></span>
        <span></span>

    </button>

</header>

<!-- TITLE -->
<section class="page-title">

    <h1>Fiestas Infantiles</h1>

    <p>
        Celebra momentos inolvidables con diversión,
        deliciosos combos y un ambiente especial
        para los más pequeños.
    </p>

</section>

<!-- CONTENIDO -->
<section class="fiestas-container">

    <div class="fiesta-box">

        <div class="fiesta-img">

            <img src="{{ asset('img/banner2.jpg') }}" alt="Fiestas">

        </div>

        <div class="fiesta-content">

            <h2>Haz feliz a tus pequeños</h2>

            <p>
                Organizamos fiestas infantiles llenas de alegría,
                entretenimiento y el mejor sabor de Sazón de Oro.
            </p>

            <p>
                Contamos con espacios cómodos, atención personalizada
                y deliciosos menús para que toda la familia disfrute.
            </p>

            <a href="https://wa.me/51999999999"
               target="_blank">

                <button>
                    Reservar Ahora
                </button>

            </a>

        </div>

    </div>

    <!-- BENEFICIOS -->
    <div class="beneficios">

        <div class="beneficio-card">

            <i class="fa-solid fa-cake-candles"></i>

            <h3>Decoración</h3>

            <p>
                Ambientes decorados especialmente
                para fiestas inolvidables.
            </p>

        </div>

        <div class="beneficio-card">

            <i class="fa-solid fa-gamepad"></i>

            <h3>Juegos</h3>

            <p>
                Diversión asegurada para los niños
                con actividades y entretenimiento.
            </p>

        </div>

        <div class="beneficio-card">

            <i class="fa-solid fa-utensils"></i>

            <h3>Combos Especiales</h3>

            <p>
                Menús deliciosos para niños y adultos
                preparados al momento.
            </p>

        </div>

    </div>

</section>

<script>

    /* --- MENÚ HAMBURGUESA --- */
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const mainMenu = document.getElementById('main-menu');

    hamburgerBtn.addEventListener('click', function () {

        const isOpen = mainMenu.classList.toggle('open');

        hamburgerBtn.classList.toggle('open', isOpen);

    });

    /* --- DROPDOWN --- */
    const dropdownBtn = document.querySelector('.dropdown > a');

    dropdownBtn.addEventListener('click', function(e){

        e.preventDefault();

        document.querySelector('.dropdown')
        .classList.toggle('active');

    });

    /* --- CERRAR MENÚ --- */
    mainMenu.querySelectorAll('a').forEach(function (link) {

        link.addEventListener('click', function () {

            if(link.parentElement.classList.contains('dropdown')){
                return;
            }

            mainMenu.classList.remove('open');

            hamburgerBtn.classList.remove('open');

        });

    });

</script>

</body>
</html>