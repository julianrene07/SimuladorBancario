<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TurnoController extends Controller
{
    public function index()
    {
        return view('turnos');
    }

    public function generar(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'tramite' => 'required'
        ]);

        $turnos = session()->get('turnos', []);

        $numeroTurno = count($turnos) + 1;

        $turnos[] = [
            'nombre' => $request->nombre,
            'tramite' => $request->tramite,
            'numero' => $numeroTurno
        ];

        session()->put('turnos', $turnos);

        $personasAntes = $numeroTurno - 1;

        return view('resultado', compact(
            'numeroTurno',
            'personasAntes'
        ));
    }
}