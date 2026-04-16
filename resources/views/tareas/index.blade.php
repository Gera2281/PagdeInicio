@extends('layouts.base')

@section('titulo', 'Tareas')

@section('contenido')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">Tareas enviadas</h2>
    <a href="{{ route('tareas.createT') }}" class="btn btn-primary mb-2 ">Nueva tarea</a>
</div>
<div class="container mt-4">
    <table class="table table-bordered table-sm">
        <thead class="table-light">
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
                <td>{{ $tarea->id }}</td>
                <td>{{ $tarea->nombre }}</td>
                <td>{{ $tarea->descripcion }}</td>
                <td>{{ $tarea->atendido }}</td>
                <td>{{ $tarea->entrega }}</td>
                <td>
                    <div class="d-flex gap-2">
                        <a href="{{ route('tareas.editT', $tarea->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <a href="{{ route('tareas.verT', $tarea->id) }}" class="btn btn-info btn-sm text-white">Ver</a>
                        <form action="{{ route('tareas.destroyT', $tarea->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta tarea?')">Eliminar</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection