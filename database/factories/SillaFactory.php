<?php

namespace Database\Factories;

use App\Models\Silla;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SillaFactory extends Factory
{
    protected $model = Silla::class;

    public function definition()
    {
        return [
			'codigo' => $this->faker->name,
			'fecha_de_ingreso_de_la_solicitud' => $this->faker->name,
			'nombre' => $this->faker->name,
			'fecha_de_nacimiento' => $this->faker->name,
			'edad' => $this->faker->name,
			'direccion' => $this->faker->name,
			'departamento' => $this->faker->name,
			'municipio' => $this->faker->name,
			'telefono_fijo' => $this->faker->name,
			'telefono_celular' => $this->faker->name,
			'referido_por' => $this->faker->name,
			'diagnostico_de_su_discapacidad' => $this->faker->name,
			'fecha_de_su_accidente' => $this->faker->name,
			'altura_en_cm' => $this->faker->name,
			'peso_en_kilogramos_' => $this->faker->name,
			'longitud_de_la_espalda_en_pulgadas' => $this->faker->name,
			'medida_de_la_cadera_a_la_rodilla_en_pulgadas' => $this->faker->name,
			'medida_de_la_rodilla_al_talon_en_pulgadas' => $this->faker->name,
			'anchura_de_las_caderas_en_pulgadas' => $this->faker->name,
			'tipo_de_silla_de_ruedas' => $this->faker->name,
			'nivel_de_independencia_del_usuario' => $this->faker->name,
			'silla_para' => $this->faker->name,
			'tipo_de_respaldo' => $this->faker->name,
			'necesita_soporte_de_cabeza' => $this->faker->name,
			'necesita_soporte_para_el_tronco' => $this->faker->name,
			'tipo_de_asiento' => $this->faker->name,
			'otras_observaciones' => $this->faker->name,
			'persona_que_recolecta_la_informacion' => $this->faker->name,
        ];
    }
}
