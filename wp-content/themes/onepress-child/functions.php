<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 07/01/2019
 * Time: 10:50
 */

add_action( 'wp_enqueue_scripts', 'onepress_child_enqueue_styles' );
function onepress_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri() . '/style.css' );
}