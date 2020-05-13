@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear / Editar Evento</div>

                <div class="card-body">
                    @if(isset($evento))
                        {!! Form::model(['route' => ['evento.update', $evento->id], 'method' => 'PATCH']) !!}
                    @else
                        {!! Form::open(['route' => 'evento.store']) !!}
                    @endif

                    {!! Form::label('nombre', 'Nombre del Evento o Clase') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}

                    {!! Form::label('fecha_inicio', 'Fecha de Inicio') !!}
                    {!! Form::date('fecha_inicio', null, ['class' => 'form-control']) !!}

                    {!! Form::label('fecha_fin', 'Fecha de Fin') !!}
                    {!! Form::date('fecha_fin', null, ['class' => 'form-control']) !!}

                    {!! Form::label('tipo_evento', 'Tipo de Evento') !!}
                    {!! Form::select('tipo_evento', ['Evento' => 'Evento', 'Asignatura' => 'Asignatura'], null, ['class' => 'form-control']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
