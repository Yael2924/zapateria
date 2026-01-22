<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">

        {{-- Logo --}}
        <a class="navbar-brand d-flex align-items-center" href="{{ route('inicio') }}">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" width="30" class="me-2">
            <strong>Zapatería</strong>
        </a>

        {{-- Botón móvil --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuPrincipal">
            <ul class="navbar-nav ms-auto">

                {{-- Secciones principales --}}
                <li class="nav-item"><a class="nav-link" href="{{ route('inicio') }}">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('servicios') }}">Servicios</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contacto') }}">Contacto</a></li>

                {{-- Búsqueda --}}
                <form class="d-flex ms-3" method="GET" action="{{ route('buscar') }}">
                    <input class="form-control form-control-sm me-2" type="search" name="q" placeholder="Buscar">
                </form>

                {{-- Usuario --}}
                <li class="nav-item dropdown ms-3">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Cuenta</a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Registrar</a></li>
                        <li><a class="dropdown-item" href="#">Iniciar sesión</a></li>
                        <li><a class="dropdown-item" href="#">Recuperar contraseña</a></li>
                        {{--<li><a class="dropdown-item" href="{{ route('register') }}">Registrar</a></li>
                        <li><a class="dropdown-item" href="{{ route('login') }}">Iniciar sesión</a></li>
                        <li><a class="dropdown-item" href="{{ route('password.request') }}">Recuperar contraseña</a></li>--}}
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('buzon') }}">Buzón</a></li>
                        <li><a class="dropdown-item" href="{{ route('ayuda') }}">Ayuda</a></li>
                        <li><a class="dropdown-item" href="{{ route('mapa') }}">Mapa del sitio</a></li>
                        <li><a class="dropdown-item" href="{{ route('chat') }}">Chat en línea</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
