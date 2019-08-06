@extends('admin/templates/main_user')
@section('title','Mostrar actividades')
@section('encabezado','Apuntes del curso')

@section('content')
    <div class="mis-cursos">
        <hr>
        <div class="card-deck">
        @foreach($course->posts as $post)
        <div class="card" width="50%">
            <div class="card-body">
                <h5 class="card-title">Actividad</h5>
                <p class="card-text">{{ $post->descripcion }}</p>
                <p class="card-text"><small class="text-muted">Last updated 1 mins ago</small></p>
            </div>
        </div>
        @endforeach 
    </div>
    <a href="{{ route('home') }}" style="margin:20px;" class="btn btn-primary">Volver</a>
@endsection
