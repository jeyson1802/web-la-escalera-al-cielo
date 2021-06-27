<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('name') }}</small>
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

<div class="row">
    <div class="col">
        <div class="form-group{{ $errors->has('url_file') ? ' has-error' : '' }}">
            @isset($document->url_file)
                <img id="picture" class="picture_file" src="https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg">
            @else
                <img id="picture" class="picture_file" src="https://cdn.iconscout.com/icon/premium/png-512-thumb/file-not-found-2-497877.png">
            @endisset
            {!! Form::label('url_file', 'Documento PDF') !!}
            {!! Form::file('url_file') !!}
            <p class="help-block">Sólo está permitido subir archivos pdf</p>
            <small class="text-danger">{{ $errors->first('url_file') }}</small>
        </div>
    </div>
</div>
