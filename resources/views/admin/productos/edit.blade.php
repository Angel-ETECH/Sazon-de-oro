@extends('admin.layouts.app')

@section('content')

<div class="topbar">

    <h1>Editar Producto</h1>

    <a href="/admin/productos" class="btn btn-delete">
        Volver
    </a>

</div>

<div class="form-container">

    <form action="/admin/productos/update/{{ $producto->id }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <label>Nombre del producto</label>

            <input type="text" 
                   name="nombre"
                   value="{{ $producto->nombre }}">
        </div>

        <div class="form-group">
            <label>Descripción</label>

            <textarea name="descripcion" rows="5">{{ $producto->descripcion }}</textarea>
        </div>

        <div class="form-row">

            <div class="form-group">
                <label>Precio</label>

                <input type="text" 
                       name="precio"
                       value="{{ $producto->precio }}">
            </div>

            <div class="form-group">
                <label>Precio anterior</label>

                <input type="text" 
                       name="precio_anterior"
                       value="{{ $producto->precio_anterior }}">
            </div>

        </div>

        <div class="form-row">

            <div class="form-group">
                <label>Descuento (%)</label>

                <input type="text" 
                       name="descuento"
                       value="{{ $producto->descuento }}">
            </div>

            <div class="form-group">
                <label>Categoría</label>

                <select name="categoria">

                    <option value="Pardos a la Brasa"
                        {{ $producto->categoria == 'Pardos a la Brasa' ? 'selected' : '' }}>
                        Pardos a la Brasa
                    </option>

                    <option value="Promociones"
                        {{ $producto->categoria == 'Promociones' ? 'selected' : '' }}>
                        Promociones
                    </option>

                    <option value="Sánguches"
                        {{ $producto->categoria == 'Sánguches' ? 'selected' : '' }}>
                        Sánguches
                    </option>

                    <option value="Ensaladas"
                        {{ $producto->categoria == 'Ensaladas' ? 'selected' : '' }}>
                        Ensaladas
                    </option>

                    <option value="Postres"
                        {{ $producto->categoria == 'Postres' ? 'selected' : '' }}>
                        Postres
                    </option>

                    <option value="Chicharrones"
                        {{ $producto->categoria == 'Chicharrones' ? 'selected' : '' }}>
                        Chicharrones
                    </option>

                </select>
            </div>

        </div>

        <div class="form-group checkbox">

            <input type="checkbox" 
                   name="promocion"
                   {{ $producto->promocion ? 'checked' : '' }}>

            <label>
                Mostrar en promociones
            </label>

        </div>

        <div class="form-group">
            <label>Imagen actual</label>

            <img src="{{ asset('uploads/'.$producto->imagen) }}" class="preview">
        </div>

        <div class="form-group">
            <label>Cambiar imagen</label>

            <input type="file" name="imagen">
        </div>

        <button type="submit" class="btn-save">
            Actualizar Producto
        </button>

    </form>

</div>

@endsection