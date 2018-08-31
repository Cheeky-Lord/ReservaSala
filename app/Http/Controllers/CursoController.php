<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('curso.create-edit');
    }

    public function store(Request $request)
    {
        $curso = new Curso();

        $curso->name = $request->name;
        $saved = $curso->save();

        if ($saved)
            return redirect()->back()->withSuccess('Curso cadastrado com sucesso!');
        else 
            return redirect()->back()->with('error', 'Erro ao cadastrar curso!');
    }
}
