<style>
h1 {
  font-size: 70px;
  margin-bottom: 0;
  font-family: 'Lobster', cursive;
}
</style>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="{{ asset('img/joven-estudiando.jpg') }}" alt="Estudio" style="width: 100%; height:550px;">
        <div class="carousel-caption d-none d-md-block">
            <h1 style="margin-bottom: 100px;">Comprometidos con la calidad</h1>
        </div>
    </div>
    <div class="carousel-item">
        <img src="{{ asset('img/mujer-estudiando.jpg') }}" alt="Estudio" style="width: 100%; height:550px;">
        <div class="carousel-caption d-none d-md-block">
            <h1 style="margin-bottom: 90px;">Superando toda adversidad</h1>
        </div>
    </div>
    <div class="carousel-item">
        <img src="{{ asset('img/biblioteca.jpg') }}" alt="Estudio" style="width: 100%; height:550px;">
        <div class="carousel-caption d-none d-md-block">
            <h1 style="margin-bottom: 90px;">Pensando en el progreso</h1>
        </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<!-- {{ asset('img/joven-estudiando.jpg') }} -->