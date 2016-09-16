<nav class="navbar navbar-default nav">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      @if(Auth::user())
      <ul class="nav navbar-nav a">
        @if(Auth::user()->type === 'admin')
        <li><a href="#"><p class="p">Inicio</p> <span class="sr-only">(current)</span></a></li>
        <li><a href="{{ route('admin.users.index') }}"><p class="p">Usuarios</p></a></li>
        <li><a href="{{ route('admin.categories.index') }}"><p class="p">Categorias</p></a></li>
        <li><a href="{{ route('admin.products.index') }}"><p class="p">Articulos</p></a></li>
        <li><a href="{{ route('admin.images.index') }}"><p class="p">Imagenes</p></a></li>
        <li><a href="{{ route('admin.tags.index') }}"><p class="p">Tags</p></a></li>
        @endif
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('front.index') }}"><p class="p"> Inicio</p></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('/logout') }}"><p class="p">Cerrar Sesion</p></a></li>
          </ul>
        </li>
      </ul>
      @endif
      @if(!Auth::user())
      <ul class="nav navbar-nav">
        <li><a href="{{ route('admin.auth.login') }}"><p class="p">Iniciar Sesion</p></a></li>
        <li><a href="{{ route('admin.users.create') }}"><p class="p">Registarme</p></a></li>
        <li><a href="{{ route('front.index') }}"> <p class="p">Inicio</p></a></li>
        <li><a href="{{ route('front.index') }}"> <p class="p">Peliculas Informaticas</p></a></li>
      </ul>
    @endif
    </div>
  </div>
</nav>
