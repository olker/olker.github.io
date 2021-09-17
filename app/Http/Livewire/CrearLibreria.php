<?php

namespace App\Http\Livewire;

use App\Models\Libreria;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
class CrearLibreria extends Component
{
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre, $imagen, $genero, $doblaje, $subtitulado, $descripcion, $disco, $peso;
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
    }
    public function store()
    {
        $user_id = Auth::id();
        $this->validate([
		'nombre' => 'required',
		'genero' => 'required',
		'imagen' => 'required|image|mimes:png,jpg,svg|max:2048',
		'doblaje' => 'required',
		'subtitulado' => 'required',
		'descripcion' => 'required',
		'disco' => 'required',
		'peso' => 'required',
        ]);
		$file = $this->imagen;
        $name = time().'.'.$file->getClientOriginalExtension();
        $this->imagen->storeAs('public/imagenes', $name);
        $ruta = "imagenes/".$name;
        Libreria::create([
			'nombre' => $this-> nombre,
			'genero' => $this-> genero,
			'imagen' => $ruta,
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
