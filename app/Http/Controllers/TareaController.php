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
        $tarea = new Tarea();
        $tarea->nombre = $request->nombre;
        $tarea->descripcion = $request->descripcion;
        $tarea->atendido = $request->has('atendido') ? 1 : 0;
        $tarea->entrega = $request->entrega;
        $tarea->save();

        return redirect()->route('tareas');
    }

    public function editT($id)
    {
        $tarea = Tarea::findOrFail($id);
        return view('tareas.edit', compact('tarea'));
    }

    public function updateT(Request $request, $id)
    {
        $tarea = Tarea::findOrFail($id);
        $tarea->nombre = $request->nombre;
        $tarea->descripcion = $request->descripcion;
        $tarea->atendido = $request->has('atendido') ? 1 : 0;
        $tarea->entrega = $request->entrega;
        $tarea->save();

        return redirect()->route('tareas');
    }

    public function destroyT($id)
    {
        $tarea = Tarea::findOrFail($id);
        $tarea->delete();

        return redirect()->route('tareas');
    }

    // Ver detalle
    public function verT($id)
    {
        $tarea = Tarea::findOrFail($id);
        return view('tareas.verT', compact('tarea'));
    }
}
