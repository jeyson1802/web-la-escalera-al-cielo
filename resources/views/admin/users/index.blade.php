@extends('adminlte::page')
@section('title', 'Seguridad - Roles')

@section('content_header')
    <h1>Lista de users</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-primary" role="alert">
    <strong>Atención!</strong> {{session('info')}}
</div>
@endif
    @livewire('admin.admin-users')
@stop