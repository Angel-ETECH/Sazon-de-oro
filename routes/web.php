<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sanguches', function () {
    return view('sanguches');
});

Route::get('/pardos-brasa', function () {
    return view('pardos');
});

Route::get('/ensaladas', function () {
    return view('ensaladas');
});

Route::get('/chicharrones', function () {
    return view('chicharrones');
});

Route::get('/postres', function () {
    return view('postres');
});

Route::get('/promociones', function () {
    return view('promociones');
});