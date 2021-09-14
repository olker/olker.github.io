<?php

namespace App\Http\Controllers;

use App\Models\Libreria;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function __invoke(){
        return view('welcome');
    }
}
