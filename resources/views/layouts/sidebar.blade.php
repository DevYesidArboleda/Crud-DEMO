<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="/home">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/afiliados">
        <i class="menu-icon mdi mdi-account-multiple"></i>
        <span class="menu-title">Afiliados</span>
      </a>
    </li>
    @if(Auth::user()->admin())
    <li class="nav-item">
      <a class="nav-link" href="{{ route('users.index') }}">
        <i class="menu-icon mdi mdi-account-multiple"></i>
        <span class="menu-title">Usuarios</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="menu-icon mdi mdi-settings"></i>
        <span class="menu-title">Configuración</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('countries.index') }}"> Paises </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('departments.index') }}"> Departamentos </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('cities.index') }}"> Ciudades </a>
          </li>
        </ul>
      </div>
    </li>
    @endif
  </ul>
</nav>