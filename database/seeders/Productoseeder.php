<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class Productoseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create([
            'imagen' => 'img/producto4.jpg',
            'titulo' => 'Productoseed',
            'descripcion' => 'Descripción productoseed',
            'precio' => 150.50,
        ]);
    }
}
