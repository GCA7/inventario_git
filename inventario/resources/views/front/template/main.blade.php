<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Home') | El porvenir del productor</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/maincss/main.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome-4.6.3/css/font-awesome.min.css') }}">
    <link rel="icon" type="image/png" href="{{asset('img/porvenir.ico')}}" />
  </head>
  <body>
      <header class="espacio container">
        @include('admin.template.partials.nav')
      </header>
      <div class="container cont">
            @include('flash::message')
            @yield('content')
          <footer>
            <hr>
            Todos los derechos reservados &copy {{ date('Y') }}
            <div class="pull-right">El porvenir del productor</div>
          </footer>
      </div>
      <script src="{{asset('plugins/jquery/main.js')}}"></script>
      <script src="{{asset('plugins/jquery/jquery-3.1.0.js')}}"></script>
      <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
      <script src="{{asset('plugins/chosen/chosen.jquery.js')}}"></script>
      <script src="{{asset('plugins/trumbowyg/trumbowyg.js')}}"></script>
  </body>
</html>
