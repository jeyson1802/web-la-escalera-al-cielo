<div class="form-group">
    {!! Form::label("name", "Rol") !!}
    {!! Form::text("name", null, ["class"=>"form-control","placeholder"=>"Ingrese Rol"]) !!}
@error('name')
    <small class="text-danger">
        <strong>{{ $message }}</strong>
    </small>
@enderror
</div>
<div class="form-group">
    <strong>Permisos</strong><br>
    @error('permissions')
    <small class="text-danger">
        <strong>{{ $message }}</strong>
    </small>
    @enderror
    @foreach ($permissions as $permission)
    <div class="block">
        <label>
            {!! Form::checkbox("permissions[]", $permission->id, null, ["class"=>"mr-1"]) !!}
            {{ $permission->description }}
        </label>
    </div>
    @endforeach
</div>