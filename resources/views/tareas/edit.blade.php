@extends('layouts.base')

@section('titulo', 'Editar tarea')

@section('contenido')
<h2 class="text-center mb-4">Editar tarea</h2>
<div class="container mt-4">
    <form action="{{ route('tareas.updateT', $tarea->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $tarea->nombre }}">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $tarea->descripcion }}">
        </div>
        <div class="mb-3">
            <label for="atendido" class="form-label">Atendido</label>
            <input type="checkbox" class="form-check-input" id="atendido" name="atendido" {{ $tarea->atendido ? 'checked' : '' }}>
        </div>
        <div class="mb-3">
            <label for="entrega" class="form-label">Fecha de entrega</label>
            <input type="date" class="form-control" id="entrega" name="entrega" value="{{ $tarea->entrega }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('tareas') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
