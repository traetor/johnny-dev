<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body id="top" <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a class="skip-link" href="#main-content">
    Skip to main content
</a>

<header class="site-header">
    <div class="container header-inner">

        <a
                class="site-logo"
                href="#top"
                aria-label="Back to top"
        >
            Johnny<span>Dev</span>
        </a>

        <nav
                class="main-nav"
                id="primary-navigation"
                aria-label="Primary navigation"
        >
            <a href="#about">About</a>
            <a href="#experience">Experience</a>
            <a href="#services">Services</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </nav>

        <a class="header-cta" href="#contact">
            Let's talk
        </a>

        <button
                class="menu-toggle"
                type="button"
                aria-expanded="false"
                aria-controls="primary-navigation"
                aria-label="Open navigation"
        >
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div>
</header>

<main id="main-content">