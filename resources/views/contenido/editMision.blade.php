@extends('admin/templates/main_user')
@section('title','Editar Mision')
@section('encabezado','Editar Mision')

@section('content')
    {!! Form::open(['route' => ['home.updatemision'], 'method' => 'GET']) !!}
        <div class="form-group" style="width: 70%; margin: 0 auto; padding:12px; background-color: #F6F2FC;">
            <div class="form-group col-md-10">
                {!! Form::label('name','Descripcion:') !!} <br>
                <textarea class="form-control" name="descripcion" id="descripcion"></textarea>
            </div>
            <div class="form-group col-md-10">
                {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}  
            </div>
        </div>
    {!! Form::close() !!}
@endsection