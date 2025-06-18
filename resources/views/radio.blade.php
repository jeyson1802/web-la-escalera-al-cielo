@extends('layouts.page')

@section('title', 'Radio')

@section('encabezado', 'Radio - El Mesías Viene')

@section('detalle.encabezado', 'Radio del Ministerio de Arrepentimiento y Santidad América Latina')

@section('breadcrumb')
    <a href="{{ route('home.index') }}"><span>Inicio</span> </a> >  <span class="activo">Radio</span>
@endsection

@section('content')

<div class="row">

    <div class="col-md-12 col-12 mb-4">
        <div class="card audio-card">
            <div class="card-body d-flex align-items-center">
                {{-- ícono de radio (colócalo en public/images/radio-icon.svg) --}}
                <img src="https://elmesiasvieneradio.org/wp-content/uploads/2023/04/el-mesias-viene-radio.jpg"
                     alt="Radio Icon"
                     class="radio-icon mr-3">

                {{-- reproductor HTML5 --}}
                <audio controls autoplay  preload="none" class="flex-fill radio-player">
                    <source src="https://cast1.my-control-panel.com/proxy/elmesiasv2/stream"
                            type="audio/mpeg">
                    Tu navegador no soporta la reproducción de audio.
                </audio>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8 col-12 mb-5 mb-md-0">
        <div class="card">
            <div class="card-body">
                <h3>¡Escríbenos!</h3>
                <form action="{{route('contacto.store')}}" method="POST">

                    @csrf

                    <div class="row">
                        <div class="col-12 col-md-6 p-2">
                            <input id="name" name="name" type="text" class="form-control w-100" placeholder="Nombre" required>
                        </div>
                        <div class="col-12 col-md-6 p-2">
                            <input id="lastname" name="lastname" type="text" class="form-control w-100" placeholder="Apellido" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 p-2">
                            <input id="email" name="email" type="email" class="form-control w-100" placeholder="E-mail" required >
                        </div>
                        <div class="col-12 col-md-6 p-2">
                            <input id="phone" name="phone" type="number" class="form-control w-100"  placeholder="Teléfono" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 p-2">
                            <textarea id="message" name="message" class="form-control w-100" placeholder="Escriba su mensaje" rows="6"></textarea>
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

@endsection


@push('css')

    <style>

        /* Card ligero y redondeado */
        .audio-card {
            border-radius: 0.5rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            background-color: #ffffff;
        }
        /* Asegura que el ícono no desborde */
        .radio-icon {
            width: 100px;
            height: auto;
        }
        /* El audio ocupa todo el ancho disponible */
        .radio-player {
            width: 100%;
            outline: none;
        }
        /* Pequeño ajuste responsivo: ícono más pequeño en móviles */
        @media (max-width: 576px) {
            .radio-icon {
                width: 36px;
                margin-right: 0.5rem;
            }
        }

    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const player = document.querySelector('.radio-player');
            if (player) {
                player.play().catch(function(err) {
                    // Si el navegador bloquea autoplay, mostramos aviso en consola
                    console.warn('Reproducción automática bloqueada:', err);
                });
            }
        });
    </script>
@endpush
