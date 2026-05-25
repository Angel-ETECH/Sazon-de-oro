<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ensaladas | Sazón de Oro</title>

    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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

        <a href="https://maps.app.goo.gl/wrSdyfcs8UNsXhEM9" target="_blank">
            Ubicación
        </a>

    </nav>

    <!-- BUSCADOR -->
    <form action="/buscar" method="GET" class="search-box">

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
    <button class="hamburger" id="hamburger-btn">

        <span></span>
        <span></span>
        <span></span>

    </button>

</header>

<!-- TITLE -->
<section class="page-title">

    <h1>Ensaladas</h1>

    <p>
        Disfruta nuestras ensaladas frescas, saludables y llenas de sabor.
    </p>

    <div class="tabs">

        <button class="tab active"
                onclick="showCategory('fresca', this)">

            Ensalada Fresca

        </button>

        <button class="tab"
                onclick="showCategory('cocida', this)">

            Ensalada Cocida

        </button>

        <button class="tab"
                onclick="showCategory('delicia', this)">

            Ensalada Delicia

        </button>

    </div>

</section>

<!-- FRESCA -->
<section class="recomendados category active-category" id="fresca">

    <div class="cards">

        @isset($fresca)

            @foreach($fresca as $producto)

            <div class="card">

                <div class="card-img">
                    <img src="{{ asset('uploads/'.$producto->imagen) }}" alt="">
                </div>

                <div class="card-content">

                    <div class="top">
                        <h3>{{ $producto->nombre }}</h3>
                    </div>

                    <p>
                        {{ $producto->descripcion }}
                    </p>

                    <div class="price">

                        <span class="new-price">
                            S/{{ $producto->precio }}
                        </span>

                        <a href="#">

                            <button>
                                <i class="fa-brands fa-whatsapp"></i>
                            </button>

                        </a>

                    </div>

                </div>

            </div>

            @endforeach

        @endisset

    </div>

</section>

<!-- COCIDA -->
<section class="recomendados category" id="cocida">

    <div class="cards">

        @isset($cocida)

            @foreach($cocida as $producto)

            <div class="card">

                <div class="card-img">
                    <img src="{{ asset('uploads/'.$producto->imagen) }}" alt="">
                </div>

                <div class="card-content">

                    <div class="top">
                        <h3>{{ $producto->nombre }}</h3>
                    </div>

                    <p>
                        {{ $producto->descripcion }}
                    </p>

                    <div class="price">

                        <span class="new-price">
                            S/{{ $producto->precio }}
                        </span>

                        <a href="#">

                            <button>
                                <i class="fa-brands fa-whatsapp"></i>
                            </button>

                        </a>

                    </div>

                </div>

            </div>

            @endforeach

        @endisset

    </div>

</section>

<!-- DELICIA -->
<section class="recomendados category" id="delicia">

    <div class="cards">

        @isset($delicia)

            @foreach($delicia as $producto)

            <div class="card">

                <div class="card-img">
                    <img src="{{ asset('uploads/'.$producto->imagen) }}" alt="">
                </div>

                <div class="card-content">

                    <div class="top">
                        <h3>{{ $producto->nombre }}</h3>
                    </div>

                    <p>
                        {{ $producto->descripcion }}
                    </p>

                    <div class="price">

                        <span class="new-price">
                            S/{{ $producto->precio }}
                        </span>

                        <a href="#">

                            <button>
                                <i class="fa-brands fa-whatsapp"></i>
                            </button>

                        </a>

                    </div>

                </div>

            </div>

            @endforeach

        @endisset

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

    /* --- DROPDOWN CATEGORÍAS --- */
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

    /* --- TABS ENSALADAS --- */
    function showCategory(id, button) {

        let categories = document.querySelectorAll('.category');
        let tabs = document.querySelectorAll('.tab');

        categories.forEach(c => c.classList.remove('active-category'));
        tabs.forEach(t => t.classList.remove('active'));

        let target = document.getElementById(id);

        if (target) {
            target.classList.add('active-category');
        }

        button.classList.add('active');
    }

</script>

</body>
</html>