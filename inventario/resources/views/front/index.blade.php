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
                <a href="#" class="thumbnail">
                @foreach($product->images as $image)
                  <img class="img-responsive" src="{{ asset('img/products/'.$image->name) }}" alt="..." />
                @endforeach
                </a>
                <h3 class="text-center">{{ $product->nombre }}</h3>
                <hr>
                <i class="fa fa-folder-open-o"></i><a href="#">{{ $product->category->name }}</a>
                <div class="pull-right">
                  <i class="fa fa-clock-o"></i>Hace 3 minutos
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
  </div>

</div>
<div class="text-center">
    {!! $products->render() !!}
</div>
@endsection()
