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

    <form action="{{ route('professor.store') }}" method="post" class="form">
        @csrf()

        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="E-mail">
        </div>
        <div class="form-group">
            <label for="curso">Curso</label>
            <select name="curso" id="curso" class="form-control">
                @foreach($cursos as $curso)
                    <option value="{{ $curso->id }}">{{ $curso->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="text" name="phone" id="phone" class="form-control" placeholder="Telefone">
        </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>

@endsection
