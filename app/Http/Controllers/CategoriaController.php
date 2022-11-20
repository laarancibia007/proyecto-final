<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller

{
    public function index()
    {
        return view('categorias.index');
    }
    public function crear()
    {
        return view('categorias.crear');
    }
}
