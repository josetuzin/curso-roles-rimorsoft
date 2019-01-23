<div class="form-group">
  {{ Form::label('name', 'Nombre') }}
  {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<hr>
<h3>Lista de roles</h3>
<div class="form-group">
  <ul class="list-unstyled">
    @foreach ($roles as $role)
        <li>
          <label>
            {{ Form::checkbox('roles[]', $role->id, null) }}  
            <!-- , ['class' => 'icheck']se pueden marcar uno o varios roles -->
            <!-- ultimo parametro null para que no tenca marcados por defecto -->
            {{ $role->name }}
            <em>({{ $role->description ?: 'N/A' }})</em>
          </label>
        </li>
    @endforeach
  </ul>
</div>
<div class="form-group">
  {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>