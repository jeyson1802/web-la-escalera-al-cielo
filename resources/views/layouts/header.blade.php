<header>
  <h1 class="logo"><a href="{{ route('home.index') }}"><img src="{{ asset('images/logo-americalatina.png')}}" alt="América Latina"></a></h1>
  <input type="checkbox" name="menu" id="menu">
  <label class="nav" for="menu"> 
      <span></span> 
  </label>
  <nav class="navigation">
      <ul>
          <li><a id="url-inicio" href="{{ route('home.index') }}" class="header__list activo"><img src="{{ asset('images/ico-home.svg')}}" alt="" /></a></li>
          <li><a href="#" class="header__list">Organización</a>
              <div class="submenu">
                  <ul>
                      <li><a href="{{ route('home.quienessomos') }}">¿Quiénes somos?</a></li>
                      <li><a href="{{ route('home.misionvision') }}">Misión y visión</a></li>
                      <li><a href="{{ route('home.organigrama') }}">Organigrama</a></li>
                  </ul>
              </div>
          </li>
          <li><a href="{{ route('post.index') }}" class="header__list">Noticias</a></li>
          <li><a href="{{ route('document.index') }}" class="header__list">Transcripciones</a></li>
          <li><a href="{{ route('video.index') }}" class="header__list">Transmisiones</a></li>
          <li><a href="{{ route('home.preguntasfrecuentes') }}"" class="header__list">Preguntas frecuentes</a></li>
          <li><a href="{{ route('contacto.show') }}" class="header__list">Contacto</a></li>
      </ul>
  </nav>
</header>