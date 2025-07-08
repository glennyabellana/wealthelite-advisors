import '../scss/style.scss';
console.log('Vite + Tailwind is live 🎉');

// Initialize other modules
import { initMobileNavigation } from './navigation';

document.addEventListener('DOMContentLoaded', () => {
	initMobileNavigation();
});

console.log('Theme scripts loaded');
