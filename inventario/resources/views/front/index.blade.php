@extends('front.template.main')

@section('content')

<h3 class="title-front left">Productos recientes</h3>
<div class="row">
  <div class="col-md-8">
      <div class="row">
        @foreach($products as $product)
          <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-body">
                <a href="{{ route('front.view.product', $product->slug) }}" class="thumbnail">
                @foreach($product->images as $image)
                  <img class="img-responsive" src="{{ asset('img/products/'.$image->name) }}" alt="..." />
                @endforeach
                </a>
                <a href="{{ route('front.view.product', $product->id) }}">
                  <h4 class="text-center">{{ $product->nombre }}</h4>
                </a>
                <hr>
                <i class="fa fa-folder-open-o"></i><a href="{{ route('front.search.category', $product->category->name) }}">{{ $product->category->name }}</a>
                <div class="pull-right">
                  <i class="fa fa-clock-o"></i> {{ $product->created_at->diffForHumans() }}
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  <div class="text-center">
      {!! $products->render() !!}
  </div>
  <div class="col-md-4 aside">
    @include('front.template.partials.aside')
  </div>
</div>
@endsection()
