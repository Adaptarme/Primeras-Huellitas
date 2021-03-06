<?php
/**
 * @package WordPress
 * @subpackage Primeras-Huellitas
 * @since Primeras Huellitas 1.0
 */

/**
 * Usamos esta funcion para remover los widgets por defectos.
 *
 * @since Primeras Huellitas 1.0
 * 
 * @uses unregister_widget
 */
function remover_widgets() {
    unregister_widget( 'WP_Widget_Pages' );
    unregister_widget( 'WP_Widget_Calendar' );
    unregister_widget( 'WP_Widget_Archives' );
    unregister_widget( 'WP_Widget_Links' );
    unregister_widget( 'WP_Widget_Meta' );
    unregister_widget( 'WP_Widget_Search' );
    //unregister_widget('WP_Widget_Text');
    unregister_widget( 'WP_Widget_Categories' );
    unregister_widget( 'WP_Widget_Recent_Posts' );
    unregister_widget( 'WP_Widget_Recent_Comments' );
    unregister_widget( 'WP_Widget_RSS' );
    unregister_widget( 'WP_Widget_Tag_Cloud' );
    //unregister_widget('WP_Nav_Menu_Widget');
}
add_action( 'widgets_init', 'remover_widgets' );
