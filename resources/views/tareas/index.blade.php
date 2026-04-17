@extends('layouts.base')

@section('titulo', 'Tareas')

@section('contenido')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">TAREAS ENTREGADAS</h2>
    <a href="{{ route('tareas.createT') }}" class="btn btn-outline-primary">Nueva tarea</a>
</div>
<div class="container mt-4 text-center">
    <table class="table table-striped table-sm">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Atendido</th>
                <th>Fecha de entrega</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tareas as $tarea)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $tarea->nombre }}</td>
                <td>{{ $tarea->descripcion }}</td>
                <td>{{ $tarea->atendido ? 'Sí' : 'No' }}</td>
                <td>{{ $tarea->entrega }}</td>
                <td>
                    <div class="d-flex gap-2 justify-content-center">
                        <a href="{{ route('tareas.editT', $tarea->id) }}" class="btn btn-outline-primary">Editar✏️</a>
                        <a href="{{ route('tareas.verT', $tarea->id) }}" class="btn btn-outline-success">Ver👁️</a>
                        <form action="{{ route('tareas.destroyT', $tarea->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta tarea?')">Eliminar🗑️</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection