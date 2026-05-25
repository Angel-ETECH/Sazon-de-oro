<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [

    'nombre',
    'descripcion',
    'precio',
    'precio_anterior',
    'descuento',
    'categoria',
    'subcategoria', // 🔥 AGREGAR ESTO
    'imagen',
    'promocion'

];
}

