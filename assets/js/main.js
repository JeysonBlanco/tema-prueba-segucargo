import ResponsiveMenu from './modules/responsive-menu';

document.addEventListener('DOMContentLoaded', () => {
  // Initialize responsive menu
  new ResponsiveMenu();

  // Handle responsive images
  const images = document.querySelectorAll('img[data-src]');
  if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.src = img.dataset.src;
          img.removeAttribute('data-src');
          imageObserver.unobserve(img);
        }
      });
    });

    images.forEach(img => imageObserver.observe(img));
  }
});