<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tarea>
 */
class tareaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /*return [
            'nombre' => Str::random(10),
            'descripcion' => Str::random(50),
            'atendido' => 0,
            'entrega' => Carbon::now()->subDays(rand(1, 30)),    
        ];*/
        
        return[
            'nombre' => fake()->sentence(3),
            'descripcion' => fake()->sentence(10),
            'atendido' => fake()->boolean,
            'entrega' => Carbon::now()->subDays(rand(1, 30)),
        ];
    }
}
