@extends('admin.template.main')

@section('title', 'Login')

@section('content')
    <div class="container ancho">
      {!! Form::open(['route' => 'admin.auth.login', 'method' => 'POST']) !!}
        <div class="form-group">
          {!! Form::label('email', 'Correo Electronico') !!}
          {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@mail.com']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('password', 'Password') !!}
          {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '*********']) !!}
        </div>

        <div class="form-group boto">
            {!! Form::submit('Acceder', ['class' => 'btn btn-primary']) !!}
        </div>
      {!! Form::close() !!}
          </div>
@endsection
