<?php
get_header(); ?>

<div class="flexslider clearfix">
    <ul class="slides">
        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/01.jpg" class="scale-with-grid"/></li>
        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/02.jpg" class="scale-with-grid"/></li>
        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/03.jpg" class="scale-with-grid"/></li>
        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/04.jpg" class="scale-with-grid"/></li>
        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/05.jpg" class="scale-with-grid"/></li>
        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/06.jpg" class="scale-with-grid"/></li>
    </ul>
</div>
<div class="nosotros clearfix" id="nosotros"><!-- NOSOTROS -->
    <p>Primeras Huellitas es un proyecto educativo que representa para el niño la posibilidad de ampliar su relación con el mundo.<br/>
    <em>“Trabajar con amor, deja HUELLAS que marcan el futuro de los niños”...</em></p>  
</div><!-- /NOSOTROS -->

<div class="servicio clearfix" id="servicios"><!-- SERVICIO -->
    <h2>Servicios</h2>
    <div class="five columns">
        <i class="fa fa-check"></i>
        <h3>Profesionales</h3>
        <p>Profesoras en Educación Inicial seleccionadas cuidadosamente con la preparación necesaria.</p>
    </div>
        <div class="five columns">
        <i class="fa fa-clock-o"></i>
        <h3>Horarios</h3>
        <p>Los niños ingresan en distintos horarios, por la mañana y la tarde de lunes a viernes.</p>
    </div>
    <div class="five columns">
        <i class="fa fa-cutlery"></i>
        <h3>Refrigerio</h3>
        <p>Tenemos cocina propia dónde se preparan el desayuno y el resfuerzo para los niños.</p>
    </div>
</div><!-- /SERVICIO -->

<div class="map"><!-- MAP -->
  <div id="map_canvas"></div>
  <div class="address">
    <div>
      <h3>Contactános</h3>
      <p>Moreno 849<br />Charata, Chaco, Argentina<br /><strong>Teléfono: 03731 15-50-5519</strong></p>
    </div>
  </div>
</div><!-- /MAP -->

<div class="contacto clearfix" id="contacto"><!-- CONTACTO -->
    <div class="form eight columns">
        <form id="contactForm" action="/contacto" method="post" enctype="multipart/form-data">
            <input id="name" type="text" name="name" value="" size="40" placeholder="nombre" />
            <input id="email" type="email" name="email" value="" size="40" placeholder="su correo electrónico" />
            <textarea id="message" name="message" rows="5" placeholder="escribe tu mensaje..."></textarea>
            <input class="button" type="submit" value="enviar mi mensaje" />
        </form>      
    </div>
    <div class="info seven columns">
        <h4>Horarios Alternativos</h4>
        <p>Los niños ingresan en distintos horarios (8:00/9:00) de la mañana y finaliza a las 12:30. Por la tarde se atiende a los alumnos desde las 18:00 a las 21 hs, de lunes a viernes.</p>
        <h4>¿Quieres saber más?</h4>
        <p>Por favor, no dude en contactar con nosotros. Rellene el formulario a la izquierda, y nos pondremos en contacto con usted lo antes posible. ¡Gracias!</p>
    </div>
</div><!-- /CONTACTO -->

<?php get_footer(); ?>