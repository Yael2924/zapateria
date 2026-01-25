@extends('layouts.app')

@section('title', 'Página no encontrada - SoleVault')

@section('content')
<style>
    /* Estilos específicos para la página 404 */
    .error-container {
        min-height: calc(100vh - 200px);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
        background: linear-gradient(135deg, var(--white-primary) 0%, var(--white-secondary) 100%);
    }

    .error-content {
        text-align: center;
        max-width: 600px;
        padding: 60px 40px;
        background: var(--white-primary);
        border-radius: 24px;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
        border: 1px solid var(--border-color);
        position: relative;
        overflow: hidden;
    }

    .error-content::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, var(--gold-primary), var(--gold-secondary));
    }

    .error-icon {
        font-size: 8rem;
        color: var(--gold-primary);
        margin-bottom: 30px;
        display: block;
        animation: bounce 2s infinite;
    }

    .error-code {
        font-family: 'Playfair Display', serif;
        font-size: 6rem;
        font-weight: 700;
        color: var(--black-primary);
        margin-bottom: 10px;
        line-height: 1;
    }

    .error-title {
        font-family: 'Playfair Display', serif;
        font-size: 2.5rem;
        color: var(--black-primary);
        margin-bottom: 20px;
        font-weight: 600;
    }

    .error-message {
        color: var(--gray-medium);
        font-size: 1.2rem;
        line-height: 1.6;
        margin-bottom: 40px;
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
    }

    .error-buttons {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
        margin-bottom: 40px;
    }

    .btn-error-primary {
        background: linear-gradient(135deg, var(--black-primary), var(--black-light));
        color: var(--white-primary);
        border: none;
        border-radius: 8px;
        padding: 16px 40px;
        font-weight: 600;
        font-size: 1.1rem;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }

    .btn-error-primary:hover {
        background: linear-gradient(135deg, var(--gold-primary), var(--gold-secondary));
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(212, 175, 55, 0.3);
        color: var(--white-primary);
    }

    .btn-error-secondary {
        background: transparent;
        color: var(--black-primary);
        border: 2px solid var(--border-color);
        border-radius: 8px;
        padding: 16px 40px;
        font-weight: 600;
        font-size: 1.1rem;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }

    .btn-error-secondary:hover {
        border-color: var(--gold-primary);
        color: var(--gold-primary);
        transform: translateY(-2px);
    }

    .error-search {
        margin-top: 40px;
        max-width: 400px;
        margin-left: auto;
        margin-right: auto;
    }

    .error-search .form-control {
        border: 2px solid var(--border-color);
        border-radius: 25px;
        padding: 14px 20px;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .error-search .form-control:focus {
        border-color: var(--gold-primary);
        box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.15);
    }

    .error-search .btn {
        border-radius: 25px;
        padding: 14px 30px;
        background: var(--black-primary);
        border: none;
        color: var(--white-primary);
        transition: all 0.3s ease;
    }

    .error-search .btn:hover {
        background: var(--gold-primary);
    }

    .error-links {
        margin-top: 30px;
        display: flex;
        justify-content: center;
        gap: 30px;
        flex-wrap: wrap;
    }

    .error-links a {
        color: var(--gray-medium);
        text-decoration: none;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .error-links a:hover {
        color: var(--gold-primary);
    }

    /* Animaciones */
    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-20px);
        }
        60% {
            transform: translateY(-10px);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-in-up {
        animation: fadeInUp 0.6s ease forwards;
    }

    /* Variables de color (si no están en app.css) */
    :root {
        --black-primary: #000000;
        --black-secondary: #1a1a1a;
        --black-light: #2d2d2d;
        --white-primary: #ffffff;
        --white-secondary: #f8f9fa;
        --white-tertiary: #e9ecef;
        --gold-primary: #d4af37;
        --gold-secondary: #b8941f;
        --gray-dark: #333333;
        --gray-medium: #666666;
        --gray-light: #999999;
        --gray-extra-light: #cccccc;
        --border-color: #e0e0e0;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .error-content {
            padding: 40px 25px;
        }
        
        .error-icon {
            font-size: 6rem;
        }
        
        .error-code {
            font-size: 4rem;
        }
        
        .error-title {
            font-size: 2rem;
        }
        
        .error-message {
            font-size: 1rem;
        }
        
        .error-buttons {
            flex-direction: column;
            align-items: center;
        }
        
        .btn-error-primary,
        .btn-error-secondary {
            width: 100%;
            justify-content: center;
        }
        
        .error-links {
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }
    }

    @media (max-width: 480px) {
        .error-content {
            padding: 30px 20px;
        }
        
        .error-icon {
            font-size: 5rem;
        }
        
        .error-code {
            font-size: 3.5rem;
        }
    }
</style>

<div class="error-container">
    <div class="error-content fade-in-up">
        <!-- Icono animado -->
        <div class="error-icon">
            <i class="fas fa-shoe-prints"></i>
        </div>

        <!-- Código de error -->
        <h1 class="error-code">404</h1>

        <!-- Título -->
        <h2 class="error-title">Página no encontrada</h2>

        <!-- Mensaje descriptivo -->
        <p class="error-message">
            Lo sentimos, la página que estás buscando no existe o ha sido movida.
            Puedes volver al inicio o explorar nuestra colección de productos exclusivos.
        </p>

        <!-- Botones de acción -->
        <div class="error-buttons">
            <a href="{{ route('inicio') }}" class="btn-error-primary">
                <i class="fas fa-home"></i>
                Volver al inicio
            </a>

            <a href="/#productos" class="btn-error-secondary">
                <i class="fas fa-shopping-bag"></i>
                Ver productos
            </a>
        </div>

        <!-- Búsqueda (opcional) -->
        <div class="error-search">
            <p class="text-muted mb-3" style="font-size: 0.95rem;">
                ¿Buscas algo específico?
            </p>
            <form action="{{ route('buscar') }}" method="GET" class="input-group">
                <input type="text" 
                       class="form-control" 
                       placeholder="Buscar productos..."
                       name="q">
                <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>

        <!-- Enlaces útiles -->
        <div class="error-links">
            <a href="{{ route('ayuda') }}">
                <i class="fas fa-question-circle"></i>
                Centro de ayuda
            </a>
            <a href="{{ route('contacto') }}">
                <i class="fas fa-envelope"></i>
                Contáctanos
            </a>
            <a href="{{ route('buzon') }}">
                <i class="fas fa-inbox"></i>
                Buzón de mensajes
            </a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animación para el icono
        const errorIcon = document.querySelector('.error-icon');
        let bounceCount = 0;
        const maxBounces = 3;
        
        function animateIcon() {
            if (bounceCount < maxBounces) {
                errorIcon.style.animation = 'none';
                setTimeout(() => {
                    errorIcon.style.animation = 'bounce 2s';
                    bounceCount++;
                    if (bounceCount < maxBounces) {
                        setTimeout(animateIcon, 2500);
                    }
                }, 100);
            }
        }
        
        // Iniciar animación después de 1 segundo
        setTimeout(animateIcon, 1000);
        
        // Validar formulario de búsqueda
        const searchForm = document.querySelector('.error-search form');
        if (searchForm) {
            searchForm.addEventListener('submit', function(e) {
                const searchInput = this.querySelector('input[name="q"]');
                if (!searchInput.value.trim()) {
                    e.preventDefault();
                    searchInput.focus();
                    searchInput.style.borderColor = 'var(--error-color)';
                    
                    setTimeout(() => {
                        searchInput.style.borderColor = 'var(--border-color)';
                    }, 2000);
                }
            });
        }
        
        // Efecto hover en botones
        const buttons = document.querySelectorAll('.btn-error-primary, .btn-error-secondary');
        buttons.forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
            });
            
            button.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    });
</script>
@endsection