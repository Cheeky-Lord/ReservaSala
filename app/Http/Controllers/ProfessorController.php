<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Professor;

class ProfessorController extends Controller
{
    private $professor;

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professores = $this->professor->all();

        return view('professor.index', compact('professores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::all();

        return view('professor.create-edit', compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $professor = new Professor();

        $professor->name = $request->name;
        $professor->email = $request->email;
        $professor->curso_id = $request->curso;
        $professor->phone = $request->phone;

        $saved = $professor->save();

        if ($saved)
            return redirect()->back()->withSuccess('Professor cadastrado com sucesso!');
        else
            return redirect()->back()->with('error', 'Erro ao cadastrar professor!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $professor = Professor::findOrFail($id);

        return view ('professor.create-edit', compact('professor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $professor = Professor::findOrFail($id);

        $deleted = $professor->delete();

        if ($deleted)
            return redirect()->route('professor.index')->with('success', 'professor deletado com sucesso!');
        else if (!$deleted)
            return redirect()->back()->with('error', 'erro ao deletar o professor');
    }
}
