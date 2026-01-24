<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'SoleVault - Tenis de Lujo Exclusivos')</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Estilos personalizados -->
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    
    @yield('styles')
</head>
<body>
    <!-- Header y Navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <!-- Logo y Nombre -->
            <a class="navbar-brand d-flex align-items-center" href="{{ route('inicio') }}">
                <div class="logo-icon me-2">
                    <i class="fas fa-vault"></i>
                </div>
                <span class="brand-text">SoleVault</span>
            </a>
            
            <!-- Menú Hamburguesa (mobile) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Menú Principal -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('servicios') }}" role="button">
                            Productos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Alexander McQueen</a></li>
                            <li><a class="dropdown-item" href="#">Air Jordan</a></li>
                            <li><a class="dropdown-item" href="#">Dior B23</a></li>
                            <li><a class="dropdown-item" href="#">Balenciaga</a></li>
                            <li><a class="dropdown-item" href="#">Yeezy</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                    </li>
                </ul>
                
                <!-- Elementos adicionales -->
                <div class="d-flex align-items-center">
                    <!-- Búsqueda funcional -->
                    <form action="{{ route('buscar') }}" method="GET" class="search-form me-3">
                        <div class="input-group">
                            <input type="text" class="form-control" name="q" placeholder="Buscar tenis...">
                            <button class="btn btn-search" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                    
                    <!-- Iconos adicionales -->
                    <div class="nav-icons d-flex">
                        <a href="{{ route('login') }}" class="nav-icon me-3" title="Iniciar Sesión">
                            <i class="fas fa-user"></i>
                        </a>
                        <a href="#" class="nav-icon me-3" title="Buzón">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="{{ route('ayuda') }}" class="nav-icon me-3" title="Ayuda">
                            <i class="fas fa-question-circle"></i>
                        </a>
                        <a href="{{ route('soporte') }}" class="nav-icon" title="Chat">
                            <i class="fas fa-comment-dots"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer mt-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>SoleVault</h5>
                    <p>Tu bóveda exclusiva de tenis de lujo. Las mejores marcas en un solo lugar.</p>
                </div>
                <div class="col-md-4">
                    <h5>Enlaces rápidos</h5>
                    <ul class="footer-links">
                        <li><a href="{{ route('inicio') }}">Inicio</a></li>
                        <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
                        <li><a href="{{ route('servicios') }}">Productos</a></li>
                        <li><a href="{{ route('contacto') }}">Contacto</a></li>
                        {{-- <li><a href="{{ route('registrar') }}">Registrarse</a></li> --}}
                        <li><a href="#">Mapa del sitio</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contacto</h5>
                    <p><i class="fas fa-map-marker-alt me-2"></i> Av. Luxury 123, Ciudad</p>
                    <p><i class="fas fa-phone me-2"></i> +52 55 1234 5678</p>
                    <p><i class="fas fa-envelope me-2"></i> info@solevault.com</p>
                </div>
            </div>
            <div class="text-center mt-4">
                <p>&copy; 2024 SoleVault. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    
    @yield('scripts')
</body>
</html>