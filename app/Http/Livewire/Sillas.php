<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Silla;

class Sillas extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $codigo, $fecha_de_ingreso_de_la_solicitud, $nombre, $fecha_de_nacimiento, $edad, $direccion, $departamento, $municipio, $telefono_fijo, $telefono_celular, $referido_por, $diagnostico_de_su_discapacidad, $fecha_de_su_accidente, $altura_en_cm, $peso_en_kilogramos_, $longitud_de_la_espalda_en_pulgadas, $medida_de_la_cadera_a_la_rodilla_en_pulgadas, $medida_de_la_rodilla_al_talon_en_pulgadas, $anchura_de_las_caderas_en_pulgadas, $tipo_de_silla_de_ruedas, $nivel_de_independencia_del_usuario, $silla_para, $tipo_de_respaldo, $necesita_soporte_de_cabeza, $necesita_soporte_para_el_tronco, $tipo_de_asiento, $otras_observaciones, $persona_que_recolecta_la_informacion;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.sillas.view', [
            'sillas' => Silla::latest()
						->orWhere('codigo', 'LIKE', $keyWord)
						->orWhere('fecha_de_ingreso_de_la_solicitud', 'LIKE', $keyWord)
						->orWhere('nombre', 'LIKE', $keyWord)
						->orWhere('fecha_de_nacimiento', 'LIKE', $keyWord)
						->orWhere('edad', 'LIKE', $keyWord)
						->orWhere('direccion', 'LIKE', $keyWord)
						->orWhere('departamento', 'LIKE', $keyWord)
						->orWhere('municipio', 'LIKE', $keyWord)
						->orWhere('telefono_fijo', 'LIKE', $keyWord)
						->orWhere('telefono_celular', 'LIKE', $keyWord)
						->orWhere('referido_por', 'LIKE', $keyWord)
						->orWhere('diagnostico_de_su_discapacidad', 'LIKE', $keyWord)
						->orWhere('fecha_de_su_accidente', 'LIKE', $keyWord)
						->orWhere('altura_en_cm', 'LIKE', $keyWord)
						->orWhere('peso_en_kilogramos_', 'LIKE', $keyWord)
						->orWhere('longitud_de_la_espalda_en_pulgadas', 'LIKE', $keyWord)
						->orWhere('medida_de_la_cadera_a_la_rodilla_en_pulgadas', 'LIKE', $keyWord)
						->orWhere('medida_de_la_rodilla_al_talon_en_pulgadas', 'LIKE', $keyWord)
						->orWhere('anchura_de_las_caderas_en_pulgadas', 'LIKE', $keyWord)
						->orWhere('tipo_de_silla_de_ruedas', 'LIKE', $keyWord)
						->orWhere('nivel_de_independencia_del_usuario', 'LIKE', $keyWord)
						->orWhere('silla_para', 'LIKE', $keyWord)
						->orWhere('tipo_de_respaldo', 'LIKE', $keyWord)
						->orWhere('necesita_soporte_de_cabeza', 'LIKE', $keyWord)
						->orWhere('necesita_soporte_para_el_tronco', 'LIKE', $keyWord)
						->orWhere('tipo_de_asiento', 'LIKE', $keyWord)
						->orWhere('otras_observaciones', 'LIKE', $keyWord)
						->orWhere('persona_que_recolecta_la_informacion', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->codigo = null;
		$this->fecha_de_ingreso_de_la_solicitud = null;
		$this->nombre = null;
		$this->fecha_de_nacimiento = null;
		$this->edad = null;
		$this->direccion = null;
		$this->departamento = null;
		$this->municipio = null;
		$this->telefono_fijo = null;
		$this->telefono_celular = null;
		$this->referido_por = null;
		$this->diagnostico_de_su_discapacidad = null;
		$this->fecha_de_su_accidente = null;
		$this->altura_en_cm = null;
		$this->peso_en_kilogramos_ = null;
		$this->longitud_de_la_espalda_en_pulgadas = null;
		$this->medida_de_la_cadera_a_la_rodilla_en_pulgadas = null;
		$this->medida_de_la_rodilla_al_talon_en_pulgadas = null;
		$this->anchura_de_las_caderas_en_pulgadas = null;
		$this->tipo_de_silla_de_ruedas = null;
		$this->nivel_de_independencia_del_usuario = null;
		$this->silla_para = null;
		$this->tipo_de_respaldo = null;
		$this->necesita_soporte_de_cabeza = null;
		$this->necesita_soporte_para_el_tronco = null;
		$this->tipo_de_asiento = null;
		$this->otras_observaciones = null;
		$this->persona_que_recolecta_la_informacion = null;
    }

    public function store()
    {
        $this->validate([
        ]);

        Silla::create([ 
			'codigo' => $this-> codigo,
			'fecha_de_ingreso_de_la_solicitud' => $this-> fecha_de_ingreso_de_la_solicitud,
			'nombre' => $this-> nombre,
			'fecha_de_nacimiento' => $this-> fecha_de_nacimiento,
			'edad' => $this-> edad,
			'direccion' => $this-> direccion,
			'departamento' => $this-> departamento,
			'municipio' => $this-> municipio,
			'telefono_fijo' => $this-> telefono_fijo,
			'telefono_celular' => $this-> telefono_celular,
			'referido_por' => $this-> referido_por,
			'diagnostico_de_su_discapacidad' => $this-> diagnostico_de_su_discapacidad,
			'fecha_de_su_accidente' => $this-> fecha_de_su_accidente,
			'altura_en_cm' => $this-> altura_en_cm,
			'peso_en_kilogramos_' => $this-> peso_en_kilogramos_,
			'longitud_de_la_espalda_en_pulgadas' => $this-> longitud_de_la_espalda_en_pulgadas,
			'medida_de_la_cadera_a_la_rodilla_en_pulgadas' => $this-> medida_de_la_cadera_a_la_rodilla_en_pulgadas,
			'medida_de_la_rodilla_al_talon_en_pulgadas' => $this-> medida_de_la_rodilla_al_talon_en_pulgadas,
			'anchura_de_las_caderas_en_pulgadas' => $this-> anchura_de_las_caderas_en_pulgadas,
			'tipo_de_silla_de_ruedas' => $this-> tipo_de_silla_de_ruedas,
			'nivel_de_independencia_del_usuario' => $this-> nivel_de_independencia_del_usuario,
			'silla_para' => $this-> silla_para,
			'tipo_de_respaldo' => $this-> tipo_de_respaldo,
			'necesita_soporte_de_cabeza' => $this-> necesita_soporte_de_cabeza,
			'necesita_soporte_para_el_tronco' => $this-> necesita_soporte_para_el_tronco,
			'tipo_de_asiento' => $this-> tipo_de_asiento,
			'otras_observaciones' => $this-> otras_observaciones,
			'persona_que_recolecta_la_informacion' => $this-> persona_que_recolecta_la_informacion
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Silla Successfully created.');
    }

    public function edit($id)
    {
        $record = Silla::findOrFail($id);

        $this->selected_id = $id; 
		$this->codigo = $record-> codigo;
		$this->fecha_de_ingreso_de_la_solicitud = $record-> fecha_de_ingreso_de_la_solicitud;
		$this->nombre = $record-> nombre;
		$this->fecha_de_nacimiento = $record-> fecha_de_nacimiento;
		$this->edad = $record-> edad;
		$this->direccion = $record-> direccion;
		$this->departamento = $record-> departamento;
		$this->municipio = $record-> municipio;
		$this->telefono_fijo = $record-> telefono_fijo;
		$this->telefono_celular = $record-> telefono_celular;
		$this->referido_por = $record-> referido_por;
		$this->diagnostico_de_su_discapacidad = $record-> diagnostico_de_su_discapacidad;
		$this->fecha_de_su_accidente = $record-> fecha_de_su_accidente;
		$this->altura_en_cm = $record-> altura_en_cm;
		$this->peso_en_kilogramos_ = $record-> peso_en_kilogramos_;
		$this->longitud_de_la_espalda_en_pulgadas = $record-> longitud_de_la_espalda_en_pulgadas;
		$this->medida_de_la_cadera_a_la_rodilla_en_pulgadas = $record-> medida_de_la_cadera_a_la_rodilla_en_pulgadas;
		$this->medida_de_la_rodilla_al_talon_en_pulgadas = $record-> medida_de_la_rodilla_al_talon_en_pulgadas;
		$this->anchura_de_las_caderas_en_pulgadas = $record-> anchura_de_las_caderas_en_pulgadas;
		$this->tipo_de_silla_de_ruedas = $record-> tipo_de_silla_de_ruedas;
		$this->nivel_de_independencia_del_usuario = $record-> nivel_de_independencia_del_usuario;
		$this->silla_para = $record-> silla_para;
		$this->tipo_de_respaldo = $record-> tipo_de_respaldo;
		$this->necesita_soporte_de_cabeza = $record-> necesita_soporte_de_cabeza;
		$this->necesita_soporte_para_el_tronco = $record-> necesita_soporte_para_el_tronco;
		$this->tipo_de_asiento = $record-> tipo_de_asiento;
		$this->otras_observaciones = $record-> otras_observaciones;
		$this->persona_que_recolecta_la_informacion = $record-> persona_que_recolecta_la_informacion;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
        ]);

        if ($this->selected_id) {
			$record = Silla::find($this->selected_id);
            $record->update([ 
			'codigo' => $this-> codigo,
			'fecha_de_ingreso_de_la_solicitud' => $this-> fecha_de_ingreso_de_la_solicitud,
			'nombre' => $this-> nombre,
			'fecha_de_nacimiento' => $this-> fecha_de_nacimiento,
			'edad' => $this-> edad,
			'direccion' => $this-> direccion,
			'departamento' => $this-> departamento,
			'municipio' => $this-> municipio,
			'telefono_fijo' => $this-> telefono_fijo,
			'telefono_celular' => $this-> telefono_celular,
			'referido_por' => $this-> referido_por,
			'diagnostico_de_su_discapacidad' => $this-> diagnostico_de_su_discapacidad,
			'fecha_de_su_accidente' => $this-> fecha_de_su_accidente,
			'altura_en_cm' => $this-> altura_en_cm,
			'peso_en_kilogramos_' => $this-> peso_en_kilogramos_,
			'longitud_de_la_espalda_en_pulgadas' => $this-> longitud_de_la_espalda_en_pulgadas,
			'medida_de_la_cadera_a_la_rodilla_en_pulgadas' => $this-> medida_de_la_cadera_a_la_rodilla_en_pulgadas,
			'medida_de_la_rodilla_al_talon_en_pulgadas' => $this-> medida_de_la_rodilla_al_talon_en_pulgadas,
			'anchura_de_las_caderas_en_pulgadas' => $this-> anchura_de_las_caderas_en_pulgadas,
			'tipo_de_silla_de_ruedas' => $this-> tipo_de_silla_de_ruedas,
			'nivel_de_independencia_del_usuario' => $this-> nivel_de_independencia_del_usuario,
			'silla_para' => $this-> silla_para,
			'tipo_de_respaldo' => $this-> tipo_de_respaldo,
			'necesita_soporte_de_cabeza' => $this-> necesita_soporte_de_cabeza,
			'necesita_soporte_para_el_tronco' => $this-> necesita_soporte_para_el_tronco,
			'tipo_de_asiento' => $this-> tipo_de_asiento,
			'otras_observaciones' => $this-> otras_observaciones,
			'persona_que_recolecta_la_informacion' => $this-> persona_que_recolecta_la_informacion
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Silla Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Silla::where('id', $id);
            $record->delete();
        }
    }
}
