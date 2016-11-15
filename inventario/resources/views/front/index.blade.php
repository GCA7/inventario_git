@extends('front.template.main')

@section('content')
<div class="row">
  <div class="col-md-9">
        @foreach($products as $product)
          <div class="col-md-4 padding">
            <div class="panel div alto">
              <div class="panel-body">
                @foreach($product->images as $image)
                <a href="{{ route('front.view.product', $product->id) }}">
                  <img class="img-responsive" src="{{ asset('img/products/'.$image->name) }}" alt="Responsive image" />
                </a>
                @endforeach
                <a href="{{ route('front.view.product', $product->id) }}">
                  <h4 class="text-center">{{ $product->nombre }}</h4>
                </a>
                <div class="">a
                  {!! $product->descripcion !!}
                </div>
                <hr>
                <span>Leidas: {{ $product->cantidad }}</span>
                <i class="fa fa-folder-open-o icono"></i><a href="{{ route('front.search.category', $product->category->name) }}">{{ $product->category->name }}</a>
                <div class="pull-right">
                  <i class="fa fa-clock-o icono"></i> {{ $product->created_at->diffForHumans() }}
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
