@extends('admin/templates/main_user')
@section('title','Cursos')
@section('encabezado','Administrar Cursos')

@section('content')
    @if(!session('mensaje')==null)
        <div class="alert alert-success" style="width: 40%; margin: 0 auto;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{session('mensaje')}}
        </div>
    @endif

    <table class="table table-striped" style="width:80%; margin: 0 auto;">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Hora Inicio</th>
            <th>Hora Fin</th>
            <th>Monitor</th>
            <th>Docente</th>
            <th>Accion</th>
        </thead>
        <tbody>
            @foreach($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->started_at }}</td>
                <td>{{ $course->finished_at }}</td>
                @foreach($course->users as $user)
                    @foreach($user->roles as $rol)
                        @if ( $rol->description == "Profesor")
                                <td>{{ $user->name }}</td> 
                            @elseif($rol->description == "Monitor")
                                <td>{{ $user->name }}</td>
                                @break
                        @endif 
                    @endforeach
                @endforeach 
                <td><a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning">Edit</a><a href="{{ route('courses.destroy',$course->id) }}" onclick="return confirm('¿Seguro deseas eliminar?')" class="btn btn-danger">Del</a></td>
            </tr>
            @endforeach   
        </tbody>
    </table>

    <div class="render" style="margin: 20px;">{!! $courses->render() !!}</div>
    <a href="{{ route('courses.create') }}" class="btn btn-info" style="margin:20px;">Registrar nuevo Curso</a>
@endsection