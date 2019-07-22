@extends('admin/templates/main_user')
@section('title','Editar usuario')
@section('encabezado','Editar usuario')

@section('content')
    {!! Form::open(['route' => ['users.update',$user], 'method' => 'PUT']) !!}
    <div class="form-group" style="width: 70%; margin: 0 auto; padding:12px; background-color: #F6F2FC;">
        <div class="form-group col-md-10">
            {!! Form::label('name','Nombre:') !!}
            {!! Form::text('name',$user->name,['class' => 'form-control','placeholder'=>'Digite nombre','required']) !!}
        </div>
        <div class="form-group col-md-10">
            {!! Form::label('email','Correo electrónico:') !!}
            {!! Form::text('email',$user->email,['class' => 'form-control','placeholder'=>'example@example.com','required']) !!}
        </div>
        <div class="form-group col-md-10">
            {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}  
        </div>
    </div>
    {!! Form::close() !!}
@endsection