<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat de Soporte - SoleVault</title>
    
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
            --whatsapp-green: #25D366;
            --whatsapp-dark: #128C7E;
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

        /* Hero Section de Chat */
        .chat-hero {
            background: linear-gradient(135deg, var(--white-primary) 0%, var(--white-secondary) 100%);
            padding: 100px 0;
            position: relative;
            overflow: hidden;
            border-bottom: 1px solid var(--border-color);
        }

        .chat-title {
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--black-primary);
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .chat-title span {
            color: var(--gold-primary);
        }

        .chat-subtitle {
            font-size: 1.2rem;
            color: var(--gray-medium);
            margin-bottom: 30px;
            max-width: 600px;
            line-height: 1.6;
        }

        /* Sección de Chat Principal */
        .chat-section {
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

        /* Cards de contacto */
        .contact-cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .contact-card {
            background: var(--white-primary);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            position: relative;
            padding: 40px 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border-color: var(--gold-primary);
        }

        .contact-card.whatsapp {
            border-top: 4px solid var(--whatsapp-green);
        }

        .contact-card.email {
            border-top: 4px solid var(--gold-primary);
        }

        .contact-card.phone {
            border-top: 4px solid var(--black-primary);
        }

        .contact-icon {
            font-size: 3.5rem;
            margin-bottom: 25px;
            display: inline-block;
            width: 80px;
            height: 80px;
            line-height: 80px;
            border-radius: 50%;
            margin-bottom: 25px;
        }

        .contact-card.whatsapp .contact-icon {
            background: linear-gradient(135deg, var(--whatsapp-green), var(--whatsapp-dark));
            color: var(--white-primary);
        }

        .contact-card.email .contact-icon {
            background: linear-gradient(135deg, var(--gold-primary), var(--gold-secondary));
            color: var(--white-primary);
        }

        .contact-card.phone .contact-icon {
            background: linear-gradient(135deg, var(--black-primary), var(--black-light));
            color: var(--white-primary);
        }

        .contact-name {
            font-size: 1.5rem;
            color: var(--black-primary);
            margin-bottom: 15px;
            font-weight: 600;
        }

        .contact-role {
            font-size: 1rem;
            color: var(--gold-primary);
            margin-bottom: 20px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .contact-info {
            color: var(--gray-medium);
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 25px;
            min-height: 60px;
        }

        .contact-detail {
            background: var(--white-secondary);
            padding: 12px 20px;
            border-radius: 8px;
            margin-bottom: 15px;
            font-size: 1.1rem;
            font-weight: 500;
            color: var(--black-primary);
        }

        .btn-whatsapp {
            background: linear-gradient(135deg, var(--whatsapp-green), var(--whatsapp-dark));
            color: var(--white-primary);
            border: none;
            border-radius: 8px;
            padding: 14px 30px;
            font-weight: 600;
            font-size: 1rem;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
        }

        .btn-whatsapp:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(37, 211, 102, 0.3);
            color: var(--white-primary);
        }

        .btn-email {
            background: linear-gradient(135deg, var(--black-primary), var(--black-light));
            color: var(--white-primary);
            border: none;
            border-radius: 8px;
            padding: 14px 30px;
            font-weight: 600;
            font-size: 1rem;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
        }

        .btn-email:hover {
            background: linear-gradient(135deg, var(--gold-primary), var(--gold-secondary));
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(212, 175, 55, 0.3);
            color: var(--white-primary);
        }

        .btn-phone {
            background: linear-gradient(135deg, var(--black-primary), var(--black-light));
            color: var(--white-primary);
            border: none;
            border-radius: 8px;
            padding: 14px 30px;
            font-weight: 600;
            font-size: 1rem;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
        }

        .btn-phone:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            color: var(--white-primary);
        }

        /* Horarios de atención */
        .schedule-section {
            background: var(--white-secondary);
            padding: 80px 0;
        }

        .schedule-card {
            background: var(--white-primary);
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--border-color);
        }

        .schedule-list {
            list-style: none;
            padding: 0;
        }

        .schedule-item {
            padding: 15px 0;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .schedule-item:last-child {
            border-bottom: none;
        }

        .day {
            font-weight: 600;
            color: var(--black-primary);
        }

        .time {
            color: var(--gray-medium);
            font-weight: 500;
        }

        .highlight {
            color: var(--whatsapp-green);
            font-weight: 700;
        }

        /* Chat en vivo (simulación) */
        .live-chat-section {
            background: var(--white-primary);
            padding: 80px 0;
            border-bottom: 1px solid var(--border-color);
        }

        .chat-simulation {
            background: var(--white-primary);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            overflow: hidden;
            max-width: 400px;
            margin: 0 auto;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .chat-header {
            background: linear-gradient(135deg, var(--whatsapp-green), var(--whatsapp-dark));
            color: var(--white-primary);
            padding: 20px;
            text-align: center;
        }

        .chat-header h4 {
            margin: 0;
            font-size: 1.3rem;
            font-weight: 600;
        }

        .chat-body {
            padding: 20px;
            background: var(--white-secondary);
            min-height: 200px;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .message {
            padding: 12px 15px;
            border-radius: 18px;
            max-width: 80%;
            font-size: 0.95rem;
            line-height: 1.4;
        }

        .message.user {
            background: var(--whatsapp-green);
            color: var(--white-primary);
            align-self: flex-end;
            border-bottom-right-radius: 5px;
        }

        .message.support {
            background: var(--white-primary);
            color: var(--black-primary);
            align-self: flex-start;
            border: 1px solid var(--border-color);
            border-bottom-left-radius: 5px;
        }

        .typing-indicator {
            display: flex;
            gap: 5px;
            align-self: flex-start;
        }

        .typing-dot {
            width: 8px;
            height: 8px;
            background: var(--gray-light);
            border-radius: 50%;
            animation: typing 1.4s infinite ease-in-out;
        }

        .typing-dot:nth-child(1) { animation-delay: -0.32s; }
        .typing-dot:nth-child(2) { animation-delay: -0.16s; }

        @keyframes typing {
            0%, 80%, 100% { transform: scale(0); }
            40% { transform: scale(1); }
        }

        .chat-footer {
            padding: 20px;
            background: var(--white-primary);
            border-top: 1px solid var(--border-color);
        }

        /* Botón flotante de WhatsApp */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: var(--whatsapp-green);
            color: var(--white-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            box-shadow: 0 5px 20px rgba(37, 211, 102, 0.4);
            z-index: 1000;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 25px rgba(37, 211, 102, 0.6);
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
            .chat-title {
                font-size: 2.8rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .contact-cards-grid {
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
            
            .chat-title {
                font-size: 2.2rem;
            }
            
            .chat-subtitle {
                font-size: 1rem;
            }
            
            .contact-cards-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }
            
            .schedule-card {
                padding: 25px;
            }
            
            .whatsapp-float {
                bottom: 20px;
                right: 20px;
                width: 50px;
                height: 50px;
                font-size: 1.5rem;
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
    <!-- Botón flotante de WhatsApp -->
    <a href="https://wa.me/9191141608?text=Hola,%20me%20gustaría%20obtener%20información%20sobre%20sus%20productos" 
       class="whatsapp-float" 
       target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
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
                    <li class="nav-item">
                        <a class="nav-link" href="/ayuda">Ayuda</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="chat-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="chat-title fade-in-up">Soporte <span>Inmediato</span></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Contactos de Soporte -->
    <section class="chat-section">
        <div class="container">
            <h2 class="section-title text-center fade-in-up">Nuestro Equipo de Soporte</h2>
            
            <div class="contact-cards-grid">
                <!-- Soporte Técnico -->
                <div class="contact-card whatsapp fade-in-up">
                    <div class="contact-icon">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <h3 class="contact-name">Soporte Técnico</h3>
                    <div class="contact-role">Especialista en Productos</div>
                    <p class="contact-info">
                        Resuelve dudas técnicas, asiste con problemas de productos 
                        y proporciona información detallada sobre características.
                    </p>
                    <div class="contact-detail">
                        <i class="fas fa-phone me-2"></i> +52 (919) 114-1608
                    </div>
                    <a href="https://wa.me/9191141608?text=Hola%20Soporte%20Técnico,%20necesito%20ayuda%20con:" 
                       class="btn-whatsapp" 
                       target="_blank">
                        <i class="fab fa-whatsapp"></i> Chatear por WhatsApp
                    </a>
                </div>
                
                <!-- Atención al Cliente -->
                <div class="contact-card email fade-in-up" style="animation-delay: 0.2s;">
                    <div class="contact-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="contact-name">Atención al Cliente</h3>
                    <div class="contact-role">Especialista en Servicio</div>
                    <p class="contact-info">
                        Asistencia con pedidos, seguimiento de envíos, devoluciones 
                        y cualquier consulta general sobre tu experiencia de compra.
                    </p>
                    <div class="contact-detail">
                        <i class="fas fa-envelope me-2"></i> cliente@elegancestore.com
                    </div>
                    <a href="mailto:cliente@elegancestore.com?subject=Consulta%20de%20Atención%20al%20Cliente" 
                       class="btn-email">
                        <i class="fas fa-envelope"></i> Enviar Correo
                    </a>
                </div>
                
                <!-- Gerente Comercial -->
                <div class="contact-card phone fade-in-up" style="animation-delay: 0.4s;">
                    <div class="contact-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="contact-name">Gerencia Comercial</h3>
                    <div class="contact-role">Director de Ventas</div>
                    <p class="contact-info"> <br>
                        Para consultas comerciales, pedidos corporativos, convenios 
                        especiales y atención a clientes preferenciales.
                    </p>
                    <div class="contact-detail">
                        <i class="fas fa-phone me-2"></i> +52 (919) 114-1608
                    </div>
                    <a href="https://wa.me/9191141608?text=Hola,%20me%20gustaría%20hablar%20con%20Gerencia%20Comercial" 
                       class="btn-whatsapp" 
                       target="_blank">
                        <i class="fab fa-whatsapp"></i> Contactar por WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Chat en Vivo (Simulación) -->
    <section class="live-chat-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title fade-in-up">Chat en Vivo</h2>
                    <p class="mb-4 fade-in-up" style="animation-delay: 0.2s;">
                        Experimenta cómo sería una conversación real con nuestro equipo de soporte. 
                        Respuestas rápidas, profesionales y efectivas.
                    </p>
                    <ul class="list-unstyled fade-in-up" style="animation-delay: 0.3s;">
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Respuesta en menos de 5 minutos</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Atención personalizada 24/7</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Soporte en español e inglés</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Soluciones inmediatas y prácticas</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="chat-simulation fade-in-up" style="animation-delay: 0.4s;">
                        <div class="chat-header">
                            <h4><i class="fab fa-whatsapp me-2"></i> SoleVault - Soporte</h4>
                        </div>
                        <div class="chat-body" id="chatSimulation">
                            <div class="message support">
                                ¡Hola! Soy Yael del equipo de soporte. ¿En qué puedo ayudarte hoy?
                            </div>
                            <div class="message user">
                                Hola, tengo una duda sobre el modelo X-2000
                            </div>
                            <div class="message support">
                                Claro, ¿qué te gustaría saber sobre el modelo X-2000?
                            </div>
                            <div class="typing-indicator">
                                <div class="typing-dot"></div>
                                <div class="typing-dot"></div>
                                <div class="typing-dot"></div>
                            </div>
                        </div>
                        <div class="chat-footer">
                            <small class="text-muted"><i class="fas fa-info-circle me-1"></i> Simulación de chat en tiempo real</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Horarios de Atención -->
    <section class="schedule-section">
        <div class="container">
            <h2 class="section-title text-center fade-in-up">Horarios de Atención</h2>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="schedule-card fade-in-up" style="animation-delay: 0.2s;">
                        <div class="row">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <h4 class="mb-4"><i class="fas fa-clock me-2 text-whatsapp-green"></i> Atención Normal</h4>
                                <ul class="schedule-list">
                                    <li class="schedule-item">
                                        <span class="day">Lunes - Viernes</span>
                                        <span class="time">9:00 AM - 8:00 PM</span>
                                    </li>
                                    <li class="schedule-item">
                                        <span class="day">Sábados</span>
                                        <span class="time">10:00 AM - 6:00 PM</span>
                                    </li>
                                    <li class="schedule-item">
                                        <span class="day">Domingos</span>
                                        <span class="time">11:00 AM - 4:00 PM</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h4 class="mb-4"><i class="fas fa-bolt me-2 text-whatsapp-green"></i> Soporte Prioritario</h4>
                                <ul class="schedule-list">
                                    <li class="schedule-item">
                                        <span class="day">WhatsApp 24/7</span>
                                        <span class="time highlight">Siempre Disponible</span>
                                    </li>
                                    <li class="schedule-item">
                                        <span class="day">Chat en Vivo</span>
                                        <span class="time">Lun-Vie: 8:00 AM - 10:00 PM</span>
                                    </li>
                                    <li class="schedule-item">
                                        <span class="day">Respuesta Garantizada</span>
                                        <span class="time">Menos de 5 minutos</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <p class="text-muted">
                                <i class="fas fa-exclamation-circle me-1"></i> 
                                Fuera de horario, puedes dejar un mensaje por WhatsApp y te responderemos al inicio del siguiente día hábil.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row justify-content-center text-center">

            <div class="col-lg-4 mb-4">
                <h5>SoleVault</h5>
                <p>
                    Tu destino para productos de lujo y elegancia.  
                    Calidad, estilo y exclusividad en cada compra.
                </p>
                <div class="mt-3">
                    <a href="https://wa.me/9191141608" class="btn btn-outline-light btn-sm me-2" target="_blank">
                        <i class="fab fa-whatsapp"></i> WhatsApp
                    </a>
                    <a href="mailto:soporte@elegancestore.com" class="btn btn-outline-light btn-sm">
                        <i class="fas fa-envelope"></i> Email
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <h5>Legal</h5>
                <ul class="footer-links list-unstyled">
                    <li><a href="/privacidad">Política de Privacidad</a></li>
                    <li><a href="/terminos">Términos y Condiciones</a></li>
                    <li><a href="/cookies">Política de Cookies</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <h5>Contacto</h5>
                <p><i class="fas fa-envelope me-2"></i> soporte@elegancestore.com</p>
                <p><i class="fas fa-phone me-2"></i> +52 (919) 114-1608</p>
                <p><i class="fab fa-whatsapp me-2"></i> WhatsApp: +52 (919) 114-1608</p>
            </div>

        </div>
            <div class="footer-bottom">
                <p>&copy; 2024 SoleVault. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Simulación de chat
            const chatBody = document.getElementById('chatSimulation');
            const messages = [
                {
                    text: "¡Claro! El modelo X-2000 tiene las siguientes características principales:",
                    type: "support",
                    delay: 2000
                },
                {
                    text: "• Tallas 24 a 18 EU<br>• Variedad de colores<br>• Para damas y caballeros<br>• Comodos<br>• Duraderos",
                    type: "support",
                    delay: 2500
                },
                {
                    text: "¿Te gustaría saber sobre disponibilidad o precio?",
                    type: "support",
                    delay: 3000
                }
            ];

            let messageIndex = 0;
            
            function showNextMessage() {
                if (messageIndex < messages.length) {
                    const message = messages[messageIndex];
                    
                    // Remover indicador de escritura
                    const typingIndicator = document.querySelector('.typing-indicator');
                    if (typingIndicator) {
                        typingIndicator.remove();
                    }
                    
                    setTimeout(() => {
                        const messageDiv = document.createElement('div');
                        messageDiv.className = `message ${message.type}`;
                        messageDiv.innerHTML = message.text;
                        chatBody.appendChild(messageDiv);
                        
                        // Añadir indicador de escritura si hay más mensajes
                        if (messageIndex < messages.length - 1) {
                            setTimeout(() => {
                                const typingDiv = document.createElement('div');
                                typingDiv.className = 'typing-indicator';
                                typingDiv.innerHTML = `
                                    <div class="typing-dot"></div>
                                    <div class="typing-dot"></div>
                                    <div class="typing-dot"></div>
                                `;
                                chatBody.appendChild(typingDiv);
                            }, 500);
                        }
                        
                        messageIndex++;
                        if (messageIndex < messages.length) {
                            setTimeout(showNextMessage, messages[messageIndex].delay);
                        }
                        
                        // Scroll al final del chat
                        chatBody.scrollTop = chatBody.scrollHeight;
                    }, message.delay);
                }
            }
            
            // Iniciar simulación después de 3 segundos
            setTimeout(showNextMessage, 3000);
            
            // Animar elementos al cargar
            const animatedElements = document.querySelectorAll('.fade-in-up');
            animatedElements.forEach((element, index) => {
                element.style.animationDelay = `${index * 0.1}s`;
            });
            
            // Función para abrir WhatsApp con mensaje personalizado
            window.openWhatsApp = function(department = '') {
                let phoneNumber = '9191141608';
                let defaultMessage = 'Hola, me gustaría obtener información sobre sus productos';
                
                switch(department) {
                    case 'technical':
                        phoneNumber = '9191141608';
                        defaultMessage = 'Hola Soporte Técnico, necesito ayuda con:';
                        break;
                    case 'commercial':
                        phoneNumber = '9191141608';
                        defaultMessage = 'Hola, me gustaría hablar sobre asuntos comerciales';
                        break;
                }
                
                const message = encodeURIComponent(defaultMessage);
                window.open(`https://wa.me/${phoneNumber}?text=${message}`, '_blank');
            };
        });
    </script>
</body>
</html>