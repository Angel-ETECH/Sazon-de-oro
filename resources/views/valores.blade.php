<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores | Sazón de Oro</title>

    <link rel="icon" href="{{ asset('img/logo.png') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/valores.css') }}">

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

    <h1>Valores</h1>

    <p>
        Nuestros valores representan el compromiso y la pasión
        con la que trabajamos cada día para brindar la mejor
        experiencia a nuestros clientes.
    </p>

</section>

<!-- VALORES -->
<section class="valores-container">

    <div class="valor-card">

        <i class="fa-solid fa-heart"></i>

        <h2>Pasión</h2>

        <p>
            Cocinamos con dedicación y amor para ofrecer
            el mejor sabor en cada plato.
        </p>

    </div>

    <div class="valor-card">

        <i class="fa-solid fa-star"></i>

        <h2>Calidad</h2>

        <p>
            Utilizamos ingredientes frescos y seleccionados
            para garantizar excelencia en cada preparación.
        </p>

    </div>

    <div class="valor-card">

        <i class="fa-solid fa-users"></i>

        <h2>Compromiso</h2>

        <p>
            Trabajamos día a día para brindar una atención
            rápida, amable y cercana a nuestros clientes.
        </p>

    </div>

    <div class="valor-card">

        <i class="fa-solid fa-handshake"></i>

        <h2>Confianza</h2>

        <p>
            Construimos relaciones duraderas basadas en
            honestidad y satisfacción de nuestros clientes.
        </p>

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