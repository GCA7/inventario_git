@extends('front.template.main')

@section('content')
<div class="row">
  <div class="col-md-8">
    <div class="panel panel-default">
      <div class="panel-title">
        <h3 class="title-front text-center text-info">Articulos recientes</h3>
        </div>
        </div>
        @foreach($products as $product)
          <div class="row">
          <div class="col-md-12">
            <div class="panel div">
              <div class="panel-body">
                @foreach($product->images as $image)
                <a href="{{ route('front.view.product', $product->id) }}">
                  <img class="img-responsive" src="{{ asset('img/products/'.$image->name) }}" alt="Responsive image" />
                </a>
                @endforeach
                <a href="{{ route('front.view.product', $product->id) }}">
                  <h4 class="text-center">{{ $product->nombre }}</h4>
                </a>
                <div class="parrafos">
                  {!! $product->descripcion !!}
                </div>
                <hr>
                <i class="fa fa-folder-open-o icono"></i><a href="{{ route('front.search.category', $product->category->name) }}">{{ $product->category->name }}</a>
                <div class="pull-right">
                  <i class="fa fa-clock-o icono"></i> {{ $product->created_at->diffForHumans() }} | by {{ $product->user->name }}
                </div>
              </div>
            </div>
          </div>
</div>
        @endforeach
    </div>
  <div class="col-md-3 aside">
    @include('front.template.partials.aside')
  </div>
</div>
<div class="text-center">
    {!! $products->render() !!}
</div>
@endsection()
