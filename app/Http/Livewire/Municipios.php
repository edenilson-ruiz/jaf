<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Departamento;
use App\Models\Municipio;


class Municipios extends Component
{

    public $selectedDepartamento = null, $selectedMunicipio = null;

    public $municipios = null;

    public function render()
    {

        return view('livewire.municipios', [
            'departamentos' => Departamento::all()
        ]);
    }

    public function updatedselectedDepartamento($departamento_id)
    {
        $this->municipios = Municipio::where('departamento_id', $departamento_id)->get();
    }
}
