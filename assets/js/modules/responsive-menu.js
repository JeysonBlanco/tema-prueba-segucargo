export default class ResponsiveMenu {
  constructor() {
    this.menuToggle = document.querySelector('.menu-toggle');
    this.mainNav = document.querySelector('.main-navigation');
    this.init();
  }

  init() {
    if (this.menuToggle && this.mainNav) {
      this.menuToggle.addEventListener('click', () => this.toggleMenu());
      window.addEventListener('resize', () => this.handleResize());
    }
  }

  toggleMenu() {
    this.mainNav.classList.toggle('active');
    document.body.classList.toggle('menu-open');
  }

  handleResize() {
    if (window.innerWidth >= 768) {
      this.mainNav.classList.remove('active');
      document.body.classList.remove('menu-open');
    }
  }
}