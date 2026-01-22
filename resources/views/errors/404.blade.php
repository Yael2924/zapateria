@extends('layouts.app')

@section('title', 'Página no encontrada')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="text-center">

        {{-- Código --}}
        <h1 class="display-1 fw-bold text-danger">404</h1>

        {{-- Mensaje --}}
        <h3 class="mb-3">¡Ups! Página no encontrada</h3>
        <p class="text-muted mb-4">
            La página que buscas no existe o fue movida.<br>
            No te preocupes, puedes volver al inicio o explorar nuestros productos.
        </p>

        {{-- Botones --}}
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="{{ route('inicio') }}" class="btn btn-primary px-4">
                🏠 Ir al inicio
            </a>

            <a href="{{ route('servicios') }}" class="btn btn-outline-secondary px-4">
                👟 Ver productos
            </a>
        </div>

        {{-- Extra visual --}}
        <div class="mt-4">
            <span style="font-size: 3rem;">👟</span>
        </div>

    </div>
</div>
@endsection
