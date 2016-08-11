@extends('front.template.main')

@section('title', $product->nombre)

@section('content')
<div class="row">
  <div class="col-md-9">
      @foreach($product->images as $image)
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
              <img class="img-responsive" src="{{ asset('img/products/'.$image->name) }}" alt="Responsive image" />
          </div>
        </div>
      </div>
      @endforeach
      <h3 class="title-front left">{{ $product->nombre }}</h3>
      <hr>
      <div class="">
        <p>Precio: <span>{{ $product->precio }} (por unidad)</span></p>
      </div>
      <p class="stock">En stock</p>
      <div class="">
        <p>Producto disponible: <span>{{ $product->cantidad }}</span></p>
      </div>
      <div class="">
          <span>Descripcion del producto: </span><br>
          {!! $product->descripcion !!}
      </div>
        <br>
        {!! Form::open(['route' => 'front.product.store', 'method' => 'POST']) !!}
        <div class="form-group input">
          {{ Form::label('cantidad', 'Cantidad') }}
          {{ Form::text('cantidad', null, array('placeholder' => 'Cantidad de producto', 'class' => 'form-control', 'required', 'onkeypress' => 'return justNumbers(event);')) }}
          {{ Form::submit('Agregar al carrito', ['class' => 'btn btn-primary bu']) }}
        </div>

        <div class="form-group oc">
          {{ Form::label('id', 'id') }}
          {{ Form::text('id', $product->id, array('class' => 'form-control')) }}
        </div>
          {{ Form::close() }}
            <div id="disqus_thread"></div>
            @foreach($product->tags as $tag)
            <span>Tags: </span>{{ $tag->name }}
            @endforeach
      <script>

      (function() { // DON'T EDIT BELOW THIS LINE
          var d = document, s = d.createElement('script');
          s.src = '//elporvenirdelproductor.disqus.com/embed.js';
          s.setAttribute('data-timestamp', +new Date());
          (d.head || d.body).appendChild(s);
      })();
      </script>
      <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        </div>`
  <div class="col-md-3 aside">
      @include('front.template.partials.aside')
  </div>
</div>
@endsection
