@extends('layouts.page')

@section('title', 'Misión y Visión')

@section('encabezado', 'Misión y Visión')

@section('detalle.encabezado', 'Bienvenido al Ministerio de Arrepentimiento y Santidad')

@section('breadcrumb')
    <a href="{{ route('home.index') }}"><span>Inicio</span> </a>  >  <span>Organización</span>     >  <span class="activo">Misión y Visión</span>     
@endsection


@section('content')

<div class="row">
    <div class="col-md-9 col-12 mb-5 mb-md-0">

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <h3>Misión</h3>
                        <img src="{{ asset('images/ico-mision.svg')}}" class="mb-4" alt="">
                        <p align="justify">Antes de Su ascensión al cielo, nuestro Señor Jesucristo prometió a Su iglesia volver por ella (Juan 14:1-4). Pero también, después de Su resurrección, Él se manifestó a Juan, el discípulo amado (Juan 21:20-24), reafirmándole en varias oportunidades que vendrá por Su iglesia santa, madura, justa, gloriosa, sin mancha ni arruga (Efesios 5:26-27; Hechos 1:10-11; Apocalipsis 1:7-8; 16:15; 22:12). Y sabemos que viene muy pronto: “ Porque no hará nada Jehová el Señor, sin que revele su secreto a sus siervos los profetas.” (Amos3:7). Ahora cuando evidentemente el Señor ha enviado Su más Temible Profeta Elías quien está preparando el Camino (Isaías 40:3-4; Malaquías 3:1), sabemos que el Mesías viene pronto, y que ya no hay más tiempo para el cumplimiento de ese evento irreversible. </p>
                        <p align="justify"><strong>Por ende, para nosotros, todas nuestras acciones e intenciones en este Ministerio están enfocadas hacia esta gloriosa esperanza bienaventurada: EL MESÍAS VIENE.</strong> Amado lector, el Mesías viene a arrebatar Su iglesia verdaderamente arrepentida y prácticamente santa, en el arrebatamiento para las Bodas del Cordero (1 Tes 4:16-18; 1 Corintios 15:50-56; Apocalipsis 19:6-9) antes que venga la próxima dispensación, de la Tribulación y Gran Tribulación (Daniel 12:1; 1 Tes 2:6-10; Jeremías 30:7; Isaías 26:19-20), “Porque no nos ha puesto Dios para ira, sino para alcanzar salvación por medio de nuestro Señor Jesucristo…” (1 Tes 5:9-11).</p>
                    </div>                   
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <h3>Visión</h3>
                        <img src="{{ asset('images/ico-vision.svg')}}" class="mb-4" alt="">
                        <p align="justify">“Gocémonos y alegrémonos y démosle gloria; porque han llegado las bodas del Cordero, y su esposa se ha preparado. Y a ella se le ha concedido que se vista de lino fino, limpio y resplandeciente; porque el lino fino es las acciones justas de los santos.” (Apocalipsis 19:8-9).</p>
                        <p align="justify">En cuanto a la venida del MESÍS a llevar Su iglesia para las bodas del Cordero, ella requiere estar preparada. Sabiendo que el actual estado caído en que se encuentra la iglesia globalmente, se requiere preparar la novia de Jesucristo. Y no hay otra forma en que ella puede prepararse sino a través del Arrepentimiento, Santidad y Justicia de Dios (Isaías 1:18; 35:8; Mateo 24:44; Hebreos 12:14; 1 Corintios 15:50).</p>
                        <p align="justify">En el Ministerio de Arrepentimiento y Santidad en América Latina, cargamos la antorcha de una ardiente urgencia de la proclamación del Reino de Nuestro Señor y Cristo, a través del mensaje de Salvación, Arrepentimiento, Justicia, Santidad, y la Venida del Reino de Dios (Mateo 3:2; 4:17, Apocalipsis 11:15), llevando a cabo el mandato de la Gran Comisión (Hechos 8:26-40; Mateo 28:19-20), mediante Conferencias, Talleres, Evangelismo por internet y redes sociales, Congresos regionales y nacionales de Arrepentimiento y Cruzadas de Avivamiento en las naciones, a cargo del Portador del Avivamiento Global, Profeta Dr. David E. Owuor.</p>
                        <p align="justify">Igualmente, nos esforzamos ardientemente para conectarnos diariamente con la nación Sede Principal (www.jesusislordradio.info) y mantener  el Avivamiento Global impulsado desde Kenia por nuestra Cobertura el Profeta Dr. David Owuor, así como hacemos peregrinajes a la Sede Principal una  o dos veces al año para asistir a las Gloriosas Conferencias Internacionales para Pastores, Ministros y Líderes y las Gigantescas Cruzadas de Sanidades y Milagros auspiciados por el Portador del Avivamiento Global, Profeta Dr. David E. Owuor (Profeta Elías) los cuales reúnen peregrinos de todos los países del mundo.</p>
                        <p align="justify">¿Está usted preparado? “He aquí, yo vengo como ladrón. Bienaventurado el que vela, y guarda sus ropas, para que no ande desnudo, y vean su vergüenza.” (Apocalipsis 16:15).</p>
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