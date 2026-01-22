<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaginasController extends Controller
{
    //
    public function inicio()     { return view('inicio'); }
    public function nosotros()   { return view('nosotros'); }
    public function servicios()  { return view('servicios'); }
    public function contacto()   { return view('contacto'); }
    public function ayuda()      { return view('ayuda'); }
    public function buzon()      { return view('buzon'); }
    public function mapa()       { return view('mapa'); }
    public function chat()       { return view('chat'); }

    public function buscar(Request $request)
    {
        $q = $request->q;
        return view('buscar', compact('q'));
    }
}
