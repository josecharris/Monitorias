@extends('admin/templates/main_user')
@section('title','Matricula')
@section('encabezado','Matricular alumno')

@section('content')
    {!! Form::open(['route' => 'home.matricular', 'method' => 'GET']) !!}
        <div class="form-group" style="width: 70%; margin: 0 auto; padding:12px; background-color: #F6F2FC;">
        <div class="form-group col-md-10">
            {!! Form::label('curso','Curso:') !!}
            @php ($cursos = [])
            @foreach($curso as $curso)
                @php ($cursos[$curso->id] = $curso->name)
            @endforeach 
            {!! Form::select('cursos',$cursos, null, ['class'=>'form-control']) !!} 
        </div>
        <div class="form-group col-md-10">
            {!! Form::label('monitor','Monitor:') !!}
            @php ($estudiantes = [])
            @foreach($users as $user)
                @foreach($user->roles as $rol)
                    @if($rol->description == "Estudiante")
                        @php ($estudiantes[$user->id] = $user->name)
                    @endif 
                @endforeach 
            @endforeach  
            {!! Form::select('estudiantes',$estudiantes, null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group col-md-10">
            {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}  
        </div>
        </div>
    {!! Form::close() !!}
@endsection