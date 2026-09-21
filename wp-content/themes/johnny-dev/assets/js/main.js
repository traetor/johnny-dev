"use strict";
(() => {
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

  // assets/ts/main.ts
  document.addEventListener("DOMContentLoaded", () => {
    initMobileMenu();
  });
})();
