<?php

/**
 * @package WordPress
 * @subpackage Primeras Huellitas
 * @since PH 1.0
 */
// Registramos el espacio que ocuparan los widget en la barra lateral de las paginas unicas.
if (function_exists('register_sidebar')) :
    register_sidebar(array(
        'name' => __('Página Principal', 'PH'),
        'id' => 'inicio',
        'description' => __('Arrastra y suelta los widgets que se mostraran en la página principal', 'PH'),
        'class' => '',
        'before_widget' => '<aside class="inicio">',
        'after_widget' => '</aside>',
        'before_title' => '<h3>',
        'after_title' => '</h3><hr />'
    ));
    register_sidebar(array(
        'name' => __('Páginas', 'PH'),
        'id' => 'pagina',
        'description' => __('Arrastra y suelta los widgets que se mostraran en las páginas.', 'PH'),
        'class' => '',
        'before_widget' => '<aside class="pagina">',
        'after_widget' => '</aside>',
        'before_title' => '<h3>',
        'after_title' => '</h3><hr />'
    ));
    register_sidebar(array(
        'name' => __('Articulos', 'PH'),
        'id' => 'articulo',
        'description' => __('Arrastra y suelta los widgets que se mostraran en los articulos.', 'PH'),
        'class' => '',
        'before_widget' => '<aside class="articulo">',
        'after_widget' => '</aside>',
        'before_title' => '<h3>',
        'after_title' => '</h3><hr />'
    ));
endif;

function remover_widgets() {
    unregister_widget('WP_Widget_Pages');
    unregister_widget('WP_Widget_Calendar');
    unregister_widget('WP_Widget_Archives');
    unregister_widget('WP_Widget_Links');
    unregister_widget('WP_Widget_Meta');
    unregister_widget('WP_Widget_Search');
    //unregister_widget('WP_Widget_Text');
    unregister_widget('WP_Widget_Categories');
    unregister_widget('WP_Widget_Recent_Posts');
    unregister_widget('WP_Widget_Recent_Comments');
    unregister_widget('WP_Widget_RSS');
    unregister_widget('WP_Widget_Tag_Cloud');
    //unregister_widget('WP_Nav_Menu_Widget');
}

add_action('widgets_init', 'remover_widgets');
