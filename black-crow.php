<?php
/**
 * Black Crow
 *
 * @package           BlackCrow
 * @author            White Rabbit
 * @copyright         2019 White Rabbit Consultancy
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Black Crow
 * Plugin URI:        https://consultantsussex.com/black-crow
 * Description:       Add a flying Black Crow to your WordPress website.
 * Version:           1.1.1
 * Requires at least: 4.6
 * Requires PHP:      5.2
 * Author:            White Rabbit
 * Author URI:        https://consultantsussex.com
 * Text Domain:       black-crow
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Include CSS file for BlackCrow.
 */
function black_crow_footer_styles() {
    wp_register_style( 'bird',  plugin_dir_url( __FILE__ ) . 'css/bird.css' );
    wp_enqueue_style( 'bird' );
}
add_action( 'wp_enqueue_scripts', 'black_crow_footer_styles' );

/**
 * Register BlackCrow Shortcode.
 */
function black_crow_shortcode() {
   return '<div class="bird-container bird-container--one">
<div class="bird bird--one"></div></div>';
}
add_shortcode( 'blackcrow', 'black_crow_shortcode' );