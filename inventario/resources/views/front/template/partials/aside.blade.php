<div class="panel div">
  <div class="panel-heading nav">
    <h3 class="panel-title "><p class="p alinear">Categorias</p></h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
     @foreach($categories as $category)
      <a class="decoration" href="{{ route('front.search.category', $category->name) }}">
      <li class="list-group-item li">
        <span class="badge">{{ $category->products->count() }}</span>
            {{ $category->name }}
      </li>
      </a>
     @endforeach
    </ul>
  </div>
</div>
<div class="panel-heading nav ">
  <h3 class="panel-title "><p class="p alinear">Contáctenos</p></h3>
</div>
<div class="panel-body alinear div">
  <ul class="list-group">
    <a href="https://www.facebook.com/groups/164310703597331/?fref=ts">Facebook UTN</a>
  </ul>
  <hr>
  <ul>
    <a href="http://sancarlos.utn.ac.cr/">Página sede San Carlos</a>
  </ul>
  <hr>
  <ul>
    <p>
      Tel.: (506) 2460-6115
      <hr>
      E-mail: infosancarlos@utn.ac.cr
    </p>
  </ul>
</div>
<div class="panel-heading">
<div class="panel-body alinear">
    <img class="img-responsive" src="{{ asset('img/utn.jpg') }}" alt="" />
</div>
</div>
