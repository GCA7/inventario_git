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
        <li><a href="{{ route('admin.categories.index') }}"><b class="p">Categorias</b></a></li>
        <li><a href="{{ route('admin.products.index') }}"><b class="p">Articulos</b></a></li>
        <li><a href="{{ route('admin.users.index') }}"><b class="p">Usuarios</b></a></li>
        {!! Form::open(['route' => 'front.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
          <div class="input-group">
            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Buscar libro...', 'aria-describedby' => 'search']) !!}
            <span class="input-group-addon" id="search" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
          </div>
        {!! Form::close() !!}
        @endif
      </ul>
      {!! Form::open(['route' => 'front.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
        <div class="input-group">
          {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Buscar libro...', 'aria-describedby' => 'search']) !!}
          <span class="input-group-addon" id="search" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
        </div>
      {!! Form::close() !!}
      <ul class="nav navbar-nav navbar-right a">
        <li><a href="{{ route('front.index') }}"><b class="p"> Inicio</b></a></li>
        <li class="dropdown nav a p">
          <a href="#" class="dropdown-toggle fon nav a" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="p">{{ Auth::user()->name }}</span> <span class="caret a p nav"></span></a>
          <ul class="dropdown-menu nav a">
            <li class="nav a"><a class="nav a" href="{{ url('/logout') }}"><b class=" nav a p">Cerrar Sesion</b></a></li>
          </ul>
        </li>
      </ul>
      @endif
      @if(!Auth::user())
      <ul class="nav navbar-nav">
        {!! Form::open(['route' => 'front.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
          <div class="input-group">
            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Buscar libro...', 'aria-describedby' => 'search']) !!}
            <span class="input-group-addon" id="search" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
          </div>
        {!! Form::close() !!}
        <li><a href="{{ route('admin.auth.login') }}"><b class="p">Iniciar Sesión</b></a></li>
        <li><a href="{{ route('admin.users.create') }}"><b class="p">Registarme</b></a></li>
        <li><a href="{{ route('front.index') }}"> <b class="p">Inicio</b></a></li>
      </ul>
    @endif
    </div>
  </div>
</nav>
</div>
