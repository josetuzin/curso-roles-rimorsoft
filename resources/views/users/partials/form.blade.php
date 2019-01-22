<div class="form-group">
  {{ Form::label('name', 'Nombre del usuario') }}
  {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('email', 'Email del usuario') }}
  {{ Form::text('email', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>