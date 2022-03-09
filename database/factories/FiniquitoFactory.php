<?php

namespace Database\Factories;

use App\Models\Finiquito;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FiniquitoFactory extends Factory
{
    protected $model = Finiquito::class;

    public function definition()
    {
        return [
			'empleado_nombre_completo' => $this->faker->name,
			'empleado_nombres' => $this->faker->name,
			'empleado_apellidos' => $this->faker->name,
			'empleado_plaza' => $this->faker->name,
			'empleado_num_plazas' => $this->faker->name,
			'unidad_presupuestaria' => $this->faker->name,
			'linea_de_trabajo' => $this->faker->name,
			'unidad_presupuestaria_mas_linea_de_trabajo' => $this->faker->name,
			'sumatoria_de_horas_laboradas' => $this->faker->name,
			'empleado_fecha_ingreso' => $this->faker->name,
			'empleado_dui' => $this->faker->name,
			'pagaduria' => $this->faker->name,
			'porcentaje_tiempo_laborado' => $this->faker->name,
			'criterio_sumatoria_horas' => $this->faker->name,
			'monto_bruto_compensacion' => $this->faker->name,
			'empleado_municipio' => $this->faker->name,
			'empleado_departamento' => $this->faker->name,
			'empleado_ocupacion' => $this->faker->name,
			'carpeta_centro' => $this->faker->name,
			'esta_en_litigio' => $this->faker->name,
			'fecha_firma' => $this->faker->name,
			'hora_firma' => $this->faker->name,
        ];
    }
}
