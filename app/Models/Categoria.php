<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'capitulos',
        'temporada',
        'librerias_id',
    ];
    public function libreria(){
        return $this->belongsTo('App\Models\Libreria');
    }
}
