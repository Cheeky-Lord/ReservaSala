<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sala;

class SalaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('sala.create-edit');
    }

    public function store(Request $request)
    {
        $sala = new Sala();

        $sala->bloco = $request->bloco;
        $sala->numero = $request->numero;

        if ($request->laboratorio == true)
            $sala->laboratorio = 1;
        else
            $sala->laboratorio = 0;

        $saved = $sala->save();

        if ($saved)
            return redirect()->back()->withSuccess('Sala Cadastrada com sucesso!');
        else
            return redirect()->back()->with('error', 'Erro ao cadastrar sala');
    }
}
