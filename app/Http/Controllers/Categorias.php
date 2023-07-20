<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class Categorias extends Controller
{
    public function index(){
        $titulo = 'Categorias';
        $Categorias = Categoria::all();
        return view('welcome', compact('Categorias', 'titulo'));
    }
}
