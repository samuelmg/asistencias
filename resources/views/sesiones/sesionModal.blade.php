<!-- Modal -->
<div class="modal fade" id="sesionModal" tabindex="-1" role="dialog" aria-labelledby="formularioSesion" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formularioSesion">Agregar nueva sesión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          {!! Form::open(['route' => ['evento.sesion.store', $evento->id], 'id' => 'sesion-form']) !!}
            {!! Form::label('descripcion', 'Descripción del Evento') !!}
            {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
            {!! Form::label('inicio', 'Fecha de Inicio') !!}
            {!! Form::date('inicio', null, ['class' => 'form-control']) !!}
          {!! Form::close() !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary"  onclick="event.preventDefault();
                       document.getElementById('sesion-form').submit();">Aceptar</button>
      </div>
    </div>
  </div>
</div>
