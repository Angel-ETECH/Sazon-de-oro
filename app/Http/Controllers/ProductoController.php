<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    // LISTAR PRODUCTOS

    public function index()
    {
        $productos = Producto::all();

        return view('admin.productos.index', compact('productos'));
    }

    // FORM CREAR

    public function create()
    {
        return view('admin.productos.create');
    }

    // GUARDAR PRODUCTO

    public function store(Request $request)
    {
        $imagen = time().'.'.$request->imagen->extension();

        $request->imagen->move(public_path('uploads'), $imagen);

        Producto::create([

    'nombre' => $request->nombre,

    'descripcion' => $request->descripcion,

    'precio' => $request->precio,

    'precio_anterior' => $request->precio_anterior,

    'descuento' => $request->descuento,

    'categoria' => $request->categoria,

    // 🔥 SOLO ENSALADAS TIENE SUBCATEGORÍA
    'subcategoria' => $request->categoria == 'Ensaladas'
        ? $request->subcategoria
        : null,

    'imagen' => $imagen,

    'promocion' => $request->has('promocion')

]);

        return redirect('/admin/productos');
    }

    // FORM EDITAR

    public function edit($id)
{
    $producto = Producto::findOrFail($id);

    return view('admin.productos.edit', compact('producto'));
}

    // ACTUALIZAR

    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);

        if($request->hasFile('imagen')){

            $imagen = time().'.'.$request->imagen->extension();

            $request->imagen->move(public_path('uploads'), $imagen);

            $producto->imagen = $imagen;
        }

        $producto->nombre = $request->nombre;

        $producto->descripcion = $request->descripcion;

        $producto->precio = $request->precio;

        $producto->precio_anterior = $request->precio_anterior;

        $producto->descuento = $request->descuento;

        $producto->categoria = $request->categoria;


        $producto->promocion = $request->has('promocion');

        $producto->save();

        return redirect('/admin/productos');
    }

    // ELIMINAR

    public function destroy($id)
    {
        Producto::destroy($id);

        return redirect('/admin/productos');
    }
}