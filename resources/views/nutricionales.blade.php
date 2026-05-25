<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores Nutricionales | Sazón de Oro</title>

    <link rel="icon" href="{{ asset('img/logo.png') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nutricionales.css') }}">

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

<!-- HERO -->
<section class="nutrition-hero">

    <div class="nutrition-overlay"></div>

    <div class="nutrition-content">

        <span>
            INFORMACIÓN SALUDABLE
        </span>

        <h1>
            Valores Nutricionales
        </h1>

        <p>
            Conoce la información nutricional de nuestros productos
            y disfruta el auténtico sabor de Sazón de Oro.
        </p>

    </div>

</section>

<!-- TABLA -->
<section class="nutrition-table-section">

    <h2>
        Información Nutricional
    </h2>

    <div class="table-container">

        <table>

            <thead>

                <tr>

                    <th>Producto</th>
                    <th>Calorías</th>
                    <th>Proteínas</th>
                    <th>Grasas</th>
                    <th>Carbohidratos</th>

                </tr>

            </thead>

            <tbody>

                <tr>

                    <td>Pollo a la Brasa</td>
                    <td>450 kcal</td>
                    <td>35 g</td>
                    <td>20 g</td>
                    <td>15 g</td>

                </tr>

                <tr>

                    <td>Sánguche Clásico</td>
                    <td>520 kcal</td>
                    <td>28 g</td>
                    <td>18 g</td>
                    <td>42 g</td>

                </tr>

                <tr>

                    <td>Ensalada Fresca</td>
                    <td>180 kcal</td>
                    <td>10 g</td>
                    <td>5 g</td>
                    <td>20 g</td>

                </tr>

                <tr>

                    <td>Chicharrón Especial</td>
                    <td>650 kcal</td>
                    <td>30 g</td>
                    <td>40 g</td>
                    <td>25 g</td>

                </tr>

                <tr>

                    <td>Postre de Chocolate</td>
                    <td>390 kcal</td>
                    <td>6 g</td>
                    <td>16 g</td>
                    <td>50 g</td>

                </tr>

            </tbody>

        </table>

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