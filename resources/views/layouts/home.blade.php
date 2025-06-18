<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('dist/css/main.css')}}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Site Title -->
    <title>@yield('title')</title>

    <!-- Icon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png')}}" type="image/png">

</head>

<body>

  <div class="intro">

    <!-- =================== SITE HEADER BEGINS ============================= -->
      @include('layouts.header')
    <!-- =================== SITE HEADER ENDS ============================= -->
    <!--
    ========================================================
                            CONTENT
    ========================================================
    -->
    <div class="content">

      @yield('content')

    </div>
    <!-- =================== MAIN SECTION ENDS ============================= -->

  </div>

  @include('layouts.maps')

  <!-- =================== SITE FOOTER BEGINS ============================= -->

  <footer class="footer text-center">

    <div class="container">
      <p>© 2021 - Ministerio de Arrepentimiento y Santidad - América Latina - Todos los derechos reservados<br>
         <strong> https://www.laescaleraalcielo.org     |    E-mail: admin@laescaleraalacielo.org </strong></p>
    </div>

  </footer><!-- footer ends -->

  <!-- =================== SITE FOOTER ENDS ============================= -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="{{ asset('dist/js/main.js')}}"></script>

  @stack('scripts')

</body>

</html>
