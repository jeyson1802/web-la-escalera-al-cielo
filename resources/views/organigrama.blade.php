@extends('layouts.page')

@section('title', 'Organigrama')

@section('encabezado', 'Organigrama')

@section('detalle.encabezado', 'Bienvenido al Ministerio de Arrepentimiento y Santidad')

@section('breadcrumb')
    <a href="{{ route('home.index') }}"><span>Inicio</span> </a> >  <span>Organización</span>     >  <span class="activo">Organigrama</span>     
@endsection


@section('content')

<div class="row">
    <div class="col-md-9 col-12 mb-5 mb-md-0">

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <h3>Organigrama de SubRegiones</h3>
                        <p>Organigrama con los líderes encargados por subregión de América Latina</p>
                        <img src="{{ asset('images/organigrama_01.png')}}" class="img-post mb-md-5 mb-3 img-fluid" alt="">
                        <h3>Organigrama de Departamentos</h3>
                        <p>Organigrama con los líderes encargados de cada departamento para América Latina</p>
                        <img src="{{ asset('images/organigrama_02.png')}}" class="img-post mb-md-5 mb-3 img-fluid" alt="">
                        <h3>Organigrama de Medios y Comunicaciones</h3>
                        <p>Organigrama con los líderes encargados del área de Medios y Comunicaciones</p>
                        <img src="{{ asset('images/organigrama_03.png')}}" class="img-post mb-md-5 mb-3 img-fluid" alt="">
                        <h3>Organigrama de Sistemas</h3>
                        <p>Organigrama con los líderes encargados del área de Sistemas</p>
                        <img src="{{ asset('images/organigrama_04.png')}}" class="img-post mb-md-5 mb-3 img-fluid" alt="">
                    </div>                   
                </div>
            </div>
        </div>        
    </div>

    <div class="col-md-3 col-12 noticias">

        <h4>También puede interesarte</h4>

        @foreach ($posts as $post)
            <article class="card d-flex noticias__item">
                <div class="noticias__img">
                    <img href="/post/{{$post->id}}">
                    @if($post->url_image) 
                        <img src="{{Storage::url($post->url_image)}}" class="w-100" alt="{{$post->name}}">
                    @else 
                        <img src="https://www.tulliluce.it/wp-content/uploads/2014/12/demo-2-400x200.png" class="w-100" alt="{{$post->name}}">
                    @endif
                </div>
                <div class="noticias__txt">
                    <p class="date"><img src="{{ asset('images/ico-calendar.svg')}}">
                    {{$post->date_public}}</p>
                    <h1>{{$post->name}}</h1>
                    <a href="/post/{{$post->id}}">Leer más</a>
                </div>
            </article>
        @endforeach  
    </div>
</div>

<br>

@endsection