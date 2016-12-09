@extends('front.template.main')

@section('title', $product->nombre)

@section('content')
<div class="row">
  <div class="col-md-9">
      <h2 class="title-front left alinear" style="color:lightblack">{{ $product->nombre }}</h2>
      <hr>
      <div>
          <div>
            @foreach($product->images as $image)
            <img src="{{ asset('img/products/'.$image->name) }}" style="float:left" class="fuen responsive-image" />
            @endforeach
            <p>
              {!! $product->descripcion !!}
            </p>
          </div>
          <div class="pull-left">
            <i class="fa fa-clock-o"></i> {{ $product->created_at->diffForHumans() }} | by {{ $product->user->name }}
          </div>
        </div>
        <br>
        <div id="disqus_thread"></div>
  <script>

  /**
  *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
  *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
  /*
  var disqus_config = function () {
  this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
  this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
  };
  */
  (function() { // DON'T EDIT BELOW THIS LINE
  var d = document, s = d.createElement('script');
  s.src = '//libros-utn.disqus.com/embed.js';
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
