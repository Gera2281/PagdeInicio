<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tarea;

class Tareaseeder extends Seeder
{   
    /**
     * Run the database seeds.
     */
    /*public function run(): void
    {
        Tarea::create([
            'nombre' => 'tareaseed1',
            'descripcion' => 'descripcion de la tareaseed1',
            'atendido' => 0,
            'entrega' => '2022-01-01',
            
        ]);
    }*/
    public function run(): void{
        Tarea::factory()->count(3)->create();
    }
}
