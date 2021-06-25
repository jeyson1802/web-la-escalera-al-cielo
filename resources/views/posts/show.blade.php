@extends('layouts.page')

@section('title', 'Noticias')

@section('encabezado', 'Noticias')

@section('detalle.encabezado', 'Noticia del Ministerio de Arrepentimiento y Santidad')

@section('breadcrumb')
    <a href="{{ route('home.index') }}"><span>Inicio</span> </a> >  <span class="activo">Noticias</span>     
@endsection

@section('content')

<div class="row">

    <div class="col-md-8 col-12 mb-2 mb-md-0">
        <div class="card">
            <div class="card-body"> 
                <div class="row categoria">
                    <div class="col-auto">
                        <p class="mb-0 mb-md-3"><img src="{{ asset('images/ico-calendar.svg')}}" alt=""> {{$post->date_public}}</p>
                    </div>
                    <div class="col-auto ml-auto d-none d-md-block">
                        <p><img src="{{ asset('images/ico-categoria.svg')}}" alt="{{$post->category->name}}"> Categoría : {{$post->category->name}}</p>
                    </div>
                </div>
                
                <h3 class="mt-3">{{$post->name}}</h3>

                <div class="row">
                    <div class="col-md-12 col-12">
                        <img src="{{Storage::url($post->url_image)}}" class="img-post mb-md-5 mb-3 img-fluid" alt="{{$post->name}}"> 
                    </div>                   
                </div>
                <div class="row">
                    <div class="col-md-12 col-12">
                        {!!$post->body!!}
                    </div> 
                 </div>
                
                <div class="d-md-none d-block categoria mt-4">
                    <p class="mb-0"><img src="{{ asset('images/ico-categoria.svg')}}" alt="{{$post->category->name}}"> Categoria: {{$post->category->name}}</p>
                </div>
            </div>
        </div>
    </div>
        
    <div class="col-md-4 col-12 noticias">

        <div class="card mb-5">
            <div class="card-body p-3 d-flex justify-content-between">
                <p class="mb-0 mt-1">Compartir:</p>
                <a href="#"> <img src="{{ asset('images/shared-whatsapp.svg')}}" alt="" /> </a>
                <a href="#"> <img src="{{ asset('images/shared-facebook.svg')}}" alt="" /> </a>
                <a href="#"> <img src="{{ asset('images/shared-twitter.svg')}}" alt="" /> </a>
                <a href="#"> <img src="{{ asset('images/shared-mail.svg')}}" alt="" /> </a>
            </div>
        </div>

        <h4>También puede interesarte</h4>

        @foreach ($posts as $post)
            <article class="card d-flex noticias__item">
                <div class="noticias__img">
                    <img href="/post/{{$post->id}}"><img src="{{Storage::url($post->url_image)}}" class="w-100" alt="{{$post->name}}">
                </div>
                <div class="noticias__txt">
                    <p class="date"><img src="{{ asset('images/ico-calendar.svg')}}">
                    {{$post->date_public}}</p>
                    <h1>{{$post->name}}</h1>
                    <a href="/post/{{$post->id}}">Leer más</a>
                </div>
            </article>
        @endforeach  

        <h4 class="mt-5">Últimas transcripciones</h4>

        <article class="traducc">
            <ul>
                @foreach ($documents as $document)
                    <li><a href="{{Storage::url($document->url_file)}}" target="_blank" download>{{$document->name}}</a></li>
                @endforeach  
            </ul>
        </article>
          
    </div>
</div>

</section>

@endsection

@push('scripts')
<script async charset="utf-8" src="https://cdn.embedly.com/widgets/platform.js"></script>
<script>
    document.querySelectorAll( 'oembed[url]' ).forEach( element => {

        const anchor = document.createElement( 'a' );

        anchor.setAttribute( 'href', element.getAttribute( 'url' ) );
        anchor.setAttribute( 'data-card-width', '854' );
        anchor.setAttribute( 'data-card-recommend', '0' );
        anchor.setAttribute( 'data-card-controls', '0' );

        anchor.className = 'embedly-card';

        element.appendChild( anchor );
    } );
</script>
@endpush