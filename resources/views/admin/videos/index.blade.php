@extends('adminlte::page')

@section('title', 'Escalera al Cielo')

@section('content_header')
    <h1>Lista de videos</h1>
@stop

@section('content')
    @livewire('admin.videos-index')
@stop