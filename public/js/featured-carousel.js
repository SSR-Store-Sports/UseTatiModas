document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.querySelector('[data-featured-carousel]');
    if (!carousel) return;

    const cards = carousel.querySelectorAll('[data-product-card]');
    const dots = document.querySelectorAll('[data-featured-dot]');

    const itemsPerPage = 3;
    let currentPage = 0;
    const totalPages = Math.ceil(cards.length / itemsPerPage);
    let autoplayTimer;

    function showPage(page) {
        cards.forEach((card, index) => {
            const startIndex = page * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;
            card.classList.toggle('hidden', index < startIndex || index >= endIndex);
        });

        dots.forEach((dot, index) => {
            dot.classList.toggle('bg-gray-900', index === page);
            dot.classList.toggle('bg-white', index !== page);
        });

        currentPage = page;
    }

    function nextPage() {
        showPage((currentPage + 1) % totalPages);
    }

    function startAutoplay() {
        autoplayTimer = setInterval(nextPage, 3500);
    }

    function stopAutoplay() {
        clearInterval(autoplayTimer);
    }

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            stopAutoplay();
            showPage(index);
            startAutoplay();
        });
    });

    carousel.addEventListener('mouseenter', stopAutoplay);
    carousel.addEventListener('mouseleave', startAutoplay);

    showPage(0);
    startAutoplay();
});
