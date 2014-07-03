<?php

// Instalamos todos los elementos necesarios para que funcione el tema.
function instalar_tema() {
    // Estilos de tema el editor visual con el editor-style.css
    add_editor_style();

    // Activamos los Post Formats
    add_theme_support('post-formats', array('aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery'));

    // Registramos todos los menús del tema
    register_nav_menus(array(
        'menu_principal' => 'Menú Principal'
    ));
}

add_action('after_setup_theme', 'instalar_tema');

// Widgets
include get_template_directory() . '/inc/widgets.php';

// Creamos una funcion para mostar los menús
function mostrar_menu($theme_location = '') {
    if ($theme_location) :
        wp_nav_menu(array(
            'theme_location' => $theme_location,
            'container' => false,
            'items_wrap' => '<ul>%3$s</ul>'
        ));
    endif;
}

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

function view_site_description(){
    echo get_bloginfo( 'description', 'display' );
    die();
}
add_action( 'wp_ajax_view_site_description', 'view_site_description' );
add_action( 'wp_ajax_nopriv_view_site_description', 'view_site_description' );


function send_message_contact() {
    echo 'Mensaje enviado! :)';
}
add_action( 'wp_ajax_view_site_description', 'send_message_contact' );
add_action( 'wp_ajax_nopriv_view_site_description', 'send_message_contact' );

