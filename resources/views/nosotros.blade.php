@extends('layouts.app')

@section('title', 'Nosotros - SoleVault')

@section('styles')
<style>
    .about-hero {
        background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), 
                    url('https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80');
        background-size: cover;
        background-position: center;
        padding: 120px 0 80px;
        color: var(--white-primary);
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .about-hero::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100px;
        background: linear-gradient(to bottom, transparent, var(--white-primary));
    }

    .about-hero-title {
        font-family: 'Playfair Display', serif;
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        color: var(--white-primary);
        position: relative;
        display: inline-block;
    }

    .about-hero-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 3px;
        background: var(--gold-primary);
    }

    .about-hero-subtitle {
        font-size: 1.2rem;
        color: var(--gray-extra-light);
        max-width: 700px;
        margin: 0 auto 40px;
        line-height: 1.6;
    }

    .mission-section {
        padding: 100px 0;
        background: var(--white-primary);
    }

    .mission-card {
        background: var(--white-primary);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        padding: 40px;
        text-align: center;
        transition: all 0.3s ease;
        height: 100%;
        position: relative;
        overflow: hidden;
    }

    .mission-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: var(--gold-primary);
        transform: translateY(-100%);
        transition: transform 0.3s ease;
    }

    .mission-card:hover::before {
        transform: translateY(0);
    }

    .mission-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        border-color: var(--gold-primary);
    }

    .mission-icon {
        width: 80px;
        height: 80px;
        background: var(--gold-primary);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
        color: var(--white-primary);
        font-size: 2rem;
    }

    .mission-title {
        font-family: 'Playfair Display', serif;
        font-size: 1.5rem;
        color: var(--black-primary);
        margin-bottom: 15px;
        font-weight: 600;
    }

    .mission-text {
        color: var(--gray-medium);
        line-height: 1.6;
        font-size: 0.95rem;
    }

    .story-section {
        padding: 100px 0;
        background: var(--white-secondary);
        position: relative;
    }

    .story-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 1px;
        background: var(--border-color);
    }

    .story-image {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        border: 1px solid var(--border-color);
        height: 500px;
        position: relative;
    }

    .story-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .story-image:hover img {
        transform: scale(1.05);
    }

    .story-content {
        padding-left: 40px;
    }

    .story-title {
        font-family: 'Playfair Display', serif;
        font-size: 2.5rem;
        color: var(--black-primary);
        margin-bottom: 25px;
        position: relative;
        display: inline-block;
    }

    .story-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 80px;
        height: 3px;
        background: var(--gold-primary);
    }

    .story-text {
        color: var(--gray-medium);
        line-height: 1.8;
        margin-bottom: 25px;
        font-size: 1rem;
    }

    .story-highlight {
        background: var(--white-primary);
        border-left: 4px solid var(--gold-primary);
        padding: 25px;
        margin: 30px 0;
        border-radius: 0 8px 8px 0;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
    }

    .story-highlight p {
        font-family: 'Playfair Display', serif;
        font-size: 1.3rem;
        color: var(--black-primary);
        font-style: italic;
        margin: 0;
        line-height: 1.5;
    }

    .story-highlight p::before,
    .story-highlight p::after {
        content: '"';
        color: var(--gold-primary);
        font-size: 1.5rem;
    }

    .values-section {
        padding: 100px 0;
        background: var(--white-primary);
    }

    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        margin-top: 50px;
    }

    .value-card {
        background: var(--white-secondary);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        padding: 35px 30px;
        text-align: center;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .value-card:hover {
        transform: translateY(-5px);
        border-color: var(--gold-primary);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
    }

    .value-number {
        position: absolute;
        top: 15px;
        right: 15px;
        font-size: 3rem;
        font-weight: 700;
        color: var(--gold-primary);
        opacity: 0.1;
        font-family: 'Playfair Display', serif;
    }

    .value-icon {
        width: 70px;
        height: 70px;
        background: var(--white-primary);
        border: 2px solid var(--gold-primary);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        color: var(--gold-primary);
        font-size: 1.8rem;
    }

    .value-title {
        font-family: 'Playfair Display', serif;
        font-size: 1.3rem;
        color: var(--black-primary);
        margin-bottom: 15px;
        font-weight: 600;
    }

    .value-text {
        color: var(--gray-medium);
        line-height: 1.6;
        font-size: 0.9rem;
    }

    .team-section {
        padding: 100px 0;
        background: var(--white-secondary);
    }

    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        margin-top: 50px;
    }

    .team-card {
        background: var(--white-primary);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .team-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        border-color: var(--gold-primary);
    }

    .team-image {
        height: 250px;
        overflow: hidden;
        position: relative;
    }

    .team-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .team-card:hover .team-image img {
        transform: scale(1.1);
    }

    .team-info {
        padding: 25px;
        text-align: center;
    }

    .team-name {
        font-family: 'Playfair Display', serif;
        font-size: 1.3rem;
        color: var(--black-primary);
        margin-bottom: 5px;
        font-weight: 600;
    }

    .team-position {
        color: var(--gold-primary);
        font-size: 0.9rem;
        font-weight: 500;
        margin-bottom: 15px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .team-bio {
        color: var(--gray-medium);
        font-size: 0.9rem;
        line-height: 1.5;
        margin-bottom: 20px;
    }

    .team-social {
        display: flex;
        justify-content: center;
        gap: 15px;
    }

    .team-social a {
        width: 36px;
        height: 36px;
        background: var(--white-tertiary);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--gray-medium);
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .team-social a:hover {
        background: var(--gold-primary);
        color: var(--white-primary);
        transform: translateY(-3px);
    }

    .contact-section {
        padding: 80px 0;
        background: var(--black-primary);
        color: var(--white-primary);
        text-align: center;
    }

    .contact-title {
        font-family: 'Playfair Display', serif;
        font-size: 2.5rem;
        margin-bottom: 20px;
        color: var(--white-primary);
    }

    .contact-text {
        color: var(--gray-extra-light);
        max-width: 700px;
        margin: 0 auto 40px;
        font-size: 1.1rem;
        line-height: 1.6;
    }

    .btn-contact {
        background: var(--gold-primary);
        color: var(--black-primary);
        border: 2px solid var(--gold-primary);
        padding: 14px 40px;
        font-weight: 600;
        border-radius: 8px;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease;
        font-size: 0.95rem;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }

    .btn-contact:hover {
        background: transparent;
        color: var(--gold-primary);
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(212, 175, 55, 0.2);
    }

    /* Responsive */
    @media (max-width: 992px) {
        .about-hero-title {
            font-size: 2.8rem;
        }
        
        .story-content {
            padding-left: 0;
            margin-top: 40px;
        }
        
        .story-image {
            height: 400px;
        }
    }

    @media (max-width: 768px) {
        .about-hero {
            padding: 100px 0 60px;
        }
        
        .about-hero-title {
            font-size: 2.2rem;
        }
        
        .about-hero-subtitle {
            font-size: 1rem;
        }
        
        .mission-section,
        .story-section,
        .values-section,
        .team-section {
            padding: 60px 0;
        }
        
        .mission-card,
        .value-card {
            padding: 25px 20px;
        }
        
        .story-title {
            font-size: 2rem;
        }
        
        .contact-title {
            font-size: 2rem;
        }
        
        .team-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
    }

    @media (max-width: 576px) {
        .about-hero-title {
            font-size: 1.8rem;
        }
        
        .values-grid {
            grid-template-columns: 1fr;
        }
        
        .btn-contact {
            width: 100%;
            justify-content: center;
        }
    }

    /* Animaciones */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-in-up {
        animation: fadeInUp 0.6s ease forwards;
    }

    .stagger-delay-1 { animation-delay: 0.1s; }
    .stagger-delay-2 { animation-delay: 0.2s; }
    .stagger-delay-3 { animation-delay: 0.3s; }
    .stagger-delay-4 { animation-delay: 0.4s; }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="about-hero">
    <div class="container">
        <h1 class="about-hero-title fade-in-up">SOBRE NOSOTROS</h1>
        <p class="about-hero-subtitle fade-in-up stagger-delay-1">
            En SoleVault, no solo vendemos tenis de lujo; creamos experiencias exclusivas 
            para los verdaderos coleccionistas y amantes del calzado premium.
        </p>
        <div class="fade-in-up stagger-delay-2">
            <a href="#mision" class="btn btn-luxury me-3">Nuestra Misión</a>
            <a href="#equipo" class="btn btn-outline-light">Conoce al Equipo</a>
        </div>
    </div>
</section>

<!-- Misión, Visión y Valores -->
<section id="mision" class="mission-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="mission-card fade-in-up">
                    <div class="mission-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="mission-title">Nuestra Misión</h3>
                    <p class="mission-text">
                        Ser el destino definitivo para los coleccionistas de tenis de lujo, 
                        ofreciendo productos exclusivos, autenticidad garantizada y una 
                        experiencia de compra sin igual.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mission-card fade-in-up stagger-delay-1">
                    <div class="mission-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="mission-title">Nuestra Visión</h3>
                    <p class="mission-text">
                        Transformar la forma en que el mundo adquiere y aprecia los tenis 
                        de lujo, estableciendo un estándar de excelencia y exclusividad 
                        en la industria del calzado premium.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mission-card fade-in-up stagger-delay-2">
                    <div class="mission-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3 class="mission-title">Nuestra Filosofía</h3>
                    <p class="mission-text">
                        Cada par cuenta una historia. Nos dedicamos a preservar la esencia 
                        del diseño, la calidad y la exclusividad que define a las marcas 
                        más prestigiosas del mundo.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nuestra Historia -->
<section class="story-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="story-image fade-in-up">
                    <img src="https://images.unsplash.com/photo-1551107696-a4b0c5a0d9a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80" 
                         alt="Historia SoleVault">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="story-content fade-in-up stagger-delay-1">
                    <h2 class="story-title">Nuestra Historia</h2>
                    <p class="story-text">
                        Fundada en 2020 por un grupo de apasionados coleccionistas de tenis, 
                        SoleVault nació de una simple idea: crear un espacio donde la exclusividad 
                        y la autenticidad fueran la norma, no la excepción.
                    </p>
                    <p class="story-text">
                        Lo que comenzó como un proyecto entre amigos se ha convertido en el 
                        referente de tenis de lujo en Latinoamérica. Hoy, trabajamos directamente 
                        con las marcas más exclusivas y colaboramos con diseñadores para 
                        ofrecer ediciones limitadas imposibles de encontrar en otro lugar.
                    </p>
                    <div class="story-highlight fade-in-up stagger-delay-2">
                        <p>No vendemos zapatos, vendemos piezas de arte para tus pies.</p>
                    </div>
                    <p class="story-text">
                        Cada par que pasa por nuestras manos es cuidadosamente autenticado 
                        por nuestro equipo de expertos, garantizando que recibas únicamente 
                        productos 100% originales y en perfecto estado.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nuestros Valores -->
<section class="values-section">
    <div class="container">
        <h2 class="section-title text-center">Lo Que Nos Define</h2>
        <p class="text-center text-muted mb-5">Los principios que guían cada decisión que tomamos</p>
        
        <div class="values-grid">
            <div class="value-card fade-in-up">
                <div class="value-number">01</div>
                <div class="value-icon">
                    <i class="fas fa-gem"></i>
                </div>
                <h4 class="value-title">Autenticidad</h4>
                <p class="value-text">
                    Garantizamos la originalidad de cada producto con un proceso de 
                    verificación de 5 pasos realizado por expertos certificados.
                </p>
            </div>
            
            <div class="value-card fade-in-up stagger-delay-1">
                <div class="value-number">02</div>
                <div class="value-icon">
                    <i class="fas fa-crown"></i>
                </div>
                <h4 class="value-title">Exclusividad</h4>
                <p class="value-text">
                    Acceso a ediciones limitadas, colaboraciones exclusivas y productos 
                    que no encontrarás en ningún otro retailer.
                </p>
            </div>
            
            <div class="value-card fade-in-up stagger-delay-2">
                <div class="value-number">03</div>
                <div class="value-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h4 class="value-title">Confianza</h4>
                <p class="value-text">
                    Relaciones a largo plazo basadas en la transparencia y la integridad 
                    en cada transacción.
                </p>
            </div>
            
            <div class="value-card fade-in-up stagger-delay-3">
                <div class="value-number">04</div>
                <div class="value-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h4 class="value-title">Pasion</h4>
                <p class="value-text">
                    Amamos los tenis tanto como tú. Nuestro equipo está compuesto por 
                    verdaderos expertos y entusiastas.
                </p>
            </div>
            
            <div class="value-card fade-in-up stagger-delay-4">
                <div class="value-number">05</div>
                <div class="value-icon">
                    <i class="fas fa-award"></i>
                </div>
                <h4 class="value-title">Excelencia</h4>
                <p class="value-text">
                    Desde la selección de productos hasta el servicio al cliente, 
                    buscamos la perfección en cada detalle.
                </p>
            </div>
            
            <div class="value-card fade-in-up stagger-delay-1">
                <div class="value-number">06</div>
                <div class="value-icon">
                    <i class="fas fa-globe"></i>
                </div>
                <h4 class="value-title">Comunidad</h4>
                <p class="value-text">
                    Creamos conexiones entre coleccionistas, organizamos eventos 
                    exclusivos y fomentamos la cultura sneaker.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Nuestro Equipo -->
<section id="equipo" class="team-section">
    <div class="container">
        <h2 class="section-title text-center">El Equipo SoleVault</h2>
        <p class="text-center text-muted mb-5">Expertos apasionados que hacen posible la magia</p>
        
        <div class="team-grid">
            <div class="team-card fade-in-up">
                <div class="team-image">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Alejandro Rodríguez">
                </div>
                <div class="team-info">
                    <h4 class="team-name">Alejandro Rodríguez</h4>
                    <p class="team-position">Fundador & CEO</p>
                    <p class="team-bio">
                        Coleccionista desde los 15 años. Su pasión por los sneakers 
                        lo llevó a crear SoleVault tras años de experiencia en retail de lujo.
                    </p>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="team-card fade-in-up stagger-delay-1">
                <div class="team-image">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Valeria Martínez">
                </div>
                <div class="team-info">
                    <h4 class="team-name">Valeria Martínez</h4>
                    <p class="team-position">Directora de Compras</p>
                    <p class="team-bio">
                        Ex-ejecutiva de moda de lujo con conexiones globales. 
                        Su ojo para el detalle asegura que solo lo mejor llegue a nuestra colección.
                    </p>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="team-card fade-in-up stagger-delay-2">
                <div class="team-image">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Carlos Mendoza">
                </div>
                <div class="team-info">
                    <h4 class="team-name">Carlos Mendoza</h4>
                    <p class="team-position">Experto en Autenticación</p>
                    <p class="team-bio">
                        10 años de experiencia verificando sneakers. Puede identificar 
                        un producto falso con solo mirarlo. Nuestro guardián de la autenticidad.
                    </p>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="team-card fade-in-up stagger-delay-3">
                <div class="team-image">
                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Isabel Chen">
                </div>
                <div class="team-info">
                    <h4 class="team-name">Isabel Chen</h4>
                    <p class="team-position">Diseñadora de Experiencia</p>
                    <p class="team-bio">
                        Premiada diseñadora UX/UI que crea la magia digital de SoleVault. 
                        Su misión: hacer que cada clic sea una experiencia memorable.
                    </p>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contacto -->
<section class="contact-section">
    <div class="container">
        <h2 class="contact-title fade-in-up">¿Listo para Elevar tu Colección?</h2>
        <p class="contact-text fade-in-up stagger-delay-1">
            Únete a nuestra comunidad exclusiva de coleccionistas y descubre 
            el mundo de posibilidades que SoleVault tiene para ofrecerte.
        </p>
        <div class="fade-in-up stagger-delay-2">
            <a href="{{ route('contacto') }}" class="btn-contact">
                <i class="fas fa-envelope me-2"></i> Contáctanos
            </a>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animaciones al hacer scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in-up');
                }
            });
        }, observerOptions);
        
        // Observar todos los elementos que deben animarse
        document.querySelectorAll('.mission-card, .value-card, .team-card').forEach(el => {
            observer.observe(el);
        });
    });
</script>
@endsection