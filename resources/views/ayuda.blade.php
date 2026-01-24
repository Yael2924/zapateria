<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Ayuda - SoleVault</title>

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

        /* Hero Section de Ayuda */
        .help-hero {
            background: linear-gradient(135deg, var(--white-primary) 0%, var(--white-secondary) 100%);
            padding: 100px 0;
            position: relative;
            overflow: hidden;
            border-bottom: 1px solid var(--border-color);
        }

        .help-title {
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--black-primary);
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .help-title span {
            color: var(--gold-primary);
        }

        .help-subtitle {
            font-size: 1.2rem;
            color: var(--gray-medium);
            margin-bottom: 30px;
            max-width: 600px;
            line-height: 1.6;
        }

        /* Barra de búsqueda */
        .search-form-help .form-control {
            background: var(--white-secondary);
            border: 1px solid var(--border-color);
            color: var(--black-primary);
            border-radius: 25px;
            padding: 15px 25px;
            min-width: 300px;
            font-size: 1rem;
        }

        .search-form-help .form-control::placeholder {
            color: var(--gray-light);
        }

        .search-form-help .form-control:focus {
            background: var(--white-primary);
            border-color: var(--gold-primary);
            box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.1);
            color: var(--black-primary);
        }

        .btn-search-help {
            background: var(--black-primary);
            border: 1px solid var(--black-primary);
            border-radius: 25px;
            color: var(--white-primary);
            padding: 15px 30px;
            transition: all 0.3s ease;
            margin-left: 10px;
        }

        .btn-search-help:hover {
            background: var(--gold-primary);
            border-color: var(--gold-primary);
            color: var(--white-primary);
        }

        /* Sección de ayuda - Nuevos estilos */
        .help-section {
            background: var(--white-primary);
            padding: 80px 0;
            border-bottom: 1px solid var(--border-color);
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

        /* Categorías de ayuda */
        .help-categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .help-category-card {
            background: var(--white-primary);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            position: relative;
            padding: 30px;
            text-align: center;
        }

        .help-category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border-color: var(--gold-primary);
        }

        .category-icon {
            font-size: 3rem;
            color: var(--gold-primary);
            margin-bottom: 20px;
        }

        .category-title {
            font-size: 1.3rem;
            color: var(--black-primary);
            margin-bottom: 15px;
            font-weight: 600;
        }

        .category-description {
            color: var(--gray-medium);
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .btn-help {
            background: transparent;
            border: 2px solid var(--black-primary);
            color: var(--black-primary);
            padding: 10px 24px;
            border-radius: 4px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.9rem;
            text-decoration: none;
            display: inline-block;
        }

        .btn-help:hover {
            background: var(--black-primary);
            color: var(--white-primary);
            border-color: var(--black-primary);
        }

        /* FAQ Section */
        .faq-section {
            background: var(--white-secondary);
            padding: 80px 0;
        }

        .faq-list {
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            background: var(--white-primary);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            margin-bottom: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-item:hover {
            border-color: var(--gold-primary);
        }

        .faq-question {
            padding: 20px 25px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            color: var(--black-primary);
        }

        .faq-question:hover {
            color: var(--gold-primary);
        }

        .faq-toggle {
            color: var(--gold-primary);
            font-size: 1.2rem;
            transition: transform 0.3s ease;
        }

        .faq-answer {
            padding: 0 25px 20px;
            color: var(--gray-medium);
            font-size: 0.95rem;
            line-height: 1.6;
            display: none;
            border-top: 1px solid var(--border-color);
            padding-top: 20px;
        }

        .faq-item.active .faq-answer {
            display: block;
        }

        .faq-item.active .faq-toggle {
            transform: rotate(45deg);
        }

        /* Contact Section */
        .contact-section {
            background: var(--white-primary);
            padding: 80px 0;
        }

        .contact-methods {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .contact-method-card {
            background: var(--white-secondary);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .contact-method-card:hover {
            transform: translateY(-5px);
            border-color: var(--gold-primary);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .contact-icon {
            font-size: 2.5rem;
            color: var(--gold-primary);
            margin-bottom: 20px;
        }

        .contact-title {
            font-size: 1.2rem;
            color: var(--black-primary);
            margin-bottom: 15px;
            font-weight: 600;
        }

        .contact-info {
            color: var(--gray-medium);
            font-size: 0.95rem;
            margin-bottom: 20px;
        }

        .btn-contact {
            background: var(--black-primary);
            color: var(--white-primary);
            border: 2px solid var(--black-primary);
            padding: 10px 24px;
            border-radius: 4px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-contact:hover {
            background: var(--gold-primary);
            border-color: var(--gold-primary);
            color: var(--white-primary);
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
            .help-title {
                font-size: 2.8rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .help-categories-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
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
            
            .help-title {
                font-size: 2.2rem;
            }
            
            .help-subtitle {
                font-size: 1rem;
            }
            
            .search-form-help {
                margin-top: 15px;
                width: 100%;
            }
            
            .search-form-help .form-control {
                min-width: auto;
                font-size: 0.9rem;
            }
            
            .help-categories-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }
            
            .contact-methods {
                grid-template-columns: 1fr;
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
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/ayuda">Ayuda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacto">Contáctanos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="help-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="help-title fade-in-up" style="text-align:center;">
                        Centro de <span>Ayuda</span>
                    </h1>  
                    <div class="search-form-help fade-in-up" style="animation-delay: 0.4s;">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="¿En qué podemos ayudarte?">
                            <button class="btn btn-search-help" type="button">
                                <i class="fas fa-search"></i> Buscar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categorías de Ayuda -->
    <section class="help-section">
        <div class="container">
            <h2 class="section-title text-center fade-in-up">¿Cómo podemos ayudarte?</h2>
            
            <div class="help-categories-grid">
                <div class="help-category-card fade-in-up">
                    <i class="fas fa-shopping-bag category-icon"></i>
                    <h3 class="category-title">Compras y Pedidos</h3>
                    <p class="category-description">
                        Consulta el estado de tu pedido, realiza devoluciones, 
                        conoce nuestros métodos de pago y más información sobre compras.
                    </p>
                    <a href="#" class="btn-help">Explorar temas</a>
                </div>
                
                <div class="help-category-card fade-in-up" style="animation-delay: 0.2s;">
                    <i class="fas fa-truck category-icon"></i>
                    <h3 class="category-title">Envíos y Entregas</h3>
                    <p class="category-description">
                        Información sobre tiempos de entrega, costos de envío, 
                        seguimiento de pedidos y políticas de entrega.
                    </p>
                    <br>
                    <a href="#" class="btn-help">Explorar temas</a>
                </div>
                
                <div class="help-category-card fade-in-up" style="animation-delay: 0.4s;">
                    <i class="fas fa-exchange-alt category-icon"></i>
                    <h3 class="category-title">Devoluciones y Cambios</h3>
                    <br>
                    <p class="category-description">
                        Conoce nuestra política de devoluciones, cómo solicitar 
                        un cambio y los plazos para hacerlo.
                    </p>
                    <a href="#" class="btn-help">Explorar temas</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Preguntas Frecuentes -->
    <section class="faq-section">
        <div class="container">
            <h2 class="section-title text-center fade-in-up">Preguntas Frecuentes</h2>
            
            <div class="faq-list">
                <div class="faq-item fade-in-up">
                    <div class="faq-question">
                        ¿Cómo puedo realizar un pedido?
                        <i class="fas fa-plus faq-toggle"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Para realizar un pedido, simplemente navega por nuestra tienda, 
                        añade los productos que desees al carrito y procede al checkout. 
                        Puedes pagar con tarjeta de crédito, débito, PayPal o transferencia bancaria.</p>
                    </div>
                </div>
                
                <div class="faq-item fade-in-up" style="animation-delay: 0.1s;">
                    <div class="faq-question">
                        ¿Cuánto tiempo tardan los envíos?
                        <i class="fas fa-plus faq-toggle"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Los envíos nacionales tardan de 3 a 5 días hábiles. Los envíos 
                        internacionales pueden tardar de 7 a 14 días hábiles, dependiendo 
                        del destino. Recibirás un código de seguimiento por email una vez 
                        que tu pedido sea despachado.</p>
                    </div>
                </div>
                
                <div class="faq-item fade-in-up" style="animation-delay: 0.2s;">
                    <div class="faq-question">
                        ¿Puedo cambiar o devolver un producto?
                        <i class="fas fa-plus faq-toggle"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Sí, aceptamos devoluciones dentro de los 30 días posteriores 
                        a la recepción del pedido. El producto debe estar en perfecto 
                        estado, sin usar y con todas sus etiquetas originales. Consulta 
                        nuestra política completa de devoluciones para más detalles.</p>
                    </div>
                </div>
                
                <div class="faq-item fade-in-up" style="animation-delay: 0.3s;">
                    <div class="faq-question">
                        ¿Cómo puedo contactar con servicio al cliente?
                        <i class="fas fa-plus faq-toggle"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Puedes contactarnos a través de nuestro formulario de contacto, 
                        por email a solevault2024@gmail.com o por teléfono al 
                        +52 (919) 114-1608. Nuestro horario de atención es de lunes a 
                        viernes de 9:00 a 18:00 horas y sábados de 10:00 a 14:00 horas.</p>
                    </div>
                </div>
                
                <div class="faq-item fade-in-up" style="animation-delay: 0.4s;">
                    <div class="faq-question">
                        ¿Qué métodos de pago aceptan?
                        <i class="fas fa-plus faq-toggle"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Aceptamos tarjetas de crédito y débito Visa, MasterCard y American Express, 
                        PayPal, transferencias bancarias y pagos contra entrega en algunas zonas. 
                        Todos los pagos son procesados de forma segura.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contacto -->
    <section class="contact-section">
        <div class="container">
            <h2 class="section-title text-center fade-in-up">¿Necesitas más ayuda?</h2>
            <p class="text-center mb-5 fade-in-up" style="animation-delay: 0.2s; max-width: 600px; margin: 0 auto;">
                Estamos aquí para ayudarte. Contáctanos a través de cualquiera de estos canales.
            </p>
            
            <div class="contact-methods">
                <div class="contact-method-card fade-in-up">
                    <i class="fas fa-envelope contact-icon"></i>
                    <h4 class="contact-title">Correo Electrónico</h4>
                    <p class="contact-info">solevault2024@gmail.com</p>
                    <p class="contact-info">Respuesta en 24 horas</p>
                    <a href="solevault2024@gmail.com" class="btn-contact">Enviar Email</a>
                </div>
                
                <div class="contact-method-card fade-in-up" style="animation-delay: 0.2s;">
                    <i class="fas fa-phone contact-icon"></i>
                    <h4 class="contact-title">Teléfono</h4>
                    <p class="contact-info">+52 (919) 114-1608</p>
                    <p class="contact-info">Lunes a Viernes: 9:00 - 18:00</p>
                    <a href="tel:+529191141608" class="btn-contact">Llamar Ahora</a>
                </div>
                
                <div class="contact-method-card fade-in-up" style="animation-delay: 0.4s;">
                    <i class="fas fa-comments contact-icon"></i>
                    <h4 class="contact-title">Chat en Vivo</h4>
                    <p class="contact-info">Disponible 24/7</p>
                    <p class="contact-info">Respuesta inmediata</p>
                    <a href="https://wa.me/9191141608?text=Hola,%20necesito%20ayuda" 
                    class="btn-contact"
                    target="_blank">
                        <i class="fab fa-whatsapp me-2"></i> Iniciar Chat
                    </a>
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
                <p>Email: solevault2024@gmail.com</p>
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
            // FAQ toggle functionality
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                const toggle = item.querySelector('.faq-toggle');
                
                question.addEventListener('click', () => {
                    // Cerrar otros items abiertos
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item && otherItem.classList.contains('active')) {
                            otherItem.classList.remove('active');
                        }
                    });
                    
                    // Toggle current item
                    item.classList.toggle('active');
                    
                    // Cambiar ícono
                    if (item.classList.contains('active')) {
                        toggle.classList.remove('fa-plus');
                        toggle.classList.add('fa-minus');
                    } else {
                        toggle.classList.remove('fa-minus');
                        toggle.classList.add('fa-plus');
                    }
                });
            });
            
            // Search functionality
            const searchInput = document.querySelector('.search-form-help .form-control');
            const searchButton = document.querySelector('.btn-search-help');
            
            searchButton.addEventListener('click', function() {
                const searchTerm = searchInput.value.toLowerCase();
                if (searchTerm) {
                    // Filtrar FAQ items
                    let found = false;
                    faqItems.forEach(item => {
                        const question = item.querySelector('.faq-question').textContent.toLowerCase();
                        const answer = item.querySelector('.faq-answer').textContent.toLowerCase();
                        
                        if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                            item.style.display = 'block';
                            // Abrir el item
                            item.classList.add('active');
                            item.querySelector('.faq-toggle').classList.remove('fa-plus');
                            item.querySelector('.faq-toggle').classList.add('fa-minus');
                            found = true;
                        } else {
                            item.style.display = 'none';
                        }
                    });
                    
                    // Scroll al primer resultado encontrado
                    if (found) {
                        document.querySelector('.faq-section').scrollIntoView({ 
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });
            
            // También buscar al presionar Enter
            searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    searchButton.click();
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