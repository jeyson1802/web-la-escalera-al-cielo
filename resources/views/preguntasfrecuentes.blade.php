@extends('layouts.page')

@section('title', 'Preguntas Frecuentes')

@section('encabezado', 'Preguntas Frecuentes')

@section('detalle.encabezado', 'Bienvenido al Ministerio de Arrepentimiento y Santidad')

@section('breadcrumb')
    <a href="{{ route('home.index') }}"><span>Inicio</span> </a> >  <span class="activo">Preguntas Frecuentes</span>     
@endsection


@section('content')

<div class="row">
    <div class="col-md-9 col-12 mb-5 mb-md-0">
        <div id="accordion" class="faqs">
            <div class="faqs__item">
              <div id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    ¿Cuál es su credo o declaración de fe? 
                  </button>
                </h5>
              </div>
          
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <p>1. Creemos que la Biblia es el fundamento principal y la única Palabra de Dios inmutable, infalible y autorizada completamente inspirada por el Poderoso Espíritu Santo. La Santa Biblia es la máxima y última autoridad en todos los aspectos de la vida creada por Dios.</p>
                    <p>2. Creemos en un solo Dios; eternamente existente en tres personas: Dios Padre, Dios Hijo y Dios Espíritu Santo.</p>
                    <p>3. Creemos en la deidad de nuestro Señor Jesucristo, el Unigénito Hijo de Dios, Su nacimiento virginal, Su resurrección corporal, Su ascensión a la diestra del Padre, Su muerte para redimir completamente el pecado de todos los hombres.</p>
                    <p>4. Creemos que todos los hombres nacen con una naturaleza pecaminosa y que la obra de la Cruz redimió completamente al hombre del poder del pecado y la muerte. Y que los que creen en Cristo JESÚS como SEÑOR y Salvador son salvos.</p>
                    <p>5. Creemos que el Espíritu Santo es la Tercera Persona de la Trinidad y el bautismo del Espíritu Santo se manifiesta por el fruto y los dones del Espíritu.</p>
                    <p>6. Creemos que la Iglesia de Cristo es el Cuerpo de Cristo eterno y universal JESÚS que consiste en todos aquellos que han aceptado la obra de la expiación.</p>
                    <p>7. Creemos que el Rapto es el inminente regreso premilenial de Jesucristo para Su santa iglesia cuando los muertos en Cristo serán resucitados en cuerpos glorificados, y aquellos que viven en santidad serán transformados en cuerpos glorificados sin gustar la muerte y ser arrebatados. en el aire con el Señor JESUS.</p>
                    <p>8. Creemos en la ordenanza del bautismo en agua por inmersión en obediencia a la Palabra de Dios. Y todos los que han aceptado a Jesucristo como su salvador personal deben ser bautizados en agua como profesión pública de su fe en Cristo.</p>
                    <p>9. Creemos que el único medio de ser limpiados del pecado es a través del verdadero Arrepentimiento en la preciosa sangre de Cristo JESÚS y el poder santificador del Espíritu Santo que capacita al cristiano para vivir en santidad.</p>
                    <p>10. Creemos en la observancia de la Cena del Señor como una proclamación de la muerte de Cristo JESÚS hasta que regrese.</p>
                    <p>11. Creemos que la iglesia ha entrado en una dispensación crítica para Preparar el Camino del Señor JESÚS en observancia de la Justicia y Santidad absolutas.</p>
                </div>
              </div>
            </div>
            <div class="faqs__item">
              <div id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    ¿Por qué se les refieren como Poderosos Profetas del Señor?
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <p>En primer lugar, el Señor JEHOVÁ YAHWEH Él mismo ha llamado a Sus Siervos con voz audible diciendo que son Sus Dos Siervos Poderosos que están ministrando en la tierra. Y si Dios habla, ¿quién es el hombre mortal para impedirlo? </p>
                    <p>En segundo lugar, Jesús es referido como poderoso en palabras y obras (Mateo 8:18-27; Hechos 2:22) </p>
                    <p>En tercer lugar, la biblia señala a Moisés así: “Y fue enseñado Moisés en toda la sabiduría de los egipcios; y era poderoso en sus palabras y obras. (Hechos 7:22)” </p>
                    <p>En cuarto lugar, Moisés y Elías son los Dos Olivos, los Dos Ungidos que están en la presencia de Dios de toda la tierra. Si la unción es poder, entonces no cabe la menor duda que las obras de sanidades, milagros, señales y prodigios portentosos que el mundo entero ha evidenciado de ellos no han sido comunes; una persona común no hace estas cosas (Juan 3:2) que caracterizan al Ministerio de Moisés y Elías, sino solo los Poderosos Profetas pueden hacer lo que los Dos Olivos están haciendo, como por ejemplo los Decretos de Sanidades que sanan todos tipos de enfermedades en todos los continentes sin salir de su residencia, Juicios que afectan el globo terráqueo (Coronavirus, Ébola, Zika, terremotos, invasión por langostas, inundaciones), resurrección de muertos, sanidad de los leprosos, sanidad de enfermedades incurables como cáncer, enfermedades degenerativas, milagros creativos, ciegos, mudos, sordos, paralíticos, parapléjicos, parálisis, esclerosis múltiples.</p>
                    <p>Finalmente, la iglesia ha de recibir poder (Hechos 1:8), y quien demuestra un nivel de poder no común es poderoso, lo cual no debe generar ningún complejo ni confusión en la mente de nadie. Al Dios Todopoderoso, fuente de todo poder, sea toda la gloria, honra y majestad de los siglos por los siglos.   </p>
                </div>
              </div>
            </div>
            <div class="faqs__item">
              <div id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    ¿A caso no es idolatría arrodillarse delante del Profeta Dr. David Owuor?
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    Dios aborrece y prohíbe la idolatría de toda forma (Éxodo 20:3-5; 1 Samuel 15:23; 1 Corintios 10:14; Gálatas 5:20; Apocalipsis 19:10). En el Ministerio de Arrepentimiento y Santidad obedecemos todas las instrucciones de Dios en Su palabra. En Apocalipsis 19:10, Juan se postró para adorar el ángel, pero le dijo que no, porque era consiervo suyo. Pero en 2 Reyes 1:13-14 vemos que el tercer capitán de cincuenta reconoce al Profeta Elías como Varón de Dios quien había destruido con fuego las vidas de los primeros dos capitanes con su cincuenta, y se acerca a él de rodillas, como señal de reverencia y honra, para rogarle por su vida, porque reconoce que el mismo Ángel de Jehová (teofanía de Dios- manifestación o aparición de Dios mismo) está y estaba con Elías, el Temible Profeta de fuego. Se requiere de un nivel de revelación y entendimiento para diferenciar lo que es la idolatría y lo que es la reverencia y la honra ante la misma presencia de Dios. Por último, vea lo que la irreverencia y la familiaridad puede causar a una persona (Uza): “Cuando llegaron a la era de Nacón, Uza extendió su mano al arca de Dios, y la sostuvo; porque los bueyes tropezaban.  Y el furor de Jehová se encendió contra Uza, y lo hirió allí Dios por aquella temeridad, y cayó allí muerto junto al arca de Dios.” (2 Samuel 6:6-7). Es de notar que la irreverencia ante Dios y la familiaridad mata. 
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

@push('scripts')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush