@extends('admin/templates/main_user')
@section('title','Crear usuario')
@section('encabezado','Crear usuario')

@section('content')
    {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
    <div class="form-group" style="width: 70%; margin: 0 auto; padding:12px; background-color: #F6F2FC;">
        <div class="form-group col-md-10">
            {!! Form::label('name','Nombre:') !!}
            {!! Form::text('name',null,['class' => 'form-control','placeholder'=>'Digite nombre','required']) !!}
        </div>
        <div class="form-group col-md-10">
            {!! Form::label('email','Correo electrónico:') !!}
            {!! Form::text('email',null,['class' => 'form-control','placeholder'=>'example@example.com','required']) !!}
        </div>
        <div class="form-group col-md-10">
            {!! Form::label('password','Contraseña:') !!}
            {!! Form::password('password',['class' => 'form-control','placeholder'=>'Digite la contraseña','required']) !!}
        </div>
        <div class="form-group col-md-10">
            {!! Form::label('type','Tipo:') !!}
            {!! Form::select('Type',['docente'=>'Docente','monitor'=>'Monitor','estudiante'=>'Estudiante'],
            null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group col-md-10">
            {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}  
        </div>
    </div>
    {!! Form::close() !!}
@endsection