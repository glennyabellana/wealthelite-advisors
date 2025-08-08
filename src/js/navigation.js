export function initMobileNavigation() {
	const openBtn = document.getElementById('mobile-nav-toggle');
	const closeBtn = document.getElementById('mobile-nav-close');
	const overlay = document.getElementById('mobile-nav-overlay');
	const body = document.body;

	if (!openBtn || !overlay) return;

	function openMenu() {
		overlay.classList.remove('opacity-0', 'pointer-events-none');
		overlay.classList.add('opacity-100', 'mobile-nav-overlay--open');
		body.classList.add('overflow-hidden');
		openBtn.setAttribute('aria-expanded', 'true');
	}

	function closeMenu() {
		overlay.classList.remove('opacity-100', 'mobile-nav-overlay--open');
		overlay.classList.add('opacity-0', 'pointer-events-none');
		body.classList.remove('overflow-hidden');
		openBtn.setAttribute('aria-expanded', 'false');
	}

	openBtn.addEventListener('click', openMenu);

	// Close on close button or overlay click
	if (closeBtn) {
		closeBtn.addEventListener('click', closeMenu);
	}

	// Optional: close on ESC key
	document.addEventListener('keydown', (e) => {
		if (e.key === 'Escape') closeMenu();
	});
}
