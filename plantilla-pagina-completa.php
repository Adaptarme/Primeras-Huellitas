<?php
/**
 * Template Name: Plantilla Pagina Completa
 *
 * Plantilla-Pagina-Completa.php
 * La plantilla para mostrar el contenido completo en una página.
 */
get_header();
?>
<div class="row sixteen columns">
    <?php
    while (have_posts()) : the_post();
        get_template_part('content', 'page');
    endwhile;
    ?>
</div>
<?php get_footer(); ?>