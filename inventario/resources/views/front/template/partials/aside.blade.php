<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Categorias</h3>
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
