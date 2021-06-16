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

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Gracias Bendecido Hermano <br> </strong> ¡Hemos recibido su mensaje y le responderemos a la brevedad!   
                </div>

                <div class="alert alert-primary alert-dismissible fade show" role="alert"> 
                    <img class="img-person" src="{{Storage::url($country->url_flag)}}" /> 
                    <strong class="strong-person"> {{$country->name}} </strong>
                    <br>                 
                    En los íconos de la derecha o en la parte inferior puede acceder a las redes sociales del país.
                </div>
            
            </div>
        </div>
    </div>
    <div class="col-md-4 col-12">

        <div class="card mb-4">
            <div class="card-body mensaje text-center">
                <div class="mensaje__redes text-center">
                    @foreach ($country->socials()->get() as $social) 
                        <a href="{{$social->pivot->link}}"> <img src="{{Storage::url($social->url_icon)}}" alt="" /> </a>
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