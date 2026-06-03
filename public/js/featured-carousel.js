document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.querySelector('[data-featured-carousel]');
    if (!carousel) return;

    const cards = carousel.querySelectorAll('[data-product-card]');
    const dots = document.querySelectorAll('[data-featured-dot]');
    
    const itemsPerPage = 3;
    let currentPage = 0;
    const totalPages = Math.ceil(cards.length / itemsPerPage);

    function showPage(page) {
        cards.forEach((card, index) => {
            const startIndex = page * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;
            
            if (index >= startIndex && index < endIndex) {
                card.classList.remove('hidden');
            } else {
                card.classList.add('hidden');
            }
        });

        dots.forEach((dot, index) => {
            if (index === page) {
                dot.classList.remove('bg-white');
                dot.classList.add('bg-gray-900');
            } else {
                dot.classList.remove('bg-gray-900');
                dot.classList.add('bg-white');
            }
        });

        currentPage = page;
    }

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            showPage(index);
        });
    });

    showPage(0);
});
