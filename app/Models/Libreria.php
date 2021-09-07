<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libreria extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'genero',
        'imagen',
        'doblaje',
        'subtitulado',
        'descripcion',
        'disco',
        'peso',
        'user_id',
    ];
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function categorias(){
        return $this->hasMany('App\Models\Categoria');
    }
    public function clientes(){
        return $this->belongsToMany('App\Models\Cliente');
    }
}
