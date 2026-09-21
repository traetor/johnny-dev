<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container header-inner">

        <a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>">
            Johnny<span>Dev</span>
        </a>

        <nav class="main-nav" aria-label="Primary navigation">
            <a href="#about">About</a>
            <a href="#experience">Experience</a>
            <a href="#services">Services</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </nav>

        <a class="header-cta" href="#contact">
            Let's talk
        </a>

    </div>
</header>

<main>