@extends('layouts.app')

@section('title', 'SoleVault - Tenis de Lujo Exclusivos')

@section('styles')
<style>
    .hero-image-1 {
        background: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.1)), 
                    url('https://www.mundoejecutivo.com.mx/wp-content/uploads/2023/02/image-13.png');
        background-size: cover;
        background-position: center;
        height: 500px;
        border-radius: 12px;
    }
    
    .hero-image-2 {
        background: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.1)), 
                    url('https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80');
        background-size: cover;
        background-position: center;
        height: 500px;
        border-radius: 12px;
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="hero-title">COLECCIÓN <span>EXCLUSIVA</span></h1>
                <p class="hero-subtitle">Descubre los tenis de lujo más codiciados del mercado. Desde ediciones limitadas hasta clásicos reimaginados, cada par cuenta una historia de excelencia.</p>
                <div class="d-flex gap-3">
                    <a href="{{ route('servicios') }}" class="btn btn-luxury">Explorar Colección</a>
                    <a href="#marcas" class="btn btn-outline-dark">Ver Marcas</a>
                </div>
                <div class="mt-4">
                    <p class="small text-muted mb-1">Envío gratuito en compras superiores a $20,000 MXN</p>
                    <p class="small text-muted mb-0">Garantía de autenticidad 100% verificada</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image-1"></div>
            </div>
        </div>
    </div>
</section>

<!-- Marcas Exclusivas -->
<section id="marcas" class="brands-section">
    <div class="container">
        <h2 class="section-title text-center">MARCAS EXCLUSIVAS</h2>
        <p class="text-center text-muted mb-5">Colaboramos con las marcas más prestigiosas del mundo del calzado de lujo</p>
        
        <div class="brand-grid">
            <!-- Logos reales de las marcas -->
            <div class="brand-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Alexander_McQueen_2018_logo.svg/640px-Alexander_McQueen_2018_logo.svg.png" 
                     alt="Alexander McQueen" class="brand-logo" style="height: 35px;">
                <span class="brand-name">Alexander McQueen</span>
            </div>
            
            <div class="brand-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a6/Logo_NIKE.svg/2560px-Logo_NIKE.svg.png" 
                     alt="Nike" class="brand-logo" style="height: 40px;">
                <span class="brand-name">Air Jordan</span>
            </div>
            
            <div class="brand-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Dior_Logo_2022.svg/640px-Dior_Logo_2022.svg.png" 
                     alt="Dior" class="brand-logo" style="height: 40px;">
                <span class="brand-name">Dior</span>
            </div>
            
            <div class="brand-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Balenciaga2017Logo.svg/640px-Balenciaga2017Logo.svg.png" 
                     alt="Balenciaga" class="brand-logo" style="height: 15px;">
                <span class="brand-name">Balenciaga</span>
            </div>
            
            <div class="brand-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Adidas_Yeezy_Logo.png/640px-Adidas_Yeezy_Logo.png" 
                     alt="Yeezy" class="brand-logo" style="height: 40px;">
                <span class="brand-name">Yeezy</span>
            </div>
            
            <div class="brand-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/1960s_Gucci_Logo.svg/640px-1960s_Gucci_Logo.svg.png" 
                     alt="Gucci" class="brand-logo" style="height: 50px;">
                <span class="brand-name">Gucci</span>
            </div>
            
            <div class="brand-item">
                <img src="https://static.vecteezy.com/system/resources/previews/022/076/746/non_2x/puma-logo-and-art-free-vector.jpg" 
                     alt="Puma" class="brand-logo" style="height: 70px;">
                <span class="brand-name">Puma</span>
            </div>
            
            <div class="brand-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Adidas_Logo.svg/2560px-Adidas_Logo.svg.png" 
                     alt="Adidas" class="brand-logo" style="height: 40px;">
                <span class="brand-name">Adidas</span>
            </div>
        </div>
    </div>
</section>

<!-- Catálogo de Productos -->
<section class="featured-products">
    <div class="container">
        <h2 class="section-title text-center">COLECCIÓN DESTACADA</h2>
        <p class="text-center text-muted mb-5">Productos exclusivos seleccionados especialmente para ti</p>
        
        <div class="product-grid">
            <!-- Producto 1 -->
            <div class="product-card fade-in-up">
                <div class="product-image-container">
                    <img src="https://cdn.media.amplience.net/i/frasersdev/11520790_o.jpg?v=20251008133425" 
                         alt="Alexander McQueen Oversized" class="product-image">
                    <span class="product-badge">Nuevo</span>
                </div>
                <div class="product-info">
                    <span class="product-category">Alexander McQueen</span>
                    <h3 class="product-name">Oversized Sneakers Black</h3>
                    <p class="product-description">Zapato deportivo de lujo con plataforma y diseño oversize en cuero negro.</p>
                    <div class="product-price">$24,999 MXN</div>
                    <button class="btn btn-view">Ver Detalles</button>
                </div>
            </div>
            
            <!-- Producto 2 -->
            <div class="product-card fade-in-up">
                <div class="product-image-container">
                    <img src="https://99store.mx/cdn/shop/files/AURORA_DZ5485-010_PHSLH000-2000_a0fa4387-8c57-4d57-a27b-5675cba21053.png?v=1738707799&width=1946" 
                         alt="Air Jordan 1 Retro" class="product-image">
                    <span class="product-badge">Popular</span>
                </div>
                <div class="product-info">
                    <span class="product-category">Nike Air Jordan</span>
                    <h3 class="product-name">Air Jordan 1 Retro High</h3>
                    <p class="product-description">Edición especial "Chicago" en cuero premium, numerada y limitada.</p>
                    <div class="product-price">$15,999 MXN <span>$18,999 MXN</span></div>
                    <button class="btn btn-view">Ver Detalles</button>
                </div>
            </div>
            
            <!-- Producto 3 -->
            <div class="product-card fade-in-up">
                <div class="product-image-container">
                    <img src="https://assets.christiandior.com/is/image/diorprod/3SH118YJPH069_SBG_E02-1?$r2x3_raw$&crop=0,0,4000,5000&wid=1334&hei=2000&scale=1&bfc=on&qlt=85" 
                         alt="Dior B23" class="product-image">
                    <span class="product-badge">Exclusivo</span>
                </div>
                <div class="product-info">
                    <span class="product-category">Christian Dior</span>
                    <h3 class="product-name">Dior B23 High-Top Oblique</h3>
                    <p class="product-description">Tenis alto con estampado Oblique, en tejido técnico y detalles en cuero.</p>
                    <div class="product-price">$34,999 MXN</div>
                    <button class="btn btn-view">Ver Detalles</button>
                </div>
            </div>
            
            <!-- Producto 4 -->
            <div class="product-card fade-in-up">
                <div class="product-image-container">
                    <img src="https://balenciaga.dam.kering.com/m/69b52d6029d97bd2/Medium-541624W2FB11000_F.jpg?v=9" 
                         alt="Balenciaga Triple S" class="product-image">
                    <span class="product-badge">Limitado</span>
                </div>
                <div class="product-info">
                    <span class="product-category">Balenciaga</span>
                    <h3 class="product-name">Triple S Clear Sole</h3>
                    <p class="product-description">Sneaker con suela transparente y múltiples capas, edición primavera 2024.</p>
                    <div class="product-price">$28,999 MXN</div>
                    <button class="btn btn-view">Ver Detalles</button>
                </div>
            </div>
            
            <!-- Producto 5 -->
            <div class="product-card fade-in-up">
                <div class="product-image-container">
                    <img src="https://cdn-images.farfetch-contents.com/12/43/12/89/12431289_59827171_600.jpg" 
                         alt="Yeezy Boost 350" class="product-image">
                    <span class="product-badge">Oferta</span>
                </div>
                <div class="product-info">
                    <span class="product-category">Adidas Yeezy</span>
                    <h3 class="product-name">Yeezy Boost 350 V2 "Zebra"</h3>
                    <p class="product-description">Tenis con tecnología Boost, estampado zebra y construcción Primeknit.</p>
                    <div class="product-price">$12,999 MXN <span>$15,999 MXN</span></div>
                    <button class="btn btn-view">Ver Detalles</button>
                </div>
            </div>
            
            <!-- Producto 6 -->
            <div class="product-card fade-in-up">
                <div class="product-image-container">
                    <img src="https://rainycloudsog.com/wp-content/uploads/2022/08/Gucci-Ace-Embroidered-Bees-and-Stars-White1.webp" 
                         alt="Gucci Ace" class="product-image">
                    <span class="product-badge">Clásico</span>
                </div>
                <div class="product-info">
                    <span class="product-category">Gucci</span>
                    <h3 class="product-name">Ace Sneaker Bee Embroidery</h3>
                    <p class="product-description">Tenis de cuero blanco con bordado de abeja y detalles en rojo y verde.</p>
                    <div class="product-price">$26,999 MXN</div>
                    <button class="btn btn-view">Ver Detalles</button>
                </div>
            </div>
            
            <!-- Producto 7 -->
            <div class="product-card fade-in-up">
                <div class="product-image-container">
                    <img src="https://media.foot-store.com/catalog/product/cache/image/1800x/9df78eab33525d08d6e5fb8d27136e95/3/7/371570-20_1_basket-rs-x-puzzle.jpg" 
                         alt="Puma RS-X" class="product-image">
                    <span class="product-badge">Deportivo</span>
                </div>
                <div class="product-info">
                    <span class="product-category">Puma</span>
                    <h3 class="product-name">RS-X Toys "Puzzle"</h3>
                    <p class="product-description">Edición colaboración con Toys, diseño colorido y tecnología RS.</p>
                    <div class="product-price">$8,999 MXN</div>
                    <button class="btn btn-view">Ver Detalles</button>
                </div>
            </div>
            
            <!-- Producto 8 -->
            <div class="product-card fade-in-up">
                <div class="product-image-container">
                    <img src="https://converse.com.mx/media/catalog/product/a/0/a08149c-3_rpe3s0oaaagsp0wx.jpg" 
                         alt="Converse x Comme" class="product-image">
                    <span class="product-badge">Colaboración</span>
                </div>
                <div class="product-info">
                    <span class="product-category">Converse</span>
                    <h3 class="product-name">Chuck 70 Comme des Garçons</h3>
                    <p class="product-description">Play Heart, edición limitada en cuero blanco con logo heart.</p>
                    <div class="product-price">$6,999 MXN</div>
                    <button class="btn btn-view">Ver Detalles</button>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('servicios') }}" class="btn btn-luxury px-5">Ver Todos los Productos</a>
        </div>
    </div>
</section>

<!-- Banner Promocional -->
<section class="py-5" style="background: var(--black-primary);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h3 class="text-white mb-3">¿Buscas algo específico?</h3>
                <p class="text-white-50 mb-0">Nuestros expertos en tenis de lujo pueden ayudarte a encontrar el par perfecto.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('contacto') }}" class="btn btn-luxury">Contactar Asesor</a>
            </div>
        </div>
    </div>
</section>
@endsection