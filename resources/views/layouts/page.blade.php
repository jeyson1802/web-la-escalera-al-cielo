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
    <link rel="stylesheet" href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    
    <!-- Site Title -->
    <title>@yield('title')</title> 
    
    <!-- Icon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png')}}" type="image/png">

</head>

<body>

  <div class="bg-interior">    

    <!-- =================== SITE HEADER BEGINS ============================= -->  
    @include('layouts.header')
    <!-- =================== SITE HEADER ENDS ============================= -->

    <div class="container encabezado">
      <div class="row">
          <div class="col-auto">
              <h2>@yield('encabezado')</h2>
              <p>@yield('detalle.encabezado')</p>
          </div>

          <div class="col-auto text-right ml-auto breadcrumb">
            @yield('breadcrumb')
          </div>
      </div>
    </div>
  
  </div>

  
  <!--
  ========================================================
                          CONTENT
  ========================================================
  -->
  <main class="main">
    <div class="container">
          @yield('content')
    </div>
  </main>
  <!-- =================== SITE FOOTER BEGINS ============================= -->

  <footer class="footer text-center">

    @include('layouts.footer')

  </footer><!-- footer ends -->

  <!-- =================== SITE FOOTER ENDS ============================= -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="{{ asset('dist/js/main.js')}}"></script>
  
  @stack('scripts')

</body>

</html>