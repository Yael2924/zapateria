@extends('layouts.app')

@section('title', 'Mapa del Sitio - SoleVault')

@section('styles')
<style>
    .sitemap-hero {
        background: linear-gradient(rgba(0,0,0,0.85), rgba(0,0,0,0.85)), 
                    url('https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80');
        background-size: cover;
        background-position: center;
        padding: 120px 0 80px;
        color: var(--white-primary);
        text-align: center;
        position: relative;
    }

    .sitemap-hero-title {
        font-family: 'Playfair Display', serif;
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        color: var(--white-primary);
        position: relative;
        display: inline-block;
    }

    .sitemap-hero-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 3px;
        background: var(--gold-primary);
    }

    .sitemap-hero-subtitle {
        font-size: 1.2rem;
        color: var(--gray-extra-light);
        max-width: 700px;
        margin: 0 auto 40px;
        line-height: 1.6;
    }

    .sitemap-container {
        padding: 80px 0;
        background: var(--white-primary);
    }

    .sitemap-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }

    .sitemap-section {
        background: var(--white-secondary);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        padding: 30px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .sitemap-section:hover {
        transform: translateY(-5px);
        border-color: var(--gold-primary);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
    }

    .section-header {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 2px solid var(--gold-primary);
    }

    .section-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, var(--gold-primary), var(--gold-secondary));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--white-primary);
        font-size: 1.5rem;
    }

    .section-title {
        font-family: 'Playfair Display', serif;
        font-size: 1.5rem;
        color: var(--black-primary);
        font-weight: 600;
        margin: 0;
    }

    .sitemap-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .sitemap-link-item {
        margin-bottom: 12px;
        position: relative;
        padding-left: 25px;
    }

    .sitemap-link-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 8px;
        height: 8px;
        background: var(--gold-primary);
        border-radius: 50%;
        opacity: 0.6;
    }

    .sitemap-link {
        color: var(--gray-dark);
        text-decoration: none;
        font-size: 0.95rem;
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 8px 0;
        transition: all 0.3s ease;
        position: relative;
    }

    .sitemap-link:hover {
        color: var(--gold-primary);
        padding-left: 5px;
    }

    .sitemap-link i {
        font-size: 0.9rem;
        width: 20px;
        color: var(--gray-light);
    }

    .sitemap-link:hover i {
        color: var(--gold-primary);
    }

    .link-description {
        display: block;
        font-size: 0.8rem;
        color: var(--gray-medium);
        margin-top: 4px;
        margin-left: 28px;
        line-height: 1.4;
    }

    .link-badge {
        display: inline-block;
        padding: 2px 8px;
        background: var(--gold-primary);
        color: var(--white-primary);
        font-size: 0.7rem;
        border-radius: 4px;
        margin-left: 8px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .link-badge.new {
        background: var(--success-color);
    }

    .link-badge.popular {
        background: var(--info-color);
    }

    .link-badge.exclusive {
        background: var(--black-primary);
    }

    .section-footer {
        margin-top: 25px;
        padding-top: 15px;
        border-top: 1px solid var(--border-color);
        text-align: center;
    }

    .section-all {
        color: var(--gold-primary);
        text-decoration: none;
        font-weight: 600;
        font-size: 0.9rem;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: all 0.3s ease;
    }

    .section-all:hover {
        gap: 10px;
    }

    .quick-access {
        background: var(--black-primary);
        padding: 60px 0;
        color: var(--white-primary);
    }

    .quick-access-title {
        font-family: 'Playfair Display', serif;
        font-size: 2.5rem;
        text-align: center;
        margin-bottom: 40px;
        color: var(--white-primary);
    }

    .quick-access-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }

    .quick-link {
        background: var(--black-light);
        border: 1px solid var(--border-color);
        border-radius: 8px;
        padding: 25px;
        text-align: center;
        transition: all 0.3s ease;
        text-decoration: none;
        color: var(--white-primary);
    }

    .quick-link:hover {
        background: var(--gold-primary);
        transform: translateY(-5px);
        border-color: var(--gold-primary);
        box-shadow: 0 10px 20px rgba(212, 175, 55, 0.2);
    }

    .quick-link-icon {
        font-size: 2rem;
        color: var(--gold-primary);
        margin-bottom: 15px;
        transition: all 0.3s ease;
    }

    .quick-link:hover .quick-link-icon {
        color: var(--white-primary);
        transform: scale(1.1);
    }

    .quick-link-title {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .quick-link-desc {
        font-size: 0.85rem;
        color: var(--gray-extra-light);
        opacity: 0.8;
    }

    .search-section {
        padding: 60px 0;
        background: var(--white-secondary);
    }

    .search-container {
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
    }

    .search-title {
        font-family: 'Playfair Display', serif;
        font-size: 2rem;
        color: var(--black-primary);
        margin-bottom: 20px;
    }

    .search-description {
        color: var(--gray-medium);
        margin-bottom: 30px;
        font-size: 1rem;
    }

    .site-search-form {
        max-width: 600px;
        margin: 0 auto;
    }

    .site-search-form .input-group {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        border-radius: 50px;
        overflow: hidden;
    }

    .site-search-form .form-control {
        padding: 15px 25px;
        border: 2px solid var(--border-color);
        border-right: none;
        font-size: 1rem;
        border-radius: 50px 0 0 50px;
    }

    .site-search-form .form-control:focus {
        border-color: var(--gold-primary);
        box-shadow: none;
    }

    .site-search-form .btn-search {
        background: var(--black-primary);
        border: 2px solid var(--black-primary);
        color: var(--white-primary);
        padding: 15px 30px;
        border-radius: 0 50px 50px 0;
        transition: all 0.3s ease;
    }

    .site-search-form .btn-search:hover {
        background: var(--gold-primary);
        border-color: var(--gold-primary);
    }

    .popular-searches {
        margin-top: 30px;
    }

    .popular-title {
        font-size: 0.9rem;
        color: var(--gray-medium);
        margin-bottom: 15px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .popular-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
    }

    .tag {
        padding: 6px 15px;
        background: var(--white-primary);
        border: 1px solid var(--border-color);
        border-radius: 20px;
        color: var(--gray-medium);
        text-decoration: none;
        font-size: 0.85rem;
        transition: all 0.3s ease;
    }

    .tag:hover {
        background: var(--gold-primary);
        border-color: var(--gold-primary);
        color: var(--white-primary);
        transform: translateY(-2px);
    }

    /* Responsive */
    @media (max-width: 992px) {
        .sitemap-hero-title {
            font-size: 2.8rem;
        }
        
        .sitemap-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .quick-access-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .sitemap-hero {
            padding: 100px 0 60px;
        }
        
        .sitemap-hero-title {
            font-size: 2.2rem;
        }
        
        .sitemap-hero-subtitle {
            font-size: 1rem;
        }
        
        .sitemap-container {
            padding: 60px 0;
        }
        
        .sitemap-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
        
        .quick-access {
            padding: 40px 0;
        }
        
        .quick-access-grid {
            grid-template-columns: 1fr;
            gap: 15px;
        }
        
        .search-section {
            padding: 40px 0;
        }
        
        .search-title {
            font-size: 1.5rem;
        }
    }

    @media (max-width: 576px) {
        .sitemap-hero-title {
            font-size: 1.8rem;
        }
        
        .section-header {
            flex-direction: column;
            text-align: center;
            gap: 10px;
        }
        
        .section-title {
            font-size: 1.3rem;
        }
        
        .sitemap-section {
            padding: 20px;
        }
        
        .quick-access-title {
            font-size: 2rem;
        }
    }

    /* Animaciones */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-in-up {
        animation: fadeInUp 0.6s ease forwards;
    }

    .stagger-delay-1 { animation-delay: 0.1s; }
    .stagger-delay-2 { animation-delay: 0.2s; }
    .stagger-delay-3 { animation-delay: 0.3s; }
    .stagger-delay-4 { animation-delay: 0.4s; }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="sitemap-hero">
    <div class="container">
        <h1 class="sitemap-hero-title fade-in-up">MAPA DEL SITIO</h1>
        <p class="sitemap-hero-subtitle fade-in-up stagger-delay-1">
            Navega fácilmente por todo el contenido de SoleVault. Encuentra rápidamente lo que buscas 
            en nuestra colección exclusiva de tenis de lujo y servicios premium.
        </p>
    </div>
</section>

<!-- Mapa del Sitio Principal -->
<section class="sitemap-container">
    <div class="container">
        <div class="sitemap-grid">
            <!-- Páginas Principales -->
            <div class="sitemap-section fade-in-up">
                <div class="section-header">
                    <div class="section-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3 class="section-title">Páginas Principales</h3>
                </div>
                <ul class="sitemap-links">
                    <li class="sitemap-link-item">
                        <a href="{{ route('inicio') }}" class="sitemap-link">
                            <i class="fas fa-chevron-right"></i>
                            <span>Inicio</span>
                            <span class="link-badge exclusive">Home</span>
                        </a>
                        <span class="link-description">Página principal con productos destacados</span>
                    </li>
                    <li class="sitemap-link-item">
                        <a href="{{ route('nosotros') }}" class="sitemap-link">
                            <i class="fas fa-chevron-right"></i>
                            <span>Nosotros</span>
                        </a>
                        <span class="link-description">Conoce nuestra historia y valores</span>
                    </li>
                    <li class="sitemap-link-item">
                        <a href="{{ route('contacto') }}" class="sitemap-link">
                            <i class="fas fa-chevron-right"></i>
                            <span>Contáctanos</span>
                        </a>
                        <span class="link-description">Formulario de contacto y soporte</span>
                    </li>
                    <li class="sitemap-link-item">
                        <a href="{{ route('buscar') }}" class="sitemap-link">
                            <i class="fas fa-chevron-right"></i>
                            <span>Búsqueda</span>
                            <span class="link-badge popular">Popular</span>
                        </a>
                        <span class="link-description">Busca productos en nuestro catálogo</span>
                    </li>
                </ul>
                <div class="section-footer">
                    <a href="{{ route('inicio') }}" class="section-all">
                        Ver todas las páginas principales
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>



            <!-- Autenticación -->
            <div class="sitemap-section fade-in-up stagger-delay-2">
                <div class="section-header">
                    <div class="section-icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h3 class="section-title">Cuenta y Acceso</h3>
                </div>
                <ul class="sitemap-links">
                    <li class="sitemap-link-item">
                        <a href="{{ route('login') }}" class="sitemap-link">
                            <i class="fas fa-chevron-right"></i>
                            <span>Iniciar Sesión</span>
                        </a>
                        <span class="link-description">Accede a tu cuenta exclusiva</span>
                    </li>
                    <li class="sitemap-link-item">
                        <a href="{{ route('register') }}" class="sitemap-link">
                            <i class="fas fa-chevron-right"></i>
                            <span>Registrarse</span>
                            <span class="link-badge new">Nuevo</span>
                        </a>
                        <span class="link-description">Crea tu cuenta en SoleVault</span>
                    </li>
                    <li class="sitemap-link-item">
                        <a href="{{ route('password.request') }}" class="sitemap-link">
                            <i class="fas fa-chevron-right"></i>
                            <span>Recuperar Contraseña</span>
                        </a>
                        <span class="link-description">Restablece tu contraseña</span>
                    </li>
                </ul>
                <div class="section-footer">
                    @guest
                    <a href="{{ route('register') }}" class="section-all">
                        Crear cuenta gratuita
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    @endguest
                    @auth
                    <a href="#" class="section-all">
                        Ir a mi cuenta
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    @endauth
                </div>
            </div>

            <!-- Servicios y Ayuda -->
            <div class="sitemap-section fade-in-up stagger-delay-3">
                <div class="section-header">
                    <div class="section-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="section-title">Servicios y Ayuda</h3>
                </div>
                <ul class="sitemap-links">
                    <li class="sitemap-link-item">
                        <a href="{{ route('ayuda') }}" class="sitemap-link">
                            <i class="fas fa-chevron-right"></i>
                            <span>Centro de Ayuda</span>
                            <span class="link-badge popular">Ayuda</span>
                        </a>
                        <span class="link-description">Preguntas frecuentes y guías</span>
                    </li>
                    <li class="sitemap-link-item">
                        <a href="{{ route('soporte') }}" class="sitemap-link">
                            <i class="fas fa-chevron-right"></i>
                            <span>Soporte en Vivo</span>
                            <span class="link-badge">Chat 24/7</span>
                        </a>
                        <span class="link-description">Asistencia personalizada en tiempo real</span>
                    </li>
                    <li class="sitemap-link-item">
                        <a href="{{ route('buzon') }}" class="sitemap-link">
                            <i class="fas fa-chevron-right"></i>
                            <span>Buzón de Contacto</span>
                        </a>
                        <span class="link-description">Envíanos tus consultas y sugerencias</span>
                    </li>
                </ul>
                <div class="section-footer">
                    <a href="{{ route('contacto') }}" class="section-all">
                        Contactar soporte
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Información Legal -->
            {{-- <div class="sitemap-section fade-in-up stagger-delay-4">
                <div class="section-header">
                    <div class="section-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3 class="section-title">Información Legal</h3>
                </div>
                <ul class="sitemap-links">
                    <li class="sitemap-link-item">
                        <a href="#" class="sitemap-link">
                            <i class="fas fa-chevron-right"></i>
                            <span>Términos y Condiciones</span>
                        </a>
                        <span class="link-description">Condiciones de uso del servicio</span>
                    </li>
                    <li class="sitemap-link-item">
                        <a href="#" class="sitemap-link">
                            <i class="fas fa-chevron-right"></i>
                            <span>Política de Privacidad</span>
                        </a>
                        <span class="link-description">Protección de datos personales</span>
                    </li>
                    <li class="sitemap-link-item">
                        <a href="#" class="sitemap-link">
                            <i class="fas fa-chevron-right"></i>
                            <span>Política de Cookies</span>
                        </a>
                        <span class="link-description">Uso de cookies en el sitio web</span>
                    </li>
                    <li class="sitemap-link-item">
                        <a href="#" class="sitemap-link">
                            <i class="fas fa-chevron-right"></i>
                            <span>Aviso Legal</span>
                        </a>
                        <span class="link-description">Información legal de la empresa</span>
                    </li>
                    <li class="sitemap-link-item">
                        <a href="#" class="sitemap-link">
                            <i class="fas fa-chevron-right"></i>
                            <span>Condiciones de Venta</span>
                        </a>
                        <span class="link-description">Términos comerciales y ventas</span>
                    </li>
                    <li class="sitemap-link-item">
                        <a href="#" class="sitemap-link">
                            <i class="fas fa-chevron-right"></i>
                            <span>Garantía del Producto</span>
                        </a>
                        <span class="link-description">Condiciones de garantía y soporte</span>
                    </li>
                </ul>
                <div class="section-footer">
                    <a href="#" class="section-all">
                        Ver información legal completa
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div> --}}
        </div>
    </div>
</section>

<!-- Acceso Rápido -->
{{-- <section class="quick-access">
    <div class="container">
        <h2 class="quick-access-title">Acceso Rápido</h2>
        <div class="quick-access-grid">
            <a href="{{ route('login') }}" class="quick-link fade-in-up">
                <div class="quick-link-icon">
                    <i class="fas fa-sign-in-alt"></i>
                </div>
                <div class="quick-link-title">Iniciar Sesión</div>
                <div class="quick-link-desc">Accede a tu cuenta exclusiva</div>
            </a>
            
            <a href="{{ route('register') }}" class="quick-link fade-in-up stagger-delay-1">
                <div class="quick-link-icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <div class="quick-link-title">Registrarse</div>
                <div class="quick-link-desc">Únete a nuestra comunidad</div>
            </a>
            
            <a href="{{ route('contacto') }}" class="quick-link fade-in-up stagger-delay-2">
                <div class="quick-link-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <div class="quick-link-title">Soporte</div>
                <div class="quick-link-desc">Atención personalizada 24/7</div>
            </a>
            
            <a href="{{ route('buscar') }}" class="quick-link fade-in-up stagger-delay-3">
                <div class="quick-link-icon">
                    <i class="fas fa-search"></i>
                </div>
                <div class="quick-link-title">Buscar Productos</div>
                <div class="quick-link-desc">Encuentra lo que necesitas</div>
            </a>
        </div>
    </div>
</section> --}}

<!-- Búsqueda en el Sitio -->
{{-- <section class="search-section">
    <div class="container">
        <div class="search-container fade-in-up">
            <h2 class="search-title">¿No encuentras lo que buscas?</h2>
            <p class="search-description">
                Utiliza nuestro buscador para encontrar rápidamente cualquier producto, 
                página o información dentro de SoleVault.
            </p>
            
            <form action="{{ route('buscar') }}" method="GET" class="site-search-form">
                <div class="input-group">
                    <input type="text" class="form-control" name="q" placeholder="Buscar productos, marcas, ayuda...">
                    <button class="btn btn-search" type="submit">
                        <i class="fas fa-search"></i> Buscar
                    </button>
                </div>
            </form>
            
            <div class="popular-searches">
                <div class="popular-title">Búsquedas Populares</div>
                <div class="popular-tags">
                    <a href="{{ route('buscar') }}?q=Alexander+McQueen" class="tag">Alexander McQueen</a>
                    <a href="{{ route('buscar') }}?q=Air+Jordan" class="tag">Air Jordan</a>
                    <a href="{{ route('buscar') }}?q=Dior" class="tag">Dior B23</a>
                    <a href="{{ route('buscar') }}?q=envios" class="tag">Envíos</a>
                    <a href="{{ route('buscar') }}?q=devoluciones" class="tag">Devoluciones</a>
                    <a href="{{ route('buscar') }}?q=garantia" class="tag">Garantía</a>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animaciones al hacer scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in-up');
                }
            });
        }, observerOptions);
        
        // Observar todos los elementos que deben animarse
        document.querySelectorAll('.sitemap-section, .quick-link').forEach(el => {
            observer.observe(el);
        });
        
        // Efecto hover en las secciones
        const sections = document.querySelectorAll('.sitemap-section');
        sections.forEach(section => {
            section.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
            });
            
            section.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
        
        // Efecto hover en los enlaces rápidos
        const quickLinks = document.querySelectorAll('.quick-link');
        quickLinks.forEach(link => {
            link.addEventListener('mouseenter', function() {
                const icon = this.querySelector('.quick-link-icon');
                if (icon) {
                    icon.style.transform = 'scale(1.1)';
                }
            });
            
            link.addEventListener('mouseleave', function() {
                const icon = this.querySelector('.quick-link-icon');
                if (icon) {
                    icon.style.transform = 'scale(1)';
                }
            });
        });
        
        // Auto-focus en el campo de búsqueda si está vacío
        const searchInput = document.querySelector('.site-search-form input[name="q"]');
        if (searchInput && !searchInput.value) {
            searchInput.focus();
        }
    });
</script>
@endsection