<?php
namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Libreria;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class MostrarContenidoIndividual extends Component
{
    use WithFileUploads;
    public $datoEditar;
    public $variableEditar;
    public $componentName;
    public $libreriaVieu;
    public $selected_id;
    public $mensaje = "";
    public $libreria_id, $user_id, $nombre, $imagen, $genero, $doblaje, $subtitulado, $descripcion, $disco, $peso, $tipo, $capitulos, $temporada;
    public $container;
    public function render()
    {
        $libreria = Libreria::find($this->libreriaVieu);
        if ($libreria->tipo == "pelicula") {
            $con[0] = $libreria;
        }
        else{
            $con = Categoria::join('librerias','categorias.librerias_id','=','librerias.id')
            ->where('librerias.id','=',$libreria->id)
            ->get();
        }
        $this->libreria_id = $con[0]->id;
        return view('livewire.mostrar-contenido-individual',compact('con'));
    }
    public function delete(Libreria $datos)
    {
        if ($datos != null) {
            $urlDE = str_replace('storage','public',$datos->imagen);
            Storage::delete($urlDE);
            $datos->delete();
        }
        return redirect()->route('dashboard');
    }
    public function setContainer($container)
    {
        $this->mensaje = $this->nombre;
        $this->container = $container;
        $this->selected_id = $container;
        $libreria = Libreria::find($this->libreria_id);
        $this->nombre = $libreria->nombre;
        $this->descripcion = $libreria->descripcion;
        $this->doblaje = $libreria->doblaje;
        $this->subtitulado = $libreria->subtitulado;
        $this->tipo = $libreria->tipo;
        $this->disco = $libreria->disco;
        $this->imagen = $libreria->imagen;
        $this->peso = $libreria->peso;
        $this->capitulos = $libreria->capitulos;
        $this->temporada = $libreria->temporada;
        if($this->tipo != "pelicula"){
            $this->capitulos = $libreria->capitulos;
            $this->temporada = $libreria->temporada;
        }
    }
    public function cancel()
    {
        $this->mensaje="";
        $this->mensaje = null;
        $this->nombre = null;
        $this->descripcion = null;
        $this->doblaje = null;
        $this->subtitulado = null;
        $this->disco = null;
        $this->tipo = null;
        $this->imagen = null;
        $this->peso = null;
        $this->capitulos = null;
        $this->temporada = null;
        $this->container = null;
        $this->datoEditar = null;
        $this->variableEditar = null;
    }
    public function update(Libreria $idLibreria)
    {
        $newAtributo = $this->datoEditar;
        if ($idLibreria != null) {
            if($newAtributo == "capitulos" || $newAtributo == "temporada"){
                    $record = Categoria::where('librerias_id', $idLibreria->id)->first();
                    $record->$newAtributo = $this->variableEditar;
                    $record->save();
            }
            else{
                if ($newAtributo == "imagen") {
                    $file = $this->variableEditar;
                    $name = time().'.'.$file->getClientOriginalExtension();
                    $this->variableEditar->storeAs('public/imagenes', $name);
                    $ruta = "storage/imagenes/".$name;
                    $record = Libreria::find($idLibreria->id);
                    $record->$newAtributo = $ruta;
                    $record->save();
                }
                else{

                    $record = Libreria::find($idLibreria->id);
                    $record->$newAtributo = $this->variableEditar;
                    $record->save();
                }
            }
        }
        $this->cancel();
    }
}
