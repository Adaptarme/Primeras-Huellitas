<?php
/**
 * Funciones y definiciones.
 *
 * @package WordPress
 * @subpackage Primeras-Huellitas
 * @since Primeras Huellitas 1.0
 */

if ( ! function_exists( 'ph_setup' ) ) :
    /**
    * Instalar Primeras Huellitas.
    * 
    * Configuración de los valores predeterminados del tema y los registros de
    * soporte para diversas características de WordPress.
    *
    * @since Primeras Huellitas 1.0
    */
    function ph_setup() {
        
        // Estilos de tema el editor visual con el editor-style.css
        add_editor_style();
    
    }

endif; // ph_setup
add_action( 'after_setup_theme', 'ph_setup' );

/**
 * Crear un texto para el title con un formato agradable y más específico para 
 * la salida de la cabeza del documento, sobre la base de la vista actual.
 *
 * @since Primeras Huellitas 1.0
 * 
 * @param string $title Titulo de la página.
 * @return string El título filtrado.
 */
function ph_wp_title( $title ) {
    global $paged, $page;

    if ( is_feed() || is_home() || is_front_page() ) {
        return  get_bloginfo( 'name', 'display' );
    }

    if ( $paged >= 2 || $page >= 2 ) {
        $title = "$title / " . sprintf( __( 'Página %s', 'ph' ), max( $paged, $page ) );
    }
    
    return trim( $title );
}
add_filter( 'wp_title', 'ph_wp_title', 10, 2 );


// Widgets
include get_template_directory() . '/inc/widgets.php';