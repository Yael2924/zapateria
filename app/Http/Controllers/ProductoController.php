<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    private $productos = [
        [
            'id' => 1,
            'nombre' => 'Alexander McQueen Oversized Sneakers Black',
            'marca' => 'Alexander McQueen',
            'precio' => 24999,
            'categoria' => 'Luxury Sneakers',
            'descripcion' => 'Zapato deportivo de lujo con plataforma y diseño oversize en cuero negro.',
            'imagen' => 'https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
        ],
        [
            'id' => 2,
            'nombre' => 'Air Jordan 1 Retro High "Chicago"',
            'marca' => 'Nike',
            'precio' => 15999,
            'categoria' => 'Basketball',
            'descripcion' => 'Edición especial "Chicago" en cuero premium, numerada y limitada.',
            'imagen' => 'https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
        ],
        [
            'id' => 3,
            'nombre' => 'Dior B23 High-Top Oblique',
            'marca' => 'Christian Dior',
            'precio' => 34999,
            'categoria' => 'High Fashion',
            'descripcion' => 'Tenis alto con estampado Oblique, en tejido técnico y detalles en cuero.',
            'imagen' => 'https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
        ],
        [
            'id' => 4,
            'nombre' => 'Balenciaga Triple S Clear Sole',
            'marca' => 'Balenciaga',
            'precio' => 28999,
            'categoria' => 'Chunky Sneakers',
            'descripcion' => 'Sneaker con suela transparente y múltiples capas, edición primavera 2024.',
            'imagen' => 'https://images.unsplash.com/photo-1551107696-a4b0c5a0d9a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
        ],
        [
            'id' => 5,
            'nombre' => 'Yeezy Boost 350 V2 "Zebra"',
            'marca' => 'Adidas',
            'precio' => 12999,
            'categoria' => 'Lifestyle',
            'descripcion' => 'Tenis con tecnología Boost, estampado zebra y construcción Primeknit.',
            'imagen' => 'https://images.unsplash.com/photo-1600269452121-4f2416e55c28?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
        ],
        [
            'id' => 6,
            'nombre' => 'Gucci Ace Sneaker Bee Embroidery',
            'marca' => 'Gucci',
            'precio' => 26999,
            'categoria' => 'Luxury',
            'descripcion' => 'Tenis de cuero blanco con bordado de abeja y detalles en rojo y verde.',
            'imagen' => 'https://images.unsplash.com/photo-1579338559194-a162d19bf842?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
        ],
        [
            'id' => 7,
            'nombre' => 'Puma RS-X Toys "Puzzle"',
            'marca' => 'Puma',
            'precio' => 8999,
            'categoria' => 'Collaboration',
            'descripcion' => 'Edición colaboración con Toys, diseño colorido y tecnología RS.',
            'imagen' => 'https://images.unsplash.com/photo-1512374382149-233c42b6a83b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
        ],
        [
            'id' => 8,
            'nombre' => 'Converse Chuck 70 Comme des Garçons',
            'marca' => 'Converse',
            'precio' => 6999,
            'categoria' => 'Collaboration',
            'descripcion' => 'Play Heart, edición limitada en cuero blanco con logo heart.',
            'imagen' => 'https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
        ],
        [
            'id' => 9,
            'nombre' => 'New Balance 990v6 Made in USA',
            'marca' => 'New Balance',
            'precio' => 11999,
            'categoria' => 'Running',
            'descripcion' => 'Fabricado en USA, tecnología Fresh Foam X y cuero premium.',
            'imagen' => 'https://images.unsplash.com/photo-1543508282-6319a3e2621f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
        ],
        [
            'id' => 10,
            'nombre' => 'Rick Owens DRKSHDW Ramones',
            'marca' => 'Rick Owens',
            'precio' => 22999,
            'categoria' => 'Avant-Garde',
            'descripcion' => 'Diseño oversize en lona negra con detalles distintivos de la marca.',
            'imagen' => 'https://images.unsplash.com/photo-1562183241-b937e95585b6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
        ]
    ];

    public function buscar(Request $request)
    {
        $query = $request->input('q');
        $resultados = [];
        
        if ($query) {
            foreach ($this->productos as $producto) {
                if (stripos($producto['nombre'], $query) !== false || 
                    stripos($producto['marca'], $query) !== false ||
                    stripos($producto['categoria'], $query) !== false) {
                    $resultados[] = $producto;
                }
            }
        }
        
        return view('busqueda', [
            'query' => $query,
            'resultados' => $resultados,
            'total' => count($resultados)
        ]);
    }
}