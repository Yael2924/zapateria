<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos - SoleVault</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* Variables de color - Nueva paleta elegante */
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
            --success-color: #28a745;
            --error-color: #dc3545;
            --whatsapp-green: #25D366;
        }

        /* Estilos generales - Corregidos */
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--white-primary);
            color: var(--black-primary);
            padding-top: 80px;
            line-height: 1.6;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
            color: var(--black-primary);
            font-weight: 600;
        }

        p {
            color: var(--gray-dark);
        }

        /* Navbar - Mejorado */
        .navbar {
            background-color: var(--white-primary) !important;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.08);
            padding: 1rem 0;
            border-bottom: 1px solid var(--border-color);
        }

        .logo-icon {
            font-size: 2.2rem;
            color: var(--gold-primary);
        }

        .brand-text {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--black-primary);
            letter-spacing: -0.5px;
        }

        .nav-link {
            color: var(--gray-dark) !important;
            font-weight: 500;
            margin: 0 8px;
            transition: all 0.3s ease;
            position: relative;
            padding: 8px 16px !important;
            border-radius: 4px;
        }

        .nav-link:hover {
            color: var(--black-primary) !important;
            background-color: var(--white-tertiary);
        }

        .nav-item.active .nav-link {
            color: var(--gold-primary) !important;
            font-weight: 600;
        }

        /* Hero Section de Contacto */
        .contact-hero {
            background: linear-gradient(135deg, var(--white-primary) 0%, var(--white-secondary) 100%);
            padding: 100px 0;
            position: relative;
            overflow: hidden;
            border-bottom: 1px solid var(--border-color);
        }

        .contact-title {
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--black-primary);
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .contact-title span {
            color: var(--gold-primary);
        }

        .contact-subtitle {
            font-size: 1.2rem;
            color: var(--gray-medium);
            margin-bottom: 30px;
            max-width: 600px;
            line-height: 1.6;
        }

        /* Sección de Contacto Principal */
        .contact-main-section {
            background: var(--white-primary);
            padding: 80px 0;
        }

        .section-title {
            font-size: 2.5rem;
            color: var(--black-primary);
            position: relative;
            display: inline-block;
            margin-bottom: 50px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: var(--gold-primary);
        }

        /* Formulario de Contacto */
        .contact-form-container {
            background: var(--white-primary);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 50px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }

        .contact-form-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--gold-primary), var(--gold-secondary));
        }

        .form-label {
            font-weight: 600;
            color: var(--black-primary);
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .form-label .required {
            color: var(--error-color);
        }

        .form-control, .form-select {
            border: 2px solid var(--border-color);
            border-radius: 8px;
            padding: 12px 16px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background-color: var(--white-secondary);
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--gold-primary);
            box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.15);
            background-color: var(--white-primary);
        }

        .form-control.is-valid {
            border-color: var(--success-color);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
        }

        .form-control.is-invalid {
            border-color: var(--error-color);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
        }

        .invalid-feedback, .valid-feedback {
            font-size: 0.85rem;
            margin-top: 4px;
        }

        .form-text {
            font-size: 0.85rem;
            color: var(--gray-light);
            margin-top: 5px;
        }

        .character-count {
            font-size: 0.85rem;
            color: var(--gray-light);
            text-align: right;
            margin-top: 5px;
        }

        .character-count.warning {
            color: #ff9800;
        }

        .character-count.error {
            color: var(--error-color);
        }

        /* Checkbox personalizado */
        .form-check {
            padding-left: 2.5rem;
        }

        .form-check-input {
            width: 1.2rem;
            height: 1.2rem;
            margin-left: -2.5rem;
            border: 2px solid var(--border-color);
            border-radius: 4px;
            cursor: pointer;
        }

        .form-check-input:checked {
            background-color: var(--gold-primary);
            border-color: var(--gold-primary);
        }

        .form-check-input:focus {
            box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.25);
        }

        .form-check-label {
            color: var(--gray-dark);
            font-size: 0.95rem;
            cursor: pointer;
            line-height: 1.5;
        }

        .form-check-label a {
            color: var(--gold-primary);
            text-decoration: none;
            font-weight: 600;
        }

        .form-check-label a:hover {
            text-decoration: underline;
        }

        /* Botón de enviar */
        .btn-submit {
            background: linear-gradient(135deg, var(--black-primary), var(--black-light));
            color: var(--white-primary);
            border: none;
            border-radius: 8px;
            padding: 16px 40px;
            font-weight: 600;
            font-size: 1.1rem;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
        }

        .btn-submit:hover {
            background: linear-gradient(135deg, var(--gold-primary), var(--gold-secondary));
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(212, 175, 55, 0.3);
        }

        .btn-submit:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none !important;
        }

        .btn-submit.loading {
            position: relative;
            color: transparent;
        }

        .btn-submit.loading::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 20px;
            height: 20px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-top-color: var(--white-primary);
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
        }

        @keyframes spin {
            to {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }

        /* Footer - Rediseñado */
        .footer {
            background: var(--black-primary);
            color: var(--white-primary);
            padding: 60px 0 30px;
            margin-top: 80px;
        }

        .footer h5 {
            color: var(--white-primary);
            margin-bottom: 25px;
            font-size: 1.1rem;
            font-weight: 600;
        }

        .footer p {
            color: var(--gray-extra-light);
            line-height: 1.6;
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: var(--gray-extra-light);
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .footer-links a:hover {
            color: var(--gold-primary);
            padding-left: 5px;
        }

        .footer-bottom {
            border-top: 1px solid var(--gray-dark);
            padding-top: 30px;
            margin-top: 40px;
            text-align: center;
            color: var(--gray-light);
            font-size: 0.9rem;
        }

        /* Botón elegante */
        .btn-luxury {
            background: var(--black-primary);
            color: var(--white-primary);
            border: 2px solid var(--black-primary);
            padding: 14px 32px;
            font-weight: 600;
            border-radius: 4px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .btn-luxury:hover {
            background: var(--gold-primary);
            border-color: var(--gold-primary);
            color: var(--white-primary);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(212, 175, 55, 0.2);
        }

        /* Responsive - Mejorado */
        @media (max-width: 992px) {
            .contact-title {
                font-size: 2.8rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .contact-form-container {
                padding: 40px 30px;
            }
        }

        @media (max-width: 768px) {
            body {
                padding-top: 70px;
            }
            
            .navbar-collapse {
                background: var(--white-primary);
                padding: 20px;
                border-radius: 8px;
                margin-top: 10px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                border: 1px solid var(--border-color);
            }
            
            .contact-title {
                font-size: 2.2rem;
            }
            
            .contact-subtitle {
                font-size: 1rem;
            }
            
            .contact-form-container {
                padding: 30px 20px;
            }
        }

        /* Animaciones mejoradas */
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

        /* Scroll suave */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <!-- Logo y Nombre -->
            <a class="navbar-brand d-flex align-items-center" href="{{ route('inicio') }}">
                <div class="logo-icon me-2">
                    <i class="fas fa-vault"></i>
                </div>
                <span class="brand-text">SoleVault</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/ayuda">Ayuda</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/contacto">Contáctanos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="contact-title fade-in-up">Contácta<span>nos</span></h1>
                </div>
            </div>
            <p class="text-center" style="animation-delay: 0.2s;">
                Estamos aquí para ayudarte. Completa el formulario y nos pondremos en contacto 
                contigo a la brevedad. Tu satisfacción es nuestra prioridad.
            </p>
        </div>
    </section>

    <!-- Formulario de Contacto -->
    <section class="contact-main-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title text-center fade-in-up">Envíanos un Mensaje</h2>
                    
                    <!-- Alertas de éxito/error -->
                    <div id="formAlert" class="alert d-none"></div>
                    
                    <div class="contact-form-container fade-in-up">
                        <form id="contactForm" novalidate>
                            @csrf
                            
                            <div class="row">
                                <!-- Nombre -->
                                <div class="col-md-6 mb-4">
                                    <label for="name" class="form-label">
                                        Nombre Completo <span class="required">*</span>
                                    </label>
                                    <input type="text" 
                                           class="form-control" 
                                           id="name" 
                                           name="name"
                                           placeholder="Ingresa tu nombre completo"
                                           maxlength="40"
                                           required>
                                    <div class="form-text">
                                        Solo letras y espacios. Máximo 40 caracteres.
                                    </div>
                                    <div class="invalid-feedback" id="nameError">
                                        Por favor ingresa tu nombre completo (solo letras y espacios).
                                    </div>
                                </div>
                                
                                <!-- Correo Electrónico -->
                                <div class="col-md-6 mb-4">
                                    <label for="email" class="form-label">
                                        Correo Electrónico <span class="required">*</span>
                                    </label>
                                    <input type="email" 
                                           class="form-control" 
                                           id="email" 
                                           name="email"
                                           placeholder="ejemplo@correo.com"
                                           required>
                                    <div class="form-text">
                                        Debe incluir un @ y un dominio válido (ej: usuario@dominio.com).
                                    </div>
                                    <div class="invalid-feedback" id="emailError">
                                        Por favor ingresa un correo electrónico válido (debe incluir @ y dominio).
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <!-- Teléfono -->
                                <div class="col-md-6 mb-4">
                                    <label for="phone" class="form-label">
                                        Teléfono <span class="required">*</span>
                                    </label>
                                    <input type="tel" 
                                           class="form-control" 
                                           id="phone" 
                                           name="phone"
                                           placeholder="10 dígitos (ej. 5512345678)"
                                           maxlength="10"
                                           required>
                                    <div class="form-text">
                                        Ingresa 10 dígitos sin espacios ni guiones (solo números).
                                    </div>
                                    <div class="invalid-feedback" id="phoneError">
                                        Por favor ingresa un número de teléfono válido (exactamente 10 dígitos).
                                    </div>
                                </div>
                                
                                <!-- Asunto -->
                                <div class="col-md-6 mb-4">
                                    <label for="subject" class="form-label">
                                        Asunto <span class="required">*</span>
                                    </label>
                                    <select class="form-select" id="subject" name="subject" required>
                                        <option value="" selected disabled>Selecciona un asunto</option>
                                        <option value="consulta_general">Consulta General</option>
                                        <option value="soporte_tecnico">Soporte Técnico</option>
                                        <option value="informacion_productos">Información de Productos</option>
                                        <option value="estado_pedido">Estado de Pedido</option>
                                        <option value="devoluciones">Devoluciones y Cambios</option>
                                        <option value="quejas_sugerencias">Quejas o Sugerencias</option>
                                        <option value="trabajo">Oportunidades de Trabajo</option>
                                        <option value="otros">Otros</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Por favor selecciona un asunto de la lista.
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Mensaje -->
                            <div class="mb-4">
                                <label for="message" class="form-label">
                                    Mensaje <span class="required">*</span>
                                </label>
                                <textarea class="form-control" 
                                          id="message" 
                                          name="message" 
                                          rows="5"
                                          placeholder="Escribe tu mensaje aquí..."
                                          maxlength="500"
                                          required></textarea>
                                <div class="character-count" id="messageCount">
                                    <span id="currentCount">0</span>/500 caracteres
                                </div>
                                <div class="invalid-feedback" id="messageError">
                                    Por favor escribe un mensaje (mínimo 10 caracteres, máximo 500).
                                </div>
                            </div>
                            
                            <!-- Método de respuesta preferido -->
                            <div class="mb-4">
                                <label class="form-label">¿Cómo prefieres que te contactemos?</label>
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="contact_method" id="method_email" value="email" checked>
                                            <label class="form-check-label" for="method_email">
                                                Correo Electrónico
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="contact_method" id="method_phone" value="phone">
                                            <label class="form-check-label" for="method_phone">
                                                Llamada Telefónica
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="contact_method" id="method_whatsapp" value="whatsapp">
                                            <label class="form-check-label" for="method_whatsapp">
                                                WhatsApp
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Checkbox de términos -->
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                                    <label class="form-check-label" for="terms">
                                        Acepto que mis datos sean procesados de acuerdo con la 
                                        <a href="/privacidad" target="_blank">Política de Privacidad</a>.
                                    </label>
                                    <div class="invalid-feedback">
                                        Debes aceptar los términos y condiciones para continuar.
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Botón de enviar -->
                            <div class="text-center">
                                <button type="submit" class="btn-submit" id="submitButton">
                                    <i class="fas fa-paper-plane me-2"></i>
                                    <span id="buttonText">Enviar Mensaje</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <div class="row justify-content-center">
                
                <div class="col-lg-4 mb-4">
                    <h5>SoleVault</h5>
                    <p>Tu destino para productos de lujo y elegancia. Calidad, estilo y exclusividad en cada compra.</p>
                </div>

                <div class="col-lg-4 mb-4">
                    <h5>Legal</h5>
                    <ul class="footer-links list-unstyled">
                        <li><a href="/privacidad">Política de Privacidad</a></li>
                        <li><a href="/terminos">Términos y Condiciones</a></li>
                        <li><a href="/cookies">Política de Cookies</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 mb-4">
                    <h5>Contacto</h5>
                    <p>Email: info@elegancestore.com</p>
                    <p>Teléfono: +52 (919) 114-1608</p>
                </div>

            </div>

            <div class="footer-bottom text-center">
                <p>&copy; 2024 SoleVault. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('contactForm');
            const submitButton = document.getElementById('submitButton');
            const buttonText = document.getElementById('buttonText');
            const formAlert = document.getElementById('formAlert');
            const messageTextarea = document.getElementById('message');
            const messageCount = document.getElementById('messageCount');
            const currentCount = document.getElementById('currentCount');
            const phoneInput = document.getElementById('phone');
            const nameInput = document.getElementById('name');
            const emailInput = document.getElementById('email');

            // Contador de caracteres para el mensaje
            messageTextarea.addEventListener('input', function() {
                const length = this.value.length;
                currentCount.textContent = length;
                
                // Cambiar color según la cantidad de caracteres
                if (length >= 450) {
                    messageCount.classList.add('error');
                    messageCount.classList.remove('warning');
                } else if (length >= 400) {
                    messageCount.classList.add('warning');
                    messageCount.classList.remove('error');
                } else {
                    messageCount.classList.remove('warning', 'error');
                }
            });

            // Validación de nombre (solo letras y espacios, máximo 40 caracteres)
            nameInput.addEventListener('input', function() {
                // Permitir solo letras, espacios y acentos
                this.value = this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚñÑ\s]/g, '');
                
                // Limitar a 40 caracteres
                if (this.value.length > 40) {
                    this.value = this.value.slice(0, 40);
                }
                
                // Validar en tiempo real
                validateName();
            });

            // Validación de teléfono (solo números, 10 dígitos)
            phoneInput.addEventListener('input', function() {
                // Remover cualquier carácter que no sea número
                this.value = this.value.replace(/\D/g, '');
                
                // Limitar a 10 dígitos
                if (this.value.length > 10) {
                    this.value = this.value.slice(0, 10);
                }
                
                // Validar en tiempo real
                validatePhone();
            });

            // Validación de email
            emailInput.addEventListener('input', validateEmail);
            emailInput.addEventListener('blur', validateEmail);

            // Validación personalizada para nombre
            function validateName() {
                const name = nameInput.value.trim();
                const nameRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{3,40}$/;
                
                if (!nameRegex.test(name)) {
                    nameInput.classList.add('is-invalid');
                    nameInput.classList.remove('is-valid');
                    return false;
                } else {
                    nameInput.classList.remove('is-invalid');
                    nameInput.classList.add('is-valid');
                    return true;
                }
            }

            // Validación personalizada para teléfono
            function validatePhone() {
                const phone = phoneInput.value.trim();
                const phoneRegex = /^\d{10}$/;
                
                if (!phoneRegex.test(phone)) {
                    phoneInput.classList.add('is-invalid');
                    phoneInput.classList.remove('is-valid');
                    return false;
                } else {
                    phoneInput.classList.remove('is-invalid');
                    phoneInput.classList.add('is-valid');
                    return true;
                }
            }

            // Validación personalizada para email
            function validateEmail() {
                const email = emailInput.value.trim();
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                
                if (!emailRegex.test(email)) {
                    emailInput.classList.add('is-invalid');
                    emailInput.classList.remove('is-valid');
                    return false;
                } else {
                    emailInput.classList.remove('is-invalid');
                    emailInput.classList.add('is-valid');
                    return true;
                }
            }

            // Validación personalizada para mensaje
            function validateMessage() {
                const message = messageTextarea.value.trim();
                
                if (message.length < 10 || message.length > 500) {
                    messageTextarea.classList.add('is-invalid');
                    messageTextarea.classList.remove('is-valid');
                    return false;
                } else {
                    messageTextarea.classList.remove('is-invalid');
                    messageTextarea.classList.add('is-valid');
                    return true;
                }
            }

            // Validación de formulario completa
            function validateForm() {
                let isValid = true;
                
                // Validar nombre
                if (!validateName()) {
                    isValid = false;
                    document.getElementById('nameError').textContent = 
                        nameInput.value.length < 3 ? 
                        'El nombre debe tener al menos 3 caracteres.' : 
                        'El nombre solo puede contener letras y espacios (máximo 40 caracteres).';
                }
                
                // Validar email
                if (!validateEmail()) {
                    isValid = false;
                    document.getElementById('emailError').textContent = 
                        !emailInput.value.includes('@') ? 
                        'El correo debe incluir un @ (ej: usuario@dominio.com).' : 
                        'El correo debe tener un dominio válido (ej: usuario@dominio.com).';
                }
                
                // Validar teléfono
                if (!validatePhone()) {
                    isValid = false;
                    document.getElementById('phoneError').textContent = 
                        phoneInput.value.length < 10 ? 
                        'El teléfono debe tener exactamente 10 dígitos.' : 
                        'El teléfono solo puede contener números (10 dígitos).';
                }
                
                // Validar asunto
                const subjectSelect = document.getElementById('subject');
                if (!subjectSelect.value) {
                    subjectSelect.classList.add('is-invalid');
                    subjectSelect.classList.remove('is-valid');
                    isValid = false;
                } else {
                    subjectSelect.classList.remove('is-invalid');
                    subjectSelect.classList.add('is-valid');
                }
                
                // Validar mensaje
                if (!validateMessage()) {
                    isValid = false;
                    document.getElementById('messageError').textContent = 
                        messageTextarea.value.length < 10 ? 
                        'El mensaje debe tener al menos 10 caracteres.' : 
                        'El mensaje no puede exceder los 500 caracteres.';
                }
                
                // Validar términos
                const termsCheckbox = document.getElementById('terms');
                if (!termsCheckbox.checked) {
                    termsCheckbox.classList.add('is-invalid');
                    termsCheckbox.classList.remove('is-valid');
                    isValid = false;
                } else {
                    termsCheckbox.classList.remove('is-invalid');
                    termsCheckbox.classList.add('is-valid');
                }
                
                return isValid;
            }

            // Envío del formulario
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                if (!validateForm()) {
                    // Mostrar alerta de error
                    showAlert('Por favor corrige los errores en el formulario antes de enviar.', 'danger');
                    return;
                }
                
                // Mostrar estado de carga
                submitButton.classList.add('loading');
                submitButton.disabled = true;
                buttonText.style.opacity = '0';
                
                // Simular envío (en producción aquí iría el fetch a tu backend)
                setTimeout(() => {
                    // Obtener datos del formulario
                    const formData = new FormData(form);
                    const data = Object.fromEntries(formData.entries());
                    
                    // Aquí normalmente enviarías los datos a tu servidor
                    console.log('Datos del formulario:', data);
                    
                    // Simular respuesta exitosa
                    submitButton.classList.remove('loading');
                    submitButton.disabled = false;
                    buttonText.style.opacity = '1';
                    
                    // Mostrar alerta de éxito
                    showAlert('¡Mensaje enviado exitosamente! Te contactaremos pronto.', 'success');
                    
                    // Limpiar formulario
                    form.reset();
                    currentCount.textContent = '0';
                    messageCount.classList.remove('warning', 'error');
                    
                    // Remover clases de validación
                    const inputs = form.querySelectorAll('.form-control, .form-select, .form-check-input');
                    inputs.forEach(input => {
                        input.classList.remove('is-valid', 'is-invalid');
                    });
                    
                }, 2000);
            });

            // Función para mostrar alertas
            function showAlert(message, type) {
                formAlert.textContent = message;
                formAlert.className = `alert alert-${type}`;
                formAlert.classList.remove('d-none');
                
                // Ocultar alerta después de 5 segundos
                setTimeout(() => {
                    formAlert.classList.add('d-none');
                }, 5000);
            }

            // Validación en tiempo real para inputs
            const inputs = form.querySelectorAll('.form-control, .form-select');
            inputs.forEach(input => {
                input.addEventListener('blur', function() {
                    if (this.value.trim() !== '') {
                        this.classList.remove('is-invalid');
                        this.classList.add('is-valid');
                    }
                });
            });

            // Validación en tiempo real para mensaje
            messageTextarea.addEventListener('input', function() {
                if (this.value.trim().length >= 10 && this.value.length <= 500) {
                    this.classList.remove('is-invalid');
                    this.classList.add('is-valid');
                }
            });

            // Animar elementos al cargar
            const animatedElements = document.querySelectorAll('.fade-in-up');
            animatedElements.forEach((element, index) => {
                element.style.animationDelay = `${index * 0.1}s`;
            });
        });
    </script>
</body>
</html>