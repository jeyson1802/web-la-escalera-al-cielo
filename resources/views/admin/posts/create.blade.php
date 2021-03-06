@extends('adminlte::page')

@section('title', 'Escalera al Cielo')

@section('content_header')
    <h1>Crear nuevo post</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">

        {!! Form::open(['route' => 'admin.posts.store', 'files' => true]) !!}

            @include('admin.posts.partials.form')

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
        
        .form-group small {
            font-size: 100% !important;
            font-weight: bold !important;
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

