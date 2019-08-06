@extends('admin/templates/main_user')
@section('title','Crear actividad')
@section('encabezado','Crear actividad')

@section('content')
    {!! Form::open(['route' =>  ['posts.store'], 'method' => 'POST']) !!}
        <div class="form-group" style="width: 70%; margin: 0 auto; padding:12px; background-color: #F6F2FC;">
            <div class="form-group col-md-10">
                {!! Form::label('descripcion','Descripcion:') !!} <br>
                <textarea class="form-control" name="descripcion" id="descripcion"></textarea>
            </div>
            <div class="form-group col-md-10">
                {!! Form::label('imagen','Imagen:') !!} <br>
                <input type="file" name="imagen_url">
            </div>
            <div class="form-group col-md-10">
                {!! Form::label('video','Video:') !!} <br>
                <input type="file" name="video_url">
            </div>
            <div class="form-group col-md-10">
                {!! Form::label('curso','ID Curso:') !!} <br>
                <input class="form-control" type="text" value="{{ $course->id}}" readonly="readonly" name="idcurso">
            </div>
            
            <div class="form-group col-md-10">
                {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}  
            </div>
        </div>
    {!! Form::close() !!}
@endsection