@extends('adminlte::page')
@section('title', 'Seguridad')

@section('content_header')
    <h1>Editar {{ $user->name }}</h1>
@stop

@section('content')

  @if (session('info'))
      <div class="alert alert-success">
          <strong>{{session('info')}}</strong>
      </div>
  @endif
  <div class="card">
      <div class="card-body">

      {!! Form::model($user,['route'=>['admin.users.update', $user], 'method'=>'PUT']) !!}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('name', 'Nombres') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('name') }}</small>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          {!! Form::label('email', 'Email') !!}
          {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
          <small class="text-danger">{{ $errors->first('email') }}</small>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          {!! Form::label('password', 'Password') !!}
          {!! Form::password('password',['class' => 'form-control']) !!}
          <small class="text-danger">{{ $errors->first('password') }}</small>         
        </div>

        {!! Form::label('roles[]', 'Lista de roles') !!}
          @foreach ($roles as $role)
             <div>
                 <label>
                    {!! Form::checkbox("roles[]", $role->id, null, ['class'=>'mr-1']) !!}
                    {{ $role->name }}
                 </label>
             </div>
          @endforeach
          {!! Form::submit("Editar usuario", ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
  </div>
@stop
