@extends('layouts.app')

@section('title', 'Resultados de búsqueda - SoleVault')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-4">Resultados de búsqueda</h1>
            
            @if(request('q'))
                <p class="text-muted">Mostrando resultados para: <strong>"{{ request('q') }}"</strong></p>
            @endif
            
            @if(count($resultados) > 0)
                <div class="alert alert-success">
                    Encontramos {{ $total }} producto(s) relacionados
                </div>
                
                <div class="row mt-4">
                    @foreach($resultados as $producto)
                    <div class="col-md-4 mb-4">
                        <div class="card product-card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $producto['nombre'] }}</h5>
                                <h6 class="card-subtitle mb-2 text-gold">{{ $producto['marca'] }}</h6>
                                <p class="card-text">Precio: ${{ number_format($producto['precio'], 0, '.', ',') }} MXN</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="alert alert-warning">
                    No encontramos productos que coincidan con tu búsqueda.
                    <a href="{{ route('servicios') }}" class="alert-link">Ver todos los productos</a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection