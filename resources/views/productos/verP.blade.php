@extends('layouts.base')

@section('titulo', 'Ver Detalle del Producto')

@section('contenido')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-info text-white">
            <h4 class="mb-0">Detalle del Producto #{{ $producto->id }}</h4>
        </div>
        <div class="card-body">
            @if($producto->imagen)
                <div class="mb-4 text-center">
                    <img src="{{ asset($producto->imagen) }}" class="img-fluid rounded" style="max-height: 250px;" alt="Imagen de {{ $producto->titulo }}">
                </div>
            @endif
            <h5 class="card-title"><strong>Título:</strong> {{ $producto->titulo }}</h5>
            <p class="card-text"><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
            <p class="card-text">
                <strong>Precio:</strong> 
                @if($producto->precio)
                    <span class="badge bg-success">${{ $producto->precio }}</span>
                @else
                    <span class="badge bg-secondary">$0.00</span>
                @endif
            </p>
        </div>
        <div class="card-footer">
            <div class="d-flex gap-2">
                <a href="{{ route('productos') }}" class="btn btn-secondary">Volver</a>
                <a href="{{ route('productos.editP', $producto->id) }}" class="btn btn-warning">Editar Producto</a>
            </div>
        </div>
    </div>
</div>
@endsection
