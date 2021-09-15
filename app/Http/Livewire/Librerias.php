<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Libreria;

class Librerias extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre, $genero, $imagen, $doblaje, $subtitulado, $descripcion, $disco, $peso, $user_id;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.librerias.view', [
            'librerias' => Libreria::latest()
						->orWhere('nombre', 'LIKE', $keyWord)
						->orWhere('genero', 'LIKE', $keyWord)
						->orWhere('imagen', 'LIKE', $keyWord)
						->orWhere('doblaje', 'LIKE', $keyWord)
						->orWhere('subtitulado', 'LIKE', $keyWord)
						->orWhere('descripcion', 'LIKE', $keyWord)
						->orWhere('disco', 'LIKE', $keyWord)
						->orWhere('peso', 'LIKE', $keyWord)
						->orWhere('user_id', 'LIKE', $keyWord)
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
		$this->nombre = null;
		$this->genero = null;
		$this->imagen = null;
		$this->doblaje = null;
		$this->subtitulado = null;
		$this->descripcion = null;
		$this->disco = null;
		$this->peso = null;
		$this->user_id = null;
    }

    public function store()
    {
        $this->validate([
		'nombre' => 'required',
		'genero' => 'required',
		'imagen' => 'required',
		'doblaje' => 'required',
		'subtitulado' => 'required',
		'descripcion' => 'required',
		'disco' => 'required',
		'peso' => 'required',
		'user_id' => 'required',
        ]);

        Libreria::create([ 
			'nombre' => $this-> nombre,
			'genero' => $this-> genero,
			'imagen' => $this-> imagen,
			'doblaje' => $this-> doblaje,
			'subtitulado' => $this-> subtitulado,
			'descripcion' => $this-> descripcion,
			'disco' => $this-> disco,
			'peso' => $this-> peso,
			'user_id' => $this-> user_id
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Libreria Successfully created.');
    }

    public function edit($id)
    {
        $record = Libreria::findOrFail($id);

        $this->selected_id = $id; 
		$this->nombre = $record-> nombre;
		$this->genero = $record-> genero;
		$this->imagen = $record-> imagen;
		$this->doblaje = $record-> doblaje;
		$this->subtitulado = $record-> subtitulado;
		$this->descripcion = $record-> descripcion;
		$this->disco = $record-> disco;
		$this->peso = $record-> peso;
		$this->user_id = $record-> user_id;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'nombre' => 'required',
		'genero' => 'required',
		'imagen' => 'required',
		'doblaje' => 'required',
		'subtitulado' => 'required',
		'descripcion' => 'required',
		'disco' => 'required',
		'peso' => 'required',
		'user_id' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Libreria::find($this->selected_id);
            $record->update([ 
			'nombre' => $this-> nombre,
			'genero' => $this-> genero,
			'imagen' => $this-> imagen,
			'doblaje' => $this-> doblaje,
			'subtitulado' => $this-> subtitulado,
			'descripcion' => $this-> descripcion,
			'disco' => $this-> disco,
			'peso' => $this-> peso,
			'user_id' => $this-> user_id
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Libreria Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Libreria::where('id', $id);
            $record->delete();
        }
    }
}
