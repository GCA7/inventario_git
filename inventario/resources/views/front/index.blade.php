@extends('front.template.main')

@section('content')
<section class="">
<div class="col-md-4">
  <br>
  <img src="{{ asset('img/porvenir2.jpg') }}" class="logo img" />
  <br>
</div>
<div class="col-md-8">
  <div class="text-center ac text-info">
      <h1 class="tittle-front-header h1">El porvenir del productor</h1>
      <h4>Nuestras redes sociales:</h4>
      <a href="https://www.facebook.com/El-Porvenir-del-Productor-415848275245659/?fref=ts" target="_blank"><img class="face" src="{{ asset('img/face.png') }}" alt="" /></a>
  </div>
</div>
</section>
<div class="row">
  <div class="col-md-8">
    <div class="panel panel-default">
      <div class="panel-title">
        <h3 class="title-front text-center text-info">Productos recientes</h3>
        </div>
        </div>
        <div class="row">
        @foreach($products as $product)
          <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-body">
                @foreach($product->images as $image)
                <a href="{{ route('front.view.product', $product->id) }}">
                  <img class="img-responsive" src="{{ asset('img/products/'.$image->name) }}" alt="Responsive image" />
                </a>
                @endforeach
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
  <div class="col-md-3">
  {!! Form::open(['route' => 'front.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
    <div class="input-group">
      {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Buscar producto...', 'aria-describedby' => 'search']) !!}
      <span class="input-group-addon" id="search" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
    </div>
  {!! Form::close() !!}
  </div>
  <div class="col-md-3 aside">
    @include('front.template.partials.aside')
  </div>
</div>
@endsection()
