import { initActiveNavigation } from './modules/active-navigation';
import { initHeaderScroll } from './modules/header-scroll';
import { initMobileMenu } from './modules/mobile-menu';
import { initScrollReveal } from './modules/scroll-reveal';

document.addEventListener('DOMContentLoaded', () => {
    initMobileMenu();
    initHeaderScroll();
    initActiveNavigation();
    initScrollReveal();
});