@extends('admin/templates/main_user')
@section('title','Usuarios')
@section('encabezado','Administrar usuarios')

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
            <th>E-mail</th>
            <th>Rol</th>
            <th>Accion</th>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    @foreach($user->roles as $rol)
                        
                        @if ( $rol->description == "Monitor")
                            <td><span class="badge badge-success"> {{ $rol->description }} </span></td>
                            <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a><a href="{{ route('users.destroy',$user->id) }}" onclick="return confirm('¿Seguro deseas eliminar?')" class="btn btn-danger">Del</a></td>
                            @break
                            @elseif($rol->description == "Profesor")
                                <td><span class="badge badge-warning"> {{ $rol->description }} </span></td>
                                <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a><a href="{{ route('users.destroy',$user->id) }}" class="btn btn-danger">Del</a></td>
                                @break
                            @elseif($rol->description == "Estudiante")
                                <td><span class="badge badge-dark"> {{ $rol->description }} </span></td>
                                <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a><a href="{{ route('users.destroy',$user->id) }}" class="btn btn-danger">Del</a></td>
                                @break
                            @elseif($rol->description == "Administrador")
                                <td><span class="badge badge-danger"> {{ $rol->description }} </span></td>
                                <td><span class="badge badge-danger">Admin</span></td>
                                @break
                        @endif 
                    @endforeach    
                </tr>
            @endforeach
        </tbody>
    </table>
   <div class="render" style="margin: 20px;">{!! $users->render() !!}</div>
    <a href="{{ route('users.create') }}" class="btn btn-info" style="margin:20px;">Registrar un nuevo usuario</a>
@endsection