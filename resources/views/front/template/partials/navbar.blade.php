<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
      <div class="navbar-header">

          <!-- Collapsed Hamburger -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>

          <!-- Branding Image -->
          <a class="navbar-brand" href="{{ url('/') }}">
              Inicio
          </a>
      </div>

      <div class="collapse navbar-collapse" id="app-navbar-collapse">  
          <!-- Left Side Of Navbar -->
          <ul class="nav navbar-nav">
    			
              <li class="dropdown">
               <a href="{{ url('/affiliations') }}"> Afiliaciones</a>
              </li>
              <li><a href="{{ url('/work-with-us') }}">Trabaja con nosotros</a></li>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">
              <!-- Authentication Links -->
              @if (Route::has('login'))
					        <li><a href="{{ route('login') }}">Login</a></li>
                  <li><a href="{{ route('register') }}">Register</a></li>
					    @endif
          </ul>
      </div>
  </div>
</nav>