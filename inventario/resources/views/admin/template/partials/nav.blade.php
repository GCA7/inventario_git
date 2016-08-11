<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img class="navbar-brand" title="El porvenir del productor" src="{{asset('/img/porvenir.ico')}}">
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      @if(Auth::user())
      <ul class="nav navbar-nav">
        @if(Auth::user()->type === 'admin')
        <li class="active"><a href="#">Inicio <span class="sr-only">(current)</span></a></li>
        <li><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
        <li><a href="{{ route('admin.categories.index') }}">Categorias</a></li>
        <li><a href="{{ route('admin.products.index') }}">Productos</a></li>
        <li><a href="{{ route('admin.images.index') }}">Imagenes</a></li>
        <li><a href="{{ route('admin.tags.index') }}">Tags</a></li>
        @endif
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('/viewCar') }}" ><i title="Carrito de compras" class="glyphicon glyphicon-shopping-cart"></i></a></li>
        <li><a href="{{ route('front.index') }}"> Inicio</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('/logout') }}">Cerrar Sesion</a></li>
          </ul>
        </li>
      </ul>
      @endif
      @if(!Auth::user())
      <ul class="nav navbar-nav">
        <li><a href="{{ route('admin.auth.login') }}">Iniciar Sesion</a></li>
        <li><a href="{{ route('admin.users.create') }}">Registarme</a></li>
        <li><a href="{{ route('front.index') }}"> Inicio</a></li>
        <li><h5 class="parrafo">Bienvenido debes iniciar sesion para poder comprar produtos</h5></li>
      </ul>
    @endif
    </div>
  </div>
</nav>
