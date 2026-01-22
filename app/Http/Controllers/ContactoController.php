<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    //
    public function index()
    {
        return view('contacto');
    }

    public function enviar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:3',
            'correo' => 'required|email',
            'mensaje' => 'required|min:10'
        ]);

        return back()->with('success', 'Mensaje enviado correctamente');
    }
}
