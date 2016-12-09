@extends('admin.template.main')

@section('title', 'Agregar libro')

@section('content')

    {!! Form::open(['route' => 'admin.products.store', 'method' => 'POST', 'files' => true]) !!}
      <div class="from-group">
        {!! Form::label('nombre', 'Nombre') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del producto', 'required']) !!}
      </div>

      <div class="form-group">
          {!! Form::label('category_id', 'Categoria') !!}<br>
          {!! Form::select('category_id', $categories, null, ['class' => 'form-control select-category', 'placeholder' => 'Seleccione una opcion', 'required']) !!}
      </div>

      <div class="form-group">
          {!! Form::label('descripcion', 'Descripcion') !!}
          {!! Form::textarea('descripcion', null, ['class' => 'form-control textarea-desc', 'id' => 'textarea-desc']) !!}

      </div>

      <div class="form-group">
          {!! Form::label('image', 'Imagen') !!}
          {!! Form::file('image') !!}
      </div>

      <div class="form-group">
          {!! Form::submit('Agregar libro', ['class' => 'btn btn-primary']) !!}
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
  $('#textarea-desc').trumbowyg({
    height: 300,
  })
   })
</script>

@endsection
