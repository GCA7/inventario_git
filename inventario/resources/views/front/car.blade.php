@extends('front.template.main')

@section('title', 'Carrito de compras')

@section('content')
<h3>Carrito de compras</h3>
<table class="table table-striped">
<thead>
  <th></th>
  <th>Precio</th>
  <th>Cantidad</th>
  <th>Eliminar</th>
</thead>
    <tbody>
      @foreach($cars as $car)
      <tr>
        <td>{{ $car->nombre_producto }}</td>
        <td>¢{{ $car->precio_producto }}</td>
        <td>{{ $car->cantidad_solicitada }}</td>
        <td><a href="{{ route('front.car.deleteItem', $car->id) }}"  class="btn btn-danger"><span class='glyphicon glyphicon-remove-circle' aria-hidden='true'></span></a></td></td>
      </tr>
      @endforeach()
    </tbody>
</table>
@if(!$total == 0)
<a href="{{ route('front.car.destroy', $user) }}" class="btn btn-primary">Confirmar pedido</a>
@else
<h3 class="text-center">Aca se mostraran los productos que agregues al carrito</h3>
@endif()
<h3>Total: ¢{{ $total }}</h3>
@endsection()
