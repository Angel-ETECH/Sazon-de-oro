<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Página en Desarrollo | Sazón de Oro</title>

    <link rel="icon" href="{{ asset('img/logo.png') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/desarrollo.css') }}">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

<!-- NAVBAR -->
<header class="navbar">

    <a href="/" class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="">
    </a>

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
    <form action="/buscar"
          method="GET"
          class="search-box">

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

<!-- DESARROLLO -->
<section class="dev-section">

    <div class="dev-content">

        <div class="dev-icon">

            <i class="fa-solid fa-screwdriver-wrench"></i>

        </div>

        <span class="dev-tag">
            MUY PRONTO
        </span>

        <h1>
            Página en Desarrollo
        </h1>

        <p>
            Estamos trabajando para traerte una mejor experiencia.
            Muy pronto esta sección estará disponible con nuevas
            funcionalidades y contenido exclusivo.
        </p>

        <a href="/">

            <button>
                Volver al Inicio
            </button>

        </a>

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