@extends('layouts.app')

@section('content')
<h2>Contáctanos</h2>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<form method="POST" action="{{ route('contacto.enviar') }}">
@csrf

<input class="form-control mb-2" name="nombre" placeholder="Nombre" required>
<input class="form-control mb-2" type="email" name="correo" placeholder="Correo" required>
<textarea class="form-control mb-2" name="mensaje" placeholder="Mensaje" required></textarea>

<button class="btn btn-primary">Enviar</button>
</form>
@endsection
