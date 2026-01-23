<x-guest-layout>
    <!-- Incluir el CSS del login -->
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    @endpush

    <div class="login-body">
        <div class="login-container">
            <!-- Logo y marca -->
            <div class="login-logo">
                <i class="fas fa-gem logo-icon"></i>
                <h1 class="brand-text">Elegance</h1>
                <div class="brand-subtitle">LUXURY STORE</div>
            </div>

            <!-- Tarjeta de login -->
            <div class="login-card">
                <h2 class="login-title">INICIAR SESIÓN</h2>
                <p class="login-subtitle">Accede a tu cuenta personal</p>

                <!-- Mensaje de sesión -->
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="login-form">
                    @csrf

                    <!-- Email -->
                    <div class="input-group">
                        <i class="fas fa-envelope input-icon"></i>
                        <input 
                            type="email" 
                            name="email" 
                            class="form-control" 
                            value="{{ old('email') }}" 
                            placeholder="correo@ejemplo.com"
                            required 
                            autofocus>
                    </div>
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror

                    <!-- Password -->
                    <div class="input-group">
                        <i class="fas fa-lock input-icon"></i>
                        <input 
                            type="password" 
                            name="password" 
                            class="form-control" 
                            placeholder="••••••••"
                            required>
                    </div>
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror

                    <!-- Remember -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                        <label class="form-check-label" for="remember">
                            Recordar esta sesión
                        </label>
                    </div>

                    <!-- Botón de login -->
                    <button type="submit" class="btn-login" id="loginButton">
                        <span id="buttonText">ENTRAR</span>
                    </button>

                    <!-- Links adicionales -->
                    <div class="login-links">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="forgot-link">
                                ¿Olvidaste tu contraseña?
                            </a>
                        @endif
                        
                        @if (Route::has('register'))
                            <div class="register-link">
                                ¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate aquí</a>
                            </div>
                        @endif
                    </div>

                    <!-- Separador opcional para login social -->
                    {{--
                    <div class="login-separator">
                        <span>O continuar con</span>
                    </div>

                    <div class="social-login">
                        <div class="social-buttons">
                            <a href="#" class="btn-social google">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="#" class="btn-social facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="btn-social apple">
                                <i class="fab fa-apple"></i>
                            </a>
                        </div>
                    </div>
                    --}}
                </form>
            </div>
        </div>
    </div>

    <!-- Script para manejar el estado de carga -->
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const loginForm = document.querySelector('.login-form');
                const loginButton = document.getElementById('loginButton');
                const buttonText = document.getElementById('buttonText');
                
                if (loginForm) {
                    loginForm.addEventListener('submit', function() {
                        loginButton.classList.add('loading');
                        buttonText.style.opacity = '0';
                        loginButton.disabled = true;
                        
                        // Simular tiempo de carga (puedes quitarlo en producción)
                        setTimeout(() => {
                            loginButton.classList.remove('loading');
                            buttonText.style.opacity = '1';
                            loginButton.disabled = false;
                        }, 2000);
                    });
                }
            });
        </script>
    @endpush
</x-guest-layout>