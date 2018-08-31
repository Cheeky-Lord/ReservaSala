@extends('layouts.app')

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th>Sala</th>
                <th>Reservado por</th>
                <th>Inicio</th>
                <th>fim</th>
                <th>info</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($salasReservadas as $reservada)
                <tr>
                    <td>{{ $reservada->bloco }}-{{ $reservada->numero }}</td>
                    <td>
                        @foreach ($professores as $professor)
                            @if ($professor->id == $reservada->professor_id)
                                {{ $professor->name }}
                            @endif
                        @endforeach
                    </td>
                    <td>{{ $reservada->inicio }}</td>
                    <td>{{ $reservada->fim }}</td>
                    <td><a href="#">info</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $salasReservadas->links() !!}

@endsection()