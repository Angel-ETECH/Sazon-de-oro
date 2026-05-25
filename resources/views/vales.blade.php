<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vales y Giftcards | Sazón de Oro</title>

    <link rel="icon" href="{{ asset('img/logo.png') }}">

    <!-- CSS GENERAL -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- CSS PROPIO -->
    <link rel="stylesheet" href="{{ asset('css/vales.css') }}">

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

            <a href="#" id="dropdown-toggle">
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
    <form action="/buscar" method="GET" class="search-box">

        <i class="fa-solid fa-magnifying-glass"></i>

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

<!-- HERO -->
<section class="giftcards-hero">

    <div class="overlay"></div>

    <div class="giftcards-content">

        <span class="tag">
            REGALA SABOR
        </span>

        <h1>
            Vales y Giftcards
        </h1>

        <p>
            Sorprende a tu familia y amigos con experiencias deliciosas.
            Regala momentos especiales con las giftcards de Sazón de Oro.
        </p>

        <a href="https://wa.me/51999999999"
           target="_blank">

            <button>
                Solicitar Ahora
            </button>

        </a>

    </div>

</section>

<!-- BENEFICIOS -->
<section class="benefits">

    <h2>
        ¿Por qué elegir nuestras Giftcards?
    </h2>

    <div class="benefit-cards">

        <div class="benefit-card">

            <i class="fa-solid fa-gift"></i>

            <h3>
                Regalo Perfecto
            </h3>

            <p>
                Ideal para cumpleaños, aniversarios y ocasiones especiales.
            </p>

        </div>

        <div class="benefit-card">

            <i class="fa-solid fa-wallet"></i>

            <h3>
                Fácil de Usar
            </h3>

            <p>
                Canjea tus vales rápidamente en cualquiera de nuestros locales.
            </p>

        </div>

        <div class="benefit-card">

            <i class="fa-solid fa-star"></i>

            <h3>
                Experiencia Premium
            </h3>

            <p>
                Disfruta del auténtico sabor y calidad de Sazón de Oro.
            </p>

        </div>

    </div>

</section>

<script>

    /* HAMBURGUESA */
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const mainMenu = document.getElementById('main-menu');

    hamburgerBtn.addEventListener('click', function () {

        mainMenu.classList.toggle('open');

    });

    /* DROPDOWN */
    const dropdownToggle = document.getElementById('dropdown-toggle');

    dropdownToggle.addEventListener('click', function(e){

        if(window.innerWidth <= 768){

            e.preventDefault();

            document.querySelector('.dropdown')
            .classList.toggle('active');

        }

    });

</script>

</body>
</html>