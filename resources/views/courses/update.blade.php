@extends('admin/templates/main_user')
@section('title','Editar usuario')
@section('encabezado','Editar Curso')


@section('content')
    {!! Form::open(['route' => ['courses.update',$course], 'method' => 'PUT']) !!}
        <div class="form-group" style="width: 70%; margin: 0 auto; padding:12px; background-color: #F6F2FC;">
            <div class="form-group col-md-10">
                {!! Form::label('name','Nombre:') !!}
                {!! Form::text('name',$course->name,['class' => 'form-control','placeholder'=>'Digite nombre','required']) !!}
            </div>
            <div class="form-group col-md-10">
                {!! Form::label('h_inicio','Hora de inicio:') !!}
                {!! Form::select('inicio',['8:00'=>'8:00','9:00'=>'9:00','10:00'=>'10:00','11:00'=>'11:00','12:00'=>'12:00','13:00'=>'13:00','14:00'=>'14:00','15:00'=>'15:00','16:00'=>'16:00','17:00'=>'17:00','18:00'=>'18:00'],
                null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-md-10">
                {!! Form::label('h_fin','Hora de finalización:') !!}
                {!! Form::select('fin',['8:00'=>'8:00','9:00'=>'9:00','10:00'=>'10:00','11:00'=>'11:00','12:00'=>'12:00','13:00'=>'13:00','14:00'=>'14:00','15:00'=>'15:00','16:00'=>'16:00','17:00'=>'17:00','18:00'=>'18:00'],
                null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-md-10">
                {!! Form::label('imagen','Imagen representativa:') !!} <br>
                <input type="file" name="archivosubido">
            </div>
            <div class="form-group col-md-10">
                {!! Form::label('docente','Docente:') !!}
                @php ($docentes = [])
                @foreach($users as $user)
                    @foreach($user->roles as $rol)
                        @if ( $rol->description == "Profesor")
                            @php ($docentes[$user->id] = $user->name)
                        @endif 
                    @endforeach 
                @endforeach 
                {!! Form::select('docente',$docentes, null, ['class'=>'form-control']) !!} 
            </div>
            <div class="form-group col-md-10">
                {!! Form::label('monitor','Monitor:') !!}
                @php ($monitor = [])
                @foreach($users as $user)
                    @foreach($user->roles as $rol)
                        @if ( $rol->description == "Monitor")
                            @php ($monitor[$user->id] = $user->name)
                        @endif 
                    @endforeach 
                @endforeach  
                {!! Form::select('monitor',$monitor, null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-md-10">
            {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}  
        </div>
        </div>
    {!! Form::close() !!}
@endsection