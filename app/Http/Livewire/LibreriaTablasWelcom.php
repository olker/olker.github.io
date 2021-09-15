<?php

namespace App\Http\Livewire;

use App\Models\Libreria;
use Livewire\Component;
use Livewire\WithPagination;

class LibreriaTablasWelcom extends Component
{
    use WithPagination;
    public $numeroPagina = "15";
    public $nombreLibreria = "";
    public function render()
    {
        return view('livewire.libreria-tablas-welcom',[
            'libreria' => Libreria::where('nombre','LIKE',"%{$this->nombreLibreria}%")->paginate($this->numeroPagina)]);
    }
    public function clear()
    {
        $this->numeroPagina = "15";
        $this->nombreLibreria = "";
        $this->page =1;
    }
}
