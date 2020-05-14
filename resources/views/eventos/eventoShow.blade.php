@extends('layouts.app')

@section('content')
@include('sesiones.sesionModal')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Detalle de Evento</div>
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
                            <tr>
                                <td>
                                    {{ $evento->nombre }}
                                </td>
                                <td>{{ $evento->tipo }}</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Sesiones</div>

                <div class="card-body">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sesionModal">
                      Agrega Sesión
                    </button>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sesión</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Fin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($evento->sesiones as $sesion)
                                <tr>
                                    <td>{{ $sesion->descripcion }}</td>
                                    <td>{{ $sesion->inicio->format('d/m/Y') }}</td>
                                    <td>{{ $sesion->fin }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Personas Inscritas</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Tipo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($evento->personas as $persona)
                                <tr>
                                    <td>{{ $persona->nombre }}</td>
                                    <td>{{ $persona->correo }}</td>
                                    <td>{{ $persona->tipo }}</td>
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
