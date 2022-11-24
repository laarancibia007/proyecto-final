<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller

{
    public function index()
    {
        return view('principal.index');
    }
    public function nosotros()
    {
        return view('principal.nosotros');
    }
    public function catalogo()
    {
        return view('principal.catalogo');
    }
}
