<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buzón de Mensajes - SoleVault</title>
    
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
            --info-color: #17a2b8;
            --warning-color: #ffc107;
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

        /* Hero Section de Buzón */
        .inbox-hero {
            background: linear-gradient(135deg, var(--white-primary) 0%, var(--white-secondary) 100%);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
            border-bottom: 1px solid var(--border-color);
        }

        .inbox-title {
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--black-primary);
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .inbox-title span {
            color: var(--gold-primary);
        }

        .inbox-subtitle {
            font-size: 1.2rem;
            color: var(--gray-medium);
            margin-bottom: 30px;
            max-width: 600px;
            line-height: 1.6;
        }

        /* Sección Principal del Buzón */
        .inbox-main-section {
            background: var(--white-primary);
            padding: 60px 0;
            min-height: 70vh;
        }

        .section-title {
            font-size: 2.5rem;
            color: var(--black-primary);
            position: relative;
            display: inline-block;
            margin-bottom: 40px;
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

        /* Filtros y Búsqueda */
        .inbox-filters {
            background: var(--white-secondary);
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 30px;
            border: 1px solid var(--border-color);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
        }

        .search-box {
            position: relative;
        }

        .search-box input {
            padding-right: 50px;
            border: 2px solid var(--border-color);
            border-radius: 8px;
        }

        .search-box .search-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray-light);
            cursor: pointer;
        }

        .filter-buttons {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 8px 20px;
            border: 2px solid var(--border-color);
            border-radius: 25px;
            background: var(--white-primary);
            color: var(--gray-dark);
            font-weight: 500;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: var(--gold-primary);
            border-color: var(--gold-primary);
            color: var(--white-primary);
        }

        .stats-badge {
            background: var(--white-tertiary);
            border-radius: 20px;
            padding: 5px 15px;
            font-size: 0.9rem;
            color: var(--gray-medium);
            font-weight: 500;
        }

        /* Lista de Mensajes */
        .messages-container {
            background: var(--white-primary);
            border-radius: 12px;
            border: 1px solid var(--border-color);
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
        }

        .message-item {
            padding: 25px;
            border-bottom: 1px solid var(--border-color);
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
        }

        .message-item:hover {
            background: var(--white-secondary);
        }

        .message-item.unread {
            background: rgba(23, 162, 184, 0.05);
            border-left: 4px solid var(--info-color);
        }

        .message-item.important {
            background: rgba(255, 193, 7, 0.05);
            border-left: 4px solid var(--warning-color);
        }

        .message-item:last-child {
            border-bottom: none;
        }

        .message-checkbox {
            position: absolute;
            top: 25px;
            left: 25px;
            width: 20px;
            height: 20px;
            cursor: pointer;
        }

        .message-content {
            margin-left: 35px;
        }

        .message-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 10px;
        }

        .message-sender {
            font-weight: 600;
            color: var(--black-primary);
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .message-time {
            color: var(--gray-light);
            font-size: 0.9rem;
            white-space: nowrap;
        }

        .message-subject {
            font-weight: 600;
            color: var(--black-primary);
            margin-bottom: 8px;
            font-size: 1rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .message-preview {
            color: var(--gray-medium);
            font-size: 0.95rem;
            line-height: 1.5;
            margin-bottom: 10px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .message-tags {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .message-tag {
            padding: 4px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .tag-general {
            background: rgba(0, 0, 0, 0.05);
            color: var(--gray-dark);
        }

        .tag-support {
            background: rgba(23, 162, 184, 0.1);
            color: var(--info-color);
        }

        .tag-sales {
            background: rgba(40, 167, 69, 0.1);
            color: var(--success-color);
        }

        .tag-urgent {
            background: rgba(220, 53, 69, 0.1);
            color: var(--error-color);
        }

        .message-actions {
            display: flex;
            gap: 10px;
            margin-top: 15px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .message-item:hover .message-actions {
            opacity: 1;
        }

        .action-btn {
            padding: 6px 15px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            background: var(--white-primary);
            color: var(--gray-dark);
            font-size: 0.85rem;
            font-weight: 500;
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .action-btn:hover {
            background: var(--gold-primary);
            border-color: var(--gold-primary);
            color: var(--white-primary);
        }

        /* Vista de Mensaje Detallado */
        .message-detail-container {
            background: var(--white-primary);
            border-radius: 12px;
            border: 1px solid var(--border-color);
            padding: 40px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
        }

        .message-detail-header {
            padding-bottom: 25px;
            border-bottom: 2px solid var(--border-color);
            margin-bottom: 30px;
        }

        .message-detail-subject {
            font-size: 1.8rem;
            color: var(--black-primary);
            margin-bottom: 15px;
            font-weight: 700;
        }

        .message-detail-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .message-detail-sender {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .sender-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--gold-primary), var(--gold-secondary));
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white-primary);
            font-weight: 600;
            font-size: 1.2rem;
        }

        .sender-info h5 {
            margin: 0;
            font-size: 1.1rem;
            color: var(--black-primary);
        }

        .sender-info p {
            margin: 5px 0 0;
            color: var(--gray-medium);
            font-size: 0.9rem;
        }

        .message-detail-body {
            line-height: 1.8;
            color: var(--gray-dark);
            font-size: 1.05rem;
            padding: 20px 0;
        }

        .message-detail-body p {
            margin-bottom: 20px;
        }

        .message-detail-footer {
            padding-top: 25px;
            border-top: 2px solid var(--border-color);
            margin-top: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        /* Botones de Acción */
        .btn-primary {
            background: var(--black-primary);
            color: var(--white-primary);
            border: 2px solid var(--black-primary);
            padding: 10px 25px;
            font-weight: 600;
            border-radius: 4px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary:hover {
            background: var(--gold-primary);
            border-color: var(--gold-primary);
            color: var(--white-primary);
            transform: translateY(-2px);
        }

        .btn-outline {
            background: transparent;
            color: var(--black-primary);
            border: 2px solid var(--border-color);
            padding: 10px 25px;
            font-weight: 600;
            border-radius: 4px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-outline:hover {
            border-color: var(--gold-primary);
            color: var(--gold-primary);
        }

        /* Paginación */
        .pagination-container {
            margin-top: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .pagination-btn {
            width: 40px;
            height: 40px;
            border: 2px solid var(--border-color);
            border-radius: 8px;
            background: var(--white-primary);
            color: var(--gray-dark);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            cursor: pointer;
            font-weight: 500;
        }

        .pagination-btn:hover,
        .pagination-btn.active {
            background: var(--gold-primary);
            border-color: var(--gold-primary);
            color: var(--white-primary);
        }

        .pagination-btn.disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        /* Estado vacío */
        .empty-state {
            text-align: center;
            padding: 80px 20px;
        }

        .empty-icon {
            font-size: 4rem;
            color: var(--gray-extra-light);
            margin-bottom: 20px;
        }

        .empty-title {
            font-size: 1.8rem;
            color: var(--gray-medium);
            margin-bottom: 15px;
        }

        .empty-description {
            color: var(--gray-light);
            max-width: 500px;
            margin: 0 auto 30px;
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

        /* Responsive - Mejorado */
        @media (max-width: 992px) {
            .inbox-title {
                font-size: 2.8rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .message-detail-container {
                padding: 30px;
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
            
            .inbox-title {
                font-size: 2.2rem;
            }
            
            .inbox-subtitle {
                font-size: 1rem;
            }
            
            .message-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
            
            .message-detail-info {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }
            
            .message-detail-footer {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
        }

        @media (max-width: 576px) {
            .filter-buttons {
                flex-direction: column;
            }
            
            .filter-btn {
                width: 100%;
                text-align: center;
            }
            
            .message-actions {
                flex-direction: column;
            }
            
            .action-btn {
                width: 100%;
                justify-content: center;
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
                    <li class="nav-item">
                        <a class="nav-link" href="/ayuda">Ayuda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacto">Contáctanos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/buzon">Buzón</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="inbox-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="inbox-title fade-in-up">Buzón de <span>Mensajes</span></h1>
                </div>
            </div>
            <p class="text-center" style="animation-delay: 0.2s;">
            Gestiona todas tus comunicaciones en un solo lugar. Revisa, responde y organiza tus mensajes recibidos.
            </p>
        </div>
    </section>

    <!-- Sección Principal -->
    <section class="inbox-main-section">
        <div class="container">
            <!-- Filtros y Búsqueda -->
            <div class="inbox-filters fade-in-up">
                <div class="row align-items-center">
                    <div class="col-lg-4 mb-3 mb-lg-0">
                        <div class="search-box">
                            <input type="text" 
                                   class="form-control" 
                                   placeholder="Buscar en mensajes..."
                                   id="searchInput">
                            <i class="fas fa-search search-icon" id="searchButton"></i>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-3 mb-lg-0">
                        <div class="filter-buttons">
                            <button class="filter-btn active" data-filter="all">Todos</button>
                            <button class="filter-btn" data-filter="unread">No leídos</button>
                            <button class="filter-btn" data-filter="important">Importantes</button>
                            <button class="filter-btn" data-filter="support">Soporte</button>
                        </div>
                    </div>
                    <div class="col-lg-3 text-lg-end">
                        <div class="stats-badge">
                            <i class="fas fa-envelope me-2"></i>
                            <span id="totalMessages">12</span> mensajes
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lista de Mensajes -->
            <div class="messages-container fade-in-up" style="animation-delay: 0.3s;">
                <!-- Mensaje 1 - Importante -->
                <div class="message-item important" data-message-id="1" data-filter="important support">
                    <input type="checkbox" class="message-checkbox">
                    <div class="message-content">
                        <div class="message-header">
                            <div class="message-sender">
                                <i class="fas fa-star text-warning"></i>
                                Soporte Técnico
                            </div>
                            <div class="message-time">Hace 2 horas</div>
                        </div>
                        <div class="message-subject">
                            <i class="fas fa-exclamation-circle text-danger"></i>
                            Urgente: Problema con tu pedido #SV-2024-001
                        </div>
                        <div class="message-preview">
                            Hemos detectado un problema con el procesamiento de tu pedido. Por favor contáctanos inmediatamente para solucionarlo...
                        </div>
                        <div class="message-tags">
                            <span class="message-tag tag-urgent">Urgente</span>
                            <span class="message-tag tag-support">Soporte</span>
                        </div>
                        <div class="message-actions">
                            <button class="action-btn mark-read">
                                <i class="fas fa-check"></i> Marcar como leído
                            </button>
                            <button class="action-btn reply-btn">
                                <i class="fas fa-reply"></i> Responder
                            </button>
                            <button class="action-btn view-btn">
                                <i class="fas fa-eye"></i> Ver
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Mensaje 2 - No leído -->
                <div class="message-item unread" data-message-id="2" data-filter="unread sales">
                    <input type="checkbox" class="message-checkbox">
                    <div class="message-content">
                        <div class="message-header">
                            <div class="message-sender">
                                <i class="fas fa-circle text-info"></i>
                                María González - Departamento de Ventas
                            </div>
                            <div class="message-time">Ayer, 14:30</div>
                        </div>
                        <div class="message-subject">
                            Oferta exclusiva: 20% descuento en nueva colección
                        </div>
                        <div class="message-preview">
                            Como cliente preferencial, queremos ofrecerte un descuento exclusivo del 20% en nuestra nueva colección de primavera...
                        </div>
                        <div class="message-tags">
                            <span class="message-tag tag-sales">Ventas</span>
                            <span class="message-tag tag-general">Promoción</span>
                        </div>
                        <div class="message-actions">
                            <button class="action-btn mark-read">
                                <i class="fas fa-check"></i> Marcar como leído
                            </button>
                            <button class="action-btn reply-btn">
                                <i class="fas fa-reply"></i> Responder
                            </button>
                            <button class="action-btn view-btn">
                                <i class="fas fa-eye"></i> Ver
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Mensaje 3 - Leído -->
                <div class="message-item" data-message-id="3" data-filter="support">
                    <input type="checkbox" class="message-checkbox">
                    <div class="message-content">
                        <div class="message-header">
                            <div class="message-sender">
                                <i class="fas fa-headset"></i>
                                Carlos Ruiz - Atención al Cliente
                            </div>
                            <div class="message-time">25 Mar, 2024</div>
                        </div>
                        <div class="message-subject">
                            Confirmación de devolución #DEV-2024-045
                        </div>
                        <div class="message-preview">
                            Hemos recibido tu solicitud de devolución para el producto "Zapatos de vestir negros". El proceso ha sido aprobado...
                        </div>
                        <div class="message-tags">
                            <span class="message-tag tag-support">Soporte</span>
                            <span class="message-tag tag-general">Devolución</span>
                        </div>
                        <div class="message-actions">
                            <button class="action-btn mark-read">
                                <i class="fas fa-check"></i> Marcar como leído
                            </button>
                            <button class="action-btn reply-btn">
                                <i class="fas fa-reply"></i> Responder
                            </button>
                            <button class="action-btn view-btn">
                                <i class="fas fa-eye"></i> Ver
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Mensaje 4 -->
                <div class="message-item" data-message-id="4" data-filter="general">
                    <input type="checkbox" class="message-checkbox">
                    <div class="message-content">
                        <div class="message-header">
                            <div class="message-sender">
                                <i class="fas fa-bullhorn"></i>
                                Equipo de Marketing
                            </div>
                            <div class="message-time">24 Mar, 2024</div>
                        </div>
                        <div class="message-subject">
                            Nuevo catálogo digital disponible
                        </div>
                        <div class="message-preview">
                            Nos complace presentarte nuestro nuevo catálogo digital de primavera-verano 2024. Descubre las últimas tendencias...
                        </div>
                        <div class="message-tags">
                            <span class="message-tag tag-general">Catálogo</span>
                            <span class="message-tag tag-sales">Novedades</span>
                        </div>
                        <div class="message-actions">
                            <button class="action-btn mark-read">
                                <i class="fas fa-check"></i> Marcar como leído
                            </button>
                            <button class="action-btn reply-btn">
                                <i class="fas fa-reply"></i> Responder
                            </button>
                            <button class="action-btn view-btn">
                                <i class="fas fa-eye"></i> Ver
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Mensaje 5 -->
                <div class="message-item unread" data-message-id="5" data-filter="unread support">
                    <input type="checkbox" class="message-checkbox">
                    <div class="message-content">
                        <div class="message-header">
                            <div class="message-sender">
                                <i class="fas fa-shipping-fast"></i>
                                Logística y Envíos
                            </div>
                            <div class="message-time">23 Mar, 2024</div>
                        </div>
                        <div class="message-subject">
                            Tu pedido #SV-2024-002 ha sido enviado
                        </div>
                        <div class="message-preview">
                            ¡Buenas noticias! Tu pedido ha sido procesado y enviado. Número de seguimiento: TRK-784512369. Fecha estimada de entrega...
                        </div>
                        <div class="message-tags">
                            <span class="message-tag tag-general">Envío</span>
                            <span class="message-tag tag-support">Seguimiento</span>
                        </div>
                        <div class="message-actions">
                            <button class="action-btn mark-read">
                                <i class="fas fa-check"></i> Marcar como leído
                            </button>
                            <button class="action-btn reply-btn">
                                <i class="fas fa-reply"></i> Responder
                            </button>
                            <button class="action-btn view-btn">
                                <i class="fas fa-eye"></i> Ver
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Paginación -->
            <div class="pagination-container fade-in-up" style="animation-delay: 0.4s;">
                <button class="pagination-btn disabled">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="pagination-btn active">1</button>
                <button class="pagination-btn">2</button>
                <button class="pagination-btn">3</button>
                <button class="pagination-btn">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

            <!-- Vista de Mensaje Detallado (Oculto por defecto) -->
            <div id="messageDetail" class="message-detail-container fade-in-up d-none">
                <div class="message-detail-header">
                    <h3 class="message-detail-subject" id="detailSubject">Urgente: Problema con tu pedido #SV-2024-001</h3>
                    <div class="message-detail-info">
                        <div class="message-detail-sender">
                            <div class="sender-avatar">ST</div>
                            <div class="sender-info">
                                <h5 id="detailSender">Soporte Técnico</h5>
                                <p id="detailEmail">solevault2024@gmail.com</p>
                                <p id="detailTime">Hace 2 horas</p>
                            </div>
                        </div>
                        <div class="message-detail-tags">
                            <span class="message-tag tag-urgent">Urgente</span>
                            <span class="message-tag tag-support">Soporte</span>
                        </div>
                    </div>
                </div>
                
                <div class="message-detail-body" id="detailBody">
                    <p>Estimado cliente,</p>
                    
                    <p>Hemos detectado un problema con el procesamiento de tu pedido <strong>#SV-2024-001</strong>. Durante nuestra revisión de calidad, notamos que uno de los artículos solicitados presenta un stock incorrecto en nuestro sistema.</p>
                    
                    <p><strong>Detalles del problema:</strong></p>
                    <ul>
                        <li>Producto: Zapatos deportivos premium - Talla 42</li>
                        <li>Estado actual: Stock agotado temporalmente</li>
                        <li>Fecha estimada de reposición: 5 de abril, 2024</li>
                    </ul>
                    
                    <p><strong>Opciones disponibles:</strong></p>
                    <ol>
                        <li>Esperar a que el producto esté disponible (sin costo adicional)</li>
                        <li>Seleccionar un producto alternativo de similar calidad</li>
                        <li>Cancelar este artículo específico y recibir reembolso</li>
                    </ol>
                    
                    <p>Por favor, contáctanos lo antes posible para informarnos qué opción prefieres. Puedes responder a este mensaje o llamarnos al +52 (919) 114-1608.</p>
                    
                    <p>Lamentamos las molestias y agradecemos tu comprensión. Trabajaremos para resolver este inconveniente de la manera más rápida y satisfactoria posible.</p>
                    
                    <p>Atentamente,<br>
                    <strong>Equipo de Soporte Técnico</strong><br>
                    SoleVault</p>
                </div>
                
                <div class="message-detail-footer">
                    <div>
                        <button class="btn-outline" id="backToList">
                            <i class="fas fa-arrow-left"></i> Volver a la lista
                        </button>
                    </div>
                    <div>
                        <button class="btn-outline me-2" id="replyDetail">
                            <i class="fas fa-reply"></i> Responder
                        </button>
                        <button class="btn-primary" id="markAsReadDetail">
                            <i class="fas fa-check"></i> Marcar como leído
                        </button>
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
                    <p>Email: solevault2024@gmail.com</p>
                    <p>Teléfono: +52 (919) 114-1608</p>
                </div>

            </div>

            <div class="footer-bottom text-center">
                <p>&copy; 2026 SoleVault. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Elementos del DOM
            const messageItems = document.querySelectorAll('.message-item');
            const filterButtons = document.querySelectorAll('.filter-btn');
            const searchInput = document.getElementById('searchInput');
            const searchButton = document.getElementById('searchButton');
            const messageDetail = document.getElementById('messageDetail');
            const backToListBtn = document.getElementById('backToList');
            const totalMessagesSpan = document.getElementById('totalMessages');
            
            // Datos de ejemplo para mensajes detallados
            const messageDetails = {
                1: {
                    subject: 'Urgente: Problema con tu pedido #SV-2024-001',
                    sender: 'Soporte Técnico',
                    email: 'solevault2024@gmail.com',
                    time: 'Hace 2 horas',
                    body: `<p>Estimado cliente,</p>
                    
                    <p>Hemos detectado un problema con el procesamiento de tu pedido <strong>#SV-2024-001</strong>. Durante nuestra revisión de calidad, notamos que uno de los artículos solicitados presenta un stock incorrecto en nuestro sistema.</p>
                    
                    <p><strong>Detalles del problema:</strong></p>
                    <ul>
                        <li>Producto: Zapatos deportivos premium - Talla 42</li>
                        <li>Estado actual: Stock agotado temporalmente</li>
                        <li>Fecha estimada de reposición: 5 de abril, 2024</li>
                    </ul>
                    
                    <p><strong>Opciones disponibles:</strong></p>
                    <ol>
                        <li>Esperar a que el producto esté disponible (sin costo adicional)</li>
                        <li>Seleccionar un producto alternativo de similar calidad</li>
                        <li>Cancelar este artículo específico y recibir reembolso</li>
                    </ol>
                    
                    <p>Por favor, contáctanos lo antes posible para informarnos qué opción prefieres. Puedes responder a este mensaje o llamarnos al +52 (919) 114-1608.</p>
                    
                    <p>Lamentamos las molestias y agradecemos tu comprensión. Trabajaremos para resolver este inconveniente de la manera más rápida y satisfactoria posible.</p>
                    
                    <p>Atentamente,<br>
                    <strong>Equipo de Soporte Técnico</strong><br>
                    SoleVault</p>`
                },
                2: {
                    subject: 'Oferta exclusiva: 20% descuento en nueva colección',
                    sender: 'María González - Departamento de Ventas',
                    email: 'solevault2024@gmail.com',
                    time: 'Ayer, 14:30',
                    body: `<p>Estimado cliente,</p>
                    
                    <p>¡Tenemos excelentes noticias para ti! Como cliente preferencial de SoleVault, queremos ofrecerte un descuento exclusivo del <strong>20%</strong> en nuestra nueva colección de primavera 2024.</p>
                    
                    <p><strong>Detalles de la oferta:</strong></p>
                    <ul>
                        <li>Descuento: 20% en toda la colección primavera</li>
                        <li>Código promocional: SPRING2024</li>
                        <li>Válido hasta: 30 de abril, 2024</li>
                        <li>Aplica en: Todos los productos de la nueva colección</li>
                    </ul>
                    
                    <p><strong>Destacados de la colección:</strong></p>
                    <ul>
                        <li>Zapatos casuales en colores pastel</li>
                        <li>Sneakers premium con tecnología de amortiguación</li>
                        <li>Zapatos formales en piel italiana</li>
                        <li>Ediciones limitadas de diseñador</li>
                    </ul>
                    
                    <p>Para aprovechar esta oferta, simplemente ingresa el código <strong>SPRING2024</strong> al momento de pagar en nuestro sitio web.</p>
                    
                    <p>¡No dejes pasar esta oportunidad exclusiva!</p>
                    
                    <p>Atentamente,<br>
                    <strong>María González</strong><br>
                    Departamento de Ventas<br>
                    SoleVault</p>`
                },
                3: {
                    subject: 'Confirmación de devolución #DEV-2024-045',
                    sender: 'Carlos Ruiz - Atención al Cliente',
                    email: 'solevault2024@gmail.com',
                    time: '25 Mar, 2024',
                    body: `<p>Estimado cliente,</p>
                    
                    <p>Hemos recibido y procesado tu solicitud de devolución <strong>#DEV-2024-045</strong> para el producto "Zapatos de vestir negros - Talla 43".</p>
                    
                    <p><strong>Estado de la devolución:</strong> <span style="color: var(--success-color); font-weight: bold;">APROBADA</span></p>
                    
                    <p><strong>Detalles del proceso:</strong></p>
                    <ul>
                        <li>Producto devuelto: Zapatos de vestir negros</li>
                        <li>Motivo: Talla incorrecta</li>
                        <li>Monto a reembolsar: $1,499.00 MXN</li>
                        <li>Método de reembolso: Tarjeta de crédito original</li>
                        <li>Tiempo estimado: 5-7 días hábiles</li>
                    </ul>
                    
                    <p><strong>Próximos pasos:</strong></p>
                    <ol>
                        <li>Hemos enviado una etiqueta de devolución prepagada a tu email</li>
                        <li>Empaca el producto en su caja original con todos los accesorios</li>
                        <li>Pega la etiqueta en el paquete y llévalo a la paquetería</li>
                        <li>Recibirás confirmación por email una vez que recibamos el paquete</li>
                        <li>El reembolso se procesará automáticamente</li>
                    </ol>
                    
                    <p>Si tienes alguna pregunta sobre este proceso, no dudes en responder a este mensaje.</p>
                    
                    <p>Atentamente,<br>
                    <strong>Carlos Ruiz</strong><br>
                    Atención al Cliente<br>
                    SoleVault</p>`
                }
            };

            // Inicializar contador de mensajes
            updateMessageCount();

            // Filtrado de mensajes
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remover clase active de todos los botones
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Agregar clase active al botón clickeado
                    this.classList.add('active');
                    
                    const filter = this.getAttribute('data-filter');
                    filterMessages(filter);
                });
            });

            // Búsqueda de mensajes
            searchButton.addEventListener('click', performSearch);
            searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    performSearch();
                }
            });

            // Acciones en mensajes
            messageItems.forEach(item => {
                // Ver mensaje
                item.querySelector('.view-btn').addEventListener('click', function() {
                    const messageId = item.getAttribute('data-message-id');
                    showMessageDetail(messageId);
                });
                
                // Marcar como leído
                item.querySelector('.mark-read').addEventListener('click', function() {
                    markAsRead(item);
                });
                
                // Responder
                item.querySelector('.reply-btn').addEventListener('click', function() {
                    const messageId = item.getAttribute('data-message-id');
                    replyToMessage(messageId);
                });
                
                // Click en el mensaje
                item.addEventListener('click', function(e) {
                    // No activar si se hace click en el checkbox o botones
                    if (!e.target.classList.contains('message-checkbox') && 
                        !e.target.closest('.action-btn')) {
                        const messageId = item.getAttribute('data-message-id');
                        showMessageDetail(messageId);
                    }
                });
            });

            // Botón volver a la lista
            backToListBtn.addEventListener('click', function() {
                messageDetail.classList.add('d-none');
                document.querySelector('.messages-container').classList.remove('d-none');
                document.querySelector('.pagination-container').classList.remove('d-none');
                document.querySelector('.inbox-filters').classList.remove('d-none');
            });

            // Marcar como leído desde vista detallada
            document.getElementById('markAsReadDetail').addEventListener('click', function() {
                const currentMessageId = messageDetail.getAttribute('data-message-id');
                const messageItem = document.querySelector(`.message-item[data-message-id="${currentMessageId}"]`);
                if (messageItem) {
                    markAsRead(messageItem);
                }
            });

            // Responder desde vista detallada
            document.getElementById('replyDetail').addEventListener('click', function() {
                const messageId = messageDetail.getAttribute('data-message-id');
                replyToMessage(messageId);
            });

            // Funciones
            function filterMessages(filter) {
                messageItems.forEach(item => {
                    const itemFilters = item.getAttribute('data-filter');
                    
                    if (filter === 'all' || itemFilters.includes(filter)) {
                        item.style.display = 'flex';
                    } else {
                        item.style.display = 'none';
                    }
                });
                
                updateMessageCount();
            }

            function performSearch() {
                const searchTerm = searchInput.value.toLowerCase().trim();
                
                if (!searchTerm) {
                    // Si no hay término de búsqueda, mostrar todos los mensajes
                    messageItems.forEach(item => {
                        item.style.display = 'flex';
                    });
                    return;
                }
                
                messageItems.forEach(item => {
                    const subject = item.querySelector('.message-subject').textContent.toLowerCase();
                    const preview = item.querySelector('.message-preview').textContent.toLowerCase();
                    const sender = item.querySelector('.message-sender').textContent.toLowerCase();
                    
                    if (subject.includes(searchTerm) || preview.includes(searchTerm) || sender.includes(searchTerm)) {
                        item.style.display = 'flex';
                    } else {
                        item.style.display = 'none';
                    }
                });
                
                updateMessageCount();
            }

            function showMessageDetail(messageId) {
                const detail = messageDetails[messageId];
                
                if (detail) {
                    // Actualizar contenido
                    document.getElementById('detailSubject').textContent = detail.subject;
                    document.getElementById('detailSender').textContent = detail.sender;
                    document.getElementById('detailEmail').textContent = detail.email;
                    document.getElementById('detailTime').textContent = detail.time;
                    document.getElementById('detailBody').innerHTML = detail.body;
                    
                    // Guardar ID del mensaje actual
                    messageDetail.setAttribute('data-message-id', messageId);
                    
                    // Mostrar vista detallada y ocultar lista
                    messageDetail.classList.remove('d-none');
                    document.querySelector('.messages-container').classList.add('d-none');
                    document.querySelector('.pagination-container').classList.add('d-none');
                    document.querySelector('.inbox-filters').classList.add('d-none');
                    
                    // Marcar como leído
                    const messageItem = document.querySelector(`.message-item[data-message-id="${messageId}"]`);
                    if (messageItem && messageItem.classList.contains('unread')) {
                        markAsRead(messageItem);
                    }
                }
            }

            function markAsRead(messageItem) {
                messageItem.classList.remove('unread');
                
                // Actualizar icono de no leído
                const senderIcon = messageItem.querySelector('.message-sender .fa-circle');
                if (senderIcon) {
                    senderIcon.classList.remove('fa-circle', 'text-info');
                    senderIcon.classList.add('fa-check-circle', 'text-success');
                }
                
                updateMessageCount();
            }

            function replyToMessage(messageId) {
                const detail = messageDetails[messageId];
                if (detail) {
                    const subject = `Re: ${detail.subject}`;
                    const to = detail.email;
                    
                    // En una aplicación real, esto abriría un formulario de respuesta
                    // Por ahora, mostramos un alert
                    alert(`Redirigiendo a formulario de respuesta:\n\nPara: ${to}\nAsunto: ${subject}`);
                    
                    // Simulación: redirigir a contacto con datos prellenados
                    // window.location.href = `/contacto?reply_to=${encodeURIComponent(to)}&subject=${encodeURIComponent(subject)}`;
                }
            }

            function updateMessageCount() {
                const visibleMessages = Array.from(messageItems).filter(item => 
                    item.style.display !== 'none'
                ).length;
                
                const unreadMessages = Array.from(messageItems).filter(item => 
                    item.style.display !== 'none' && item.classList.contains('unread')
                ).length;
                
                totalMessagesSpan.textContent = `${visibleMessages} (${unreadMessages} no leídos)`;
            }

            // Inicializar con todos los mensajes visibles
            filterMessages('all');

            // Animar elementos al cargar
            const animatedElements = document.querySelectorAll('.fade-in-up');
            animatedElements.forEach((element, index) => {
                element.style.animationDelay = `${index * 0.1}s`;
            });
        });
    </script>
</body>
</html>