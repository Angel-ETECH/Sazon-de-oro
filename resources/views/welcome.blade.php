<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sazón de Oro</title>

    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

<!-- NAVBAR -->
<header class="navbar">

    <a href="/" class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="Sazón de Oro">
    </a>

    <!-- MENÚ (desktop + móvil) -->
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

    <!-- BUSCADOR (se oculta en móvil via CSS) -->
    <form action="/buscar" method="GET" class="search-box">

        <i class="fa-solid fa-magnifying-glass"></i>

        <input 
            type="text"
            name="buscar"
            placeholder="¿Qué se te antoja?"
        >

    </form>

    <div class="buttons">

        <a href="https://wa.me/51999999999" class="pedido">

            <i class="fa-brands fa-whatsapp"></i>
            Pedir Ahora

        </a>

    </div>

    <!-- BOTÓN HAMBURGUESA (solo visible en móvil) -->
    <button class="hamburger" id="hamburger-btn" aria-label="Abrir menú" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
    </button>

</header>

<!-- HERO -->
<section class="hero">

    <div class="slides">

        <div class="slide active">
            <img src="{{ asset('img/banner1.jpg') }}" alt="">
        </div>

        <div class="slide">
            <img src="{{ asset('img/banner2.jpg') }}" alt="">
        </div>

        <div class="slide">
            <img src="{{ asset('img/banner3.jpg') }}" alt="">
        </div>

    </div>

    <div class="overlay"></div>

    <div class="hero-content">

        <span class="promo">PROMO</span>

        <h1>
            EL SABOR<br>
            PERFECTO
        </h1>

        <p>
            Disfruta el mejor pollo a la brasa con promociones increíbles.
        </p>

        <button>
            Pide Aquí
        </button>

    </div>

</section>

<!-- RECOMENDADOS -->
<section class="recomendados">

    <h2>Recomendados para ti</h2>

    <div class="cards">

        <!-- CARD 1 -->
        <div class="card">

            <div class="card-img">
                <img src="{{ asset('img/pollo1.jpg') }}" alt="">
            </div>

            <div class="card-content">

                <div class="top">
                    <h3>Clásico Combo Contundente</h3>
                </div>

                <p>
                    1 pollo a la brasa + papas familiares + ensalada.
                </p>

                <div class="price">

                    <div class="price-info">

                        <span class="new-price">S/79.90</span>

                        <div class="old">
                            <span class="old-price">S/123.90</span>
                            <span class="discount">35%</span>
                        </div>

                    </div>

                    <a href="https://wa.me/51999999999?text=Hola,%20quiero%20pedir%20Clásico%20Combo%20Contundente%20por%20S/79.90"
                       target="_blank"
                       class="whatsapp-btn">

                        <i class="fa-brands fa-whatsapp"></i>

                    </a>

                </div>

            </div>

        </div>

        <!-- CARD 2 -->
        <div class="card">

            <div class="card-img">
                <img src="{{ asset('img/pollo2.jpg') }}" alt="">
            </div>

            <div class="card-content">

                <div class="top">
                    <h3>1 Pollo con guarnición</h3>
                </div>

                <p>
                    Pollo a la brasa con papas fritas y ensalada fresca.
                </p>

                <div class="price">

                    <div class="price-info">
                        <span class="new-price">S/89.90</span>
                    </div>

                    <a href="https://wa.me/51999999999?text=Hola,%20quiero%20pedir%201%20Pollo%20con%20guarnición%20por%20S/89.90"
                       target="_blank"
                       class="whatsapp-btn">

                        <i class="fa-brands fa-whatsapp"></i>

                    </a>

                </div>

            </div>

        </div>

        <!-- CARD 3 -->
        <div class="card">

            <div class="card-img">
                <img src="{{ asset('img/pollo3.jpg') }}" alt="">
            </div>

            <div class="card-content">

                <div class="top">
                    <h3>Promo Familiar</h3>
                </div>

                <p>
                    1 pollo + papas fritas familiares + salsas.
                </p>

                <div class="price">

                    <div class="price-info">

                        <span class="new-price">S/69.90</span>

                        <div class="old">
                            <span class="old-price">S/99.90</span>
                            <span class="discount">30%</span>
                        </div>

                    </div>

                    <a href="https://wa.me/51999999999?text=Hola,%20quiero%20pedir%20Promo%20Familiar%20por%20S/69.90"
                       target="_blank"
                       class="whatsapp-btn">

                        <i class="fa-brands fa-whatsapp"></i>

                    </a>

                </div>

            </div>

        </div>

        <!-- CARD 4 -->
        <div class="card">

            <div class="card-img">
                <img src="{{ asset('img/pollo4.jpg') }}" alt="">
            </div>

            <div class="card-content">

                <div class="top">
                    <h3>Banquete Pollero</h3>
                </div>

                <p>
                    Pollo a la brasa + arroz chaufa + papas fritas.
                </p>

                <div class="price">

                    <div class="price-info">

                        <span class="new-price">S/89.90</span>

                        <div class="old">
                            <span class="old-price">S/119.90</span>
                            <span class="discount">25%</span>
                        </div>

                    </div>

                    <a href="https://wa.me/51999999999?text=Hola,%20quiero%20pedir%20Banquete%20Pollero%20por%20S/89.90"
                       target="_blank"
                       class="whatsapp-btn">

                        <i class="fa-brands fa-whatsapp"></i>

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- PROMOCIONES -->
<section class="promos">

    <!-- CARD 1 -->
    <div class="promo-card">

        <div class="promo-img">
            <img src="{{ asset('img/combo1.jpg') }}" alt="">
        </div>

        <div class="promo-info">

            <h2>
                Todo es mejor en Combo
            </h2>

            <p>
                Disfruta de nuestro delicioso pollito a la brasa con tu bebida preferida.
                ¡La combinación perfecta para un momento único!
            </p>

            <a href="/pardos-brasa">
                <button>
                    Pídelo aquí
                </button>
            </a>

        </div>

    </div>

    <!-- CARD 2 -->
    <div class="promo-card">

        <div class="promo-img">
            <img src="{{ asset('img/combo2.jpg') }}" alt="">
        </div>

        <div class="promo-info">

            <h2>
                Elige tu complemento perfecto
            </h2>

            <p>
                Acompaña tu pollo con el complemento ideal y disfruta
                de un sabor único en cada bocado.
            </p>

            <a href="/pardos-brasa">
                <button>
                    Ver más
                </button>
            </a>

        </div>

    </div>

</section>

<!-- FOOTER -->
<footer class="footer">

    <div class="footer-container">

        <div class="footer-box">

            <h3>NOSOTROS</h3>

            <a href="/vision">Visión</a>
            <a href="/valores">Valores</a>

        </div>

        <div class="footer-box">

            <h3>SERVICIOS</h3>

            <a href="/fiestas-infantiles">Fiestas infantiles</a>
            <a href="/vales-giftcards">Vales y Giftcards</a>

        </div>

        <div class="footer-box">

            <h3>INFORMACIÓN ADICIONAL</h3>

            <a href="/valores-nutricionales">Valores nutricionales</a>
            <a href="/desarrollo">Cartilla de alérgenos</a>

        </div>

        <div class="footer-box">

            <h3>POLÍTICAS Y TÉRMINOS</h3>

            <a href="/desarrollo">Políticas de privacidad</a>
            <a href="/desarrollo">Términos y condiciones</a>
            <a href="/desarrollo">Promociones comerciales</a>

        </div>

        <div class="footer-box">

            <h3>CONTÁCTANOS</h3>

            <a href="/desarrollo">Escríbenos</a>
            <a href="/desarrollo">Trabaja con nosotros</a>
            <a href="/desarrollo">Portal proveedores</a>

        </div>

    </div>

    <div class="socials">

        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-x-twitter"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-tiktok"></i>

    </div>

    <hr>

    <div class="copyright">
        © 2026, Sazón de Oro. Todos los derechos reservados
    </div>

</footer>

<script>

    /* --- SLIDER --- */
    let slides = document.querySelectorAll('.slide');
    let index = 0;

    function changeSlide(){
        slides[index].classList.remove('active');
        index++;
        if(index >= slides.length){ index = 0; }
        slides[index].classList.add('active');
    }

    setInterval(changeSlide, 4000);

    /* --- MENÚ HAMBURGUESA --- */
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const mainMenu     = document.getElementById('main-menu');

    hamburgerBtn.addEventListener('click', function () {
        const isOpen = mainMenu.classList.toggle('open');
        hamburgerBtn.classList.toggle('open', isOpen);
        hamburgerBtn.setAttribute('aria-expanded', isOpen);
    });

    mainMenu.querySelectorAll('a').forEach(function (link) {

    link.addEventListener('click', function () {

        // NO cerrar si es el botón Categorías
        if(link.parentElement.classList.contains('dropdown')){
            return;
        }

        mainMenu.classList.remove('open');

        hamburgerBtn.classList.remove('open');

        hamburgerBtn.setAttribute('aria-expanded', false);

    });

});

    // Cerrar al hacer clic fuera
    document.addEventListener('click', function (e) {
        if (!mainMenu.contains(e.target) && !hamburgerBtn.contains(e.target)) {
            mainMenu.classList.remove('open');
            hamburgerBtn.classList.remove('open');
            hamburgerBtn.setAttribute('aria-expanded', false);
        }
    });

    const dropdownBtn = document.querySelector('.dropdown > a');

dropdownBtn.addEventListener('click', function(e){

    e.preventDefault();

    document.querySelector('.dropdown')
    .classList.toggle('active');

});

</script>

</body>
</html>