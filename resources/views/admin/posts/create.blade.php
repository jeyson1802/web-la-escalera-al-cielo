@extends('adminlte::page')

@section('title', 'Escalera al Cielo')

@section('content_header')
    <h1>Crear nuevo post</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">

        {!! Form::open(['route' => 'admin.posts.store', 'files' => true]) !!}

            {!! Form::hidden('user_id', auth()->user()->id) !!}

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
                        <img id="picture" src="https://cdn.pixabay.com/photo/2019/08/17/04/18/morning-4411421_960_720.jpg" alt="img">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group{{ $errors->has('url_image') ? ' has-error' : '' }}">
                        {!! Form::label('url_image', 'Imagen que se mostrará en el post') !!}
                        {!! Form::file('url_image', ['required' => 'required']) !!}
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

            {!! Form::submit('Crear Post', ['class' => 'btn btn-primary pull-right']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <style>
        .image-wrapper {
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@endsection

@section('js')

    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-2.1.0/dist/jquery.stringtoslug.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/speakingurl/14.0.1/speakingurl.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>

    <script>
        $(document).ready(function(){

            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug'
            });

            ClassicEditor
            .create( document.querySelector( '#extract' ) )
            .catch( error => {
                console.error( error );
            } );

            ClassicEditor
            .create( document.querySelector( '#body' ) )
            .catch( error => {
                console.error( error );
            } );

            document.getElementById("url_image").addEventListener('change', cambiarImagen);
            
        });
        
        function cambiarImagen(event) {
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }

    </script>
    
@endsection

