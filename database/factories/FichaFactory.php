<?php

namespace Database\Factories;

use App\Models\Ficha;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FichaFactory extends Factory
{
    protected $model = Ficha::class;

    public function definition()
    {
        return [
			'numero_solicitud' => $this->faker->name,
			'poliza_de_silla' => $this->faker->name,
			'tecnico_id' => $this->faker->name,
			'tipo_de_silla' => $this->faker->name,
			'sexo' => $this->faker->name,
			'fecha_ingreso_solicitud' => $this->faker->name,
			'nombre' => $this->faker->name,
			'edad' => $this->faker->name,
			'fecha_nacimiento' => $this->faker->name,
			'direccion' => $this->faker->name,
			'departamento' => $this->faker->name,
			'municipio' => $this->faker->name,
			'telefono_fijo' => $this->faker->name,
			'telefono_movil' => $this->faker->name,
			'referido_por' => $this->faker->name,
			'diagnostico' => $this->faker->name,
			'altura_en_cm' => $this->faker->name,
			'peso_en_kg' => $this->faker->name,
			'longitud_espalda_in' => $this->faker->name,
			'medida_de_cadera_a_rodilla_in' => $this->faker->name,
			'medida_de_rodilla_a_talon_in' => $this->faker->name,
			'medida_de_cadera_a_cadera_in' => $this->faker->name,
			'nivel_independencia_usuario' => $this->faker->name,
			'silla_para' => $this->faker->name,
			'tipo_de_respaldo' => $this->faker->name,
			'necesita_soporte_de_cabeza' => $this->faker->name,
			'necesita_soporte_para_el_tronco' => $this->faker->name,
			'tipo_de_asiento' => $this->faker->name,
			'otras_observaciones' => $this->faker->name,
			'usuario_nombre' => $this->faker->name,
			'usuario_dui' => $this->faker->name,
			'usuario_parentesco' => $this->faker->name,
			'responsable_nombre' => $this->faker->name,
			'responsable_dui' => $this->faker->name,
			'responsable_parentesco' => $this->faker->name,
        ];
    }
}
