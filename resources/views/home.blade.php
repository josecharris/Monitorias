@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Auth::user()->hasRole('admin'))
                        <div>Acceso como administrador</div>
                        @section('menu-bar')
                        <!--CRUD DE USUARIOS  -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}">Administrar usuarios</a>  
                        </li>
                        <!--CRUD DE CURSOS-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('courses.index') }}">Administrar cursos</a>  
                        </li>
                        <!--CONTENIDO-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Administrar info
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('home.editmision') }}">Modificar mision</a>
                                <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('home.editVision') }}">Modificar vision</a>
                                    
                                </div>
                        </li>
                        @endsection
                    @else
                        @if(Auth::user()->hasRole('monitor'))
                            <div>Acceso como Monitor</div>
                        @else
                            @if(Auth::user()->hasRole('docente'))
                                <div>Acceso como Profesor</div>
                            @else
                                <div>Acceso como estudiante</div>
                            @endif
                        @endif
                    @endif
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
