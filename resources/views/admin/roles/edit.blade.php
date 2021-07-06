@extends('adminlte::page')
@section('title', 'Seguridad')

@section('content_header')
    <h1>Editar Rol {{ $role->name}}</h1>
@stop
@section('content')
    @if (session('info'))
    <div class="alert alert-success" role="alert">
        <strong> {{session('info')}} </strong>
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($role,['route'=>['admin.roles.update', $role], 'method'=>'put']) !!}
             @include('admin.roles.partials.form')
            {!! Form::submit("Editar Role", ["class"=>"btn btn-primary mt-2"]) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop