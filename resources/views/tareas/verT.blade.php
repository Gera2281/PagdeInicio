@extends('layouts.base')

@section('titulo', 'Ver Detalle de Tarea')

@section('contenido')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-info text-white">
            <h4 class="mb-0">Detalle de la Tarea #{{ $tarea->id }}</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title"><strong>Nombre:</strong> {{ $tarea->nombre }}</h5>
            <p class="card-text"><strong>Descripción:</strong> {{ $tarea->descripcion }}</p>
            <p class="card-text">
                <strong>Atendido:</strong> 
                @if($tarea->atendido)
                    <span class="badge bg-success">Sí</span>
                @else
                    <span class="badge bg-secondary">No</span>
                @endif
            </p>
            <p class="card-text"><strong>Fecha de entrega:</strong> {{ $tarea->entrega }}</p>
        </div>
        <div class="card-footer">
            <div class="d-flex gap-2">
                <a href="{{ route('tareas') }}" class="btn btn-secondary">Volver</a>
                <a href="{{ route('tareas.editT', $tarea->id) }}" class="btn btn-primary">Editar Tarea</a>
            </div>
        </div>
    </div>
</div>
@endsection
