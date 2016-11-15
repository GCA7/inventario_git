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
      <ul class="nav navbar-nav a">
        {!! Form::open(['route' => 'front.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
          <div class="input-group">
            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Buscar libro...', 'aria-describedby' => 'search']) !!}
            <span class="input-group-addon" id="search" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
          </div>
        {!! Form::close() !!}
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="{{ route('front.index') }}"> <p class="p">Inicio</p></a></li>
      </ul>
    </div>
  </div>
</nav>
</div>
