import './bootstrap';


document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.querySelector('.menu-toggle');
    const mainNav = document.querySelector('.main-nav');

    if (!menuToggle || !mainNav) return;

    function closeMenu() {
        mainNav.classList.remove('is-open');
        menuToggle.classList.remove('is-active');
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.setAttribute('aria-label', 'Ouvrir le menu');
    }

    menuToggle.addEventListener('click', () => {
        const isOpen = mainNav.classList.toggle('is-open');

        menuToggle.classList.toggle('is-active', isOpen);
        menuToggle.setAttribute('aria-expanded', String(isOpen));
        menuToggle.setAttribute(
            'aria-label',
            isOpen ? 'Fermer le menu' : 'Ouvrir le menu'
        );
    });

    // Fermer le menu lorsqu'on clique sur un lien
    mainNav.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', closeMenu);
    });

    // Fermer avec la touche Échap
    document.addEventListener('keydown', event => {
        if (event.key === 'Escape') {
            closeMenu();
        }
    });

    // Fermer lorsqu'on repasse sur ordinateur
    window.matchMedia('(min-width: 901px)')
        .addEventListener('change', event => {
            if (event.matches) closeMenu();
        });
});
