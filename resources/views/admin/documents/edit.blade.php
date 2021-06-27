@extends('adminlte::page')

@section('title', 'Escalera al Cielo')

@section('content_header')
    <h1>Editar documento</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
    <div class="card-body">
        
        {!! Form::model($document, ['route' => ['admin.documents.update', $document], 'method' => 'put', 'files' => true]) !!}
            
            @include('admin.documents.partials.form')

            {!! Form::submit('Actualizar Documento', ['class' => 'btn btn-primary pull-right']) !!}

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