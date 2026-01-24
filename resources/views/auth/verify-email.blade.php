<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Email - SoleVault</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
    
    <style>
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
            --error-color: #dc3545;
            --success-color: #28a745;
            --info-color: #17a2b8;
            --warning-color: #ffc107;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, var(--white-secondary) 0%, var(--white-tertiary) 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            color: var(--black-primary);
        }

        .verification-container {
            width: 100%;
            max-width: 500px;
            background: var(--white-primary);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            position: relative;
        }

        .verification-header {
            background: var(--black-primary);
            padding: 35px 30px 25px;
            text-align: center;
            position: relative;
            border-bottom: 3px solid var(--gold-primary);
        }

        .verification-header::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, var(--gold-primary), transparent);
        }

        .auth-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            color: var(--white-primary);
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
            transition: transform 0.3s ease;
        }

        .auth-logo:hover {
            transform: scale(1.02);
        }

        .auth-logo-icon {
            color: var(--gold-primary);
            font-size: 1.8rem;
        }

        .auth-logo-text {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 700;
        }

        .brand-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            color: var(--white-primary);
            margin: 10px 0 5px 0;
            letter-spacing: 0.5px;
        }

        .form-title {
            color: var(--gray-extra-light);
            font-size: 0.9rem;
            margin: 0;
            font-weight: 400;
        }

        .verification-body {
            padding: 40px;
        }

        /* Icono principal de verificación */
        .verification-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--gold-primary), var(--gold-secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            color: var(--white-primary);
            font-size: 2.2rem;
            box-shadow: 0 10px 20px rgba(212, 175, 55, 0.2);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 10px 20px rgba(212, 175, 55, 0.2);
            }
            50% {
                box-shadow: 0 10px 30px rgba(212, 175, 55, 0.4);
            }
            100% {
                box-shadow: 0 10px 20px rgba(212, 175, 55, 0.2);
            }
        }

        /* Mensaje principal */
        .verification-message {
            text-align: center;
            margin-bottom: 30px;
        }

        .verification-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--black-primary);
            margin-bottom: 15px;
            font-weight: 600;
        }

        .verification-text {
            color: var(--gray-medium);
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        /* Mensaje de éxito */
        .success-message {
            padding: 16px;
            margin-bottom: 25px;
            border-radius: 8px;
            background-color: rgba(40, 167, 69, 0.05);
            color: var(--success-color);
            text-align: center;
            font-size: 0.9rem;
            border: 1px solid rgba(40, 167, 69, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            animation: slideDown 0.5s ease;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .success-message i {
            font-size: 1.1rem;
        }

        /* Acciones */
        .verification-actions {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-bottom: 30px;
        }

        .action-button {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            padding: 14px 24px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.95rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            text-align: center;
            border: 2px solid;
            font-family: 'Montserrat', sans-serif;
        }

        .btn-primary {
            background: var(--black-primary);
            color: var(--white-primary);
            border-color: var(--black-primary);
        }

        .btn-primary:hover {
            background: var(--gold-primary);
            border-color: var(--gold-primary);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(212, 175, 55, 0.2);
        }

        .btn-secondary {
            background: transparent;
            color: var(--gray-medium);
            border-color: var(--border-color);
        }

        .btn-secondary:hover {
            color: var(--gold-primary);
            border-color: var(--gold-primary);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(212, 175, 55, 0.1);
        }

        /* Estado de carga */
        .action-button.loading {
            pointer-events: none;
            position: relative;
            color: transparent;
        }

        .action-button.loading::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            top: 50%;
            left: 50%;
            margin-top: -10px;
            margin-left: -10px;
            border: 2px solid transparent;
            border-top-color: currentColor;
            border-radius: 50%;
            animation: button-loading-spinner 0.8s linear infinite;
        }

        .btn-primary.loading::after {
            border-top-color: var(--white-primary);
        }

        .btn-secondary.loading::after {
            border-top-color: var(--gray-medium);
        }

        @keyframes button-loading-spinner {
            from {
                transform: rotate(0turn);
            }
            to {
                transform: rotate(1turn);
            }
        }

        /* Información adicional */
        .verification-info {
            padding: 20px;
            background: var(--white-tertiary);
            border-radius: 8px;
            margin-top: 25px;
            border: 1px solid var(--border-color);
        }

        .info-title {
            font-size: 0.9rem;
            color: var(--gray-dark);
            font-weight: 600;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .info-title i {
            color: var(--gold-primary);
            font-size: 0.9rem;
        }

        .info-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .info-list li {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 10px;
            font-size: 0.85rem;
            color: var(--gray-medium);
            line-height: 1.5;
        }

        .info-list li i {
            color: var(--gray-light);
            font-size: 0.8rem;
            margin-top: 2px;
            min-width: 14px;
        }

        /* Animación de entrada */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 0.5s ease forwards;
        }

        /* Responsive */
        @media (max-width: 576px) {
            .verification-container {
                border-radius: 8px;
            }

            .verification-body {
                padding: 30px 25px;
            }

            .verification-header {
                padding: 25px 20px;
            }

            .brand-title {
                font-size: 1.5rem;
            }

            .auth-logo-text {
                font-size: 1.5rem;
            }

            .verification-title {
                font-size: 1.3rem;
            }

            .action-button {
                padding: 12px 20px;
            }
        }

        @media (max-width: 400px) {
            .verification-body {
                padding: 25px 20px;
            }

            .verification-header {
                padding: 20px 15px;
            }

            .verification-actions {
                gap: 15px;
            }
        }

        /* Mejora de accesibilidad */
        .action-button:focus {
            outline: 2px solid var(--gold-primary);
            outline-offset: 2px;
        }
    </style>
</head>
<body>
    <div class="verification-container fade-in">
        <!-- Encabezado -->
        <div class="verification-header">
            <a href="{{ route('inicio') }}" class="auth-logo">
                <i class="fas fa-vault auth-logo-icon"></i>
                <span class="auth-logo-text">SoleVault</span>
            </a>
            <h1 class="brand-title">VERIFICACIÓN REQUERIDA</h1>
            <p class="form-title">Último paso para activar tu cuenta</p>
        </div>

        <!-- Cuerpo -->
        <div class="verification-body">
            <!-- Icono animado -->
            <div class="verification-icon">
                <i class="fas fa-envelope"></i>
            </div>

            <!-- Mensaje de éxito (si existe) -->
            @if (session('status') == 'verification-link-sent')
                <div class="success-message">
                    <i class="fas fa-check-circle"></i>
                    {{ __('Se ha enviado un nuevo enlace de verificación a tu dirección de correo electrónico.') }}
                </div>
            @endif

            <!-- Mensaje principal -->
            <div class="verification-message">
                <h2 class="verification-title">¡Gracias por registrarte en SoleVault!</h2>
                <p class="verification-text">
                    Antes de comenzar, necesitamos verificar tu dirección de correo electrónico. 
                    Hemos enviado un enlace de verificación a la dirección que proporcionaste durante el registro.
                </p>
                <p class="verification-text">
                    Por favor, revisa tu bandeja de entrada y haz clic en el enlace de verificación 
                    para activar tu cuenta. Si no recibiste el correo, puedes solicitar uno nuevo.
                </p>
            </div>

            <!-- Acciones -->
            <div class="verification-actions">
                <!-- Formulario para reenviar verificación -->
                <form method="POST" action="{{ route('verification.send') }}" id="resendForm">
                    @csrf
                    <button type="submit" class="action-button btn-primary" id="resendButton">
                        <i class="fas fa-paper-plane"></i>
                        <span id="resendButtonText">{{ __('Reenviar Email de Verificación') }}</span>
                    </button>
                </form>

                <!-- Formulario para cerrar sesión -->
                <form method="POST" action="{{ route('logout') }}" id="logoutForm">
                    @csrf
                    <button type="submit" class="action-button btn-secondary" id="logoutButton">
                        <i class="fas fa-sign-out-alt"></i>
                        <span id="logoutButtonText">{{ __('Cerrar Sesión') }}</span>
                    </button>
                </form>
            </div>

            <!-- Información adicional -->
            <div class="verification-info">
                <h3 class="info-title">
                    <i class="fas fa-lightbulb"></i>
                    Consejos importantes
                </h3>
                <ul class="info-list">
                    <li>
                        <i class="fas fa-search"></i>
                        Revisa tu carpeta de spam o correo no deseado si no encuentras el email.
                    </li>
                    <li>
                        <i class="fas fa-clock"></i>
                        El enlace de verificación tiene una validez de 24 horas.
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        Una vez verificado, tendrás acceso completo a todas las funciones de SoleVault.
                    </li>
                    <li>
                        <i class="fas fa-question-circle"></i>
                        Si tienes problemas con la verificación, contacta con nuestro soporte.
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Efecto hover en el logo
            const authLogo = document.querySelector('.auth-logo');
            if (authLogo) {
                authLogo.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.02)';
                });
                
                authLogo.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                });
            }

            // Manejo del botón de reenviar
            const resendForm = document.getElementById('resendForm');
            const resendButton = document.getElementById('resendButton');
            const resendButtonText = document.getElementById('resendButtonText');
            
            if (resendForm && resendButton) {
                resendForm.addEventListener('submit', function(e) {
                    // Mostrar estado de carga
                    resendButton.classList.add('loading');
                    if (resendButtonText) {
                        resendButtonText.textContent = 'ENVIANDO...';
                    }
                    
                    // El formulario se enviará normalmente
                });
            }

            // Manejo del botón de cerrar sesión
            const logoutForm = document.getElementById('logoutForm');
            const logoutButton = document.getElementById('logoutButton');
            const logoutButtonText = document.getElementById('logoutButtonText');
            
            if (logoutForm && logoutButton) {
                logoutForm.addEventListener('submit', function(e) {
                    // Mostrar estado de carga
                    logoutButton.classList.add('loading');
                    if (logoutButtonText) {
                        logoutButtonText.textContent = 'SALIENDO...';
                    }
                    
                    // El formulario se enviará normalmente
                });
            }

            // Si hay un mensaje de éxito reciente, hacer scroll suave hacia él
            @if (session('status') == 'verification-link-sent')
                setTimeout(() => {
                    const successMessage = document.querySelector('.success-message');
                    if (successMessage) {
                        successMessage.scrollIntoView({ 
                            behavior: 'smooth', 
                            block: 'center' 
                        });
                    }
                }, 500);
            @endif

            // Restaurar botones si hay algún error (en este caso no debería)
            // pero por si acaso
            function restoreButtons() {
                if (resendButton) {
                    resendButton.classList.remove('loading');
                }
                if (resendButtonText) {
                    resendButtonText.textContent = '{{ __("Reenviar Email de Verificación") }}';
                }
                if (logoutButton) {
                    logoutButton.classList.remove('loading');
                }
                if (logoutButtonText) {
                    logoutButtonText.textContent = '{{ __("Cerrar Sesión") }}';
                }
            }

            // Restaurar botones después de 10 segundos (por si hay algún problema)
            setTimeout(restoreButtons, 10000);
        });
    </script>
</body>
</html>