@extends('admin.layouts.app')

@section('content')

<div class="topbar">

    <h1>Dashboard</h1>

</div>

<div class="cards">

    <div class="card">

        <i class="fa-solid fa-burger"></i>

        <h2>{{ $productos }}</h2>

        <p>Productos</p>

    </div>

    <div class="card">

        <i class="fa-solid fa-tags"></i>

        <h2>{{ $promociones }}</h2>

        <p>Promociones</p>

    </div>

    <div class="card">

        <i class="fa-solid fa-layer-group"></i>

        <h2>{{ $categorias }}</h2>

        <p>Categorías</p>

    </div>

    <div class="card">

        <i class="fa-brands fa-whatsapp"></i>

        <p>Pedidos WhatsApp</p>

    </div>

</div>

@endsection