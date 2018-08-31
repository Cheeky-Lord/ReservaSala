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

    <form action="{{ route('equipamento.store') }}" method="post" class="form">
        @csrf()

        <div class="form-group">
            <label for="tipo">Tipo</label>
            <select name="tipo" id="tipo" class="form-control">
                <option value="datashow">Datashow</option>
                <option value="computador">Computador</option>
                <option value="caixa-de-som">Caixa de Som</option>
            </select>
        </div>
        <div class="form-group">
            <label for="codigo">Código</label>
            <input type="number" name="codigo" id="codigo" class="form-control">
        </div>
        <div class="form-check">
            <input type="checkbox" name="comDefeito" id="comDefeito" class="form-check-input">
            <label for="comDefeito" class="form-check-label">Com Defeito</label>
        </div>
        <br>

        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>

@endsection