<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

// Solo la búsqueda es funcional
Route::get('/buscar', [ProductoController::class, 'buscar'])->name('buscar');

// Vistas demostrativas (sin funcionalidad)
Route::get('/registrar', function () {
    return view('auth.registrar');
})->name('registrar');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/recuperar', function () {
    return view('auth.recuperar');
})->name('recuperar');