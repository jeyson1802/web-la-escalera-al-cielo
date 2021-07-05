@extends('layouts.page')

@section('title', 'Registro')

@section('encabezado', 'La Escalera al Cielo')

@section('detalle.encabezado', 'Bienvenido al Ministerio de Arrepentimiento y Santidad')

@section('breadcrumb')
    <a href="{{ route('home.index') }}"><span>Inicio</span> </a> >  <span class="activo">La Escalera al Cielo</span>     
@endsection


@section('content')
<div class="row">
    <div class="col-md-8 col-12 mb-5 mb-md-0">
        <div class="card">
            <div class="card-body">

                <h3 class="mb-1">La Escalera al Cielo</h3>
                <p>Bendecido hermano, para ponernos en contacto con usted, por favor completar los siguientes datos.</p>
                
                <form action="{{route('person.store')}}" method="POST">

                    @csrf

                    <input type="hidden" id="country_id" name="country_id" value="{{$country->id}}">

                    <div class="row">
                        <div class="col-12 col-md-6 p-2">
                            <input type="text" id="name" name="name" class="form-control w-100" placeholder="Nombres" required>
                        </div>
                        <div class="col-12 col-md-6 p-2">
                            <input type="number" id="phone" name="phone" class="form-control w-100" placeholder="Celular" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 p-2">
                            <input type="email" id="email" name="email" class="form-control w-100" placeholder="Email" required>
                        </div>
                        <div class="col-12 col-md-6 p-2">
                            <input type="text" id="date_birth" name="date_birth" class="w-276"  placeholder="Fecha de Nacimiento" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 p-2">
                            <textarea  id="answer" name="answer" class="form-control w-100" placeholder="¿Cómo se enteró de nuestro Ministerio? (será un honor escuchar tu historia)" rows="4"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-12 p-4">
                            <div>
                                <img class="img-person" src="{{Storage::url($country->url_flag)}}" />
                                <strong class="strong-person"> {{$country->name}} </strong>
                            </div>
                        </div>                    
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6 p-2">
                            <input type="text" id="city" name="city" class="form-control w-100"  placeholder="Ciudad">
                        </div>
                        <div class="col-12 col-md-6 p-2">
                            <input type="text" id="address" name="address" class="form-control w-100"  placeholder="Dirección">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 p-2">
                            <button type="submit" class="button__primary">Enviar</button>
                        </div>
                    </div>
                </form>
            
            </div>
        </div>
    </div>
    <div class="col-md-4 col-12">

        <div class="card mb-4">
            <div class="card-body mensaje text-center">
                <div class="mensaje__redes text-center">
                    @foreach ($country->socials()->get() as $social) 
                        <a href="{{$social->pivot->link}}" target="_blank"> <img src="{{Storage::url($social->url_icon)}}"/> </a>
                    @endforeach
                </div>

                <img src="{{Storage::url($country->url_firm)}}" class="img-fluid" alt="">
            </div>
        </div>

        <div class="card">
            <div class="card-body p-4">
                <h3>Ven y adora con nosotros</h3>

                <div class="contact">
                    <div class="contact__img">
                        <img src="{{ asset('images/contact-phone.svg')}}" alt="">
                    </div>
                    <div class="contact__txt">
                        <b>Teléfono</b><br> {{$country->phone}}
                    </div>
                </div>
                <div class="contact">
                    <div class="contact__img">
                        <img src="{{ asset('images/contact-map.svg')}}" alt="">
                    </div>
                    <div class="contact__txt">
                        <b>Dirección</b><br>
                        {{$country->address}}
                    </div>
                </div>

                <div class="contact">
                    <div class="contact__img">
                        <img src="{{ asset('images/contact-mail.svg')}}" alt="">
                    </div>
                    <div class="contact__txt">
                        <b>E-mail</b><br>
                        {{$country->email}}
                    </div>
                </div>

                <div class="contact">
                    <div class="contact__img">
                        <img src="{{ asset('images/contact-hours.svg')}}" alt="">
                    </div>
                    <div class="contact__txt">
                        <b>Horarios de atención</b><br>
                        {{$country->schedule}}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@push('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<script src="{{ asset('dist/js/gijgo.js')}}"></script>

<script>

  var date_birth;

  $(document).ready(function(){
      inicializarVariables();
      inicializarComponentes();
  });

  function inicializarVariables() {

    date_birth = $("#date_birth");
  }

  function inicializarComponentes() {        

    date_birth.datepicker({
        locale: 'es-es',
        format: 'dd/mm/yyyy',
        uiLibrary: 'bootstrap4',
        header: true
    });
  }
    
</script>

@endpush