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

function filter_wp_title($title) {
    global $page, $paged;

    if (is_feed())
        return $title;

    $site_description = get_bloginfo('description');

    $filtered_title = $title . get_bloginfo('name');
    $filtered_title .= (!empty($site_description) && ( is_home() || is_front_page() ) ) ? ' / ' . $site_description : '';
    $filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf(__('Page %s'), max($paged, $page)) : '';

    return $filtered_title;
}

add_filter('wp_title', 'filter_wp_title');
