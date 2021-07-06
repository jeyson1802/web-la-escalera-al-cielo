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
              <div id="heading_01">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse_01" aria-expanded="false" aria-controls="collapse_01">
                    ¿Cuál es su credo o declaración de fe? 
                  </button>
                </h5>
              </div>
          
              <div id="collapse_01" class="collapse" aria-labelledby="heading_01" data-parent="#accordion">
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
              <div id="heading_02">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse_02" aria-expanded="false" aria-controls="collapse_02">
                    ¿Por qué se les refieren como Poderosos Profetas del Señor?
                  </button>
                </h5>
              </div>
              <div id="collapse_02" class="collapse" aria-labelledby="heading_02" data-parent="#accordion">
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
              <div id="heading_03">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse_03" aria-expanded="false" aria-controls="collapse_03">
                    ¿A caso no es idolatría arrodillarse delante del Profeta Dr. David Owuor?
                  </button>
                </h5>
              </div>
              <div id="collapse_03" class="collapse" aria-labelledby="heading_03" data-parent="#accordion">
                <div class="card-body">
                    Dios aborrece y prohíbe la idolatría de toda forma (Éxodo 20:3-5; 1 Samuel 15:23; 1 Corintios 10:14; Gálatas 5:20; Apocalipsis 19:10). En el Ministerio de Arrepentimiento y Santidad obedecemos todas las instrucciones de Dios en Su palabra. En Apocalipsis 19:10, Juan se postró para adorar el ángel, pero le dijo que no, porque era consiervo suyo. Pero en 2 Reyes 1:13-14 vemos que el tercer capitán de cincuenta reconoce al Profeta Elías como Varón de Dios quien había destruido con fuego las vidas de los primeros dos capitanes con su cincuenta, y se acerca a él de rodillas, como señal de reverencia y honra, para rogarle por su vida, porque reconoce que el mismo Ángel de Jehová (teofanía de Dios- manifestación o aparición de Dios mismo) está y estaba con Elías, el Temible Profeta de fuego. Se requiere de un nivel de revelación y entendimiento para diferenciar lo que es la idolatría y lo que es la reverencia y la honra ante la misma presencia de Dios. Por último, vea lo que la irreverencia y la familiaridad puede causar a una persona (Uza): “Cuando llegaron a la era de Nacón, Uza extendió su mano al arca de Dios, y la sostuvo; porque los bueyes tropezaban.  Y el furor de Jehová se encendió contra Uza, y lo hirió allí Dios por aquella temeridad, y cayó allí muerto junto al arca de Dios.” (2 Samuel 6:6-7). Es de notar que la irreverencia ante Dios y la familiaridad mata. 
                </div>
              </div>
            </div>
            <div class="faqs__item">
              <div id="heading_04">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse_04" aria-expanded="false" aria-controls="collapse_04">
                    ¿Si la biblia dice que ya Elías vino, porqué dicen que Elías está aquí?
                  </button>
                </h5>
              </div>
              <div id="collapse_04" class="collapse" aria-labelledby="heading_04" data-parent="#accordion">
                <div class="card-body">
                    <p align="justify">
                      La profecía de Isaías (40:3) se cumplió con la venida del ministerio Juan el Bautista quien vino a predicar el arrepentimiento para el perdón de los pecados, el reino de los cielos, bautismo en agua, los juicios venideros y demandando frutos dignos de arrepentimiento, anunciaba la venida del Mesías con las buenas nuevas de salvación y el bautismo en Espíritu Santo que venía a traer. Juan declaró que era él de quien habló el profeta Isaías (Mateo 3:3-12). Juan el Bautista vino con el Espíritu de Elías a preparar los corazones de su pueblo dispuesto a recibir al Mesías (Lucas 1:17). 
                      Pero también, Jesús mismo profetizó en el monte de la transfiguración que Elías ha de venir (en su segunda misión) a restaurar todas las cosas (Malaquías 4:5-6; Mateo 17:11), cosa que el Apóstol Pedro recordó a los judíos en su segundo discurso ante el sanedrín (Hechos 3.19-23). Además, Jesús siguió diciéndoles que Elías ya vino (en su primera misión) e hicieron lo que quisieron con él, refiriéndose a Juan el Bautista a quien Herodes ordenó a decapitar a petición de su hija, instruida por la madre (Mateo 14:1-12; 17:13).
                    </p>
                    <p align="justify">
                      Queda entonces claro, que Elías ha de volver para su segunda misión, según la profecía de Jesús y Malaquías. Y si alguien dice que es Elías en este tiempo de restauración de la iglesia, ha de manifestar el poder de Elías, haciendo lo que Elías hizo. Le invitamos muy cordialmente a conocer al Profeta Dr. David Owuor (El Profeta Elías) con todas las manifestaciones de poder y las portentosas obras que está haciendo, en sus cultos globales en línea, vivo y directo; y también en los múltiples videos de señales, milagros, prodigios, y palabras que los hace verdaderamente distinguir del resto de la humanidad presente en el globo terráqueo.  
                    </p>
                </div>
              </div>             
            </div>
            <div class="faqs__item">
              <div id="heading_05">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse_05" aria-expanded="false" aria-controls="collapse_05">
                    ¿Porqué dicen que el Profeta Dr. David Owuor es el único Profeta en la tierra?
                  </button>
                </h5>
              </div>
              <div id="collapse_05" class="collapse" aria-labelledby="heading_05" data-parent="#accordion">
                <div class="card-body">
                  <p align="justify">
                    Dios promete un profeta como Moisés: “Profeta de en medio de ti, de tus hermanos, como yo, te levantará Jehová tu Dios; a él oiréis; conforme a todo lo que pediste a Jehová tu Dios en Horeb el día de la asamblea, diciendo: No vuelva yo a oír la voz de Jehová mi Dios, ni vea yo más este gran fuego, para que no muera. Y Jehová me dijo: Han hablado bien en lo que han dicho. Profeta les levantaré de en medio de sus hermanos, como tú; y pondré mis palabras en su boca, y él les hablará todo lo que yo le mandare. Mas a cualquiera que no oyere mis palabras que él hablare en mi nombre, yo le pediré cuenta.” (Deuteronomio 18:15-19).
                  </p>
                  <p align="justify">
                    Si Dios promete levantar profeta para estos tiempos de restauración, es porque no existe ningún otro profeta. Dios no es un Dios de confusión, si ya tiene su profeta, no habría necesidad de levantar a otro. A él debemos oír, porque así dice Dios mismo, no es idolatría ni manipulación alguna, sino sencillamente obedeciendo la instrucción de Dios. Cualquier persona que le es rebelde y no oye a él, dice Dios mismo que será desarraigado del medio de su pueblo, y esto implica la perdición eterna.
                  </p>
                  <p align="justify">
                    Es muy notable que cada vez que el Profeta Dr. David Owuor habla, porque todo se cumple tal cual a la letra (v22); es Dios mismo hablando, es la boca de Dios, es mensaje y palabras que Dios mismo le ha mandado hablar. Por tanto, no se puede escuchar a otras voces de confusión y competencias, porque no son varios profetas que dice Dios que levantará sino un profeta (v15). 
                  </p>
                </div>
              </div>
            </div>

            <div class="faqs__item">
              <div id="heading_06">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse_06" aria-expanded="false" aria-controls="collapse_06">
                    ¿A caso no mutilan al cuerpo si dicen que no hay más apóstoles en las naciones?
                  </button>
                </h5>
              </div>
              <div id="collapse_06" class="collapse" aria-labelledby="heading_06" data-parent="#accordion">
                <div class="card-body">
                  <p align="justify">
                    La biblia es clara cuando declara que Dios mismo constituye y llama a sus siervos (Efesios 4:12). Hay quienes se dicen ser apóstoles y no lo son (Apocalipsis 2:2). Jesús mismo constituyó sus doce (12) apóstoles y los colocó como fundamento sobre el cual se edifica la iglesia, siendo la principal piedra del ángulo Jesucristo mismo (Efesios 2:20). Porque nadie puede poner otro fundamento que el que está puesto, el cual es Jesucristo (1 Corintios 3:11). 
                  </p>
                  <p align="justify">
                    En la elección de Matías en sucesión de Judas, tuvieron que considerar ciertos criterios para que éste tome parte del oficio del ministerio de los apóstoles. Era necesario que quien tome el oficio del Apóstol ha de ser uno de los hombres que han estado juntos con ellos como testigos comenzando desde el bautismo de Jesús por Juan, y durante el ministerio de Jesús, y además que haya sido testigo de la resurrección y glorificación (Hechos 1:20-26). Más Pablo quien fue llamado a ser apóstol de Jesucristo a los gentiles, por la voluntad de Dios (Hechos 9:1-15; 13:-2-3; 1 Corintios 1:1). 
                  </p>
                  <p align="justify">
                    “Y el muro de la ciudad tenía doce cimientos, y sobre ellos los doce nombres de los doce apóstoles del Cordero.” (Apocalipsis 21:14) 
                    Si en la Nueva Jerusalén, Dios establece doce columnas con los nombres de los doce apóstoles de Jesucristo, entonces uno pregunta, con tantos que dicen ser apóstoles, llamados por hombres, y no lo son, qué número les correspondería en la Santa Ciudad?                          
                  </p>
                </div>
              </div>
            </div>

            <div class="faqs__item">
              <div id="heading_07">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse_07" aria-expanded="false" aria-controls="collapse_07">
                    ¿Quiénes son los Dos Testigos?
                  </button>
                </h5>
              </div>
              <div id="collapse_07" class="collapse" aria-labelledby="heading_07" data-parent="#accordion">
                <div class="card-body">
                  Si revisamos muy detalladamente Apocalipsis 11 donde se describe las funciones de los Dos Testigos durante la Gran Tribulación, que evidentemente claro que los Dos Testigos son Moisés y Elías, los dos quienes aparecieron transfigurados junto a nuestro Señor Jesucristo en el monte de la Transfiguración (Mateo 17:1-13). También se les llama los Dos Olivos (Zacarías 4:14; Apocalipsis 11:3-14). Ellos tienen la autoridad delegada por Dios para medir el templo, el altar, los adoradores en el altar (Apocalipsis 1:1), tienen poder sobre la naturaleza, abrir o cerrar los cielos, conmover las estrellas y los cuerpos galácticos, las aguas, plagas, hambrunas, sequías, llamar fuego desde el cielo contra sus adversarios, ejecutar los juicios de Dios similares a los que Moisés hizo en Egipto (Éxodos cap7 al 12) pero en forma más escaladas,  y proteger y defender el pueblo de Dios hacia el lugar prometido. Deben ser profetas de oficio porque profetizarán por 1260 días (3,5 años) durante la gran tribulación, protestarán contra el Anticristo y el falso profeta, vestidos de silicio. Dios mismo les otorga poder y autoridad impresionante para ejercer esa fase de su ministerio. Son los dos más ungidos que están delante del Señor de toda la tierra. NO puede ser Enoc quien caminó con Dios y fue arrebatado hacia el cielo, tipificación de la iglesia fiel y santa que será arrebatada.
                </div>
              </div>
            </div>

            <div class="faqs__item">
              <div id="heading_08">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse_08" aria-expanded="false" aria-controls="collapse_08">
                    ¿Pero si los Dos Testigos son para el tiempo de la Gran Tribulación, ustedes no están en herejía?
                  </button>
                </h5>
              </div>
              <div id="collapse_08" class="collapse" aria-labelledby="heading_08" data-parent="#accordion">
                <div class="card-body">
                  <p align="justify">
                    Definitivamente que No, no estamos en herejía. El Ministerio de los Dos Testigos existe inclusive desde el Antiguo Testamento, solo que se les presenta en diferentes formas de manifestación y ministración según la voluntad de Dios. 
                    Desde el Edén, después de la caída del hombre: 24” Echó, pues, fuera al hombre, y puso al oriente del huerto de Edén querubines, y una espada encendida que se revolvía por todos lados, para guardar el camino del árbol de la vida.” (Genesis 3:24)
                    Destrucción de Sodoma y Gomorra: “Llegaron, pues, los dos ángeles a Sodoma a la caída de la tarde; y Lot estaba sentado a la puerta de Sodoma. Y viéndolos Lot, se levantó a recibirlos, y se inclinó hacia el suelo” (Genesis 19:1)
                  </p>
                  <p align="justify">
                    En la construcción del Arca del Pacto: ”Harás también dos querubines de oro; labrados a martillo los harás en los dos extremos del propiciatorio.” (Éxodo 25:18)
                    En la construcción del lugar santísimo en el Templo de Salomón: “Salomón mandó esculpir en madera de olivo dos querubines, cada uno de los cuales medía diez codos de alto. Cada ala extendida medía cinco codos, de modo que las alas, de punta a punta, medían diez codos. Ambos querubines eran idénticos en altura y estaban hechos del mismo material.” (1 Reyes 6:23-25)
                    Visión del candelabro de oro y los Dos Olivos en la Reconstrucción del Templo post-exílico: “Hablé más, y le dije: ¿Qué significan estos dos olivos a la derecha del candelabro y a su izquierda?  Hablé aún de nuevo, y le dije: ¿Qué significan las dos ramas de olivo que por medio de dos tubos de oro vierten de sí aceite como oro?  Y me respondió diciendo: ¿No sabes qué es esto? Y dije: Señor mío, no.  Y él dijo: Estos son los dos ungidos que están delante del Señor de toda la tierra.” (Zacarías 4:11-14)
                  </p>
                  <p align="justify">
                    En el avenimiento del día de Jehová, Dios envía los Dos Olivos, los Dos Testigos: “ Acordaos de la ley de Moisés mi siervo, al cual encargué en Horeb ordenanzas y leyes para todo Israel. He aquí, yo os envío el profeta Elías, antes que venga el día de Jehová, grande y terrible. El hará volver el corazón de los padres hacia los hijos, y el corazón de los hijos hacia los padres, no sea que yo venga y hiera la tierra con maldición.” (Malaquías 4:4-6). 
                    Según Deuteronomio Rabá 3:17: Una opinión oscura incluso empareja a Moisés y Elías como heraldos del Mesías: “El Santo, bendito sea, dijo a Moisés: “Moisés, por tu vida, así como has dado tu alma por Israel en este mundo, así en el futuro por venir, cuando les traiga al profeta Elías, los dos vendrán como uno.” (Deuteronomio Rabá 3:17). https://torahportions.ffoz.org/disciples/synoptic-gospels/elijah-and-moses.html 
                    En la Misión de los setenta, Jesús los envió de dos en dos: “Después de estas cosas, designó el Señor también a otros setenta, a quienes envió de dos en dos delante de él a toda ciudad y lugar adonde él había de ir.  Y les decía: La mies a la verdad es mucha, mas los obreros pocos; por tanto, rogad al Señor de la mies que envíe obreros a su mies.” (Lucas 10: 1-2)
                  </p>
                  <p align="justify">
                    En la Transfiguración: “Seis días después, Jesús tomó a Pedro, a Jacobo y a Juan su hermano, y los llevó aparte a un monte alto;  y se transfiguró delante de ellos, y resplandeció su rostro como el sol, y sus vestidos se hicieron blancos como la luz.  Y he aquí les aparecieron Moisés y Elías, hablando con él.  Entonces Pedro dijo a Jesús: Señor, bueno es para nosotros que estemos aquí; si quieres, hagamos aquí tres enramadas: una para ti, otra para Moisés, y otra para Elías.” (Mateo 17:1-4)
                    En la ascensión de Cristo Jesús, dos varones vestidos en blanco predican a los galileos acerca de la segunda venida del Señor Jesucristo: “ Y estando ellos con los ojos puestos en el cielo, entre tanto que él se iba, he aquí se pusieron junto a ellos dos varones con vestiduras blancas,  los cuales también les dijeron: Varones galileos, ¿por qué estáis mirando al cielo? Este mismo Jesús, que ha sido tomado de vosotros al cielo, así vendrá como le habéis visto ir al cielo.” (Hechos 1:10-11). 
                    Los Dos Testigos de Apocalipsis 11: “ Y daré a mis dos testigos que profeticen por mil doscientos sesenta días, vestidos de cilicio. Estos testigos son los dos olivos, y los dos candeleros que están en pie delante del Dios de la tierra.” (Apocalipsis 11:3-4)
                  </p>
                </div>
              </div>
            </div>

            <div class="faqs__item">
              <div id="heading_09">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse_09" aria-expanded="false" aria-controls="collapse_09">
                    ¿Qué es el día de Jehová? 
                  </button>
                </h5>
              </div>
              <div id="collapse_09" class="collapse" aria-labelledby="heading_09" data-parent="#accordion">
                <div class="card-body">
                  <p align="justify">
                    El Señor promete enviar su profeta Elías antes que venga el día grande y terrible de Jehová. Si Elías ha de venir a restaurar todas las cosas, entonces entendemos que el día de Jehová es cuando ocurre el arrebatamiento, cuando el Mesías viene a llevar Su iglesia como ladrón en la noche y comienza la tierra a entrar en la tribulación y gran tribulación. Es el día del llanto y crujir de dientes, de tinieblas y oscuridad. Veamos estás escrituras:
                  </p>
                  <p align="justify">
                    “Cercano está el día grande de Jehová, cercano y muy próximo; es amarga la voz del día de Jehová; gritará allí el valiente. Día de ira aquel día, día de angustia y de aprieto, día de alboroto y de asolamiento, día de tiniebla y de oscuridad, día de nublado y de entenebrecimiento, día de trompeta y de algazara sobre las ciudades fortificadas, y sobre las altas torres.  Y atribularé a los hombres, y andarán como ciegos, porque pecaron contra Jehová; y la sangre de ellos será derramada como polvo, y su carne como estiércol. Ni su plata ni su oro podrá librarlos en el día de la ira de Jehová, pues toda la tierra será consumida con el fuego de su celo; porque ciertamente destrucción apresurada hará de todos los habitantes de la tierra.” (Sofonías 1:14-18)
                  </p>
                  <p align="justify">
                    “Pero el día del Señor vendrá como ladrón en la noche; en el cual los cielos pasarán con grande estruendo, y los elementos ardiendo serán deshechos, y la tierra y las obras que en ella hay serán quemadas. Puesto que todas estas cosas han de ser deshechas, !cómo no debéis vosotros andar en santa y piadosa manera de vivir, esperando y apresurándoos para la venida del día de Dios, en el cual los cielos, encendiéndose, serán deshechos, y los elementos, siendo quemados, se fundirán! Pero nosotros esperamos, según sus promesas, cielos nuevos y tierra nueva, en los cuales mora la justicia. Por lo cual, oh amados, estando en espera de estas cosas, procurad con diligencia ser hallados por él sin mancha e irreprensibles, en paz.” (2Pdero 3: 10-14)
                  </p>
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