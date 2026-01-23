// Funcionalidad básica para la búsqueda
document.addEventListener('DOMContentLoaded', function() {
    // Efecto de carga suave
    const elements = document.querySelectorAll('.fade-in-up');
    elements.forEach((el, index) => {
        el.style.animationDelay = `${index * 0.1}s`;
        el.classList.add('fade-in-up');
    });
    
    // Validación básica de formulario de búsqueda
    const searchForm = document.querySelector('.search-form');
    if (searchForm) {
        searchForm.addEventListener('submit', function(e) {
            const input = this.querySelector('input[name="q"]');
            if (input.value.trim() === '') {
                e.preventDefault();
                input.focus();
                input.style.borderColor = '#ff4757';
                setTimeout(() => {
                    input.style.borderColor = '';
                }, 2000);
            }
        });
    }
    
    // Efecto hover en tarjetas de producto
    const productCards = document.querySelectorAll('.product-card');
    productCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.zIndex = '10';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.zIndex = '1';
        });
    });
});