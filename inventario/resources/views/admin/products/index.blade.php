@extends('admin.template.main')

@section('title', 'Listado de productos')

@section('content')
      <a href="{{ route('admin.products.create') }}" class="btn btn-info">Registrar nuevo libro</a>
      {!! Form::open(['route' => 'admin.products.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
        <div class="input-group">
          {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Buscar libro...', 'aria-describedby' => 'search']) !!}
          <span class="input-group-addon" id="search" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
        </div>
      {!! Form::close() !!}
      <hr>
      <table class="table table-striped">
          <thead>
              <th>ID</th>
              <th>Nombre</th>
              <th>Categoria</th>
              <th>User</th>
              <th>Accion</th>
          </thead>
          <tbody>
              @foreach($products as $product)
              <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->nombre }}</td>
                <td>{{ $product->category->name }}</td>
                <td>{{ $product->user->name }}</td>
                <td>  <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"> Editar</span></a>

                  <a href="{{ route('admin.products.destroy', $product->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span class='glyphicon glyphicon-remove-circle' aria-hidden='true'> Eliminar</span></a></td>
              </tr>
              @endforeach
          </tbody>
      </table>
      <div class="text-center">
          {!! $products->render() !!}
      </div>
@endsection
