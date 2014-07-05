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

/**
 * Funcion para enviar el email de contacto.
 *
 * @since Primeras Huellitas 1.0
 * 
 * @uses str_replace
 * @uses phpversion
 * @uses mail
 * 
 * @return string Mensaje para el usuario que envio el email
 */
function send_email_contact() {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $content = $_POST['content'];

    if ( $name !== '' && $email !== '' ) :
        $to = get_bloginfo( 'admin_email' ); // Destinatario/s del correo.
        $subject = $name; // Título del correo electrónico a enviar.
        $message = str_replace( "\n.", "\n..", $content );
        $headers = 'From: ' . $email . "\r\n" .
                   'Reply-To: ' . $email . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();
        if ( mail( $to, $subject, $message, $headers ) ) // Enviar correo
            echo '<strong>Felicidades</strong> , tu mensaje fue enviado! :)';
    endif;
    
    die(); // detener la ejecución del script
}
add_action( 'wp_ajax_send_email', 'send_email_contact' ); // ajax para los usuarios registrados
add_action( 'wp_ajax_nopriv_send_email', 'send_email_contact' ); // ajax for not logged in users

// Widgets
include get_template_directory() . '/inc/widgets.php';