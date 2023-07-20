<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Alert;

class Paginas extends Controller
{
    public function welcome(){
        $titulo = 'inicio';
        toast('Your Post as been submited!','success');
        return view('welcome', compact('titulo'));
    }
}
