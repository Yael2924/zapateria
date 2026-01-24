<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Ayuda - Elegance Store</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* Variables de color - Mismo diseño */
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
        }

        /* Reset y estilos base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, var(--black-primary) 0%, var(--black-secondary) 100%);
            color: var(--white-primary);
            min-height: 100vh;
            padding: 20px;
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 20% 30%, rgba(212, 175, 55, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(212, 175, 55, 0.08) 0%, transparent 50%);
            z-index: -1;
        }

        /* Header/Navbar */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 20px 30px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid rgba(255, 255, 255, 0.1);
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
            text-decoration: none;
        }

        .logo-icon {
            font-size: 2.5rem;
            color: var(--gold-primary);
        }

        .brand-text {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--black-primary);
            letter-spacing: -0.5px;
        }

        .nav-links {
            display: flex;
            gap: 25px;
            align-items: center;
        }

        .nav-link {
            color: var(--gray-dark);
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
            padding: 10px 20px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: var(--gold-primary);
            background: rgba(212, 175, 55, 0.1);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--black-primary) 0%, var(--black-light) 100%);
            color: var(--white-primary);
            border: none;
            border-radius: 12px;
            padding: 12px 28px;
            font-weight: 600;
            font-size: 1rem;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, var(--gold-primary) 0%, var(--gold-secondary) 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(212, 175, 55, 0.3);
        }

        /* Contenedor principal */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero Section - Ayuda */
        .help-hero {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 24px;
            padding: 60px 50px;
            margin-bottom: 40px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
        }

        .help-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--gold-primary), var(--gold-secondary));
        }

        .help-title {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            color: var(--black-primary);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .help-subtitle {
            color: var(--gray-medium);
            font-size: 1.2rem;
            margin-bottom: 40px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        .search-box {
            max-width: 600px;
            margin: 0 auto 40px;
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 18px 25px;
            font-size: 1.1rem;
            border: 2px solid var(--border-color);
            border-radius: 50px;
            background: var(--white-secondary);
            color: var(--black-primary);
            transition: all 0.3s ease;
        }

        .search-input:focus {
            border-color: var(--gold-primary);
            box-shadow: 0 0 0 4px rgba(212, 175, 55, 0.15);
            outline: none;
            background: var(--white-primary);
        }

        .search-icon {
            position: absolute;
            right: 25px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray-light);
            font-size: 1.2rem;
        }

        /* Categorías de ayuda */
        .help-categories {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .category-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 35px 30px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .category-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--gold-primary), var(--gold-secondary));
        }

        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(212, 175, 55, 0.15);
        }

        .category-icon {
            font-size: 3rem;
            color: var(--gold-primary);
            margin-bottom: 20px;
            display: block;
        }

        .category-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--black-primary);
            margin-bottom: 15px;
            font-weight: 600;
        }

        .category-description {
            color: var(--gray-medium);
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        /* Preguntas frecuentes */
        .faq-section {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 24px;
            padding: 50px;
            margin-bottom: 40px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            color: var(--black-primary);
            margin-bottom: 40px;
            text-align: center;
            font-weight: 700;
            position: relative;
            display: inline-block;
            left: 50%;
            transform: translateX(-50%);
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, var(--gold-primary), var(--gold-secondary));
        }

        .faq-list {
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            border-bottom: 1px solid var(--border-color);
            padding: 25px 0;
        }

        .faq-item:last-child {
            border-bottom: none;
        }

        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .faq-question:hover {
            color: var(--gold-primary);
        }

        .question-text {
            font-size: 1.1rem;
            color: var(--black-primary);
            font-weight: 600;
            flex: 1;
        }

        .faq-toggle {
            color: var(--gold-primary);
            font-size: 1.2rem;
            transition: transform 0.3s ease;
        }

        .faq-answer {
            color: var(--gray-medium);
            font-size: 0.95rem;
            line-height: 1.6;
            margin-top: 15px;
            padding-left: 20px;
            border-left: 3px solid var(--gold-primary);
            display: none;
        }

        .faq-item.active .faq-answer {
            display: block;
        }

        .faq-item.active .faq-toggle {
            transform: rotate(45deg);
        }

        /* Contacto */
        .contact-section {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 24px;
            padding: 50px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
        }

        .contact-methods {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .contact-method {
            padding: 30px;
            background: var(--white-secondary);
            border-radius: 16px;
            transition: all 0.3s ease;
        }

        .contact-method:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(212, 175, 55, 0.1);
        }

        .contact-icon {
            font-size: 2.5rem;
            color: var(--gold-primary);
            margin-bottom: 20px;
            display: block;
        }

        .contact-title {
            font-size: 1.2rem;
            color: var(--black-primary);
            margin-bottom: 10px;
            font-weight: 600;
        }

        .contact-info {
            color: var(--gray-medium);
            font-size: 0.95rem;
            margin-bottom: 15px;
        }

        /* Footer */
        .footer {
            text-align: center;
            margin-top: 60px;
            padding: 30px;
            color: var(--gray-extra-light);
            font-size: 0.9rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Responsive */
        @media (max-width: 992px) {
            .help-title {
                font-size: 2.5rem;
            }
            
            .navbar {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }
            
            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            .help-hero {
                padding: 40px 30px;
            }
            
            .help-title {
                font-size: 2rem;
            }
            
            .help-subtitle {
                font-size: 1rem;
            }
            
            .faq-section,
            .contact-section {
                padding: 30px 25px;
            }
            
            .category-card {
                padding: 25px 20px;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 15px;
            }
            
            .container {
                padding: 0 15px;
            }
            
            .help-categories {
                grid-template-columns: 1fr;
            }
            
            .contact-methods {
                grid-template-columns: 1fr;
            }
            
            .nav-link {
                padding: 8px 15px;
                font-size: 0.9rem;
            }
        }

        /* Animaciones */
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
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar fade-in-up">
        <a href="/" class="logo">
            <i class="fas fa-gem logo-icon"></i>
            <span class="brand-text">Elegance Store</span>
        </a>
        
        <div class="nav-links">
            <a href="/" class="nav-link">Inicio</a>
            <a href="/tienda" class="nav-link">Tienda</a>
            <a href="/ayuda" class="nav-link">Ayuda</a>
            <a href="/contacto" class="nav-link">Contacto</a>
            <a href="/login" class="btn-primary">Iniciar Sesión</a>
        </div>
    </nav>

    <!-- Contenedor principal -->
    <div class="container">
        <!-- Hero Section -->
        <section class="help-hero fade-in-up">
            <h1 class="help-title">Centro de Ayuda</h1>
            <p class="help-subtitle">
                Encuentra respuestas a tus preguntas más frecuentes, guías paso a paso 
                y todo lo que necesitas para una experiencia excepcional.
            </p>
            
            <div class="search-box">
                <input type="text" class="search-input" placeholder="¿En qué podemos ayudarte?">
                <i class="fas fa-search search-icon"></i>
            </div>
        </section>

        <!-- Categorías de ayuda -->
        <div class="help-categories">
            <div class="category-card fade-in-up">
                <i class="fas fa-shopping-bag category-icon"></i>
                <h3 class="category-title">Compras y Pedidos</h3>
                <p class="category-description">
                    Consulta el estado de tu pedido, realiza devoluciones, 
                    conoce nuestros métodos de pago y más.
                </p>
                <a href="#" class="btn-primary">Ver temas</a>
            </div>
            
            <div class="category-card fade-in-up" style="animation-delay: 0.2s;">
                <i class="fas fa-truck category-icon"></i>
                <h3 class="category-title">Envíos y Entregas</h3>
                <p class="category-description">
                    Información sobre tiempos de entrega, costos de envío, 
                    seguimiento de pedidos y políticas de entrega.
                </p>
                <a href="#" class="btn-primary">Ver temas</a>
            </div>
            
            <div class="category-card fade-in-up" style="animation-delay: 0.4s;">
                <i class="fas fa-exchange-alt category-icon"></i>
                <h3 class="category-title">Devoluciones y Cambios</h3>
                <p class="category-description">
                    Conoce nuestra política de devoluciones, cómo solicitar 
                    un cambio y los plazos para hacerlo.
                </p>
                <a href="#" class="btn-primary">Ver temas</a>
            </div>
        </div>

        <!-- Preguntas Frecuentes -->
        <section class="faq-section fade-in-up">
            <h2 class="section-title">Preguntas Frecuentes</h2>
            
            <div class="faq-list">
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="question-text">¿Cómo puedo realizar un pedido?</span>
                        <i class="fas fa-plus faq-toggle"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Para realizar un pedido, simplemente navega por nuestra tienda, 
                        añade los productos que desees al carrito y procede al checkout. 
                        Puedes pagar con tarjeta de crédito, débito o PayPal.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="question-text">¿Cuánto tiempo tardan los envíos?</span>
                        <i class="fas fa-plus faq-toggle"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Los envíos nacionales tardan de 3 a 5 días hábiles. Los envíos 
                        internacionales pueden tardar de 7 a 14 días hábiles, dependiendo 
                        del destino. Recibirás un código de seguimiento por email.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="question-text">¿Puedo cambiar o devolver un producto?</span>
                        <i class="fas fa-plus faq-toggle"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Sí, aceptamos devoluciones dentro de los 30 días posteriores 
                        a la recepción del pedido. El producto debe estar en perfecto 
                        estado y con todas sus etiquetas. Consulta nuestra política 
                        completa de devoluciones para más detalles.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="question-text">¿Cómo puedo contactar con servicio al cliente?</span>
                        <i class="fas fa-plus faq-toggle"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Puedes contactarnos a través de nuestro formulario de contacto, 
                        por email a soporte@elegancestore.com o por teléfono al 
                        +1 (555) 123-4567. Nuestro horario de atención es de lunes a 
                        viernes de 9:00 a 18:00 horas.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contacto -->
        <section class="contact-section fade-in-up">
            <h2 class="section-title">Contáctanos</h2>
            <p style="color: var(--gray-medium); margin-bottom: 40px; max-width: 700px; margin-left: auto; margin-right: auto;">
                ¿No encontraste lo que buscabas? Estamos aquí para ayudarte.
            </p>
            
            <div class="contact-methods">
                <div class="contact-method">
                    <i class="fas fa-envelope contact-icon"></i>
                    <h4 class="contact-title">Correo Electrónico</h4>
                    <p class="contact-info">soporte@elegancestore.com</p>
                    <a href="mailto:soporte@elegancestore.com" class="btn-primary">Enviar Email</a>
                </div>
                
                <div class="contact-method">
                    <i class="fas fa-phone contact-icon"></i>
                    <h4 class="contact-title">Teléfono</h4>
                    <p class="contact-info">+1 (555) 123-4567</p>
                    <p class="contact-info">Lunes a Viernes: 9:00 - 18:00</p>
                    <a href="tel:+15551234567" class="btn-primary">Llamar Ahora</a>
                </div>
                
                <div class="contact-method">
                    <i class="fas fa-comments contact-icon"></i>
                    <h4 class="contact-title">Chat en Vivo</h4>
                    <p class="contact-info">Disponible 24/7</p>
                    <p class="contact-info">Respuesta inmediata</p>
                    <a href="#" class="btn-primary">Iniciar Chat</a>
                </div>
            </div>
        </section>
    </div>


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
            const searchInput = document.querySelector('.search-input');
            const faqQuestions = document.querySelectorAll('.question-text');
            
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                
                faqItems.forEach(item => {
                    const question = item.querySelector('.question-text').textContent.toLowerCase();
                    const answer = item.querySelector('.faq-answer').textContent.toLowerCase();
                    
                    if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
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