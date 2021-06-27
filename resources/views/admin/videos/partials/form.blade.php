<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('name') }}</small>
</div>

<div class="form-group{{ $errors->has('url_video') ? ' has-error' : '' }}">
    {!! Form::label('url_video', 'URL Video') !!}
    {!! Form::text('url_video', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('url_video') }}</small>
</div>

<div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
    {!! Form::label('category_id', 'Categoría') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('category_id') }}</small>
</div>

<div class="form-group{{ $errors->has('date_public') ? ' has-error' : '' }}">
    {!! Form::label('date_public', 'Fecha de Publicación') !!}
    {!! Form::date('date_public', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('date_public') }}</small>
</div>

<div class="form-group">
    <p class="font-weight-bold">Estado</p>

    <label>
        {!! Form::radio('status', 1,  true) !!}
        Inactivo
    </label>

    <label>
        {!! Form::radio('status', 2) !!}
        Activo
    </label>
</div>