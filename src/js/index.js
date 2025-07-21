import '../scss/style.scss';
// import '../../blocks/testimonial/testimonial.css';
console.log('Vite + Tailwind is live 🎉');

// Initialize other modules
import { initMobileNavigation } from './navigation';

document.addEventListener('DOMContentLoaded', () => {
	initMobileNavigation();
});

console.log('Theme scripts loaded');
