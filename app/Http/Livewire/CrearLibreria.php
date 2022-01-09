<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Libreria;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use phpDocumentor\Reflection\Types\This;

class CrearLibreria extends Component
{
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre, $imagen, $genero, $doblaje, $subtitulado, $descripcion, $disco, $peso, $tipo, $capitulos, $temporada;
    public $updateMode = false;
    public function render()
    {

        return view('livewire.crear-libreria');
    }
	private function crearCategoria()
	{
		$id = Libreria::latest()
                    ->select('id')
                    ->first();
		$this->validate([
			'capitulos' => 'required',
			'temporada' => 'required',
		]);
		Categoria::insert([
            'capitulos' => $this-> capitulos,
            'temporada' => $this-> temporada,
            'librerias_id' =>$id->id
		]);
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
        $this->tipo =null;
        $this->capitulos =null;
        $this->temporada =null;
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
        'tipo' => 'required',
        ]);
		$file = $this->imagen;
        $name = time().'.'.$file->getClientOriginalExtension();
        $this->imagen->storeAs('public/imagenes', $name);
        $ruta = "storage/imagenes/".$name;
		Libreria::create([
			'nombre' => $this-> nombre,
			'genero' => $this-> genero,
			'imagen' => $ruta,
			'doblaje' => $this-> doblaje,
			'subtitulado' => $this-> subtitulado,
			'descripcion' => $this-> descripcion,
			'disco' => $this-> disco,
			'peso' => $this-> peso,
			'tipo' =>$this-> tipo,
			'user_id' => $user_id
		]);
		if ($this->tipo != "pelicula") {
			$this->crearCategoria();
		}
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Libreria Agregada satisfactoriamente.');
    }
}
