<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña - SoleVault</title>
    
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

        .reset-container {
            width: 100%;
            max-width: 480px;
            background: var(--white-primary);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            position: relative;
        }

        .reset-header {
            background: var(--black-primary);
            padding: 35px 30px 25px;
            text-align: center;
            position: relative;
            border-bottom: 3px solid var(--gold-primary);
        }

        .reset-header::after {
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

        .reset-body {
            padding: 40px;
        }

        .info-message {
            padding: 16px;
            margin-bottom: 25px;
            border-radius: 8px;
            background-color: rgba(23, 162, 184, 0.05);
            color: var(--info-color);
            text-align: center;
            font-size: 0.9rem;
            border: 1px solid rgba(23, 162, 184, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .info-message i {
            font-size: 1.1rem;
        }

        .reset-form {
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

        .password-container {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--gray-light);
            cursor: pointer;
            padding: 4px;
            transition: all 0.3s ease;
            z-index: 2;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 4px;
        }

        .toggle-password:hover {
            color: var(--gold-primary);
            background-color: var(--white-tertiary);
        }

        .form-input-with-icon {
            padding-right: 50px;
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

        .password-strength {
            margin-top: 15px;
        }

        .strength-meter {
            height: 4px;
            background: var(--border-color);
            border-radius: 2px;
            overflow: hidden;
            margin-bottom: 6px;
        }

        .strength-meter-fill {
            height: 100%;
            width: 0%;
            background: var(--error-color);
            transition: all 0.3s ease;
        }

        .strength-meter-fill.weak {
            width: 33%;
            background: var(--error-color);
        }

        .strength-meter-fill.medium {
            width: 66%;
            background: var(--gold-secondary);
        }

        .strength-meter-fill.strong {
            width: 100%;
            background: var(--success-color);
        }

        .strength-text {
            font-size: 0.8rem;
            color: var(--gray-light);
            text-align: right;
        }

        .password-requirements {
            margin-top: 10px;
            padding: 15px;
            background: var(--white-tertiary);
            border-radius: 8px;
            border: 1px solid var(--border-color);
        }

        .requirements-title {
            font-size: 0.85rem;
            color: var(--gray-dark);
            font-weight: 600;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .requirements-title i {
            color: var(--gold-primary);
        }

        .requirements-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .requirement-item {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 8px;
            font-size: 0.8rem;
            color: var(--gray-medium);
        }

        .requirement-item.valid {
            color: var(--success-color);
        }

        .requirement-item.valid i {
            color: var(--success-color);
        }

        .requirement-item i {
            font-size: 0.8rem;
            width: 14px;
            color: var(--gray-light);
        }

        .btn-reset {
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

        .btn-reset:hover {
            background: var(--gold-primary);
            border-color: var(--gold-primary);
            color: var(--white-primary);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(212, 175, 55, 0.2);
        }

        .btn-reset:active {
            transform: translateY(0);
        }

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

        .security-notice {
            margin-top: 25px;
            padding: 15px;
            background: var(--white-tertiary);
            border-radius: 8px;
            text-align: center;
            font-size: 0.85rem;
            color: var(--gray-medium);
            border: 1px solid var(--border-color);
        }

        .security-notice i {
            color: var(--gold-primary);
            margin-right: 6px;
        }

        /* Estado de carga */
        .btn-reset.loading {
            pointer-events: none;
            position: relative;
            color: transparent;
        }

        .btn-reset.loading::after {
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

        /* Mensajes de estado */
        .status-message {
            padding: 15px;
            margin-bottom: 25px;
            border-radius: 8px;
            text-align: center;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .status-message.error {
            background-color: rgba(220, 53, 69, 0.05);
            color: var(--error-color);
            border: 1px solid rgba(220, 53, 69, 0.1);
        }

        .status-message.success {
            background-color: rgba(40, 167, 69, 0.05);
            color: var(--success-color);
            border: 1px solid rgba(40, 167, 69, 0.1);
        }

        /* Responsive */
        @media (max-width: 576px) {
            .reset-container {
                border-radius: 8px;
            }

            .reset-body {
                padding: 30px 25px;
            }

            .reset-header {
                padding: 25px 20px;
            }

            .brand-title {
                font-size: 1.5rem;
            }

            .auth-logo-text {
                font-size: 1.5rem;
            }

            .btn-reset {
                padding: 12px 24px;
            }
        }

        @media (max-width: 400px) {
            .reset-body {
                padding: 25px 20px;
            }

            .reset-header {
                padding: 20px 15px;
            }

            .reset-form {
                gap: 18px;
            }
        }

        /* Mejora de accesibilidad */
        .btn-reset:focus,
        .toggle-password:focus,
        .back-to-login:focus,
        .form-input:focus {
            outline: 2px solid var(--gold-primary);
            outline-offset: 2px;
        }
    </style>
</head>
<body>
    <div class="reset-container fade-in">
        <!-- Encabezado -->
        <div class="reset-header">
            <a href="{{ route('inicio') }}" class="auth-logo">
                <i class="fas fa-vault auth-logo-icon"></i>
                <span class="auth-logo-text">SoleVault</span>
            </a>
            <h1 class="brand-title">NUEVA CONTRASEÑA</h1>
            <p class="form-title">Crea una nueva contraseña para tu cuenta</p>
        </div>

        <!-- Mensajes de estado -->
        @if(session('status'))
            <div class="status-message success">
                <i class="fas fa-check-circle"></i>
                {{ session('status') }}
            </div>
        @endif

        @if($errors->any())
            @foreach($errors->all() as $error)
                @if(!in_array($error, $errors->get('email') ?? []) && 
                    !in_array($error, $errors->get('password') ?? []) && 
                    !in_array($error, $errors->get('password_confirmation') ?? []))
                    <div class="status-message error">
                        <i class="fas fa-exclamation-circle"></i>
                        {{ $error }}
                    </div>
                @endif
            @endforeach
        @endif

        <!-- Formulario de restablecimiento -->
        <div class="reset-body">
            <!-- Mensaje informativo -->
            <div class="info-message">
                <i class="fas fa-info-circle"></i>
                Ingresa tu correo electrónico y establece una nueva contraseña segura.
            </div>

            <form method="POST" action="{{ route('password.store') }}" class="reset-form" id="resetForm">
                @csrf

                <!-- Token de restablecimiento (hidden) -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

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
                            value="{{ old('email', $request->email) }}" 
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

                <!-- Password -->
                <div class="form-group">
                    <label for="password" class="form-label">
                        <i class="fas fa-lock"></i> {{ __('Nueva Contraseña') }}
                    </label>
                    <div class="input-container">
                        <input 
                            id="password" 
                            type="password" 
                            name="password" 
                            class="form-input form-input-with-icon @error('password') form-input-error @enderror"
                            required 
                            autocomplete="new-password"
                            placeholder="Crea una nueva contraseña segura"
                        >
                        <button type="button" class="toggle-password" id="togglePassword">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    
                    <!-- Indicador de fortaleza -->
                    <div class="password-strength">
                        <div class="strength-meter">
                            <div id="strength-meter-fill" class="strength-meter-fill"></div>
                        </div>
                        <div class="strength-text" id="strength-text">Seguridad: Débil</div>
                    </div>
                    
                    <!-- Requisitos de contraseña -->
                    <div class="password-requirements">
                        <div class="requirements-title">
                            <i class="fas fa-shield-alt"></i> Requisitos de seguridad
                        </div>
                        <ul class="requirements-list">
                            <li id="req-length" class="requirement-item">
                                <i class="fas fa-times-circle"></i> Mínimo 8 caracteres
                            </li>
                            <li id="req-uppercase" class="requirement-item">
                                <i class="fas fa-times-circle"></i> 1 letra mayúscula
                            </li>
                            <li id="req-lowercase" class="requirement-item">
                                <i class="fas fa-times-circle"></i> 1 letra minúscula
                            </li>
                            <li id="req-number" class="requirement-item">
                                <i class="fas fa-times-circle"></i> 1 número
                            </li>
                            <li id="req-special" class="requirement-item">
                                <i class="fas fa-times-circle"></i> 1 carácter especial
                            </li>
                        </ul>
                    </div>
                    
                    @error('password')
                        <div class="error-message">
                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <label for="password_confirmation" class="form-label">
                        <i class="fas fa-lock"></i> {{ __('Confirmar Contraseña') }}
                    </label>
                    <div class="input-container">
                        <input 
                            id="password_confirmation" 
                            type="password" 
                            name="password_confirmation" 
                            class="form-input form-input-with-icon"
                            required 
                            autocomplete="new-password"
                            placeholder="Repite tu nueva contraseña"
                        >
                        <button type="button" class="toggle-password" id="toggleConfirmPassword">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    <div class="error-message" id="passwordMatchError"></div>
                </div>

                <!-- Botón de restablecimiento -->
                <button type="submit" class="btn-reset" id="resetSubmitButton">
                    <i class="fas fa-key"></i>
                    <span id="resetSubmitText">{{ __('Restablecer Contraseña') }}</span>
                </button>

                <!-- Enlace para regresar al login -->
                <a href="{{ route('login') }}" class="back-to-login">
                    <i class="fas fa-arrow-left"></i>
                    Volver al inicio de sesión
                </a>
            </form>

            <!-- Aviso de seguridad -->
            <div class="security-notice">
                <i class="fas fa-shield-alt"></i>
                Tu nueva contraseña será encriptada de forma segura
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mostrar/ocultar contraseñas
            const togglePassword = document.getElementById('togglePassword');
            const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
            const passwordInput = document.getElementById('password');
            const confirmPasswordInput = document.getElementById('password_confirmation');
            const strengthMeter = document.getElementById('strength-meter-fill');
            const strengthText = document.getElementById('strength-text');
            const passwordMatchError = document.getElementById('passwordMatchError');

            // Toggle contraseña principal
            if (togglePassword) {
                togglePassword.addEventListener('click', function() {
                    const type = passwordInput.type === 'password' ? 'text' : 'password';
                    passwordInput.type = type;
                    const icon = this.querySelector('i');
                    icon.className = type === 'password' ? 'fas fa-eye' : 'fas fa-eye-slash';
                });
            }

            // Toggle confirmación de contraseña
            if (toggleConfirmPassword) {
                toggleConfirmPassword.addEventListener('click', function() {
                    const type = confirmPasswordInput.type === 'password' ? 'text' : 'password';
                    confirmPasswordInput.type = type;
                    const icon = this.querySelector('i');
                    icon.className = type === 'password' ? 'fas fa-eye' : 'fas fa-eye-slash';
                });
            }

            // Validación de contraseña en tiempo real
            function validatePassword() {
                const password = passwordInput.value;
                let strength = 0;
                
                // Validar longitud
                const lengthValid = password.length >= 8;
                updateRequirement('req-length', lengthValid);
                if (lengthValid) strength++;
                
                // Validar mayúscula
                const uppercaseValid = /[A-Z]/.test(password);
                updateRequirement('req-uppercase', uppercaseValid);
                if (uppercaseValid) strength++;
                
                // Validar minúscula
                const lowercaseValid = /[a-z]/.test(password);
                updateRequirement('req-lowercase', lowercaseValid);
                if (lowercaseValid) strength++;
                
                // Validar número
                const numberValid = /[0-9]/.test(password);
                updateRequirement('req-number', numberValid);
                if (numberValid) strength++;
                
                // Validar carácter especial
                const specialValid = /[@$!%*?&]/.test(password);
                updateRequirement('req-special', specialValid);
                if (specialValid) strength++;
                
                // Actualizar medidor de fortaleza
                updateStrengthMeter(strength);
                
                // Validar coincidencia de contraseñas
                validatePasswordMatch();
            }

            function updateRequirement(elementId, isValid) {
                const element = document.getElementById(elementId);
                if (element) {
                    const icon = element.querySelector('i');
                    element.classList.toggle('valid', isValid);
                    icon.className = isValid ? 'fas fa-check-circle' : 'fas fa-times-circle';
                }
            }

            function updateStrengthMeter(strength) {
                if (!strengthMeter || !strengthText) return;
                
                strengthMeter.className = 'strength-meter-fill';
                
                if (strength <= 2) {
                    strengthMeter.classList.add('weak');
                    strengthText.textContent = 'Seguridad: Débil';
                    strengthText.style.color = 'var(--error-color)';
                } else if (strength <= 4) {
                    strengthMeter.classList.add('medium');
                    strengthText.textContent = 'Seguridad: Media';
                    strengthText.style.color = 'var(--gold-secondary)';
                } else {
                    strengthMeter.classList.add('strong');
                    strengthText.textContent = 'Seguridad: Fuerte';
                    strengthText.style.color = 'var(--success-color)';
                }
            }

            function validatePasswordMatch() {
                if (!confirmPasswordInput || !passwordMatchError) return;
                
                const password = passwordInput.value;
                const confirmPassword = confirmPasswordInput.value;
                
                if (confirmPassword && password !== confirmPassword) {
                    passwordMatchError.innerHTML = '<i class="fas fa-exclamation-circle"></i> Las contraseñas no coinciden';
                } else {
                    passwordMatchError.innerHTML = '';
                }
            }

            // Event listeners para validación en tiempo real
            if (passwordInput) {
                passwordInput.addEventListener('input', validatePassword);
            }
            
            if (confirmPasswordInput) {
                confirmPasswordInput.addEventListener('input', validatePasswordMatch);
            }

            // Validación al enviar el formulario
            const resetForm = document.getElementById('resetForm');
            const resetButton = document.getElementById('resetSubmitButton');
            const resetButtonText = document.getElementById('resetSubmitText');
            
            if (resetForm) {
                resetForm.addEventListener('submit', function(e) {
                    // Validar contraseña antes de enviar
                    const password = passwordInput.value;
                    const confirmPassword = confirmPasswordInput.value;
                    
                    const lengthValid = password.length >= 8;
                    const uppercaseValid = /[A-Z]/.test(password);
                    const lowercaseValid = /[a-z]/.test(password);
                    const numberValid = /[0-9]/.test(password);
                    const specialValid = /[@$!%*?&]/.test(password);
                    const passwordsMatch = password === confirmPassword;
                    
                    if (!(lengthValid && uppercaseValid && lowercaseValid && numberValid && specialValid && passwordsMatch)) {
                        e.preventDefault();
                        alert('Por favor, completa todos los requisitos de contraseña y asegúrate de que las contraseñas coincidan.');
                        return;
                    }
                    
                    // Mostrar estado de carga
                    if (resetButton && resetButtonText) {
                        resetButton.classList.add('loading');
                        resetButtonText.textContent = 'RESTABLECIENDO...';
                    }
                });
            }

            // Restaurar botón si hay errores
            @if($errors->any())
                if (resetButton) {
                    resetButton.classList.remove('loading');
                    if (resetButtonText) {
                        resetButtonText.textContent = '{{ __("Restablecer Contraseña") }}';
                    }
                }
            @endif

            // Auto-focus en el campo de email
            const emailInput = document.getElementById('email');
            if (emailInput && !emailInput.value) {
                emailInput.focus();
            }

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

            // Inicializar validación si ya hay contraseña
            if (passwordInput && passwordInput.value) {
                validatePassword();
            }
        });
    </script>
</body>
</html>