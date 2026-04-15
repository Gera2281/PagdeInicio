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
        $producto->imagen = $request->imagen;
        $producto->titulo = $request->titulo;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->save();

        return redirect()->route('productos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
