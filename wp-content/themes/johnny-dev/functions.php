<?php

if (!defined('ABSPATH')) {
    exit;
}

function johnny_dev_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    register_nav_menus([
        'primary' => __('Primary Menu', 'johnny-dev'),
    ]);
}

add_action('after_setup_theme', 'johnny_dev_setup');

function johnny_dev_enqueue_assets(): void
{
    $css_path = get_template_directory() . '/assets/css/main.css';
    $js_path = get_template_directory() . '/assets/js/main.js';

    wp_enqueue_style(
        'johnny-dev-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        file_exists($css_path) ? (string) filemtime($css_path) : wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'johnny-dev-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        file_exists($js_path) ? (string) filemtime($js_path) : wp_get_theme()->get('Version'),
        true
    );
}

add_action('wp_enqueue_scripts', 'johnny_dev_enqueue_assets');

// Disable WordPress admin bar on the frontend.
add_filter('show_admin_bar', '__return_false');

function johnny_dev_meta_description(): void
{
    if (!is_front_page()) {
        return;
    }

    $description = 'Full-Stack Web Developer specializing in custom WordPress development, PHP, React, TypeScript and modern web applications.';

    echo '<meta name="description" content="' . esc_attr($description) . '">' . "\n";
}

add_action('wp_head', 'johnny_dev_meta_description', 1);

function johnny_dev_social_meta(): void
{
    if (!is_front_page()) {
        return;
    }

    $title = 'Johnny Dev | Full-Stack Web Developer';

    $description = 'Full-Stack Web Developer specializing in custom WordPress development, PHP, React, TypeScript and modern web applications.';

    $url = home_url('/');

    $image = get_template_directory_uri() . '/assets/images/og-image.png';

    ?>
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo esc_attr($title); ?>">
    <meta property="og:description" content="<?php echo esc_attr($description); ?>">
    <meta property="og:url" content="<?php echo esc_url($url); ?>">
    <meta property="og:site_name" content="Johnny Dev">
    <meta property="og:image" content="<?php echo esc_url($image); ?>">
    <meta property="og:image:alt" content="Johnny Dev - Full-Stack Web Developer">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo esc_attr($title); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr($description); ?>">
    <meta name="twitter:image" content="<?php echo esc_url($image); ?>">
    <meta name="twitter:image:alt" content="Johnny Dev - Full-Stack Web Developer">
    <?php
}

add_action('wp_head', 'johnny_dev_social_meta', 2);