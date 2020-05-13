@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listado de Eventos</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Evento</th>
                                <th>Tipo</th>
                                <th>No. Asistentes</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($eventos as $evento)
                                <tr>
                                    <td>
                                        {{ $evento->nombre }}
                                        <a href="{{ route('evento.show', $evento->id) }}">
                                            <i class="fas fa-info-circle fa-2x"></i>
                                        </a>
                                    </td>
                                    <td>{{ $evento->tipo_evento }}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
