@extends('layouts.page')

@section('title', 'Transcripciones')

@section('encabezado', 'Transcripciones')

@section('detalle.encabezado', 'Transcripciones de las Transmisiones y Enseñanzas del Ministerio')

@section('breadcrumb')
    <a href="{{ route('home.index') }}"><span>Inicio</span> </a> >  <span class="activo">Transcripciones</span>     
@endsection

@section('content')

<div class="row">

    <div class="col-12 col-md-9">
        <div class="filter">
            <div class="row">

                <div class="filter__selects col-md-12 ml-0 d-md-flex align-content-center justify-content-end">
                    <form  method="GET" action="{{ route('document.index')}}">
            
                        <select name="category_id" id="category_id" class="mx-md-1">
                            <option value="">Categoría</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}" {{ request('category_id') == $category->id ? "selected" : "" }}> {{$category->name}}</option>
                            @endforeach  
                        </select>
        
                        <select name="month" id="month" class="mx-md-1">
                            <option value="">Mes</option>
                            <option value="01" {{ request('month') == "01" ? "selected" : "" }}>Enero</option>
                            <option value="02" {{ request('month') == "02" ? "selected" : "" }}>Febrero</option>
                            <option value="03" {{ request('month') == "03" ? "selected" : "" }}>Marzo</option>
                            <option value="04" {{ request('month') == "04" ? "selected" : "" }}>Abril</option>
                            <option value="05" {{ request('month') == "05" ? "selected" : "" }}>Mayo</option>
                            <option value="06" {{ request('month') == "06" ? "selected" : "" }}>Junio</option>
                            <option value="07" {{ request('month') == "07" ? "selected" : "" }}>Julio</option>
                            <option value="08" {{ request('month') == "08" ? "selected" : "" }}>Agosto</option>
                            <option value="09" {{ request('month') == "09" ? "selected" : "" }}>Setiembre</option>
                            <option value="10" {{ request('month') == "10" ? "selected" : "" }}>Octubre</option>
                            <option value="11" {{ request('month') == "11" ? "selected" : "" }}>Noviembre</option>
                            <option value="12" {{ request('month') == "12" ? "selected" : "" }}>Diciembre</option>
                        </select>
        
                        <select name="year" id="year" class="mx-md-1">
                            <option value="">Año</option>
                            <option value="2021" {{ request('year') == "2021" ? "selected" : "" }}>2021</option>
                            <option value="2020" {{ request('year') == "2020" ? "selected" : "" }}>2020</option>
                        </select>
                        
                        <button type="submit" class="mx-md-1 btn-filter btn btn-primary">Buscar</button>
        
                    </form>
                </div>
            </div>
        </div>
        
        <section class="row">
            <div class="col-12 mb-5 mb-md-0">
                <div class="card">
                    <div class="card-body"> 
                        <div class="traducc d-flex flex-wrap">
                            @foreach ($documents as $document)
                                <div class="traducc__item ">
                                    <a href="{{Storage::url($document->url_file)}}" target="_blank" download>{{$document->name}}</a>
                                </div>
                            @endforeach                              
                        </div>
                    </div>
                </div>    
            </div>
            <div class="col-12 mt-3 d-md-flex align-content-center justify-content-end">     
                {{ $documents->appends($data)->links() }}   
            </div>
        </section> 
    </div>

    <div class="col-md-3 col-12 noticias">
        <h4>También puede interesarte</h4>

        @foreach ($posts as $post)
            <article class="card d-flex noticias__item">
                <div class="noticias__img">
                    <img href="/post/{{$post->id}}"><img src="{{Storage::url($post->url_thumbail)}}" class="w-100" alt="{{$post->name}}">
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

</section>

@endsection

@push('scripts')
@endpush