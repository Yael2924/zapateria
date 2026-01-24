<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña - SoleVault</title>
    
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

        .forgot-container {
            width: 100%;
            max-width: 480px;
            background: var(--white-primary);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            position: relative;
        }

        .forgot-header {
            background: var(--black-primary);
            padding: 35px 30px 25px;
            text-align: center;
            position: relative;
            border-bottom: 3px solid var(--gold-primary);
        }

        .forgot-header::after {
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

        .forgot-body {
            padding: 40px;
        }

        /* Icono principal */
        .forgot-icon {
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
        }

        /* Mensaje principal */
        .forgot-message {
            text-align: center;
            margin-bottom: 30px;
        }

        .forgot-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--black-primary);
            margin-bottom: 15px;
            font-weight: 600;
        }

        .forgot-text {
            color: var(--gray-medium);
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        /* Mensaje de estado */
        .status-message {
            padding: 16px;
            margin-bottom: 25px;
            border-radius: 8px;
            text-align: center;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            animation: slideDown 0.5s ease;
        }

        .status-message.success {
            background-color: rgba(40, 167, 69, 0.05);
            color: var(--success-color);
            border: 1px solid rgba(40, 167, 69, 0.1);
        }

        .status-message.info {
            background-color: rgba(23, 162, 184, 0.05);
            color: var(--info-color);
            border: 1px solid rgba(23, 162, 184, 0.1);
        }

        .status-message.error {
            background-color: rgba(220, 53, 69, 0.05);
            color: var(--error-color);
            border: 1px solid rgba(220, 53, 69, 0.1);
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

        /* Formulario */
        .forgot-form {
            display: flex;
            flex-direction: column;
            gap: 22px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
            position: relative;
        }

        .form-label {
            display: block;
            font-weight: 600;
            color: var(--gray-dark);
            margin-bottom: 6px;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-label i {
            color: var(--gold-primary);
            font-size: 0.9rem;
        }

        .input-container {
            position: relative;
        }

        .form-input {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 1rem;
            color: var(--black-primary);
            background: var(--white-primary);
            transition: all 0.3s ease;
            font-family: 'Montserrat', sans-serif;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--gold-primary);
            box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.1);
        }

        .form-input::placeholder {
            color: var(--gray-light);
            font-size: 0.95rem;
        }

        .form-input-error {
            border-color: var(--error-color);
            background-color: rgba(220, 53, 69, 0.02);
        }

        .form-input-error:focus {
            border-color: var(--error-color);
            box-shadow: 0 0 0 3px rgba(220, 53, 69, 0.1);
        }

        .input-icon {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray-light);
            font-size: 1rem;
        }

        .error-message {
            color: var(--error-color);
            font-size: 0.85rem;
            margin-top: 6px;
            display: flex;
            align-items: center;
            gap: 6px;
            font-weight: 500;
        }

        .error-message i {
            font-size: 0.8rem;
        }

        /* Botón */
        .btn-submit {
            background: var(--black-primary);
            color: var(--white-primary);
            border: 2px solid var(--black-primary);
            padding: 14px 32px;
            font-weight: 600;
            border-radius: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            font-size: 0.95rem;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            font-family: 'Montserrat', sans-serif;
            margin-top: 10px;
        }

        .btn-submit:hover {
            background: var(--gold-primary);
            border-color: var(--gold-primary);
            color: var(--white-primary);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(212, 175, 55, 0.2);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        /* Estado de carga */
        .btn-submit.loading {
            pointer-events: none;
            position: relative;
            color: transparent;
        }

        .btn-submit.loading::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            top: 50%;
            left: 50%;
            margin-top: -10px;
            margin-left: -10px;
            border: 2px solid transparent;
            border-top-color: var(--white-primary);
            border-radius: 50%;
            animation: button-loading-spinner 0.8s linear infinite;
        }

        @keyframes button-loading-spinner {
            from {
                transform: rotate(0turn);
            }
            to {
                transform: rotate(1turn);
            }
        }

        /* Enlaces */
        .back-to-login {
            color: var(--gray-medium);
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 500;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-top: 20px;
            padding: 10px;
            border-radius: 8px;
        }

        .back-to-login:hover {
            color: var(--gold-primary);
            background-color: var(--white-tertiary);
        }

        .back-to-login i {
            font-size: 0.9rem;
        }

        /* Información adicional */
        .forgot-info {
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
            .forgot-container {
                border-radius: 8px;
            }

            .forgot-body {
                padding: 30px 25px;
            }

            .forgot-header {
                padding: 25px 20px;
            }

            .brand-title {
                font-size: 1.5rem;
            }

            .auth-logo-text {
                font-size: 1.5rem;
            }

            .forgot-title {
                font-size: 1.3rem;
            }

            .btn-submit {
                padding: 12px 20px;
            }
        }

        @media (max-width: 400px) {
            .forgot-body {
                padding: 25px 20px;
            }

            .forgot-header {
                padding: 20px 15px;
            }

            .forgot-form {
                gap: 18px;
            }
        }

        /* Mejora de accesibilidad */
        .btn-submit:focus,
        .back-to-login:focus,
        .form-input:focus {
            outline: 2px solid var(--gold-primary);
            outline-offset: 2px;
        }
    </style>
</head>
<body>
    <div class="forgot-container fade-in">
        <!-- Encabezado -->
        <div class="forgot-header">
            <a href="{{ route('inicio') }}" class="auth-logo">
                <i class="fas fa-vault auth-logo-icon"></i>
                <span class="auth-logo-text">SoleVault</span>
            </a>
            <h1 class="brand-title">RECUPERAR ACCESO</h1>
            <p class="form-title">Recupera el acceso a tu cuenta exclusiva</p>
        </div>

        <!-- Cuerpo -->
        <div class="forgot-body">
            <!-- Icono -->
            <div class="forgot-icon">
                <i class="fas fa-key"></i>
            </div>

            <!-- Mensaje principal -->
            <div class="forgot-message">
                <h2 class="forgot-title">¿Olvidaste tu contraseña?</h2>
                <p class="forgot-text">
                    No hay problema. Solo dinos tu dirección de correo electrónico y te enviaremos un enlace 
                    para restablecer tu contraseña. Podrás crear una nueva contraseña segura.
                </p>
            </div>

            <!-- Mensaje de estado -->
            @if (session('status'))
                <div class="status-message success">
                    <i class="fas fa-check-circle"></i>
                    {{ session('status') }}
                </div>
            @endif

            <!-- Formulario -->
            <form method="POST" action="{{ route('password.email') }}" class="forgot-form" id="forgotForm">
                @csrf

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email" class="form-label">
                        <i class="fas fa-envelope"></i> {{ __('Correo Electrónico') }}
                    </label>
                    <div class="input-container">
                        <input 
                            id="email" 
                            type="email" 
                            name="email" 
                            class="form-input @error('email') form-input-error @enderror"
                            value="{{ old('email') }}" 
                            required 
                            autofocus 
                            autocomplete="email"
                            placeholder="ejemplo@correo.com"
                        >
                        <div class="input-icon">
                            <i class="fas fa-at"></i>
                        </div>
                    </div>
                    @error('email')
                        <div class="error-message">
                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Botón de envío -->
                <button type="submit" class="btn-submit" id="submitButton">
                    <i class="fas fa-paper-plane"></i>
                    <span id="submitButtonText">{{ __('Enviar Enlace de Restablecimiento') }}</span>
                </button>
            </form>

            <!-- Enlace para regresar al login -->
            <a href="{{ route('login') }}" class="back-to-login">
                <i class="fas fa-arrow-left"></i>
                Volver al inicio de sesión
            </a>

            <!-- Información adicional -->
            <div class="forgot-info">
                <h3 class="info-title">
                    <i class="fas fa-info-circle"></i>
                    Información importante
                </h3>
                <ul class="info-list">
                    <li>
                        <i class="fas fa-clock"></i>
                        El enlace de restablecimiento es válido por 60 minutos.
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        Revisa tu carpeta de spam si no encuentras el correo.
                    </li>
                    <li>
                        <i class="fas fa-shield-alt"></i>
                        Por seguridad, no compartas el enlace de restablecimiento.
                    </li>
                    <li>
                        <i class="fas fa-question-circle"></i>
                        ¿Necesitas ayuda adicional? <a href="{{ route('contacto') }}" style="color: var(--gold-primary); text-decoration: none;">Contáctanos</a>
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

            // Manejo del envío del formulario
            const forgotForm = document.getElementById('forgotForm');
            const submitButton = document.getElementById('submitButton');
            const submitButtonText = document.getElementById('submitButtonText');
            
            if (forgotForm && submitButton) {
                forgotForm.addEventListener('submit', function(e) {
                    // Validación básica del email
                    const emailInput = document.getElementById('email');
                    const email = emailInput.value.trim();
                    
                    if (!email || !isValidEmail(email)) {
                        e.preventDefault();
                        showError('Por favor, ingresa un correo electrónico válido.');
                        return;
                    }
                    
                    // Mostrar estado de carga
                    submitButton.classList.add('loading');
                    if (submitButtonText) {
                        submitButtonText.textContent = 'ENVIANDO...';
                    }
                    
                    // El formulario se enviará normalmente
                });
            }

            // Función para validar email
            function isValidEmail(email) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            }

            // Función para mostrar error
            function showError(message) {
                // Buscar o crear contenedor de error
                let errorContainer = document.querySelector('.status-message.error');
                
                if (!errorContainer) {
                    errorContainer = document.createElement('div');
                    errorContainer.className = 'status-message error';
                    errorContainer.innerHTML = `<i class="fas fa-exclamation-circle"></i> ${message}`;
                    
                    // Insertar después del mensaje principal
                    const forgotMessage = document.querySelector('.forgot-message');
                    if (forgotMessage) {
                        forgotMessage.parentNode.insertBefore(errorContainer, forgotMessage.nextSibling);
                    }
                } else {
                    errorContainer.innerHTML = `<i class="fas fa-exclamation-circle"></i> ${message}`;
                }
                
                // Animar la aparición
                errorContainer.style.display = 'flex';
                
                // Eliminar después de 5 segundos
                setTimeout(() => {
                    if (errorContainer && errorContainer.parentNode) {
                        errorContainer.style.opacity = '0';
                        errorContainer.style.transform = 'translateY(-10px)';
                        errorContainer.style.transition = 'all 0.3s ease';
                        
                        setTimeout(() => {
                            if (errorContainer && errorContainer.parentNode) {
                                errorContainer.parentNode.removeChild(errorContainer);
                            }
                        }, 300);
                    }
                }, 5000);
            }

            // Restaurar botón si hay errores del servidor
            @if($errors->any())
                if (submitButton) {
                    submitButton.classList.remove('loading');
                    if (submitButtonText) {
                        submitButtonText.textContent = '{{ __("Enviar Enlace de Restablecimiento") }}';
                    }
                }
            @endif

            // Auto-focus en el campo de email
            const emailInput = document.getElementById('email');
            if (emailInput && !emailInput.value) {
                emailInput.focus();
            }

            // Si hay un mensaje de éxito, hacer scroll suave hacia él
            @if (session('status'))
                setTimeout(() => {
                    const successMessage = document.querySelector('.status-message.success');
                    if (successMessage) {
                        successMessage.scrollIntoView({ 
                            behavior: 'smooth', 
                            block: 'center' 
                        });
                    }
                }, 500);
            @endif
        });
    </script>
</body>
</html>