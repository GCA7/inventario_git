<div class="panel div">
  <div class="panel-heading nav">
    <h3 class="panel-title "><p class="p alinear">Categorias</p></h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
     @foreach($categories as $category)
      <a class="decoration" href="{{ route('front.search.category', $category->name) }}">
      <li class="list-group-item">
        <span class="badge">{{ $category->products->count() }}</span>
            {{ $category->name }}
      </li>
</a>
     @endforeach
    </ul>
  </div>
</div>
<div class="panel-heading nav ">
  <h3 class="panel-title "><p class="p alinear">Redes Sociales</p></h3>
</div>
<div class="panel-body alinear div">
  <ul class="list-group">
    <a href="https://twitter.com/GreivinC07" class="twitter-follow-button decoration" data-show-count="false">Follow me</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
  </ul>
  <hr>
  <ul>
    <a href="https://github.com/GCA7" class="git"><i class="fa fa-github" aria-hidden="true"> Github</i></a>
  </ul>
  <hr>
  <ul>
    <div class="g-follow" data-annotation="none" data-height="24" data-href="//plus.google.com/u/0/103055285873957614867" data-rel="author"></div>
  </ul>
</div>
