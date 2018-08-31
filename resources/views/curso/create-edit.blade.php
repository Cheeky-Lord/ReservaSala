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

    <form action="{{ route('curso.store') }}" method="post" class="form">
        @csrf()

        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Nome">
        </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>

@endsection