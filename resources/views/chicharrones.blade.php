<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chicharrones | Sazón de Oro</title>

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

        <h1>Chicharrones</h1>

        <p>
            Disfruta nuestros deliciosos chicharrones crujientes acompañados
            de papas, ensaladas y salsas especiales.
        </p>

    </section>

    <!-- PRODUCTOS -->

    <section class="recomendados">

        <div class="cards">

            <!-- CARD 1 -->

            <div class="card">

                <div class="card-img">
                    <img src="{{ asset('img/chicha1.jpg') }}" alt="">
                </div>

                <div class="card-content">

                    <div class="top">
                        <h3>Chicharrón Encamotado</h3>
                    </div>

                    <p>
                        Chicharrón de Pollo, mix de papas fritas con rejillas
                        de camotes fritos y ensalada.
                    </p>

                    <div class="price">

                        <div class="price-info">
                            <span class="new-price">S/37.90</span>
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
                    <img src="{{ asset('img/chicha2.jpg') }}" alt="">
                </div>

                <div class="card-content">

                    <div class="top">
                        <h3>Chicharrón Arrocero Premium</h3>
                    </div>

                    <p>
                        Chicharrón de Pollo con arroz, papas fritas y ensalada rusa apaltada.
                    </p>

                    <div class="price">

                        <div class="price-info">
                            <span class="new-price">S/37.90</span>
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
                    <img src="{{ asset('img/chicha3.jpg') }}" alt="">
                </div>

                <div class="card-content">

                    <div class="top">
                        <h3>Promoción Chicharrón Para Mí</h3>
                    </div>

                    <p>
                        5 unidades de chicharrón + papas fritas + ensalada + bebida personal.
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

            <!-- CARD 4 -->

            <div class="card">

                <div class="card-img">
                    <img src="{{ asset('img/chicha4.jpg') }}" alt="">
                </div>

                <div class="card-content">

                    <div class="top">
                        <h3>Chicharrón de Pollo (Porción)</h3>
                    </div>

                    <p>
                        4 unidades de chicharrones con choclo y papas doradas.
                    </p>

                    <div class="price">

                        <div class="price-info">
                            <span class="new-price">S/29.90</span>
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
                    <img src="{{ asset('img/chicha5.jpg') }}" alt="">
                </div>

                <div class="card-content">

                    <div class="top">
                        <h3>Chicharrón de Pollo (Fondo)</h3>
                    </div>

                    <p>
                        5 unidades de chicharrón con papas fritas y ensalada pardos.
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

            <!-- CARD 6 -->

            <div class="card">

                <div class="card-img">
                    <img src="{{ asset('img/chicha6.jpg') }}" alt="">
                </div>

                <div class="card-content">

                    <div class="top">
                        <h3>Chicharrón con Ensalada</h3>
                    </div>

                    <p>
                        5 unidades de chicharrón acompañadas de ensalada pardos.
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

            <!-- CARD 7 -->

            <div class="card">

                <div class="card-img">
                    <img src="{{ asset('img/chicha7.jpg') }}" alt="">
                </div>

                <div class="card-content">

                    <div class="top">
                        <h3>Piqueo Chicharrón x6</h3>
                    </div>

                    <p>
                        6 unidades de chicharrón acompañadas de salsa Honey Mustard.
                    </p>

                    <div class="price">

                        <div class="price-info">
                            <span class="new-price">S/22.90</span>
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
                    <img src="{{ asset('img/chicha8.jpg') }}" alt="">
                </div>

                <div class="card-content">

                    <div class="top">
                        <h3>Piqueo Chicharrón x12</h3>
                    </div>

                    <p>
                        12 unidades de chicharrón acompañadas de salsa Honey Mustard.
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

        </div>

    </section>

</body>
</html>