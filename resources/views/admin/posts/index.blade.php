@extends('adminlte::page')

@section('title', 'Escalera al Cielo')

@section('content_header')
    <h1>Lista de posts</h1>
@stop

@section('content')
    @livewire('admin.posts-index')
@stop