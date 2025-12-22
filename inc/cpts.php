<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Register Custom Post Type: Project
 */
function tydedev_register_project_post_type() {
    $labels = array(
        'name'                  => 'Projects',
        'singular_name'         => 'Project',
        'menu_name'             => 'Projects',
        'name_admin_bar'        => 'Project',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New Project',
        'edit_item'             => 'Edit Project',
        'new_item'              => 'New Project',
        'view_item'             => 'View Project',
        'search_items'          => 'Search Projects',
        'not_found'             => 'No projects found',
        'not_found_in_trash'    => 'No projects found in the Trash',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'show_in_rest'       => true,
        'rewrite'            => array('slug' => 'projects', 'with_front' => false),
        'supports'           => array('title', 'editor', 'thumbnail'),
        'menu_icon'          => 'dashicons-portfolio',
    );

    register_post_type('project', $args);
}
add_action('init', 'tydedev_register_project_post_type');

/**
 * Register Taxonomy: Project Categories
 */
function tydedev_register_project_taxonomy() {
    $labels = array(
        'name'                  => 'Project Categories',
        'singular_name'         => 'Project Category',
        'search_items'          => 'Search Project Categories',
        'all_items'             => 'All Project Categories',
        'parent_item'           => 'Parent Project Category',
        'parent_item_colon'     => 'Parent Project Category:',
        'edit_item'             => 'Edit Project Category',
        'update_item'           => 'Update Project Category',
        'add_new_item'          => 'Add New Project Category',
        'new_item_name'         => 'New Project Category Name',
        'menu_name'             => 'Project Categories',
    );

    $args = array(
        'hierarchical'       => true,
        'labels'             => $labels,
        'show_admin_column'  => true,
        'show_ui'            => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'projects/category', 'with_front' => false),
    );

    register_taxonomy('project-category', array('project'), $args);
}
add_action('init', 'tydedev_register_project_taxonomy');

/**
 * Add Meta Box: Client Name
 */
function tydedev_add_project_client_meta_box() {
    add_meta_box(
        'project_client_meta',          // ID del meta box
        'Client Name',                  // Titolo
        'tydedev_project_client_meta_callback', // Callback
        'project',                      // Post type
        'normal',                       // Context
        'default'                       // Priority
    );
}
add_action('add_meta_boxes', 'tydedev_add_project_client_meta_box');

/**
 * Meta Box Callback: Client Name
 */
function tydedev_project_client_meta_callback($post) {
    // Sicurezza
    wp_nonce_field('tydedev_save_project_client_meta', 'tydedev_project_client_nonce');

    // Valore attuale
    $client_name = get_post_meta($post->ID, 'client_name', true);
    

    echo '<label for="tydedev_client_name">Client Name:</label>';
    echo '<input type="text" id="tydedev_client_name" name="tydedev_client_name" value="' . esc_attr($client_name) . '" style="width:100%;" placeholder="Enter client name" />';
}

/**
 * Save Meta Box: Client Name
 */
function tydedev_save_project_client_meta($post_id) {
    // Controlli di sicurezza
    if (!isset($_POST['tydedev_project_client_nonce'])) return;
    if (!wp_verify_nonce($_POST['tydedev_project_client_nonce'], 'tydedev_save_project_client_meta')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['tydedev_client_name'])) {
        update_post_meta($post_id, 'client_name', sanitize_text_field($_POST['tydedev_client_name']));
    }
}
add_action('save_post', 'tydedev_save_project_client_meta');


function tydedev_project_client_url_callback($post) {
    // Sicurezza
    wp_nonce_field('tydedev_save_project_client_url', 'tydedev_project_client_url_nonce');

    // Valore attuale
    $client_url = get_post_meta($post->ID, 'client_url', true);

    echo '<label for="tydedev_client_url">Client Website:</label>';
    echo '<input type="url" id="tydedev_client_url" name="tydedev_client_url" value="' . esc_attr($client_url) . '" style="width:100%;" placeholder="https://example.com" />';
}

/**
 * Save Meta Box: Client Website
 */
function tydedev_save_project_client_url($post_id) {
    // Controlli di sicurezza
    if (!isset($_POST['tydedev_project_client_url_nonce'])) return;
    if (!wp_verify_nonce($_POST['tydedev_project_client_url_nonce'], 'tydedev_save_project_client_url')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['tydedev_client_url'])) {
        update_post_meta($post_id, 'client_url', esc_url_raw($_POST['tydedev_client_url']));
    }
}
add_action('save_post', 'tydedev_save_project_client_url');