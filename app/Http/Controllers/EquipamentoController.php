<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipamento;

class EquipamentoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('equipamento.create-edit');
    }

    public function store(Request $request)
    {
        $equipamento = new Equipamento();

        $equipamento->tipo = $request->tipo;
        $equipamento->codigo = $request->codigo;
        if ($request->comDefeito)
            $equipamento->comDefeito = 1;
        else
            $equipamento->comDefeito = 0;

        $saved = $equipamento->save();

        if ($saved)
            return redirect()->back()->withSuccess('Equipamento cadastrado com sucesso!');
        else
            return redirect()->back()->with('Erro ao cadastrar equipamento!');
    }
}
