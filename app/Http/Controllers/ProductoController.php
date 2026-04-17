<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController
{
     public function inicio()
    {
        return view('Inicio');
    }

    /**
     * Display a listing of the resource.
     */
    public function productos()
    {
        $productos = Producto::all();
        return view('layouts.partials.productos', compact('productos'));
    }

    public function createP()   
    {
        return view('productos.create');
    }

    public function storeP(Request $request)
    {
        $producto = new Producto();
        
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $destinationPath = 'img/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagen')->move($destinationPath, $filename);
            $producto->imagen = $destinationPath . $filename;
        }

        $producto->titulo = $request->titulo;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->save();

        return redirect()->route('productos');
    }

    /**
     * Display the specified resource.
     */
    public function verP(string $id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.verP', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editP(string $id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.editP', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateP(Request $request, string $id)
    {
        $producto = Producto::findOrFail($id);
        
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $destinationPath = 'img/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagen')->move($destinationPath, $filename);
            $producto->imagen = $destinationPath . $filename;
        }

        $producto->titulo = $request->titulo;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->save();

        return redirect()->route('productos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyP(string $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('productos');
    }
}
