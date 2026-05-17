<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pardos a la Brasa | Sazón de Oro</title>

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

        <h1>Pardos a la Brasa</h1>

        <p>
            Disfruta nuestro delicioso pollo a la brasa acompañado de papas fritas,
            ensaladas y promociones especiales.
        </p>

    </section>

    <!-- PRODUCTOS -->

    <section class="recomendados">

        <div class="cards">

            <!-- CARD 1 -->

            <div class="card">

                <div class="card-img">
                    <img src="{{ asset('img/pardos1.jpg') }}" alt="">
                </div>

                <div class="card-content">

                    <div class="top">
                        <h3>Promoción Tu Chicha 1.5 LT.</h3>
                    </div>

                    <p>
                        1 Pardos Brasa + papas fritas + guarnición + botella de chicha de 1.5 LT.
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

            <!-- CARD 2 -->

            <div class="card">

                <div class="card-img">
                    <img src="{{ asset('img/pardos2.jpg') }}" alt="">
                </div>

                <div class="card-content">

                    <div class="top">
                        <h3>Promoción Tú Eliges 1.5 LT.</h3>
                    </div>

                    <p>
                        1 Pardos Brasa + papas fritas + Inca Kola sin azúcar de 1.5 LT.
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

            <!-- CARD 3 -->

            <div class="card">

                <div class="card-img">
                    <img src="{{ asset('img/pardos3.jpg') }}" alt="">
                </div>

                <div class="card-content">

                    <div class="top">
                        <h3>Promoción Tú Eliges 2.25 LT.</h3>
                    </div>

                    <p>
                        1 Pardos Brasa + papas fritas + gaseosa de 2.25 LT.
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

            <!-- CARD 4 -->

            <div class="card">

                <div class="card-img">
                    <img src="{{ asset('img/pardos4.jpg') }}" alt="">
                </div>

                <div class="card-content">

                    <div class="top">
                        <h3>1 Pardos Brasa</h3>
                    </div>

                    <p>
                        Este producto incluye deliciosas salsas especiales.
                    </p>

                    <div class="price">

                        <div class="price-info">
                            <span class="new-price">S/60.50</span>
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
                    <img src="{{ asset('img/pardos5.jpg') }}" alt="">
                </div>

                <div class="card-content">

                    <div class="top">
                        <h3>1 Pardos Brasa con guarnición</h3>
                    </div>

                    <p>
                        Incluye papas fritas o ensalada + salsas especiales.
                    </p>

                    <div class="price">

                        <div class="price-info">
                            <span class="new-price">S/75.50</span>
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
                    <img src="{{ asset('img/pardos6.jpg') }}" alt="">
                </div>

                <div class="card-content">

                    <div class="top">
                        <h3>1 Pardos Brasa Full</h3>
                    </div>

                    <p>
                        Incluye papas fritas y ensalada regular + salsas.
                    </p>

                    <div class="price">

                        <div class="price-info">
                            <span class="new-price">S/88.50</span>
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