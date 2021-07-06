@extends('layouts.page')

@section('title', 'Transmisiones')

@section('encabezado', 'Transmisiones')

@section('detalle.encabezado', 'Transmisiones del Ministerio de Arrepentimiento y Santidad')

@section('breadcrumb')
    <a href="{{ route('home.index') }}"><span>Inicio</span> </a> >  <span class="activo">Transmisiones</span>     
@endsection

@section('content')

<div class="row">

    <div class="col-12 col-md-9">
        <div class="filter">
            <div class="row">

                <div class="filter__selects col-md-12 ml-0 d-md-flex align-content-center justify-content-end">
                    <form  method="GET" action="{{ route('video.index')}}">
            
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
            <div class="col-12 mb-md-0">
                <ul class="transmision">
                    @foreach ($videos as $video)
                        <li>
                            <article class="text-right">
                                <a href="#"><img src="{{$video->url_thumbail}}" class="img-fluid" alt=""></a>
                                <p>{{$video->name}}</p>

                                <button type="button" class="transmision__boton" data-title="{{$video->name}}" data-toggle="modal" data-src="{{$video->url_video}}" data-target="#modal_video">
                                    Ver video  <span class="icoplay"> <img src="{{ asset('images/ico-play.svg')}}" class="img-fluid" alt="" /> </span>
                                </button>

                            </article>
                        </li>
                    @endforeach
                </ul> 
            </div>
            <div class="col-12 mt-3 d-md-flex align-content-center justify-content-end">     
                {{ $videos->appends($data)->links() }}   
            </div>
        </section>         
    </div>

    <div class="col-md-3 col-12 noticias">
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
    </div>
</div>

<div class="modal fade" id="modal_video" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">

      <div class="modal-content">

        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
              
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
            </div>

        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
  
      </div>

    </div>

</div> 

</section>

@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script src="https://cdn.rawgit.com/JacobLett/bootstrap4-latest/master/bootstrap-4-latest.min.js"></script>

<script>

    var modal_video;
  
    $(document).ready(function(){
        inicializarVariables();
        inicializarComponentes();
    });
  
    function inicializarVariables() {
        modal_video = $("#modal_video");
    }
  
    function inicializarComponentes() {
        
        modal_video.on("show.bs.modal", function(event) {

            var button = $(event.relatedTarget);
            var src = button.data("src");
            var title = button.data("title");            
            var modal = $(this);
            modal.find(".modal-body iframe").attr("src", src);
            modal.find(".modal-header h5").text(title);
        });
        
        modal_video.on('hidden.bs.modal', function () {
            var modal = $(this);
            modal.find(".modal-body iframe").attr("src", '');
        });

    }
      
  </script>

@endpush