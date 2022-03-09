<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Ficha;
use App\Models\Departamento;
use App\Models\Municipio;
use App\Models\Tecnico;
use Carbon\Carbon;
use PDF;
use Livewire\WithFileUploads;

class Fichas extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $photo = null;

    public $photoUploaded = null;

    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $numero_solicitud, $poliza_de_silla, $tecnico_id, $tipo_de_silla, $sexo, $fecha_ingreso_solicitud, $nombre, $edad, $fecha_nacimiento, $direccion, $departamento_id, $municipio_id, $telefono_fijo, $telefono_movil, $referido_por, $diagnostico, $altura_en_cm, $peso_en_kg, $longitud_espalda_in, $medida_de_cadera_a_rodilla_in, $medida_de_rodilla_a_talon_in, $medida_de_cadera_a_cadera_in, $nivel_independencia_usuario, $silla_para, $tipo_de_respaldo, $necesita_soporte_de_cabeza, $necesita_soporte_para_el_tronco, $tipo_de_asiento, $otras_observaciones, $usuario_nombre, $usuario_dui, $usuario_parentesco, $responsable_nombre, $responsable_dui, $responsable_parentesco;
    public $updateMode = false;

    public $selectedDepartamento = null, $selectedMunicipio = null;

    public $municipios = null;

    public function updatingKeyWord()
    {
        $this->resetPage();
    }

    public function render()
    {
        $keyWord = '%' . $this->keyWord . '%';
        return view('livewire.fichas.view', [
            'fichas' => Ficha::latest()
                ->orWhere('numero_solicitud', 'LIKE', $keyWord)
                ->orWhere('poliza_de_silla', 'LIKE', $keyWord)
                ->orWhere('fecha_ingreso_solicitud', 'LIKE', $keyWord)
                ->orWhere('nombre', 'LIKE', $keyWord)
                ->orWhere('edad', 'LIKE', $keyWord)
                ->orWhere('fecha_nacimiento', 'LIKE', $keyWord)
                ->paginate(10),
            'departamentos' => Departamento::all(),
            'tecnicos' => Tecnico::all(),
        ]);
    }

    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }

    private function resetInput()
    {
        $this->numero_solicitud = null;
        $this->poliza_de_silla = null;
        $this->tecnico_id = null;
        $this->tipo_de_silla = null;
        $this->sexo = null;
        $this->fecha_ingreso_solicitud = null;
        $this->nombre = null;
        $this->photo = null;
        $this->photoUploaded = null;
        $this->edad = null;
        $this->fecha_nacimiento = null;
        $this->direccion = null;
        $this->departamento_id = null;
        $this->municipio_id = null;
        $this->telefono_fijo = null;
        $this->telefono_movil = null;
        $this->referido_por = null;
        $this->diagnostico = null;
        $this->altura_en_cm = null;
        $this->peso_en_kg = null;
        $this->longitud_espalda_in = null;
        $this->medida_de_cadera_a_rodilla_in = null;
        $this->medida_de_rodilla_a_talon_in = null;
        $this->medida_de_cadera_a_cadera_in = null;
        $this->nivel_independencia_usuario = null;
        $this->silla_para = null;
        $this->tipo_de_respaldo = null;
        $this->necesita_soporte_de_cabeza = null;
        $this->necesita_soporte_para_el_tronco = null;
        $this->tipo_de_asiento = null;
        $this->otras_observaciones = null;
        $this->usuario_nombre = null;
        $this->usuario_dui = null;
        $this->usuario_parentesco = null;
        $this->responsable_nombre = null;
        $this->responsable_dui = null;
        $this->responsable_parentesco = null;
    }

    public function store()
    {
        $this->validate([
            'tecnico_id' => 'required',
        ]);

        if ($this->photo == null){
            $this->photo = 'storage/user_placeholder.png';
            $photoPath = $this->photo;
        } else {
            /* $file = $this->photo;
            $destinationPath    = public_path() . '/uploads/photos/';
            $extension          = $file->getClientOriginalExtension();
            $filename           = Str::uuid()->toString(). '.' . $extension;
            $upload_success     = $file->move($destinationPath, $filename); */
            //$this->photo->store('photos','public');
            $photoPath = $this->photo->store('public');
            // $photoPath = str_replace('public/', 'storage/', $photoPath);
        }

        Ficha::create([
            'numero_solicitud' => $this->numero_solicitud,
            'poliza_de_silla' => $this->poliza_de_silla,
            'tecnico_id' => $this->tecnico_id,
            'tipo_de_silla' => $this->tipo_de_silla,
            'sexo' => $this->sexo,
            'fecha_ingreso_solicitud' => $this->fecha_ingreso_solicitud,
            'nombre' => $this->nombre,
            'photo' => $photoPath,
            'edad' => $this->edad,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'direccion' => $this->direccion,
            'departamento_id' => $this->selectedDepartamento,
            'municipio_id' => $this->selectedMunicipio,
            'telefono_fijo' => $this->telefono_fijo,
            'telefono_movil' => $this->telefono_movil,
            'referido_por' => $this->referido_por,
            'diagnostico' => $this->diagnostico,
            'altura_en_cm' => $this->altura_en_cm,
            'peso_en_kg' => $this->peso_en_kg,
            'longitud_espalda_in' => $this->longitud_espalda_in,
            'medida_de_cadera_a_rodilla_in' => $this->medida_de_cadera_a_rodilla_in,
            'medida_de_rodilla_a_talon_in' => $this->medida_de_rodilla_a_talon_in,
            'medida_de_cadera_a_cadera_in' => $this->medida_de_cadera_a_cadera_in,
            'nivel_independencia_usuario' => $this->nivel_independencia_usuario,
            'silla_para' => $this->silla_para,
            'tipo_de_respaldo' => $this->tipo_de_respaldo,
            'necesita_soporte_de_cabeza' => $this->necesita_soporte_de_cabeza,
            'necesita_soporte_para_el_tronco' => $this->necesita_soporte_para_el_tronco,
            'tipo_de_asiento' => $this->tipo_de_asiento,
            'otras_observaciones' => $this->otras_observaciones,
            'usuario_nombre' => $this->usuario_nombre,
            'usuario_dui' => $this->usuario_dui,
            'usuario_parentesco' => $this->usuario_parentesco,
            'responsable_nombre' => $this->responsable_nombre,
            'responsable_dui' => $this->responsable_dui,
            'responsable_parentesco' => $this->responsable_parentesco
        ]);



        $this->resetInput();
        $this->emit('closeModal');
        session()->flash('message', 'Ficha Successfully created.');
    }

    public function edit($id)
    {
        $record = Ficha::findOrFail($id);

        $this->municipios = Municipio::where('departamento_id', $record->departamento_id)->get();

        $this->selected_id = $id;
        $this->numero_solicitud = $record->numero_solicitud;
        $this->poliza_de_silla = $record->poliza_de_silla;
        $this->tecnico_id = $record->tecnico_id;
        $this->tipo_de_silla = $record->tipo_de_silla;
        $this->sexo = $record->sexo;
        $this->fecha_ingreso_solicitud = $record->fecha_ingreso_solicitud;
        $this->nombre = $record->nombre;
        $this->photo = $record->photo;
        $this->photoUploaded = $record->photo;
        $this->edad = $record->edad;
        $this->fecha_nacimiento = $record->fecha_nacimiento;
        $this->direccion = $record->direccion;
        $this->selectedDepartamento = $record->departamento_id;
        $this->selectedMunicipio = $record->municipio_id;
        $this->telefono_fijo = $record->telefono_fijo;
        $this->telefono_movil = $record->telefono_movil;
        $this->referido_por = $record->referido_por;
        $this->diagnostico = $record->diagnostico;
        $this->altura_en_cm = $record->altura_en_cm;
        $this->peso_en_kg = $record->peso_en_kg;
        $this->longitud_espalda_in = $record->longitud_espalda_in;
        $this->medida_de_cadera_a_rodilla_in = $record->medida_de_cadera_a_rodilla_in;
        $this->medida_de_rodilla_a_talon_in = $record->medida_de_rodilla_a_talon_in;
        $this->medida_de_cadera_a_cadera_in = $record->medida_de_cadera_a_cadera_in;
        $this->nivel_independencia_usuario = $record->nivel_independencia_usuario;
        $this->silla_para = $record->silla_para;
        $this->tipo_de_respaldo = $record->tipo_de_respaldo;
        $this->necesita_soporte_de_cabeza = $record->necesita_soporte_de_cabeza;
        $this->necesita_soporte_para_el_tronco = $record->necesita_soporte_para_el_tronco;
        $this->tipo_de_asiento = $record->tipo_de_asiento;
        $this->otras_observaciones = $record->otras_observaciones;
        $this->usuario_nombre = $record->usuario_nombre;
        $this->usuario_dui = $record->usuario_dui;
        $this->usuario_parentesco = $record->usuario_parentesco;
        $this->responsable_nombre = $record->responsable_nombre;
        $this->responsable_dui = $record->responsable_dui;
        $this->responsable_parentesco = $record->responsable_parentesco;

        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'tecnico_id' => 'required',
        ]);

        if ($this->photo == null){
            $this->photo = 'user_placeholder.png';
            $photoPath = $this->photo;
        }
        elseif ($this->photo == $this->photoUploaded) {
            $photoPath = $this->photoUploaded;
        } elseif ($this->photo != $this->photoUploaded) {
            $photoPath = $this->photo->store('public');
           // $photoPath = str_replace('public/', 'storage/', $photoPath);
        }
        else {
            /* $file = $this->photo;
            $destinationPath    = public_path() . '/uploads/photos/';
            $extension          = $file->getClientOriginalExtension();
            $filename           = Str::uuid()->toString(). '.' . $extension;
            $upload_success     = $file->move($destinationPath, $filename); */
            //$this->photo->store('photos','public');
            $photoPath = $this->photo->store('public');
            $photoPath = str_replace('public/', 'storage/', $photoPath);
        }

        if ($this->selected_id) {
            $record = Ficha::find($this->selected_id);
            $record->update([
                'numero_solicitud' => $this->numero_solicitud,
                'poliza_de_silla' => $this->poliza_de_silla,
                'tecnico_id' => $this->tecnico_id,
                'tipo_de_silla' => $this->tipo_de_silla,
                'sexo' => $this->sexo,
                'fecha_ingreso_solicitud' => $this->fecha_ingreso_solicitud,
                'nombre' => $this->nombre,
                'photo' => $photoPath,
                'edad' => $this->edad,
                'fecha_nacimiento' => $this->fecha_nacimiento,
                'direccion' => $this->direccion,
                'departamento_id' => $this->selectedDepartamento,
                'municipio_id' => $this->selectedMunicipio,
                'telefono_fijo' => $this->telefono_fijo,
                'telefono_movil' => $this->telefono_movil,
                'referido_por' => $this->referido_por,
                'diagnostico' => $this->diagnostico,
                'altura_en_cm' => $this->altura_en_cm,
                'peso_en_kg' => $this->peso_en_kg,
                'longitud_espalda_in' => $this->longitud_espalda_in,
                'medida_de_cadera_a_rodilla_in' => $this->medida_de_cadera_a_rodilla_in,
                'medida_de_rodilla_a_talon_in' => $this->medida_de_rodilla_a_talon_in,
                'medida_de_cadera_a_cadera_in' => $this->medida_de_cadera_a_cadera_in,
                'nivel_independencia_usuario' => $this->nivel_independencia_usuario,
                'silla_para' => $this->silla_para,
                'tipo_de_respaldo' => $this->tipo_de_respaldo,
                'necesita_soporte_de_cabeza' => $this->necesita_soporte_de_cabeza,
                'necesita_soporte_para_el_tronco' => $this->necesita_soporte_para_el_tronco,
                'tipo_de_asiento' => $this->tipo_de_asiento,
                'otras_observaciones' => $this->otras_observaciones,
                'usuario_nombre' => $this->usuario_nombre,
                'usuario_dui' => $this->usuario_dui,
                'usuario_parentesco' => $this->usuario_parentesco,
                'responsable_nombre' => $this->responsable_nombre,
                'responsable_dui' => $this->responsable_dui,
                'responsable_parentesco' => $this->responsable_parentesco
            ]);

            $this->resetInput();
            $this->updateMode = false;
            session()->flash('message', 'Ficha Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Ficha::where('id', $id);
            $record->delete();
        }
    }

    public function updatedselectedDepartamento($departamento_id)
    {
        $this->municipios = Municipio::where('departamento_id', $departamento_id)->get();
    }

    public function download($id)
    {
        $ficha = Ficha::find($id);

        $dia = Carbon::now()->format('d');
        $mes = Carbon::now()->month;

        switch ($mes) {
            case 1:
                $nombreMes = 'enero';
                break;
            case 2:
                $nombreMes = 'febrero';
                break;
            case 3:
                $nombreMes = 'marzo';
                break;
            case 4:
                $nombreMes = 'abril';
                break;
            case 5:
                $nombreMes = 'mayo';
                break;
            case 6:
                $nombreMes = 'junio';
                break;
            case 7:
                $nombreMes = 'julio';
                break;
            case 8:
                $nombreMes = 'agosto';
                break;
            case 9:
                $nombreMes = 'septiembre';
                break;
            case 10:
                $nombreMes = 'octubre';
                break;
            case 11:
                $nombreMes = 'noviembre';
                break;
            case 12:
                $nombreMes = 'diciembre';
                break;
            default:
                break;
        }

        $anio = Carbon::now()->format('Y');

        $data = [
            'ficha' => $ficha,
            'dia' => $dia,
            'mes' => $nombreMes,
            'anio' => $anio
        ];

        $filename = "NumeroSolicitud-" . str_pad($ficha->id, 3, "0", STR_PAD_LEFT) . ".pdf";

        ob_clean();
        ob_end_clean();

        $pdfContent = PDF::loadView('ficha.ficha_entrega_sillas', $data)->output();
        return response()->streamDownload(
            fn () => print($pdfContent),
            $filename
        );
    }
}
