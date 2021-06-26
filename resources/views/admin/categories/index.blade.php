@extends('adminlte::page')

@section('title', 'Escalera al Cielo')

@section('content_header')
    <h1>Lista de categorías</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
    <div class="card-header">
        @can('admin.categories.create')
            <a class="btn btn-primary btn-sm" href="{{route('admin.categories.create')}}">Agregar categoría</a>
        @endcan        
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th colspan="2" scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                  <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->name}}</td>
                    <td>
                        @can('admin.categories.edit')
                            <a class="btn btn-primary btn-sm" href="{{route('admin.categories.edit', $category)}}">Editar</a>
                        @endcan       
                    </td>
                    <td>
                        @can('admin.categories.destroy')
                            <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        @endcan   
                    </td>
                  </tr>
                @endforeach                            
            </tbody>
          </table>
    </div>
</div>
@stop