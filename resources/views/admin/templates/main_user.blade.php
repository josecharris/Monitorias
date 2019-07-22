<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" >
    <title>@yield('title','default') | Panel de administracion</title>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light bg-dark">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('img/logo_eduvirtual.png') }}" width="150" height="30" class="d-inline-block align-top" alt="">
    </a>
    </nav>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <h4 style="margin:0 auto;">@yield('encabezado','default')</h4>
    </nav>
    <section>
        @yield('content')
       
    </section>

    <section>
        @yield('footer')    
    </section>

    <script src="{{ asset('plugins/bootstrap/jquery/jquery.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
    
</body>
</html>