<header role="banner">
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-5">
          <ul class="social list-unstyled">
            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li><a href="#"><span class="fa fa-instagram"></span></a></li>
          </ul>
        </div>
        <div class="col-md-6 col-sm-6 col-7 text-right">
          <p class="mb-0">
            <a href="{{ route('login') }}" class="cta-btn"><strong>Login</strong></a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/">Sistema <span>EPS</span> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample05">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="/" class="nav-link active">Home</a>
          </li>
          <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a href="#" class="dropdown-item">Institute</a>
              <a href="#" class="dropdown-item">Departments</a>
              <a href="#" class="dropdown-item">Services</a>
            </div>
          </li>
          <li class="nav-item"><a href="#" class="nav-link">Nosotros</a></li>
          <li class="nav-item"><a href="{{ url('/work-with-us') }}" class="nav-link">Trabaja con nosotros</a></li>
          <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>