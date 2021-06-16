@extends('adminlte::page')

@section('title', 'Escalera al Cielo')

@section('content_header')
    <h1>Crear nueva categoría</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">

        {!! Form::open(['route' => 'admin.categories.store']) !!}

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
            
            {!! Form::submit('Crear Categoría', ['class' => 'btn btn-primary pull-right']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop

@section('js')

    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-2.1.0/dist/jquery.stringtoslug.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/speakingurl/14.0.1/speakingurl.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug'
            });
        });
    </script>
    
@endsection

