@extends('layouts.home')

@section('title', 'Inicio - MINPAES')

@section('content')

<div class="intro__content">
    <img src="images/ministerio-letra.png" class="w-100" alt="Ministerio de Arrepentimiento y Santidad América Latina">
    <p class="intro__nota">Selecciones su nación para acceder a todos<br> los canales de comunicación</p>
    <form action="" class="intro__form"  autocomplete="off">
        <input id="country" type="text" name="country" placeholder="Escriba el nombre del pais">
        <button id="buscar"> <img src="images/ico-buscar.svg" alt=""> </button>
    </form>
    <div class="intro__redes">
       <span> Síguenos en redes sociales</span>
        <div class="mt-md-3">
            <a href="#"> <img src="images/ico-facebook.svg" alt="" /> </a>
            <a href="#"> <img src="images/ico-ig.svg" alt="" /> </a>
            <a href="#"> <img src="images/ico-whatsapp.svg" alt="" /> </a>
            <a href="#"> <img src="images/ico-twitter.svg" alt="" /> </a>
            <a href="#"> <img src="images/ico-youtube.svg" alt="" /> </a>
        </div>
    </div>
</div>

@endsection

@push('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

<script>

  var country;

  $(document).ready(function(){
      inicializarVariables();
      inicializarComponentes();
  });

  function inicializarVariables() {
    country = $("#country");
  }

  function inicializarComponentes() {
    
    country.typeahead({
        
        afterSelect: function (data) {
       
            var href = "/person/" + data.id;
            $(location).attr('href', href);
        },

        source:  function (query, process) {

            var url = "{{ route('home.autocomplete') }}";

            return $.get(url, { query: query }, function (data) {
                return process(data);
             });
        },

        highlighter: function (item, data) {

            html = '<div>';
            html += '<img src="/storage/'+data.url_flag+'">';
            html += '<strong>'+data.name+'</strong>';
            html += '</div>';
            return html;

        }
    });

  }
    
</script>

@endpush