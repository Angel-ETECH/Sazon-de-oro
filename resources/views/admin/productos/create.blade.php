@extends('admin.layouts.app')

@section('content')

<div class="topbar">

    <h1>Crear Producto</h1>

    <a href="/admin/productos" class="btn btn-delete">
        Volver
    </a>

</div>

<div class="form-container">

    <form action="/admin/productos/store" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Nombre del producto</label>
            <input type="text" name="nombre" required>
        </div>

        <div class="form-group">
            <label>Descripción</label>
            <textarea name="descripcion" rows="5" required></textarea>
        </div>

        <div class="form-row">

            <div class="form-group">
                <label>Precio</label>
                <input type="number" step="0.01" name="precio" required>
            </div>

            <div class="form-group">
                <label>Precio anterior</label>
                <input type="number" step="0.01" name="precio_anterior">
            </div>

        </div>

        <div class="form-row">

            <div class="form-group">
                <label>Descuento (%)</label>
                <input type="number" name="descuento">
            </div>

            <div class="form-group">
    <label>Categoría</label>
    <select name="categoria" id="categoria" required onchange="toggleSubcategoria()">
        <option value="Promociones">Promociones</option>
        <option value="Sánguches">Sánguches</option>
        <option value="Pardos a la Brasa">Pardos a la Brasa</option>
        <option value="Ensaladas">Ensaladas</option>
        <option value="Chicharrones">Chicharrones</option>
        <option value="Postres">Postres</option>
    </select>
</div>

<!-- 🔥 SOLO ENSALADAS -->
<div class="form-group" id="subcategoria-box" style="display:none;">
    <label>Subcategoría</label>
    <select name="subcategoria">
        <option value="">-- Seleccionar --</option>
        <option value="Fresca">Fresca</option>
        <option value="Cocida">Cocida</option>
        <option value="Delicia">Delicia</option>
    </select>
</div>

        </div>

        <div class="form-group checkbox">
            <input type="checkbox" name="promocion">
            <label>Mostrar en promociones</label>
        </div>

        <div class="form-group">
            <label>Imagen</label>
            <input type="file" name="imagen">
        </div>

        <button type="submit" class="btn-save">
            Guardar Producto
        </button>

    </form>

</div>

<script>
function toggleSubcategoria() {
    let categoria = document.getElementById('categoria').value;
    let box = document.getElementById('subcategoria-box');
    let sub = box.querySelector('select');

    if (categoria === 'Ensaladas') {
        box.style.display = 'block';
    } else {
        box.style.display = 'none';
        sub.value = ""; // limpia valor si cambia de categoría
    }
}
</script>

@endsection