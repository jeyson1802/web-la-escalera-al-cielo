@extends('adminlte::page')

@section('title', 'Escalera al Cielo')

@section('content_header')
    <h1>Crear nuevo video</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">

        {!! Form::open(['route' => 'admin.videos.store', 'files' => true]) !!}

            @include('admin.videos.partials.form')

            {!! Form::submit('Crear Video', ['class' => 'btn btn-primary pull-right']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop

