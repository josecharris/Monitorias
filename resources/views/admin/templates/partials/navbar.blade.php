<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
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
          <a class="nav-link" href="#">Inicio
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Misión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Visión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#footer">Contacto</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ route('login') }}">Administrador</a>
          <a class="dropdown-item" href="{{ route('login') }}">Monitor</a>
          <a class="dropdown-item" href="{{ route('login') }}">Docente</a>
          <a class="dropdown-item" href="{{ route('login') }}">Estudiante</a>
        </div>
      </li>
      </ul>
    </div>
  </div>
</nav>