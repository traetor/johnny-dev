const REVEAL_SELECTOR = [
    '.section-heading',
    '.about-content',
    '.experience-item',
    '.experience-note',
    '.service-card',
    '.tech-group',
    '.project',
    '.projects-footer',
    '.contact-heading',
    '.contact-content',
    '.contact-cta',
].join(', ');

export const initScrollReveal = (): void => {
    const elements =
        document.querySelectorAll<HTMLElement>(REVEAL_SELECTOR);

    if (!elements.length) {
        return;
    }

    const prefersReducedMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;

    if (prefersReducedMotion || !('IntersectionObserver' in window)) {
        elements.forEach((element) => {
            element.classList.add('is-visible');
        });

        return;
    }

    const observer = new IntersectionObserver(
        (entries, currentObserver) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }

                const element = entry.target as HTMLElement;

                element.classList.add('is-visible');
                currentObserver.unobserve(element);
            });
        },
        {
            threshold: 0.12,
            rootMargin: '0px 0px -50px 0px',
        }
    );

    elements.forEach((element) => {
        element.classList.add('reveal');
        observer.observe(element);
    });
};