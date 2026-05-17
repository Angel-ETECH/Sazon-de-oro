<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promociones | Sazón de Oro</title>

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

    <h1>Promociones</h1>

    <p>
        Aprovecha nuestras promociones especiales y disfruta
        los mejores combos al mejor precio.
    </p>

</section>

<!-- PRODUCTOS -->

<section class="recomendados">

    <div class="cards">

        <!-- CARD 1 -->

        <div class="card">

            <div class="card-img">
                <img src="{{ asset('img/promo1.jpg') }}" alt="">
            </div>

            <div class="card-content">

                <div class="top">
                    <h3>Brasa Para mí Encamotado</h3>
                </div>

                <p>
                    1/4 Pardos Brasa con mix de papas fritas y camote.
                </p>

                <div class="price">
                    <div class="price-info">
                        <span class="new-price">S/39.50</span>
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
                <img src="{{ asset('img/promo2.jpg') }}" alt="">
            </div>

            <div class="card-content">

                <div class="top">
                    <h3>Brasa Arrocero Premium</h3>
                </div>

                <p>
                    1/4 Pardos Brasa con arroz, papas y ensalada rusa.
                </p>

                <div class="price">
                    <div class="price-info">
                        <span class="new-price">S/39.50</span>
                    </div>

                    <button>
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </div>

            </div>

        </div>

        <!-- CARD 3 -->

        <div class="card">

            <div class="card-img">
                <img src="{{ asset('img/promo3.jpg') }}" alt="">
            </div>

            <div class="card-content">

                <div class="top">
                    <h3>Promoción Premium para dos</h3>
                </div>

                <p>
                    1/2 Pardos Brasa con papas, ensalada y bebidas.
                </p>

                <div class="price">
                    <div class="price-info">
                        <span class="new-price">S/59.50</span>
                    </div>

                    <button>
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </div>

            </div>

        </div>

        <!-- CARD 4 -->

        <div class="card">

            <div class="card-img">
                <img src="{{ asset('img/promo4.jpg') }}" alt="">
            </div>

            <div class="card-content">

                <div class="top">
                    <h3>Promoción Tú Eliges 1.5 LT.</h3>
                </div>

                <p>
                    1 Pardos Brasa + papas + gaseosa 1.5 LT.
                </p>

                <div class="price">
                    <div class="price-info">
                        <span class="new-price">S/90.90</span>
                    </div>

                    <button>
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </div>

            </div>

        </div>

        <!-- CARD 5 -->

        <div class="card">

            <div class="card-img">
                <img src="{{ asset('img/promo5.jpg') }}" alt="">
            </div>

            <div class="card-content">

                <div class="top">
                    <h3>Promoción Tu Chicha</h3>
                </div>

                <p>
                    1 Pardos Brasa + papas + chicha 1.5 LT.
                </p>

                <div class="price">
                    <div class="price-info">
                        <span class="new-price">S/95.50</span>
                    </div>

                    <button>
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </div>

            </div>

        </div>

        <!-- CARD 6 -->

        <div class="card">

            <div class="card-img">
                <img src="{{ asset('img/promo6.jpg') }}" alt="">
            </div>

            <div class="card-content">

                <div class="top">
                    <h3>Promoción Para 2</h3>
                </div>

                <p>
                    1/2 Pardos Brasa + ensalada + bebidas personales.
                </p>

                <div class="price">
                    <div class="price-info">
                        <span class="new-price">S/57.90</span>
                    </div>

                    <button>
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </div>

            </div>

        </div>

        <!-- CARD 7 -->

        <div class="card">

            <div class="card-img">
                <img src="{{ asset('img/promo7.jpg') }}" alt="">
            </div>

            <div class="card-content">

                <div class="top">
                    <h3>Promoción Brasa Para Mí</h3>
                </div>

                <p>
                    1/4 Pardos Brasa + papas + bebida personal.
                </p>

                <div class="price">
                    <div class="price-info">
                        <span class="new-price">S/35.90</span>
                    </div>

                    <button>
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </div>

            </div>

        </div>

        <!-- CARD 8 -->

        <div class="card">

            <div class="card-img">
                <img src="{{ asset('img/promo8.jpg') }}" alt="">
            </div>

            <div class="card-content">

                <div class="top">
                    <h3>Parrillero Original</h3>
                </div>

                <p>
                    1/4 Parrillero original con papas y bebida.
                </p>

                <div class="price">
                    <div class="price-info">
                        <span class="new-price">S/38.50</span>
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