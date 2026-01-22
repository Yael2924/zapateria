<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginasController;
/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [PaginasController::class, 'inicio'])->name('inicio');
Route::get('/nosotros', [PaginasController::class, 'nosotros'])->name('nosotros');
Route::get('/servicios', [PaginasController::class, 'servicios'])->name('servicios');
Route::get('/contacto', [PaginasController::class, 'contacto'])->name('contacto');
Route::get('/ayuda', [PaginasController::class, 'ayuda'])->name('ayuda');
Route::get('/buzon', [PaginasController::class, 'buzon'])->name('buzon');
Route::get('/mapa', [PaginasController::class, 'mapa'])->name('mapa');
Route::get('/chat', [PaginasController::class, 'chat'])->name('chat');

Route::get('/buscar', [PaginasController::class, 'buscar'])->name('buscar');

