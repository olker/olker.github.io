<?php

namespace App\Http\Livewire;

use App\Models\Libreria;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CrearLibreria extends Component
{
    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre, $genero, $imagen, $doblaje, $subtitulado, $descripcion, $disco, $peso;

    public $updateMode = false;
    public function render()
    {

        return view('livewire.crear-libreria');
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
        $user_id = Auth::id();
        $this->validate([
		'nombre' => 'required',
		'genero' => 'required',
		'imagen' => 'required',
		'doblaje' => 'required',
		'subtitulado' => 'required',
		'descripcion' => 'required',
		'disco' => 'required',
		'peso' => 'required',
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
			'user_id' => $user_id
        ]);

        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Libreria Agregada satisfactoriamente.');
    }
}
