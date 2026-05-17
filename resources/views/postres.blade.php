<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postres | Sazón de Oro</title>

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

        <nav class="menu">
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
            <a href="#">Carta Salón</a>
        </nav>

        <div class="search-box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="¿Qué se te antoja?">
        </div>

        <div class="buttons">

    <a href="https://wa.me/51999999999" class="pedido">

        <i class="fa-brands fa-whatsapp"></i>
        Pedir Ahora

    </a>

</div>

    </header>

    <!-- TITLE -->

    <section class="page-title">

        <h1>Postres</h1>

        <p>
            Endulza tu día con nuestros deliciosos postres preparados
            con el mejor sabor de Sazón de Oro.
        </p>

    </section>

    <!-- PRODUCTOS -->

    <section class="recomendados">

        <div class="cards">

            <!-- CARD 1 -->

            <div class="card">

                <div class="card-img">
                    <img src="{{ asset('img/postre1.jpg') }}" alt="">
                </div>

                <div class="card-content">

                    <div class="top">
                        <h3>Cheesecake de Fresa</h3>
                    </div>

                    <p>
                        Delicioso cheesecake cremoso acompañado de fresca salsa de fresa.
                    </p>

                    <div class="price">

                        <div class="price-info">
                            <span class="new-price">S/17.90</span>
                        </div>

                        <button>
                            <i class="fa-solid fa-plus"></i>
                        </button>

                    </div>

                </div>

            </div>

            <!-- CARD 2 -->

            <div class="card">

                <div class="card-img">
                    <img src="{{ asset('img/postre2.jpg') }}" alt="">
                </div>

                <div class="card-content">

                    <div class="top">
                        <h3>Torta de Chocolate</h3>
                    </div>

                    <p>
                        Suave y esponjosa torta de chocolate con intenso sabor a cacao.
                    </p>

                    <div class="price">

                        <div class="price-info">
                            <span class="new-price">S/17.90</span>
                        </div>

                        <button>
                            <i class="fa-solid fa-plus"></i>
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>

</body>
</html>