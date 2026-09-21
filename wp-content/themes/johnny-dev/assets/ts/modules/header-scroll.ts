export const initHeaderScroll = (): void => {
    const header =
        document.querySelector<HTMLElement>('.site-header');

    if (!header) {
        return;
    }

    const updateHeader = (): void => {
        header.classList.toggle(
            'is-scrolled',
            window.scrollY > 20
        );
    };

    updateHeader();

    window.addEventListener('scroll', updateHeader, {
        passive: true,
    });
};