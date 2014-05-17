<div class="one-third column" role="complementary"><!-- BARRA-LATERAL -->
    <?php
    if (is_home())
        dynamic_sidebar('inicio');
    if (is_page())
        dynamic_sidebar('pagina');
    if (is_single())
        dynamic_sidebar('articulo');
    ?>
</div><!-- /BARRA-LATERAL -->