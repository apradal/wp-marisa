<?php
/**
 * Plugin Name: Hello Custom Field
 * Plugin URI: https://metabox.io
 * Description: A simple plugin for custom fields.
 * Version: 1.0
 * Author: Meta Box
 * Author URI: https://metabox.io
 * License: GPL2
 */

//add_meta_box( $id, $title, $callback, $screen, $context, $priority, $callback_args)
/**
 * Register meta boxes.
 */
function hcf_register_meta_boxes() {
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    $template_file = get_post_meta($post_id,'_wp_page_template',TRUE);

    if ($template_file === 'template-custom.php') {
        add_meta_box( 'hcf-1', __( 'Cabecera', 'hcf' ), 'hcf_display_callback', 'page' );
    }
}
add_action( 'add_meta_boxes', 'hcf_register_meta_boxes' );

/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function hcf_display_callback( $post ) {
    include plugin_dir_path( __FILE__ ) . './form.php';
}

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function hcf_save_meta_box( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( $parent_id = wp_is_post_revision( $post_id ) ) {
        $post_id = $parent_id;
    }
    $fields = [
        'hcf_author'
    ];
    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
    }
}
add_action( 'save_post', 'hcf_save_meta_box' );