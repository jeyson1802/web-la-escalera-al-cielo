@extends('adminlte::page')

@section('title', 'Escalera al Cielo')

@section('content_header')
    <h1>Editar video</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
    <div class="card-body">
        
        {!! Form::model($video, ['route' => ['admin.videos.update', $video], 'method' => 'put', 'files' => true]) !!}
            
            @include('admin.videos.partials.form')

            {!! Form::submit('Actualizar Video', ['class' => 'btn btn-primary pull-right']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop

