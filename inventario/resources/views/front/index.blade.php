@extends('front.template.main')

@section('content')
<div class="row">
  <div class="col-md-9 ">
        @foreach($products as $product)
          <div class="textoContenido col-md-4">
            <div class="panel div">
              <div class="panel-body">
                @foreach($product->images as $image)
                <div class="img">
                <a href="{{ route('front.view.product', $product->id) }}">
                  <img class="" src="{{ asset('img/products/'.$image->name) }}" alt="Responsive image" />
                </a>
                </div>
                @endforeach
                <a href="{{ route('front.view.product', $product->id) }}">
                  <p class="text-center">{{ $product->nombre }}</p>
                </a>
                <div>
                    {!! $product->descripcion !!}
                </div>
                <i class="fa fa-folder-open-o icono" style="color:orange"></i><a href="{{ route('front.search.category', $product->category->name) }}">{{ $product->category->name }}</a>
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

<style media="screen">
p {
   height: 50px;
   overflow:      hidden;
   white-space:   pre;
   text-overflow: ellipsis;
}
</style>
@endsection()
