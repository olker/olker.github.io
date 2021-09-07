<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'celular',
    ];
    public function librerias(){
        return $this->belongsToMany('App\Models\Libreria');
    }
}
