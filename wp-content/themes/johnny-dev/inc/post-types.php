<?php

if (!defined('ABSPATH')) {
    exit;
}

function johnny_dev_register_post_types(): void
{
    register_post_type('experience', [
        'labels' => [
            'name'          => __('Experience', 'johnny-dev'),
            'singular_name' => __('Experience', 'johnny-dev'),
            'add_new'       => __('Add Experience', 'johnny-dev'),
            'add_new_item'  => __('Add New Experience', 'johnny-dev'),
            'edit_item'     => __('Edit Experience', 'johnny-dev'),
            'new_item'      => __('New Experience', 'johnny-dev'),
            'view_item'     => __('View Experience', 'johnny-dev'),
            'search_items'  => __('Search Experience', 'johnny-dev'),
            'not_found'     => __('No experience found.', 'johnny-dev'),
            'menu_name'     => __('Experience', 'johnny-dev'),
        ],
        'public'       => false,
        'show_ui'      => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
        'menu_icon'    => 'dashicons-businessperson',
        'supports'     => [
            'title',
            'page-attributes',
        ],
    ]);
}

add_action('init', 'johnny_dev_register_post_types');