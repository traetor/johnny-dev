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

    register_post_type('service', [
        'labels' => [
            'name'          => __('Services', 'johnny-dev'),
            'singular_name' => __('Service', 'johnny-dev'),
            'add_new'       => __('Add Service', 'johnny-dev'),
            'add_new_item'  => __('Add New Service', 'johnny-dev'),
            'edit_item'     => __('Edit Service', 'johnny-dev'),
            'new_item'      => __('New Service', 'johnny-dev'),
            'search_items'  => __('Search Services', 'johnny-dev'),
            'not_found'     => __('No services found.', 'johnny-dev'),
            'menu_name'     => __('Services', 'johnny-dev'),
        ],
        'public'       => false,
        'show_ui'      => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
        'menu_icon'    => 'dashicons-admin-tools',
        'supports'     => [
            'title',
            'page-attributes',
        ],
    ]);

    register_post_type('project', [
        'labels' => [
            'name'          => __('Projects', 'johnny-dev'),
            'singular_name' => __('Project', 'johnny-dev'),
            'add_new'       => __('Add Project', 'johnny-dev'),
            'add_new_item'  => __('Add New Project', 'johnny-dev'),
            'edit_item'     => __('Edit Project', 'johnny-dev'),
            'new_item'      => __('New Project', 'johnny-dev'),
            'search_items'  => __('Search Projects', 'johnny-dev'),
            'not_found'     => __('No projects found.', 'johnny-dev'),
            'menu_name'     => __('Projects', 'johnny-dev'),
        ],
        'public'       => false,
        'show_ui'      => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
        'menu_icon'    => 'dashicons-portfolio',
        'supports'     => [
            'title',
            'page-attributes',
        ],
    ]);
}

add_action('init', 'johnny_dev_register_post_types');