@extends('admin.layouts.app')

@section('content')

<div class="topbar">

    <h1>Productos</h1>

    <a href="/admin/productos/create" class="btn btn-add">
        Agregar Producto
    </a>

</div>

<div class="table-responsive">

    <table>

        <thead>

            <tr>

                <th>Imagen</th>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Precio</th>
                <th>Promoción</th>
                <th>Acciones</th>

            </tr>

        </thead>

        <tbody>

            @foreach($productos as $producto)

            <tr>

                <td>
                    <img src="{{ asset('uploads/'.$producto->imagen) }}"
                    width="70">
                </td>

                <td>{{ $producto->nombre }}</td>

                <td>{{ $producto->categoria }}</td>

                <td>S/{{ $producto->precio }}</td>

                <td>

                    @if($producto->promocion)

                        Sí

                    @else

                        No

                    @endif

                </td>

                <td>

                    <a href="/admin/productos/edit/{{ $producto->id }}"
                    class="btn btn-edit">

                        Editar

                    </a>

                    <a href="/admin/productos/delete/{{ $producto->id }}"
                    class="btn btn-delete">

                        Eliminar

                    </a>

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection