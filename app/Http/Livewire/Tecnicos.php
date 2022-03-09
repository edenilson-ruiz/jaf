<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Tecnico;

class Tecnicos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombres, $apellidos, $institucion;
    public $updateMode = false;

    public function updatingKeyWord()
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.tecnicos.view', [
            'tecnicos' => Tecnico::latest()
						->orWhere('nombres', 'LIKE', $keyWord)
						->orWhere('apellidos', 'LIKE', $keyWord)
						->orWhere('institucion', 'LIKE', $keyWord)
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
		$this->nombres = null;
		$this->apellidos = null;
		$this->institucion = null;
    }

    public function store()
    {
        $this->validate([
		'nombres' => 'required',
		'apellidos' => 'required',
		'institucion' => 'required',
        ]);

        Tecnico::create([
			'nombres' => $this-> nombres,
			'apellidos' => $this-> apellidos,
			'institucion' => $this-> institucion
        ]);

        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Tecnico Successfully created.');
    }

    public function edit($id)
    {
        $record = Tecnico::findOrFail($id);

        $this->selected_id = $id;
		$this->nombres = $record-> nombres;
		$this->apellidos = $record-> apellidos;
		$this->institucion = $record-> institucion;

        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'nombres' => 'required',
		'apellidos' => 'required',
		'institucion' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Tecnico::find($this->selected_id);
            $record->update([
			'nombres' => $this-> nombres,
			'apellidos' => $this-> apellidos,
			'institucion' => $this-> institucion
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Tecnico Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Tecnico::where('id', $id);
            $record->delete();
        }
    }
}
