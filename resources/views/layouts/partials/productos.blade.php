@extends('layouts.base')

@section('titulo', 'Productos')

@section('contenido')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">Productos más vendidos</h2>
    <a href="{{ route('productos.createP') }}" class="btn btn-outline-primary">Crear producto</a>
</div>
<div class="row g-5 text-center">
    @foreach ($productos as $producto)
    <div class="col-6 col-md-4 col-lg-3">
        @component('layouts.componentes.card')
        @slot('image', $producto->imagen)
        @slot('title', $producto->titulo)
        @slot('content', $producto->descripcion)
        @slot('price', $producto->precio)
        @endcomponent
        <div class="d-flex justify-content-center gap-2">
            <a href="{{ route('productos.editP', $producto->id) }}" class="btn btn-outline-primary">Editar✏️</a>
            <a href="{{ route('productos.verP', $producto->id) }}" class="btn btn-outline-success">Ver👁️</a>
            <form action="{{ route('productos.destroyP', $producto->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta tarea?')">Eliminar🗑️</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
</div>
@endsection