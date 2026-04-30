<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class TareaController
{
    public function inicio()
    {
        return view('Inicio');
    }

    public function tareas()
    {
        $tareas = Tarea::all();
        return view('tareas.index', compact('tareas'));
    }

    public function createT()
    {
        return view('tareas.create');
    }

    public function storeT(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:3',
            'descripcion' => 'required|min:5',
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.min' => 'El nombre debe tener al menos 3 caracteres.',
            'descripcion.required' => 'La descripción es obligatoria.',
            'descripcion.min' => 'La descripción debe tener al menos 5 caracteres.',
        ]);

        $tarea = new Tarea();
        $tarea->nombre = $request->nombre;
        $tarea->descripcion = $request->descripcion;
        $tarea->atendido = $request->has('atendido') ? 1 : 0;
        $tarea->entrega = $request->entrega;
        $tarea->save();

        return redirect()->route('tarea.index')->with('success', 'Nueva Tarea creada');
    }

    public function editT($id)
    {
        $tarea = Tarea::findOrFail($id);
        return view('tareas.edit', compact('tarea'));
    }

    public function updateT(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|min:3',
            'descripcion' => 'required|min:5',
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.min' => 'El nombre debe tener al menos 3 caracteres.',
            'descripcion.required' => 'La descripción es obligatoria.',
            'descripcion.min' => 'La descripción debe tener al menos 5 caracteres.',
        ]);

        $tarea = Tarea::findOrFail($id);
        $tarea->nombre = $request->nombre;
        $tarea->descripcion = $request->descripcion;
        $tarea->atendido = $request->has('atendido') ? 1 : 0;
        $tarea->entrega = $request->entrega;
        $tarea->save();

        return redirect()->route('tarea.index')->with('success', 'Tarea actualizada');
    }

    public function destroyT($id)
    {
        $tarea = Tarea::findOrFail($id);
        $tarea->delete();

        return redirect()->route('tarea.index')->with('danger', 'Tarea borrada');
    }

    // Ver detalle
    public function verT($id)
    {
        $tarea = Tarea::findOrFail($id);
        return view('tareas.verT', compact('tarea'));
    }
}
