@extends('layouts.app')

@section('content')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('sala.store') }}" method="post" class="form">
        @csrf()

        <div class="form-group">
            <label for="bloco">Bloco</label>
            <select name="bloco" id="bloco" class="form-control">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
                <option value="I">I</option>
                <option value="J">J</option>
            </select>
        </div>
        <div class="form-group">
            <label for="numero">Número</label>
            <select name="numero" id="numero" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
        <div class="form-check">
            <input type="checkbox" name="laboratorio" class="form-check-input" id="laboratorio">
            <label for="laboratorio" class="form-check-label">Laboratório</label>
        </div>
        <br>
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>

@endsection