@extends('front.template.main')

@section('title', $product->nombre)

@section('content')
<div class="row">
  <div class="col-md-9">
      <h3 class="title-front left alinear">{{ $product->nombre }}</h3>
      <hr>
      <div class="">
          <div class="">
            {!! $product->descripcion !!}
          </div>
          <div class="pull-left">
            <i class="fa fa-clock-o"></i> {{ $product->created_at->diffForHumans() }} | by {{ $product->user->name }}
          </div>
          @foreach($product->tags as $tag)
          <div class="pull-right">
            <a href="#">
            <span>Tags: </span>{{ $tag->name }}
            </a>
          </div>
          @endforeach
        </div>
        <br>
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
