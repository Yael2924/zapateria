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
    
    <style>
        /* Estilos para el menú de usuario */
        .user-menu {
            position: relative;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--gold-primary), var(--gold-secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white-primary);
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .user-avatar:hover {
            transform: scale(1.05);
            border-color: var(--gold-primary);
            box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.2);
        }
        
        .user-avatar .avatar-initials {
            font-size: 1rem;
        }
        
        .user-dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            background: var(--white-primary);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            min-width: 220px;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s ease;
        }
        
        .user-menu.active .user-dropdown {
            opacity: 1;
            visibility: visible;
            transform: translateY(5px);
        }
        
        .user-info {
            padding: 20px;
            border-bottom: 1px solid var(--border-color);
            text-align: center;
        }
        
        .user-name {
            font-weight: 600;
            color: var(--black-primary);
            margin-bottom: 5px;
            font-size: 1rem;
        }
        
        .user-email {
            color: var(--gray-medium);
            font-size: 0.85rem;
        }
        
        .user-links {
            padding: 10px 0;
        }
        
        .user-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 20px;
            color: var(--gray-dark);
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }
        
        .user-link:hover {
            background: var(--white-tertiary);
            color: var(--gold-primary);
            padding-left: 25px;
        }
        
        .user-link i {
            width: 18px;
            text-align: center;
        }
        
        .user-link.logout {
            color: var(--error-color);
            border-top: 1px solid var(--border-color);
            margin-top: 5px;
        }
        
        .user-link.logout:hover {
            background: rgba(220, 53, 69, 0.05);
        }
        
        .welcome-banner {
            background: linear-gradient(135deg, var(--black-primary), var(--black-light));
            color: var(--white-primary);
            padding: 10px 0;
            text-align: center;
            font-size: 0.9rem;
            border-bottom: 2px solid var(--gold-primary);
            position: relative;
            overflow: hidden;
        }
        
        .welcome-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.2), transparent);
            animation: shimmer 3s infinite;
        }
        
        @keyframes shimmer {
            0% { left: -100%; }
            100% { left: 100%; }
        }
        
        .welcome-text {
            position: relative;
            z-index: 1;
        }
        
        .welcome-name {
            color: var(--gold-primary);
            font-weight: 600;
        }
        
        @media (max-width: 768px) {
            .user-dropdown {
                position: fixed;
                top: 70px;
                left: 0;
                right: 0;
                margin: 0 15px;
                width: calc(100% - 30px);
            }
            
            .welcome-banner {
                padding: 8px 0;
                font-size: 0.85rem;
            }
        }
    </style>
    
    @yield('styles')
</head>
<body>
    <!-- Banner de bienvenida (solo si está autenticado) -->
    @auth
    <div class="welcome-banner">
        <div class="container">
            <div class="welcome-text">
                <i class="fas fa-crown me-2"></i>
                ¡Bienvenido de vuelta, <span class="welcome-name">{{ Auth::user()->name }}</span>! Disfruta de tu experiencia exclusiva en SoleVault.
            </div>
        </div>
    </div>
    @endauth
    
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
                    <li class="nav-item">
                        <a class="nav-link" href="/#productos" role="button">
                            Productos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacto') }}">Contáctanos</a>
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
                        @auth
                            <!-- Menú de usuario cuando está autenticado -->
                            <div class="user-menu me-3" id="userMenu">
                                <div class="user-avatar" id="userAvatar">
                                    @php
                                        // Obtener iniciales del nombre
                                        $name = Auth::user()->name;
                                        $initials = '';
                                        $names = explode(' ', $name);
                                        foreach ($names as $n) {
                                            if (!empty($n)) {
                                                $initials .= strtoupper(substr($n, 0, 1));
                                                if (strlen($initials) >= 2) break;
                                            }
                                        }
                                        if (empty($initials)) {
                                            $initials = 'U';
                                        }
                                    @endphp
                                    <span class="avatar-initials">{{ $initials }}</span>
                                </div>
                                
                                <!-- Dropdown del usuario -->
                                <div class="user-dropdown">
                                    <div class="user-info">
                                        <div class="user-name">{{ Auth::user()->name }}</div>
                                        <div class="user-email">{{ Auth::user()->email }}</div>
                                    </div>
                                    
                                    <div class="user-links">
                                        <a href="#" class="user-link">
                                            <i class="fas fa-user"></i>
                                            <span>Mi Perfil</span>
                                        </a>
                                        <a href="#" class="user-link">
                                            <i class="fas fa-shopping-bag"></i>
                                            <span>Mis Pedidos</span>
                                        </a>
                                        <a href="#" class="user-link">
                                            <i class="fas fa-heart"></i>
                                            <span>Favoritos</span>
                                        </a>
                                        <a href="#" class="user-link">
                                            <i class="fas fa-cog"></i>
                                            <span>Configuración</span>
                                        </a>
                                        
                                        <!-- Formulario de logout -->
                                        <form method="POST" action="{{ route('logout') }}" id="logoutForm">
                                            @csrf
                                            <a href="#" class="user-link logout" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <span>Cerrar Sesión</span>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @else
                            <!-- Iconos normales cuando no está autenticado -->
                            <a href="{{ route('login') }}" class="nav-icon me-3" title="Iniciar Sesión">
                                <i class="fas fa-user"></i>
                            </a>
                        @endauth
                        
                        <a href="{{ route('buzon') }}" class="nav-icon me-3" title="Buzón">
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
                        <li><a href="#productos">Productos</a></li>
                        <li><a href="{{ route('contacto') }}">Contacto</a></li>
                        @guest
                        <li><a href="{{ route('register') }}">Registrarse</a></li>
                        @endguest
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
                <p>&copy; 2026 SoleVault. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    
    <script>
        // Control del menú de usuario
        document.addEventListener('DOMContentLoaded', function() {
            const userMenu = document.getElementById('userMenu');
            const userAvatar = document.getElementById('userAvatar');
            
            if (userMenu && userAvatar) {
                // Abrir/cerrar menú al hacer clic en el avatar
                userAvatar.addEventListener('click', function(e) {
                    e.stopPropagation();
                    userMenu.classList.toggle('active');
                });
                
                // Cerrar menú al hacer clic fuera
                document.addEventListener('click', function(e) {
                    if (!userMenu.contains(e.target)) {
                        userMenu.classList.remove('active');
                    }
                });
                
                // Cerrar menú al hacer clic en un enlace
                const userLinks = userMenu.querySelectorAll('.user-link');
                userLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        userMenu.classList.remove('active');
                    });
                });
            }
            
            // Efecto hover en el avatar
            const avatarElement = document.querySelector('.user-avatar');
            if (avatarElement) {
                avatarElement.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.05)';
                });
                
                avatarElement.addEventListener('mouseleave', function() {
                    if (!userMenu || !userMenu.classList.contains('active')) {
                        this.style.transform = 'scale(1)';
                    }
                });
            }
            
            // Mostrar/ocultar banner de bienvenida
            const welcomeBanner = document.querySelector('.welcome-banner');
            if (welcomeBanner) {
                // Ocultar banner después de 10 segundos
                setTimeout(() => {
                    welcomeBanner.style.opacity = '0';
                    welcomeBanner.style.transform = 'translateY(-100%)';
                    welcomeBanner.style.transition = 'all 0.5s ease';
                    
                    setTimeout(() => {
                        welcomeBanner.style.display = 'none';
                    }, 500);
                }, 10000);
                
                // Ocultar al hacer clic
                welcomeBanner.addEventListener('click', function() {
                    this.style.opacity = '0';
                    this.style.transform = 'translateY(-100%)';
                    this.style.transition = 'all 0.5s ease';
                    
                    setTimeout(() => {
                        this.style.display = 'none';
                    }, 500);
                });
            }
        });
        
        // Logout suave
        function logoutUser() {
            const logoutForm = document.getElementById('logoutForm');
            if (logoutForm) {
                // Mostrar animación de salida
                const userMenu = document.getElementById('userMenu');
                if (userMenu) {
                    userMenu.style.opacity = '0.5';
                    userMenu.style.pointerEvents = 'none';
                }
                
                // Enviar formulario después de un breve delay
                setTimeout(() => {
                    logoutForm.submit();
                }, 500);
            }
        }
    </script>
    
    @yield('scripts')
</body>
</html>