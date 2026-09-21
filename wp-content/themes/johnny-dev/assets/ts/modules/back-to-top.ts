export const initBackToTop = (): void => {
    const links =
        document.querySelectorAll<HTMLAnchorElement>('a[href="#top"]');

    if (!links.length) {
        return;
    }

    const prefersReducedMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    );

    links.forEach((link) => {
        link.addEventListener('click', (event) => {
            event.preventDefault();

            window.scrollTo({
                top: 0,
                behavior: prefersReducedMotion.matches
                    ? 'auto'
                    : 'smooth',
            });

            if (window.location.hash) {
                history.replaceState(
                    null,
                    '',
                    `${window.location.pathname}${window.location.search}`
                );
            }
        });
    });
};