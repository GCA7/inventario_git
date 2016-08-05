@extends('front.template.main')

@section('title', $product->nombre)


@section('content')

<h3 class="title-front left">{{ $product->nombre }}</h3>
<hr>
<div class="row">
  <div class="col-md-9">
      {!! $product->descripcion !!}
      <h3>Comentarios</h3>
      @foreach($product->tags as $tag)
      <span>Tags: </span>{{ $tag->name }}
      @endforeach
      <hr>
            <div id="disqus_thread"></div>
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
