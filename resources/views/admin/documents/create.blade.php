@extends('adminlte::page')

@section('title', 'Escalera al Cielo')

@section('content_header')
    <h1>Crear nuevo documento</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">

        {!! Form::open(['route' => 'admin.documents.store', 'files' => true]) !!}

            @include('admin.documents.partials.form')

            {!! Form::submit('Crear Documento', ['class' => 'btn btn-primary pull-right']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <style>
        .picture_file {
            width: 50px;
        }
        .form-group small {
            font-size: 100% !important;
            font-weight: bold !important;
        }
    </style>
@endsection

@section('js')

    <script>

        $(document).ready(function(){           
            document.getElementById("url_file").addEventListener('change', cambiarImagen);            
        });
        
        function cambiarImagen(event) {
            document.getElementById("picture").setAttribute('src', 'https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg');
        }

    </script>
    
@endsection

