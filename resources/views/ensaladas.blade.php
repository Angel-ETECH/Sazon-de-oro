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

    <h1>Ensaladas</h1>

    <p>
        Disfruta nuestras ensaladas frescas, saludables y llenas de sabor.
    </p>

    <!-- TABS -->

    <div class="tabs">

        <button class="tab active" onclick="showCategory('fresca', this)">
            Ensalada Fresca
        </button>

        <button class="tab" onclick="showCategory('cocida', this)">
            Ensalada Cocida
        </button>

        <button class="tab" onclick="showCategory('delicia', this)">
            Ensalada Delicia
        </button>

    </div>

</section>

<!-- ENSALADA FRESCA -->

<section class="recomendados category active-category" id="fresca">

    <div class="cards">

        <div class="card">

            <div class="card-img">
                <img src="{{ asset('img/fresca1.jpg') }}" alt="">
            </div>

            <div class="card-content">

                <div class="top">
                    <h3>Ensalada Fresca Regular</h3>
                </div>

                <p>
                    Lechuga americana, tomate, rabanito y palta + Vinagreta
                </p>

                <div class="price">

                    <div class="price-info">
                        <span class="new-price">S/20.90</span>
                    </div>

                    <button>
                        <i class="fa-solid fa-plus"></i>
                    </button>

                </div>

            </div>

        </div>

        <div class="card">

            <div class="card-img">
                <img src="{{ asset('img/fresca2.jpg') }}" alt="">
            </div>

            <div class="card-content">

                <div class="top">
                    <h3>Ensalada Fresca Grande</h3>
                </div>

                <p>
                    Lechuga americana, tomate, rabanito y palta + Vinagreta
                </p>

                <div class="price">

                    <div class="price-info">
                        <span class="new-price">S/24.90</span>
                    </div>

                    <button>
                        <i class="fa-solid fa-plus"></i>
                    </button>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ENSALADA COCIDA -->

<section class="recomendados category" id="cocida">

    <div class="cards">

        <div class="card">

            <div class="card-img">
                <img src="{{ asset('img/cocida1.jpg') }}" alt="">
            </div>

            <div class="card-content">

                <div class="top">
                    <h3>Ensalada Cocida Regular</h3>
                </div>

                <p>
                    Betarraga, zanahoria, vainita y palta + Vinagreta
                </p>

                <div class="price">

                    <div class="price-info">
                        <span class="new-price">S/20.90</span>
                    </div>

                    <button>
                        <i class="fa-solid fa-plus"></i>
                    </button>

                </div>

            </div>

        </div>

        <div class="card">

            <div class="card-img">
                <img src="{{ asset('img/cocida2.jpg') }}" alt="">
            </div>

            <div class="card-content">

                <div class="top">
                    <h3>Ensalada Cocida Grande</h3>
                </div>

                <p>
                    Betarraga, zanahoria, vainita y palta + Vinagreta
                </p>

                <div class="price">

                    <div class="price-info">
                        <span class="new-price">S/24.90</span>
                    </div>

                    <button>
                        <i class="fa-solid fa-plus"></i>
                    </button>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ENSALADA DELICIA -->

<section class="recomendados category" id="delicia">

    <div class="cards">

        <div class="card">

            <div class="card-img">
                <img src="{{ asset('img/delicia.jpg') }}" alt="">
            </div>

            <div class="card-content">

                <div class="top">
                    <h3>Ensalada Delicia</h3>
                </div>

                <p>
                    Lechuga americana, espinaca, choclo, tomate,
                    palta y queso fresco + Vinagreta
                </p>

                <div class="price">

                    <div class="price-info">
                        <span class="new-price">S/24.90</span>
                    </div>

                    <button>
                        <i class="fa-solid fa-plus"></i>
                    </button>

                </div>

            </div>

        </div>

    </div>

</section>

<script>

    function showCategory(id, button){

        let categories = document.querySelectorAll('.category');
        let tabs = document.querySelectorAll('.tab');

        categories.forEach(category => {
            category.classList.remove('active-category');
        });

        tabs.forEach(tab => {
            tab.classList.remove('active');
        });

        document.getElementById(id).classList.add('active-category');

        button.classList.add('active');
    }

</script>

</body>
</html>