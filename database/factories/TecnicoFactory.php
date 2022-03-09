<?php

namespace Database\Factories;

use App\Models\Tecnico;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TecnicoFactory extends Factory
{
    protected $model = Tecnico::class;

    public function definition()
    {
        return [
			'nombres' => $this->faker->name,
			'apellidos' => $this->faker->name,
			'institucion' => $this->faker->name,
        ];
    }
}
