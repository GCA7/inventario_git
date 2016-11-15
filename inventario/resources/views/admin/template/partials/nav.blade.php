<div class="conta">
<nav class="navbar navbar-default nav a">
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
        <li><a href="{{ route('admin.categories.index') }}"><p class="p">Categorias</p></a></li>
        <li><a href="{{ route('admin.products.index') }}"><p class="p">Articulos</p></a></li>
        {!! Form::open(['route' => 'front.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
          <div class="input-group">
            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Buscar libro...', 'aria-describedby' => 'search']) !!}
            <span class="input-group-addon" id="search" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
          </div>
        {!! Form::close() !!}
        @endif
      </ul>
      <ul class="nav navbar-nav navbar-right a">
        <li><a href="{{ route('front.index') }}"><p class="p"> Inicio</p></a></li>
        <li class="dropdown nav a p">
          <a href="#" class="dropdown-toggle fon nav a" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="p">{{ Auth::user()->name }}</span> <span class="caret a p nav"></span></a>
          <ul class="dropdown-menu nav a">
            <li class="nav a"><a class="nav a" href="{{ url('/logout') }}"><p class=" nav a p">Cerrar Sesion</p></a></li>
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
</div>
