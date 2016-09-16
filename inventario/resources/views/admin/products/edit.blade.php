@extends('admin.template.main')

@section('title', 'Editar producto ' . $product->nombre)

@section('content')

    {!! Form::model($product, array('route' => array('admin.products.update', $product->id), 'method' => 'PUT')) !!}
      <div class="from-group">
        {!! Form::label('nombre', 'Nombre') !!}
        {!! Form::text('nombre', $product->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre del producto', 'required']) !!}
      </div>

      <div class="form-group">
          {!! Form::label('category_id', 'Categoria') !!}
          {!! Form::select('category_id', $categories, $product->category->id, ['class' => 'form-control select-category', 'placeholder' => 'Seleccione una opcion', 'required']) !!}
      </div>

      <div class="form-group">
          {!! Form::label('descripcion', 'Descripcion') !!}
          {!! Form::textarea('descripcion', $product->descripcion, ['class' => 'form-control textarea-desc', 'id' => 'textarea-desc']) !!}
      </div>

      <div class="form-group">
          {!! Form::label('cantidad', 'Cantidad') !!}
          {!! Form::text('cantidad', $product->cantidad, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
          {!! Form::label('precio', 'Precio') !!}
          {!! Form::text('precio', $product->precio, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
          {!! Form::label('tags', 'Tags') !!}
          {!! Form::select('tags[]', $tags, $my_tags, ['class' => 'form-control select-tag', 'multiple', 'required']) !!}
      </div>

      <div class="form-group">
          {!! Form::submit('Editar producto', ['class' => 'btn btn-primary']) !!}
      </div>
    {!! Form::close() !!}

@endsection

@section('js')
<script>
  $('.select-tag').chosen({
      placeholder_text_multiple: 'Seleccione un maximo de 3 tags',
      max_selected_options: 3,
      search_contains: true,
      no_results_text: 'No se encontraron estos tags'
  });

  $('.select-category').chosen({
    placehoder_text_single: 'Seleccione una categoria'
  });

</script>

<script type="text/javascript">
$(document).ready(function() {
  $('#textarea-desc').summernote({
    height: 300,
  })
   })
</script>
@endsection
