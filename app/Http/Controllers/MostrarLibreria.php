<?php

namespace App\Http\Controllers;

use App\Models\Libreria;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MostrarLibreria extends Controller
{
    public function show(Libreria $libreria)
    {
        $idLibreria = $libreria->id;
        $nombreLibreria = $libreria->nombre;
        return view('mostrar-libreria', compact('idLibreria','nombreLibreria'));
    }
    public function delete(Libreria $datos)
    {
        if ($datos) {
            $urlDE = str_replace('storage','public',$datos->imagen);
            Storage::delete($urlDE);
            $datos->delete();
        }
        return redirect()->route('dashboard');
    }
}
