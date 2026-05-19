document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('[data-hero-carousel]').forEach((carousel) => {
    const slides = Array.from(carousel.querySelectorAll('[data-hero-slide]'));
    const dots = Array.from(carousel.querySelectorAll('[data-hero-dot]'));
    const prevButton = carousel.querySelector('[data-hero-prev]');
    const nextButton = carousel.querySelector('[data-hero-next]');
    let activeIndex = 0;
    let autoplay;

    const showSlide = (nextIndex) => {
      activeIndex = (nextIndex + slides.length) % slides.length;

      slides.forEach((slide, index) => {
        const isActive = index === activeIndex;
        slide.classList.toggle('opacity-100', isActive);
        slide.classList.toggle('opacity-0', !isActive);
        slide.setAttribute('aria-hidden', isActive ? 'false' : 'true');
      });

      dots.forEach((dot, index) => {
        const isActive = index === activeIndex;
        dot.classList.toggle('bg-[#C79B2B]', isActive);
        dot.classList.toggle('bg-white/70', !isActive);
        dot.setAttribute('aria-current', isActive ? 'true' : 'false');
      });
    };

    const startAutoplay = () => {
      stopAutoplay();
      autoplay = window.setInterval(() => showSlide(activeIndex + 1), 5000);
    };

    const stopAutoplay = () => {
      if (autoplay) {
        window.clearInterval(autoplay);
      }
    };

    prevButton?.addEventListener('click', () => {
      showSlide(activeIndex - 1);
      startAutoplay();
    });

    nextButton?.addEventListener('click', () => {
      showSlide(activeIndex + 1);
      startAutoplay();
    });

    dots.forEach((dot) => {
      dot.addEventListener('click', () => {
        showSlide(Number(dot.dataset.slideIndex));
        startAutoplay();
      });
    });

    carousel.addEventListener('mouseenter', stopAutoplay);
    carousel.addEventListener('mouseleave', startAutoplay);
    carousel.addEventListener('focusin', stopAutoplay);
    carousel.addEventListener('focusout', startAutoplay);

    showSlide(0);
    startAutoplay();
  });
});