<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('name') }}</small>
</div>

<div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'required' => 'required', 'readonly' => 'readonly']) !!}
    <small class="text-danger">{{ $errors->first('slug') }}</small>
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
        Borrador
    </label>

    <label>
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>
</div>

<div class="row">
    <div class="col">
        <div class="image-wrapper">
            @isset($post->url_image)
                <img id="picture" src="{{Storage::url($post->url_image)}}">
            @else
                <img id="picture" src="https://www.tulliluce.it/wp-content/uploads/2014/12/demo-2-400x200.png">
            @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group{{ $errors->has('url_image') ? ' has-error' : '' }}">
            {!! Form::label('url_image', 'Imagen que se mostrará en el post') !!}
            {!! Form::file('url_image') !!}
            <p class="help-block">Se debe subir una imagen con una resolución rectangular de proporciones 100%x50%, un ejemplo ideal seria 400px x 200px</p>
            <small class="text-danger">{{ $errors->first('url_image') }}</small>
        </div>
    </div>
</div>

<div class="form-group{{ $errors->has('extract') ? ' has-error' : '' }}">
    {!! Form::label('extract', 'Extracto') !!}                
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('extract') }}</small>
</div>

<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
    {!! Form::label('body', 'Cuerpo') !!}                
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('body') }}</small>
</div>