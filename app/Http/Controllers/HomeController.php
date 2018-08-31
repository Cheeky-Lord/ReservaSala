<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReservarSala;
use App\Models\Professor;

class HomeController extends Controller
{
    private $salas;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ReservarSala $salas)
    {
        $this->middleware('auth');
        $this->salas = $salas;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professores = Professor::all();
        $salasReservadas = $this->salas->orderBy('created_at', 'desc')->paginate(4);

        return view('home', compact('salasReservadas', 'professores'));
    }

    public function cadastrar()
    {
        return view('cadastrar');
    }
}
