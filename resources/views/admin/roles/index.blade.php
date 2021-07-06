@extends('adminlte::page')
@section('title', 'Seguridad - Roles')

@section('content_header')
    <h1>Lista de roles</h1>
@stop

@section('content')
    @if (session('info'))
    <div class="alert alert-success" role="alert">
        <strong> {{session('info')}} </strong>
    </div>
    @endif
    <div class="card">
        <div class="card-header">
            @can('admin.categories.create')
                <a class="btn btn-secondary float-right" href="{{route('admin.roles.create')}}">Agregar rol</a>
            @endcan  
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Rol</th>
                        <th colspan="2">#</th>
                    </tr>
                </thead>
                <tbody>
                   @forelse ($roles as $role)
                       <tr>
                           <td>{{ $role->id }}</td>
                           <td>{{ $role->name }}</td>
                           <td width="10px"><a class="btn btn-primary" href="{{ route('admin.roles.edit', $role->id) }}">Editar</a></td>
                           <td width="10px"><form action="{{ route('admin.roles.destroy', $role->id) }}" method="post">
                        @method("DELETE")
                        @csrf
                        <button class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
                       </tr>
                   @empty
                       <tr><td colspan="4">Ningún rol registrado :)</td></tr>
                   @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop
