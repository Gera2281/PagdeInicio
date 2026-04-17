@extends('layouts.base')

@section('titulo', 'Editar producto')

@section('contenido')
    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Editar Producto</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('productos.updateP', $producto->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="imagen" class="form-label"><strong>Imagen del producto</strong></label><br>
                        @if($producto->imagen)
                            <div class="mb-3">
                                <img src="{{ asset($producto->imagen) }}" class="img-thumbnail" width="150" alt="Imagen actual">
                                <p class="text-muted small">Actual</p>
                            </div>
                        @else
                            <p class="text-muted small">No tiene imagen actualmente.</p>
                        @endif
                        <input type="file" class="form-control" id="imagen" name="imagen">
                        <small class="text-muted">Si no seleccionas una imagen nueva, se mantendrá la actual.</small>
                    </div>
                    <div class="mb-3">
                        <label for="titulo" class="form-label"><strong>Título</strong></label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $producto->titulo }}">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label"><strong>Descripción</strong></label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $producto->descripcion }}">
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label"><strong>Precio</strong></label>
                        <input type="text" class="form-control" id="precio" name="precio" value="{{ $producto->precio }}">
                    </div>
                    
                    <div class="mt-4">
                        <a href="{{ route('productos') }}" class="btn btn-outline-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-outline-primary">Actualizar Producto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
