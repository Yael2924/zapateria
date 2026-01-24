@extends('layouts.guest')

@section('title', 'Iniciar Sesión - SoleVault')

@section('styles')
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
    }

    .auth-container {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, var(--white-secondary) 0%, var(--white-tertiary) 100%);
        padding: 20px;
    }

    .auth-card {
        background: var(--white-primary);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        width: 100%;
        max-width: 450px;
        overflow: hidden;
    }

    .auth-header {
        background: var(--black-primary);
        padding: 30px;
        text-align: center;
        border-bottom: 3px solid var(--gold-primary);
        position: relative;
    }

    .auth-header::after {
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
        margin-bottom: 10px;
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

    .auth-title {
        font-family: 'Playfair Display', serif;
        font-size: 1.8rem;
        color: var(--white-primary);
        margin: 10px 0 5px 0;
        letter-spacing: 0.5px;
    }

    .auth-subtitle {
        color: var(--gray-extra-light);
        font-size: 0.9rem;
        margin: 0;
        font-weight: 400;
    }

    .auth-body {
        padding: 40px;
    }

    .form-group {
        margin-bottom: 25px;
        position: relative;
    }

    .form-label {
        display: block;
        font-weight: 600;
        color: var(--gray-dark);
        margin-bottom: 8px;
        font-size: 0.95rem;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .form-label i {
        color: var(--gold-primary);
        font-size: 0.9rem;
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

    .password-input-group {
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

    .form-options {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 20px 0 30px;
        flex-wrap: wrap;
        gap: 15px;
    }

    .remember-me {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 0.9rem;
        color: var(--gray-medium);
    }

    .remember-me input[type="checkbox"] {
        width: 16px;
        height: 16px;
        border: 1px solid var(--border-color);
        border-radius: 3px;
        cursor: pointer;
        appearance: none;
        position: relative;
        transition: all 0.3s ease;
    }

    .remember-me input[type="checkbox"]:checked {
        background-color: var(--gold-primary);
        border-color: var(--gold-primary);
    }

    .remember-me input[type="checkbox"]:checked::after {
        content: '✓';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: var(--white-primary);
        font-size: 0.8rem;
        font-weight: bold;
    }

    .remember-me label {
        cursor: pointer;
        user-select: none;
    }

    .forgot-password {
        color: var(--gray-medium);
        text-decoration: none;
        font-size: 0.9rem;
        font-weight: 500;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .forgot-password:hover {
        color: var(--gold-primary);
    }

    .forgot-password i {
        font-size: 0.85rem;
    }

    .btn-auth {
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
    }

    .btn-auth:hover {
        background: var(--gold-primary);
        border-color: var(--gold-primary);
        color: var(--white-primary);
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(212, 175, 55, 0.2);
    }

    .btn-auth:active {
        transform: translateY(0);
    }

    .auth-divider {
        display: flex;
        align-items: center;
        margin: 30px 0;
        color: var(--gray-light);
        font-size: 0.9rem;
    }

    .auth-divider::before,
    .auth-divider::after {
        content: '';
        flex: 1;
        height: 1px;
        background: var(--border-color);
    }

    .auth-divider span {
        padding: 0 15px;
        background: var(--white-primary);
        color: var(--gray-medium);
    }

    .btn-register {
        background: transparent;
        color: var(--black-primary);
        border: 2px solid var(--border-color);
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
        text-decoration: none;
        text-align: center;
    }

    .btn-register:hover {
        border-color: var(--gold-primary);
        color: var(--gold-primary);
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(212, 175, 55, 0.1);
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
    .btn-auth.loading {
        pointer-events: none;
        position: relative;
        color: transparent;
    }

    .btn-auth.loading::after {
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

    /* Mensaje de estado */
    .status-message {
        padding: 15px;
        margin-bottom: 25px;
        border-radius: 8px;
        background-color: rgba(212, 175, 55, 0.05);
        color: var(--gold-primary);
        text-align: center;
        font-size: 0.9rem;
        border: 1px solid rgba(212, 175, 55, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .status-message.error {
        background-color: rgba(220, 53, 69, 0.05);
        color: var(--error-color);
        border-color: rgba(220, 53, 69, 0.1);
    }

    .status-message.success {
        background-color: rgba(40, 167, 69, 0.05);
        color: var(--success-color);
        border-color: rgba(40, 167, 69, 0.1);
    }

    /* Responsive */
    @media (max-width: 576px) {
        .auth-container {
            padding: 15px;
        }

        .auth-body {
            padding: 30px 25px;
        }

        .auth-header {
            padding: 25px 20px;
        }

        .auth-title {
            font-size: 1.5rem;
        }

        .auth-logo-text {
            font-size: 1.5rem;
        }

        .form-options {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }

        .forgot-password {
            width: 100%;
            justify-content: center;
        }

        .btn-auth,
        .btn-register {
            padding: 12px 24px;
        }
    }

    @media (max-width: 400px) {
        .auth-body {
            padding: 25px 20px;
        }

        .auth-header {
            padding: 20px 15px;
        }
    }
</style>
@endsection

@section('content')
<div class="auth-container">
    <div class="auth-card fade-in">
        <!-- Encabezado -->
        <div class="auth-header">
            <a href="{{ route('inicio') }}" class="auth-logo">
                <i class="fas fa-vault auth-logo-icon"></i>
                <span class="auth-logo-text">SoleVault</span>
            </a>
            <h1 class="auth-title">ACCESO EXCLUSIVO</h1>
            <p class="auth-subtitle">Bienvenido de vuelta a la comunidad</p>
        </div>

        <!-- Mensaje de estado -->
        @if(session('status'))
            <div class="status-message success">
                <i class="fas fa-check-circle"></i>
                {{ session('status') }}
            </div>
        @endif

        @if($errors->any())
            @foreach($errors->all() as $error)
                @if(!in_array($error, $errors->get('email') ?? []) && !in_array($error, $errors->get('password') ?? []))
                    <div class="status-message error">
                        <i class="fas fa-exclamation-circle"></i>
                        {{ $error }}
                    </div>
                @endif
            @endforeach
        @endif

        <!-- Formulario de login -->
        <div class="auth-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="form-group">
                    <label for="email" class="form-label">
                        <i class="fas fa-envelope"></i> {{ __('Correo Electrónico') }}
                    </label>
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
                    @error('email')
                        <div class="error-message">
                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Contraseña -->
                <div class="form-group">
                    <label for="password" class="form-label">
                        <i class="fas fa-lock"></i> {{ __('Contraseña') }}
                    </label>
                    <div class="password-input-group">
                        <input 
                            id="password" 
                            type="password" 
                            name="password" 
                            class="form-input form-input-with-icon @error('password') form-input-error @enderror"
                            required 
                            autocomplete="current-password"
                            placeholder="Tu contraseña"
                        >
                        <button type="button" class="toggle-password" id="togglePassword">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    @error('password')
                        <div class="error-message">
                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Recordar y recuperar -->
                <div class="form-options">
                    <div class="remember-me">
                        <input id="remember_me" type="checkbox" name="remember">
                        <label for="remember_me">Recordar sesión</label>
                    </div>
                    <a href="{{ route('password.request') }}" class="forgot-password">
                        <i class="fas fa-key"></i> ¿Olvidaste tu contraseña?
                    </a>
                </div>

                <!-- Botón de inicio de sesión -->
                <button type="submit" class="btn-auth" id="loginButton">
                    <i class="fas fa-sign-in-alt"></i> {{ __('Iniciar Sesión') }}
                </button>
            </form>

            <!-- Divider -->
            <div class="auth-divider">
                <span>¿Nuevo en SoleVault?</span>
            </div>

            <!-- Botón de registro -->
            <a href="{{ route('register') }}" class="btn-register">
                <i class="fas fa-user-plus"></i> Crear Cuenta Nueva
            </a>

            <!-- Aviso de seguridad -->
            {{-- <div class="security-notice">
                <i class="fas fa-shield-alt"></i>
                Tus datos están protegidos con encriptación de última generación
            </div> --}}
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mostrar/ocultar contraseña
        const togglePassword = document.getElementById('togglePassword');
        if (togglePassword) {
            togglePassword.addEventListener('click', function() {
                const passwordInput = document.getElementById('password');
                const icon = this.querySelector('i');
                
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            });
        }

        // Manejo del envío del formulario
        const loginForm = document.querySelector('form');
        const loginButton = document.getElementById('loginButton');
        
        if (loginForm && loginButton) {
            loginForm.addEventListener('submit', function() {
                loginButton.classList.add('loading');
                loginButton.disabled = true;
            });
        }

        // Restaurar botón si hay errores
        @if($errors->any())
            if (loginButton) {
                loginButton.classList.remove('loading');
                loginButton.disabled = false;
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
    });
</script>
@endsection