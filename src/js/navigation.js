export default function initNavigation() {
	document.querySelector('.menu-toggle').addEventListener('click', () => {
		document.body.classList.toggle('nav-open');
	});
}
