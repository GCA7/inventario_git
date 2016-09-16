<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Home') | Blog</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/maincss/main.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome-4.6.3/css/font-awesome.min.css') }}">
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
            <div class="pull-right">Blog</div>
          </footer>
      </div>
      <script src="https://apis.google.com/js/platform.js" async defer></script>
      <script src="{{asset('plugins/jquery/main.js')}}"></script>
      <script src="{{asset('plugins/jquery/jquery-3.1.0.js')}}"></script>
      <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
      <script src="{{asset('plugins/chosen/chosen.jquery.js')}}"></script>
      <script src="{{asset('plugins/trumbowyg/trumbowyg.js')}}"></script>
  </body>
</html>
