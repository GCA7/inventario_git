<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Default') | Panel de Administracion</title>

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
 <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
 <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
 <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
 <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
    <link rel="stylesheet" href="{{asset('plugins/maincss/main.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/chosen/chosen.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/font-awesome-4.6.3/css/font-awesome.css')}}">
    <link rel="icon" type="image/png" href="{{asset('img/porvenir.ico')}}" />
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


      <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
      <script src="{{asset('plugins/chosen/chosen.jquery.js')}}"></script>

  @yield('js')
  </body>
</html>
