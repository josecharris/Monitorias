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
    @include('admin.templates.partials.navbar')
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