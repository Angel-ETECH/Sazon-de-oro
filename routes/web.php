<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Models\Producto;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/

Route::get('/', function (Request $request) {

    $productos = Producto::query();

    if ($request->buscar) {

        $productos->where('nombre', 'LIKE', '%' . $request->buscar . '%');

    }

    $productos = $productos->latest()->get();

    return view('welcome', compact('productos'));

});


/*
|--------------------------------------------------------------------------
| DASHBOARD ADMIN
|--------------------------------------------------------------------------
*/

Route::get('/admin', function () {

    $productos = Producto::count();

    $promociones = Producto::where('promocion', 1)->count();

    $categorias = Producto::distinct('categoria')->count('categoria');

    return view('admin.dashboard', compact(
        'productos',
        'promociones',
        'categorias'
    ));

});


/*
|--------------------------------------------------------------------------
| CATEGORÍAS
|--------------------------------------------------------------------------
*/

// SÁNGUCHES
Route::get('/sanguches', function () {

    $productos = Producto::where('categoria', 'Sánguches')->get();

    return view('sanguches', compact('productos'));

});


// PARDOS A LA BRASA
Route::get('/pardos-brasa', function () {

    $productos = Producto::where('categoria', 'Pardos a la Brasa')->get();

    return view('pardos', compact('productos'));

});


// ENSALADAS
Route::get('/ensaladas', function () {

    $fresca = Producto::where('categoria', 'Ensaladas')
        ->where('subcategoria', 'Fresca')
        ->get();

    $cocida = Producto::where('categoria', 'Ensaladas')
        ->where('subcategoria', 'Cocida')
        ->get();

    $delicia = Producto::where('categoria', 'Ensaladas')
        ->where('subcategoria', 'Delicia')
        ->get();

    return view('ensaladas', compact(
        'fresca',
        'cocida',
        'delicia'
    ));

});


// CHICHARRONES
Route::get('/chicharrones', function () {

    $productos = Producto::where('categoria', 'Chicharrones')->get();

    return view('chicharrones', compact('productos'));

});


// POSTRES
Route::get('/postres', function () {

    $productos = Producto::where('categoria', 'Postres')->get();

    return view('postres', compact('productos'));

});


// PROMOCIONES
Route::get('/promociones', function () {

    $productos = Producto::where('categoria', 'Promociones')->get();

    return view('promociones', compact('productos'));

});


/*
|--------------------------------------------------------------------------
| BUSCADOR
|--------------------------------------------------------------------------
*/

Route::get('/buscar', function (Request $request) {

    $buscar = strtolower(trim($request->buscar));

    if ($buscar == 'sanguches') {
        return redirect('/sanguches');
    }

    if ($buscar == 'pardos') {
        return redirect('/pardos-brasa');
    }

    if ($buscar == 'ensaladas') {
        return redirect('/ensaladas');
    }

    if ($buscar == 'chicharrones') {
        return redirect('/chicharrones');
    }

    if ($buscar == 'postres') {
        return redirect('/postres');
    }

    if ($buscar == 'promociones') {
        return redirect('/promociones');
    }

    $producto = Producto::where(
        'nombre',
        'LIKE',
        '%' . $buscar . '%'
    )->first();

    if (!$producto) {
        return redirect('/');
    }

    switch ($producto->categoria) {

        case 'Sánguches':
            return redirect('/sanguches');

        case 'Pardos a la Brasa':
            return redirect('/pardos-brasa');

        case 'Ensaladas':
            return redirect('/ensaladas');

        case 'Chicharrones':
            return redirect('/chicharrones');

        case 'Postres':
            return redirect('/postres');

        case 'Promociones':
            return redirect('/promociones');

        default:
            return redirect('/');
    }

});

/*
|--------------------------------------------------------------------------
| ADMIN PRODUCTOS
|--------------------------------------------------------------------------
*/

Route::get('/admin/productos', [ProductoController::class, 'index']);

Route::get('/admin/productos/create', [ProductoController::class, 'create']);

Route::post('/admin/productos/store', [ProductoController::class, 'store']);

Route::get('/admin/productos/edit/{id}', [ProductoController::class, 'edit']);

Route::post('/admin/productos/update/{id}', [ProductoController::class, 'update']);

Route::get('/admin/productos/delete/{id}', [ProductoController::class, 'destroy']);

Route::get('/vision', function () {
    return view('vision');
});

Route::get('/valores', function () {
    return view('valores');
});

Route::get('/fiestas-infantiles', function () {
    return view('fiestas');
});

Route::get('/vales-giftcards', function () {
    return view('vales');
});

Route::get('/valores-nutricionales', function () {
    return view('nutricionales');
});

Route::get('/desarrollo', function () {
    return view('desarrollo');
});