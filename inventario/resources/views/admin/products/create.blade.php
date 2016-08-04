@extends('admin.template.main')

@section('title', 'Agregar producto')

@section('content')

    {!! Form::open(['route' => 'admin.products.store', 'method' => 'POST', 'files' => true]) !!}
      <div class="from-group">
        {!! Form::label('nombre', 'Nombre') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del producto', 'required']) !!}
      </div>

      <div class="form-group">
          {!! Form::label('category_id', 'Categoria') !!}
          {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opcion', 'required']) !!}
      </div>

      <div class="form-group">
          {!! Form::label('descripcion', 'Descripcion') !!}
          {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
          {!! Form::label('cantidad', 'Cantidad') !!}
          {!! Form::text('cantidad', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
          {!! Form::label('precio', 'Precio') !!}
          {!! Form::text('precio', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
          {!! Form::label('tags', 'Tags') !!}
          {!! Form::select('tags[]', $tags, null, ['class' => 'form-control', 'multiple', 'required']) !!}
      </div>

      <div class="form-group">
          {!! Form::label('image', 'Imagen') !!}
          {!! Form::file('image') !!}
      </div>

      <div class="form-group">
          {!! Form::submit('Agregar producto', ['class' => 'btn btn-primary']) !!}
      </div>
    {!! Form::close() !!}
@endsection
