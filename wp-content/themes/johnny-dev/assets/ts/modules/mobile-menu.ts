export const initMobileMenu = (): void => {
    const menuToggle =
        document.querySelector<HTMLButtonElement>('.menu-toggle');

    const navigation =
        document.querySelector<HTMLElement>('.main-nav');

    if (!menuToggle || !navigation) {
        return;
    }

    const isMenuOpen = (): boolean =>
        menuToggle.getAttribute('aria-expanded') === 'true';

    const openMenu = (): void => {
        navigation.classList.add('is-open');

        menuToggle.setAttribute('aria-expanded', 'true');
        menuToggle.setAttribute('aria-label', 'Close navigation');

        document.body.classList.add('menu-open');
    };

    const closeMenu = (): void => {
        navigation.classList.remove('is-open');

        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.setAttribute('aria-label', 'Open navigation');

        document.body.classList.remove('menu-open');
    };

    const toggleMenu = (): void => {
        if (isMenuOpen()) {
            closeMenu();
            return;
        }

        openMenu();
    };

    menuToggle.addEventListener('click', toggleMenu);

    navigation.querySelectorAll<HTMLAnchorElement>('a').forEach((link) => {
        link.addEventListener('click', closeMenu);
    });

    document.addEventListener('keydown', (event: KeyboardEvent) => {
        if (event.key !== 'Escape' || !isMenuOpen()) {
            return;
        }

        closeMenu();
        menuToggle.focus();
    });

    document.addEventListener('click', (event: MouseEvent) => {
        if (!isMenuOpen()) {
            return;
        }

        const target = event.target;

        if (!(target instanceof Node)) {
            return;
        }

        if (
            navigation.contains(target) ||
            menuToggle.contains(target)
        ) {
            return;
        }

        closeMenu();
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth > 900 && isMenuOpen()) {
            closeMenu();
        }
    });
};