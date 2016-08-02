<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Default') | Panel de Administracion</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/maincss/main.css')}}">
  </head>
  <body class="admin-body container">

      @include('admin.template.partials.nav')
      <section class="section-admin">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">@yield('title')</h3>
            </div>
          <div class="panel-body">
            @include('flash::message')
            @include('admin.template.partials.errors')
            @yield('content')
          </div>
          </div>
      </section>
        <footer class="admin-footer">
          <div class="navbar navbar-default">
            <div class="container-fluid">
              <div class="collapse navbar-collapse">
                <p class="navbar-text"> Todos los derechos reservados &copy{{ date('Y') }}</p>
              </div>
            </div>
          </div>
        </footer>

      <script src="{{asset('plugins/jquery/jquery-3.1.0.js')}}"></script>
      <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
  </body>
</html>
