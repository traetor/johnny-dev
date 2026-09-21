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
    wp_enqueue_style(
        'johnny-dev-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'johnny-dev-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        wp_get_theme()->get('Version'),
        true
    );
}

add_action('wp_enqueue_scripts', 'johnny_dev_enqueue_assets');

// Disable WordPress admin bar on the frontend.
add_filter('show_admin_bar', '__return_false');