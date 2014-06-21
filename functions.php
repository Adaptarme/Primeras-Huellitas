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
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function theme_ph_wp_title( $title, $sep ) {
    if ( is_feed() ) {
        return $title;
    }
    
    global $page, $paged;

    // Add the blog name
    $title .= get_bloginfo( 'name', 'display' );

    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ) {
        $title .= " $sep $site_description";
    }

    // Add a page number if necessary:
    if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
        $title .= " $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
    }

    return $title;
}
add_filter( 'wp_title', 'theme_ph_wp_title', 10, 2 );


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

