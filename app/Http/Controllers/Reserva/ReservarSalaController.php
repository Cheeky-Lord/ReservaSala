<?php

namespace App\Http\Controllers\Reserva;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ReservarSala;
use App\Models\Professor;
use App\Models\Sala;

class ReservarSalaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $professores = Professor::all();
        $salas = Sala::all();

        return view('reserva.sala.create-edit', compact('professores', 'salas'));
    }

    public function store(Request $request)
    {
        $reserva = new ReservarSala();

        $reserva->bloco = $request->bloco;
        $reserva->numero = $request->numero;
        $reserva->professor_id = $request->professor_id;
        $reserva->inicio = $request->inicio;
        $reserva->fim = $request->fim;

        $saved = $reserva->save();

        if ($saved)
            return redirect()->route('home')->withSuccess('Sala reservada com sucesso!');
        else
            return redirect()->back()->with('error', 'Erro ao efetuar reserva!');
    }
}
