@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Panel de información</h2></div>

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
                        @section('menu-bar')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}">Actividades</a>  
                        </li>
                        @endsection
                        <div class="mis-cursos">
                            <h3>Mis cursos</h3>
                            <hr>
                            <div class="card-deck">
                            @foreach(auth()->user()->courses as $course)
                            <div class="card">
                                <img src="http://localhost/img/{{ $course->url }}" height="250" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $course->name }}</h5>
                                    <p class="card-text">Eres monitor de la asignatura {{ $course->name }} y tienes sesión de {{ $course->started_at }}
                                    hasta las {{ $course->finished_at }}, ¡Da lo mejor de ti! Recuerda que el conocimiento es universal.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a href="#" class="btn btn-primary">Ver actividades</a>
                                </div>
                            </div>
                            @endforeach 
                            </div>
                            
                        </div>
                            
                        @else
                            @if(Auth::user()->hasRole('docente'))
                            @section('menu-bar')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('matricula') }}">Matricular estudiantes</a>  
                            </li>
                            @endsection
                            <div class="mis-cursos">
                                <h3>Mis cursos</h3>
                                <hr>
                                <div class="card-deck">
                                @foreach(auth()->user()->courses as $course)
                                <div class="card">
                                    <img src="http://localhost/img/{{ $course->url }}" height="250" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $course->name }}</h5>
                                        <p class="card-text">Eres profesor de la asignatura {{ $course->name }} y tienes sesión de {{ $course->started_at }}
                                        hasta las {{ $course->finished_at }}, ¡Da lo mejor de ti! Recuerda que transmitir conocimiento
                                        es la labor más importante para nuestra sociedad.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        <a href="#" class="btn btn-primary">Ver actividades</a>
                                    </div>
                                </div>
                                @endforeach 
                            </div>
                        </div>
                                
                            @else
                                <h1>Estudiante</h1>
                                <div class="mis-cursos">
                                <h3>Mis cursos</h3>
                                <hr>
                                <div class="card-deck">
                                @foreach(auth()->user()->courses as $course)
                                <div class="card">
                                    <img src="http://localhost/img/{{ $course->url }}" height="250" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $course->name }}</h5>
                                        <p class="card-text">Eres alumno de la asignatura {{ $course->name }} y tienes sesión de {{ $course->started_at }}
                                        hasta las {{ $course->finished_at }}, ¡Da lo mejor de ti! Recuerda que un grupo de personas
                                        realiza un arduo trabajo para formarte, esfuerzate, y agradece por ello.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        <a href="#" class="btn btn-primary">Ver actividades</a>
                                    </div>
                                </div>
                                @endforeach 
                            </div>
                        </div>
                            @endif
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
