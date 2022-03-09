<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finiquito extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'finiquitos';

    protected $fillable = ['empleado_nombre_completo','empleado_nombres','empleado_apellidos','empleado_plaza','empleado_num_plazas','unidad_presupuestaria','linea_de_trabajo','unidad_presupuestaria_mas_linea_de_trabajo','sumatoria_de_horas_laboradas','empleado_fecha_ingreso','empleado_dui','pagaduria','porcentaje_tiempo_laborado','criterio_sumatoria_horas','monto_bruto_compensacion','empleado_municipio','empleado_departamento','empleado_ocupacion','carpeta_centro','esta_en_litigio','fecha_firma','hora_firma'];
	
}
