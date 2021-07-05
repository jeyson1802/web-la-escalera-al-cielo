@extends('layouts.page')

@section('title', 'Contacto')

@section('encabezado', 'Contacto')

@section('detalle.encabezado', 'Bienvenido al Ministerio de Arrepentimiento y Santidad')

@section('breadcrumb')
    <a href="{{ route('home.index') }}"><span>Inicio</span> </a> >  <span class="activo">Contacto</span>     
@endsection


@section('content')

<div class="row">
    <div class="col-md-8 col-12 mb-5 mb-md-0">
        <div class="card">
            <div class="card-body">
                
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Gracias Bendecido Hermano <br> </strong> ¡Hemos recibido su mensaje y le responderemos a la brevedad!   
                </div>
            
            </div>
        </div>
    </div>

    <div class="col-md-4 col-12">        
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

<br>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1950.693917445343!2d-76.972967!3d-12.08558!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb720f2d7088ba893!2sEdificio%20Omega!5e0!3m2!1ses-419!2spe!4v1625522820868!5m2!1ses-419!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

@endsection