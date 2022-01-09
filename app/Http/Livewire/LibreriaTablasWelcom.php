<?php

namespace App\Http\Livewire;

use App\Models\Libreria;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class LibreriaTablasWelcom extends Component
{
    use WithPagination;
    public $numeroPagina = "15";
    public $nombreLibreria = "";
    public $orden = "id";
    public $tipo = "ASC";
    public function render()
    {
        if (Auth::user()) {
            $idUser = Auth::id();
            $libreria = Libreria::where([['nombre','LIKE',"%{$this->nombreLibreria}%"],['user_id',$idUser]])
            ->orwhere([['genero','LIKE',"%{$this->nombreLibreria}%"],['user_id',$idUser]])
            ->orwhere([['disco','LIKE',"%{$this->nombreLibreria}%"],['user_id',$idUser]])
            ->orderBy( $this->orden, $this->tipo)
            ->paginate($this->numeroPagina);
            return view('livewire.libreria-tablas-welcom', compact('libreria'));
        }
        else{
            $libreria = Libreria::where('nombre','LIKE',"%{$this->nombreLibreria}%")
            ->orwhere('genero','LIKE',"%{$this->nombreLibreria}%")
            ->orwhere('disco','LIKE',"%{$this->nombreLibreria}%")
            ->orderBy( $this->orden, $this->tipo)
            ->paginate($this->numeroPagina);
            return view('livewire.libreria-tablas-welcom', compact('libreria'));
        }

    }
    public function clear()
    {
        $this->numeroPagina = "15";
        $this->nombreLibreria = "";
        $this->page =1;
    }
}
