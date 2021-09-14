<?php

namespace App\Http\Livewire;

use App\Models\Libreria;
use Livewire\Component;
use Livewire\WithPagination;

class LibreriaTablasWelcom extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.libreria-tablas-welcom',['libreria' => Libreria::paginate(15)]);
    }
}
