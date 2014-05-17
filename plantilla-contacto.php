<?php
/**
 * Template Name: Plantilla Contacto
 *
 * Plantilla-Contacto.php
 * Plantilla para la página de contacto.
 */
get_header();

include get_template_directory() . '/inc/contacto.php';
?>
<div class="two-thirds column">
    <div class="row">
        <?php
        while (have_posts()) : the_post();
            get_template_part('content', 'page');
        endwhile;
        ?>

        <div class="five columns">
            <?php
            if (isset($emailSent) && $emailSent == true) : ?>
                <div class="mensaje">
                    <p class="exito"><?php printf(__('¡Gracias, el mensaje ha sido enviado!', 'ph')); ?></p>
                    <small><?php printf(__('Nos pondremos en contacto con usted :)', 'ph')); ?></small>
                </div>
            <?php
            unset($_POST['nombre']);
            unset($_POST['correo']);
            unset($_POST['mensaje']);
            unset($_POST['enviar']);
            endif;
            ?>
            <form action="<?php the_permalink(); ?>" method="post">
                <label for="nombre"><?php printf(__('Nombre y Apellido', 'ph')); ?></label>
<?php if ($nameError != '') { ?><span class="error"><?php echo $nameError; ?></span><?php } ?>

                <input type="text" name="nombre" value="<?php if (isset($_POST['nombre'])) echo $_POST['nombre']; ?>" />
                <label for="correo"><?php printf(__('Correo Electrónico', 'ph')); ?></label>
<?php if ($emailError != '') { ?><span class="error"><?php echo $emailError; ?></span><?php } ?>

                <input type="text" name="correo" value="<?php if (isset($_POST['correo'])) echo $_POST['correo']; ?>" />
                <label for="mensaje"><?php printf(__('Mensaje', 'ph')); ?></label>
<?php if ($commentError != '') { ?><span class="error"><?php echo $commentError; ?></span><?php } ?>

                <textarea name="mensaje" rows="6" cols="35"><?php
                    if (isset($_POST['mensaje'])) {
                        if (function_exists('stripslashes')) {
                            echo stripslashes($_POST['mensaje']);
                        } else {
                            echo $_POST['mensaje'];
                        }
                    }
                    ?></textarea>
                <input type="hidden" name="enviar" value="true" />
                <input class="naranja" type="submit" value="Enviar Mensaje"/>
            </form>
        </div>
        <div class="der five columns">
            <div class="vcard">
                <img  class="scale-with-grid" src="http://maps.google.com/maps/api/staticmap?center=33.12846,-117.314845&zoom=15&size=310x240&maptype=roadmap&markers=color:blue|label:S|33.12846,-117.314845&sensor=false" />
                <h5 class="organization-name">Primeras Huellitas</h5>
                <p class="adr">
                    <strong>Direción:</strong> <span class="street-address">Llaponagat Mz 52 Pc 7</span><br>
                    <strong>Ubicación:</strong> <span class="locality">Charata</span>, <span class="region">Chaco</span>, <span class="country">Argentina</span><br>
                    <strong>Código postal: </strong><span class="postal-code">3500</span><br>
                    <strong>Telefono: </strong><span class="tel"> <span class="value">+54 3624-060798</span></span></span>
                </p>
            </div>
        </div>
    </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>