"use strict";
(() => {
  // assets/ts/modules/active-navigation.ts
  var initActiveNavigation = () => {
    const navigation = document.querySelector(".main-nav");
    if (!navigation || !("IntersectionObserver" in window)) {
      return;
    }
    const links = Array.from(
      navigation.querySelectorAll('a[href^="#"]')
    );
    if (!links.length) {
      return;
    }
    const sections = links.map((link) => {
      const href = link.getAttribute("href");
      if (!href || href === "#") {
        return null;
      }
      return document.querySelector(href);
    }).filter((section) => section !== null);
    if (!sections.length) {
      return;
    }
    const setActiveLink = (sectionId) => {
      links.forEach((link) => {
        const isActive = link.getAttribute("href") === `#${sectionId}`;
        link.classList.toggle("is-active", isActive);
        if (isActive) {
          link.setAttribute("aria-current", "location");
        } else {
          link.removeAttribute("aria-current");
        }
      });
    };
    const clearActiveLink = () => {
      links.forEach((link) => {
        link.classList.remove("is-active");
        link.removeAttribute("aria-current");
      });
    };
    const observer = new IntersectionObserver(
      (entries) => {
        const visibleSections = entries.filter((entry) => entry.isIntersecting).sort(
          (first, second) => second.intersectionRatio - first.intersectionRatio
        );
        const currentSection = visibleSections[0];
        if (!currentSection) {
          return;
        }
        setActiveLink(currentSection.target.id);
      },
      {
        rootMargin: "-20% 0px -60% 0px",
        threshold: [0, 0.1, 0.25, 0.5]
      }
    );
    sections.forEach((section) => {
      observer.observe(section);
    });
    const updateTopState = () => {
      if (window.scrollY < 200) {
        clearActiveLink();
      }
    };
    updateTopState();
    window.addEventListener("scroll", updateTopState, {
      passive: true
    });
  };

  // assets/ts/modules/header-scroll.ts
  var initHeaderScroll = () => {
    const header = document.querySelector(".site-header");
    if (!header) {
      return;
    }
    const updateHeader = () => {
      header.classList.toggle(
        "is-scrolled",
        window.scrollY > 20
      );
    };
    updateHeader();
    window.addEventListener("scroll", updateHeader, {
      passive: true
    });
  };

  // assets/ts/modules/mobile-menu.ts
  var initMobileMenu = () => {
    const menuToggle = document.querySelector(".menu-toggle");
    const navigation = document.querySelector(".main-nav");
    if (!menuToggle || !navigation) {
      return;
    }
    const isMenuOpen = () => menuToggle.getAttribute("aria-expanded") === "true";
    const openMenu = () => {
      navigation.classList.add("is-open");
      menuToggle.setAttribute("aria-expanded", "true");
      menuToggle.setAttribute("aria-label", "Close navigation");
      document.body.classList.add("menu-open");
    };
    const closeMenu = () => {
      navigation.classList.remove("is-open");
      menuToggle.setAttribute("aria-expanded", "false");
      menuToggle.setAttribute("aria-label", "Open navigation");
      document.body.classList.remove("menu-open");
    };
    const toggleMenu = () => {
      if (isMenuOpen()) {
        closeMenu();
        return;
      }
      openMenu();
    };
    menuToggle.addEventListener("click", toggleMenu);
    navigation.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", closeMenu);
    });
    document.addEventListener("keydown", (event) => {
      if (event.key !== "Escape" || !isMenuOpen()) {
        return;
      }
      closeMenu();
      menuToggle.focus();
    });
    document.addEventListener("click", (event) => {
      if (!isMenuOpen()) {
        return;
      }
      const target = event.target;
      if (!(target instanceof Node)) {
        return;
      }
      if (navigation.contains(target) || menuToggle.contains(target)) {
        return;
      }
      closeMenu();
    });
    window.addEventListener("resize", () => {
      if (window.innerWidth > 900 && isMenuOpen()) {
        closeMenu();
      }
    });
  };

  // assets/ts/modules/scroll-reveal.ts
  var REVEAL_SELECTOR = [
    ".section-heading",
    ".about-content",
    ".experience-item",
    ".experience-note",
    ".service-card",
    ".tech-group",
    ".project",
    ".projects-footer",
    ".contact-heading",
    ".contact-content",
    ".contact-cta"
  ].join(", ");
  var initScrollReveal = () => {
    const elements = document.querySelectorAll(REVEAL_SELECTOR);
    if (!elements.length) {
      return;
    }
    const prefersReducedMotion = window.matchMedia(
      "(prefers-reduced-motion: reduce)"
    ).matches;
    if (prefersReducedMotion || !("IntersectionObserver" in window)) {
      elements.forEach((element) => {
        element.classList.add("is-visible");
      });
      return;
    }
    const observer = new IntersectionObserver(
      (entries, currentObserver) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) {
            return;
          }
          const element = entry.target;
          element.classList.add("is-visible");
          currentObserver.unobserve(element);
        });
      },
      {
        threshold: 0.12,
        rootMargin: "0px 0px -50px 0px"
      }
    );
    elements.forEach((element) => {
      element.classList.add("reveal");
      observer.observe(element);
    });
  };

  // assets/ts/main.ts
  document.addEventListener("DOMContentLoaded", () => {
    initMobileMenu();
    initHeaderScroll();
    initActiveNavigation();
    initScrollReveal();
  });
})();
