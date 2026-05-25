<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin | Sazón de Oro</title>

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

<!-- BOTÓN MENÚ -->
<button class="menu-toggle" id="menuBtn" onclick="toggleMenu()">

    <i class="fa-solid fa-bars"></i>

</button>

<div class="overlay" id="overlay" onclick="toggleMenu()"></div>

<div class="admin-container">

    <!-- SIDEBAR -->
    <aside class="sidebar" id="sidebar">

        <div class="logo">

            <img src="{{ asset('img/logo.png') }}" alt="">

            <h2>Sazón Admin</h2>

        </div>

        <nav>

            <a href="/admin">
                <i class="fa-solid fa-house"></i>
                Dashboard
            </a>

            <a href="/admin/productos">
                <i class="fa-solid fa-burger"></i>
                Productos
            </a>

        </nav>

    </aside>

    <!-- CONTENT -->
    <main class="main-content">

        @yield('content')

    </main>

</div>

<script>

function toggleMenu() {

    const sidebar = document.getElementById('sidebar');
    const button = document.getElementById('menuBtn');

    sidebar.classList.toggle('active');

    if(sidebar.classList.contains('active')){

        button.style.display = 'none';

    }else{

        button.style.display = 'block';

    }

}

document.addEventListener('click', function(e){

    const sidebar = document.getElementById('sidebar');
    const button = document.getElementById('menuBtn');

    if(
        !sidebar.contains(e.target) &&
        !button.contains(e.target)
    ){
        sidebar.classList.remove('active');
        button.style.display = 'block';
    }

});

</script>

</body>
</html>