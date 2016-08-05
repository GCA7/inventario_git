<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Home') | El porvenir del productor</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome-4.6.3/css/font-awesome.min.css') }}">
  </head>
  <body>
      <header>
      @include('front.template.partials.header')
      </header>
      <div class="container cont">
            @yield('content')
          <footer>
            <hr>
            Todos los derechos reservados &copy {{ date('Y') }}
            <div class="pull-right">El porvenir del productor</div>
          </footer>
      </div>
      <script src="{{asset('plugins/jquery/jquery-3.1.0.js')}}"></script>
  </body>
</html>
