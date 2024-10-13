<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container nb-container">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item {{ $active == 'index' ? 'active' : '' }}">
          <a class="nav-link" href="{{ env('APP_URL') }}">Inicio</a>
        </li>
        <li class="nav-item {{ $active == 'products' ? 'active' : '' }} ml-5">
          <a class="nav-link" href="{{ env('APP_URL') }}/products">Productos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>