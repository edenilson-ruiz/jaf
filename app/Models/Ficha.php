<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
	use HasFactory;

    public $timestamps = true;

    protected $table = 'fichas';

    protected $fillable = ['numero_solicitud','poliza_de_silla','tecnico_id','tipo_de_silla','sexo','fecha_ingreso_solicitud','nombre','photo','edad','foto','fecha_nacimiento','direccion','departamento_id','municipio_id','telefono_fijo','telefono_movil','referido_por','diagnostico','altura_en_cm','peso_en_kg','longitud_espalda_in','medida_de_cadera_a_rodilla_in','medida_de_rodilla_a_talon_in','medida_de_cadera_a_cadera_in','nivel_independencia_usuario','silla_para','tipo_de_respaldo','necesita_soporte_de_cabeza','necesita_soporte_para_el_tronco','tipo_de_asiento','otras_observaciones','usuario_nombre','usuario_dui','usuario_parentesco','responsable_nombre','responsable_dui','responsable_parentesco'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tecnico()
    {
        return $this->hasOne('App\Models\Tecnico', 'id', 'tecnico_id');
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }
}
