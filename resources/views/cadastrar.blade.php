@extends('layouts.app')

@section('content')

    <div>
        <a class="btn btn-info" href="{{ route('professor.create') }}">Novo Professor</a>
        <a class="btn btn-info" href="{{ route('curso.create') }}">Novo Curso</a>
        <a class="btn btn-info" href="{{ route('sala.create') }}">Nova Sala</a>
        <a class="btn btn-info" href="{{ route('equipamento.create') }}">Novo Equipamento</a>
    </div>

@endsection()