@extends('layouts.tabler')

@section('content')
<div class="page-header">
    <div class="row align-items-center">
      <div class="col-auto">
        <h2 class="page-title">
          Eventos
        </h2>
      </div>
    </div>
</div>

<div class="box">
  <div class="card">
    <div class="table-responsive">
      <table class="table table-vcenter card-table">
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
                    <td class="text-muted">{{ $evento->tipo_evento }}</td>
                    <td class="text-muted"></td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
