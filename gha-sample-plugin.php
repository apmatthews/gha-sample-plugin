<?php
/**
 * Plugin Name: Sample Plugin
 * Plugin URI: https://example.com
 * Description: A simple demo plugin that adds a custom post type called 'my_cpt'.
 * Version: 1.0.0
 * Author: Andrew matthews
 * License: GPL v2 or later
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register custom post type 'my_cpt'
 */
function register_my_cpt() {
    $args = array(
        'public' => true,
        'label' => 'My CPT',
        'labels' => array(
            'name' => 'My CPTs',
            'singular_name' => 'My CPT',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New My CPT',
            'edit_item' => 'Edit My CPT',
            'new_item' => 'New My CPT',
            'view_item' => 'View My CPT',
            'search_items' => 'Search My CPTs',
            'not_found' => 'No My CPTs found',
            'not_found_in_trash' => 'No My CPTs found in Trash'
        ),
        'menu_icon' => 'dashicons-admin-post',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'my-cpt'),
        'show_in_rest' => true,
    );
    
    register_post_type('my_cpt', $args);
}

// Hook the function to WordPress init
add_action('init', 'register_my_cpt');
