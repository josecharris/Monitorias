<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title','Default')</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="{{ asset('plugins/font/font.css') }}" rel="stylesheet"> 
  </head>
  <body>
    <header class="header content">
      <div class="header-video">
        <img src="{{ asset('img/Back.jpg') }}"/>
      </div>
      <div class="header-overlay"></div>
      <div class="header-content">
        <h1>@yield('titulo','Default')</h1>
        <section>
            @yield('content')
            <a href="/" class="btn">Volver a inicio</a>
        </section>
        
      </div>
    </header>
  </body>
</html>