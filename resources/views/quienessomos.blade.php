@extends('layouts.page')

@section('title', '¿Quiénes Somos?')

@section('encabezado', '¿Quiénes Somos?')

@section('detalle.encabezado', 'Bienvenido al Ministerio de Arrepentimiento y Santidad')

@section('breadcrumb')
    <a href="{{ route('home.index') }}"><span>Inicio</span> </a> >  <span>Organización</span>     >  <span class="activo">Quiénes Somos</span>     
@endsection


@section('content')

<div class="row">
    <div class="col-md-9 col-12 mb-5 mb-md-0">
        <div class="card">
            <div class="card-body">
                <h3>¿Quiénes Somos?</h3>
                <p align="justify">El Ministerio de Arrepentimiento y Santidad América Latina es un conjunto de iglesias, pastores, creyentes y discípulos de Jesucristo provenientes de todas las naciones de América Latina, que comparten la misma visión, misión, principios, ética y valores cristianos, con la carga de practicar, predicar y propagar el mensaje de Arrepentimiento y Santidad práctica personal, nacional y continental, con el fin de prepararse a estar listos para la inminente venida del Mesías, sabiendo evidentemente que Su Mensajero, el Temible Profeta Elías, prometido a venir en la Misión de preparar el Camino, está aquí en la tierra. El Ministerio de Arrepentimiento y Santidad América Latina es una extensión del Ministerio de Arrepentimiento y Santidad Global, con sede principal en Nairobi, Kenia, bajo total Autoridad y Cobertura del Temible Profeta Elías (Profeta Dr. David E. Owuor). </p>
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/sYSIG2u6q14" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <br>
                <br>
                <h4>Conociendo al Profeta Dr. David Edward Owuor, portador de la gloria postrera</h4>
                <p align="justify">El Profeta Dr. David E. Owuor, del Ministerio de Arrepentimiento y Santidad Global era un Médico Científico Genetista Molecular de profesión, que fue llamado por el SEÑOR al oficio profético internacional en 2003, con un mandato específico del SEÑOR JESUCRISTO de preparar a su pueblo para su pronta venida. </p>
                <br>
                <p align="justify"><strong>Portador del Avivamiento Global:</strong>  La biblia promete avivamiento tardío, la lluvia tardía, la unción tardía, la gloria postrera (Joel 2:23; Hageo 2:9, Juan 2:1-11), el cual tiene como propósito de preparar una novia espiritualmente santa y madura para el Mesías. El avivamiento comienza con una persona, personas, un pueblo, una nación (Jonás 3:1-10; Joel 2:12-18). El Avivamiento tardía para la gloriosa venida del Mesías no podrá estar sobre otro sino sobre los Dos Olivos (Moisés y Elías (Zacarías 4:11-14; Mateo 17:1-13; Apocalipsis 11:1-4). Dios ha escogido la nación gentil de Kenia como cuna y salón de clase para el Avivamiento Global; por ende, es la ubicación de la Sede Principal de este Glorioso Ministerio de Arrepentimiento y Santidad Global. A continuación, conozca el Profeta Dr. David Owuor, nuestra Cobertura y Portador de la Gloria Postrera, la Unción Tardía, la lluvia tardía, el Vino Nuevo, el Avivamiento Global.</p>
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