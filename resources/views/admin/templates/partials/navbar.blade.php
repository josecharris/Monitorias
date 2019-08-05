<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="/">
        <div class="logo">
            <img src="{{ asset('img/logo_eduvirtual.png') }}" style="height: 48px;">
            <img src="{{ asset('img/logo_monitorias.png') }}" style="height: 48px; margin-left:30px;">
            <span style="margin-left:40px;">Sistema de monitorias de la UPTC</span>
            
        </div> 
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Inicio
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home.mision') }}">Misión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home.vision') }}">Visión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#footer">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>