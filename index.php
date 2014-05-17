<?php get_header(); ?>
<div class="flexslider clearfix">
    <ul class="slides">
        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1foto.jpg" class="scale-with-grid" /></li>
        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/2foto.jpg" class="scale-with-grid" /></li>
    </ul>
</div>
<div class="nosotros clearfix"><!-- NOSOTROS -->
    <p>Primeras Huellitas es un Proyecto Educativo que representa para el niño la posibilidad de ampliar su relación con el mundo.<br/>
    <em>“Trabajar con amor, deja HUELLAS que marcan el futuro de los niños”...</em></p>  
</div><!-- /NOSOTROS -->

<div class="servicio clearfix" id="servicios"><!-- SERVICIO -->
    <h2>Servicios</h2>
    <div class="five columns">
        <i class="fa fa-check"></i>
        <h3>Casita</h3>
        <p>Contamos con un espacio, agradable que propicia la estimulación de sus sentidos y movimientos.</p>
    </div>
        <div class="five columns">
        <i class="fa fa-star"></i>
        <h3>Casita</h3>
        <p>Contamos con un espacio, agradable que propicia la estimulación de sus sentidos y movimientos.</p>
    </div>
    <div class="five columns">
        <i class="fa fa-heart"></i>
        <h3>Casita</h3>
        <p>Contamos con un espacio, agradable que propicia la estimulación de sus sentidos y movimientos.</p>
    </div>
</div><!-- /SERVICIO -->

<div class="equipo clearfix" id="equipo"><!-- EQUIPO -->
    <h2>Conozca al equipo</h2>
        <!-- Member -->
    <div>
      <img src="http://demo.mage-themes.com/wordpress/CandyQueen/wp-content/uploads/2014/03/team-member-3.png" alt="">
      <h3>Tamara Barros</h3>
      <p><em>Favorite dessert <span>chocolate cupcake</span></em></p>
      <p><strong>CEO</strong></p>

      <ul>

      
      
              <li><a href="https://twitter.com/envato" class="twitter">twitter</a></li>
      
              <li><a href="https://www.facebook.com/themeforest" class="facebook">facebook</a></li>
      
      
      
      </ul>

    </div>
    <!-- Member Ends! -->

  
    <!-- Member -->
    <div>
      <img src="http://demo.mage-themes.com/wordpress/CandyQueen/wp-content/uploads/2014/03/team-member-3.png" alt="">
      <h3>Nara Sanchez</h3>
      <p><em>Favorite dessert <span>chocolate cupcake</span></em></p>
      <p><strong>food stylist</strong></p>

      <ul>

              <li><a href="https://plus.google.com/+themeforest/posts" class="google">google+</a></li>
      
      
              <li><a href="https://twitter.com/envato" class="twitter">twitter</a></li>
      
              <li><a href="https://www.facebook.com/themeforest" class="facebook">facebook</a></li>
      
      
      
      </ul>

    </div>
    <!-- Member Ends! -->
</div><!-- /EQUIPO -->

<div class="contacto clearfix" id="contacto"><!-- CONTACTO -->
    <div class="form eight columns">
        <form action="/" method="post">
            <input type="text" name="name" value="" size="40" placeholder="nombre" />
            <input type="email" name="email" value="" size="40" placeholder="su correo electrónico" />
            <textarea name="message" rows="5" placeholder="escribe tu mensaje..."></textarea>
            <input type="submit" value="enviar mi mensaje" />
        </form>        
    </div>
    <div class="info seven columns">
        <h4>¿Quieres saber más?</h4>
        <p>Por favor, no dude en contactar con nosotros. Rellene el formulario a la izquierda, y nos pondremos en contacto con usted lo antes posible. ¡Gracias!</p>
    </div>
</div><!-- /CONTACTO -->

<?php get_footer(); ?>