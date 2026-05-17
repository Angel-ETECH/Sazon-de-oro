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

        <div class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="">
        </div>

        <nav class="menu">
            <a href="#">Promociones</a>
            <a href="#">Categorías</a>
            <a href="#">Carta Salón</a>
        </nav>

        <div class="search-box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="¿Qué se te antoja?">
        </div>

        <div class="buttons">
            <button class="pedido">
                <i class="fa-solid fa-bag-shopping"></i>
                Mi Pedido
            </button>

            <button class="login">
                <i class="fa-regular fa-user"></i>
                Ingresar
            </button>
        </div>

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

                    <i class="fa-regular fa-heart"></i>
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

                    <button>
                        <i class="fa-solid fa-plus"></i>
                    </button>

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

                    <i class="fa-regular fa-heart"></i>
                </div>

                <p>
                    Pollo a la brasa con papas fritas y ensalada fresca.
                </p>

                <div class="price">

                    <div class="price-info">
                        <span class="new-price">S/89.90</span>
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
                <img src="{{ asset('img/pollo3.jpg') }}" alt="">
            </div>

            <div class="card-content">

                <div class="top">
                    <h3>Promo Familiar</h3>

                    <i class="fa-regular fa-heart"></i>
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

                    <button>
                        <i class="fa-solid fa-plus"></i>
                    </button>

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

                    <i class="fa-regular fa-heart"></i>
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

                    <button>
                        <i class="fa-solid fa-plus"></i>
                    </button>

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

            <button>
                Pídelo aquí
            </button>

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

            <button>
                Ver más
            </button>

        </div>

    </div>

</section>
<!-- FOOTER -->

<footer class="footer">

    <div class="footer-container">

        <div class="footer-box">
            <h3>NOSOTROS</h3>

            <a href="#">Historia</a>
            <a href="#">Visión</a>
            <a href="#">Valores</a>
            <a href="#">Restaurantes</a>
        </div>

        <div class="footer-box">
            <h3>SERVICIOS</h3>

            <a href="#">Reservas</a>
            <a href="#">Catering</a>
            <a href="#">Fiestas infantiles</a>
            <a href="#">Vales y Giftcards</a>
        </div>

        <div class="footer-box">
            <h3>INFORMACIÓN ADICIONAL</h3>

            <a href="#">Valores nutricionales</a>
            <a href="#">Cartilla de alérgenos</a>
        </div>

        <div class="footer-box">
            <h3>POLÍTICAS Y TÉRMINOS</h3>

            <a href="#">Políticas de privacidad</a>
            <a href="#">Términos y condiciones</a>
            <a href="#">Promociones comerciales</a>
            <a href="#">Giftcards</a>
        </div>

        <div class="footer-box">
            <h3>CONTÁCTANOS</h3>

            <a href="#">Escríbenos</a>
            <a href="#">Trabaja con nosotros</a>
            <a href="#">Portal proveedores</a>
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
    let slides = document.querySelectorAll('.slide');
    let index = 0;

    function changeSlide(){

        slides[index].classList.remove('active');

        index++;

        if(index >= slides.length){
            index = 0;
        }

        slides[index].classList.add('active');
    }

    setInterval(changeSlide, 4000);
</script>

</body>
</html>
