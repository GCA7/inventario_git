@extends('admin.template.main')

@section('title', 'Listado de tags')

@section('content')
    <a href="{{ route('admin.tags.create') }}" class="btn btn-info">Registrar nuevo tag</a>
<!--Buscar de tags -->
    {!! Form::open(['route' => 'admin.tags.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
      <div class="input-group">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar tag...', 'aria-describedby' => 'search']) !!}
        <span class="input-group-addon" id="search" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
      </div>
    {!! Form::close() !!}
    <hr>
    <table class="table table-striped">
      <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Accion</th>
      </thead>
        <tbody>
          @foreach($tags as $tag)
            <tr>
              <td>{{ $tag->id }}</td>
              <td>{{ $tag->name }}</td>
              <td><a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn                btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

                <a href="{{ route('admin.tags.destroy', $tag->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
            </td>
            </tr>
          @endforeach
        </tbody>
    </table>
    <div class="text-center">
      {!! $tags->render() !!}
    </div>

@endsection
