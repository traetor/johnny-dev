export const initActiveNavigation = (): void => {
    const navigation =
        document.querySelector<HTMLElement>('.main-nav');

    if (!navigation || !('IntersectionObserver' in window)) {
        return;
    }

    const links = Array.from(
        navigation.querySelectorAll<HTMLAnchorElement>('a[href^="#"]')
    );

    if (!links.length) {
        return;
    }

    const sections = links
        .map((link) => {
            const href = link.getAttribute('href');

            if (!href || href === '#') {
                return null;
            }

            return document.querySelector<HTMLElement>(href);
        })
        .filter((section): section is HTMLElement => section !== null);

    if (!sections.length) {
        return;
    }

    const setActiveLink = (sectionId: string): void => {
        links.forEach((link) => {
            const isActive =
                link.getAttribute('href') === `#${sectionId}`;

            link.classList.toggle('is-active', isActive);

            if (isActive) {
                link.setAttribute('aria-current', 'location');
            } else {
                link.removeAttribute('aria-current');
            }
        });
    };

    const clearActiveLink = (): void => {
        links.forEach((link) => {
            link.classList.remove('is-active');
            link.removeAttribute('aria-current');
        });
    };

    const observer = new IntersectionObserver(
        (entries) => {
            const visibleSections = entries
                .filter((entry) => entry.isIntersecting)
                .sort(
                    (first, second) =>
                        second.intersectionRatio -
                        first.intersectionRatio
                );

            const currentSection = visibleSections[0];

            if (!currentSection) {
                return;
            }

            setActiveLink(currentSection.target.id);
        },
        {
            rootMargin: '-20% 0px -60% 0px',
            threshold: [0, 0.1, 0.25, 0.5],
        }
    );

    sections.forEach((section) => {
        observer.observe(section);
    });

    const updateTopState = (): void => {
        if (window.scrollY < 200) {
            clearActiveLink();
        }
    };

    updateTopState();

    window.addEventListener('scroll', updateTopState, {
        passive: true,
    });
};