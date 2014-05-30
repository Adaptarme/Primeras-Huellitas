<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title><?php wp_title('-'); ?></title>
        <meta name="description" content="Primeras Huellitas es un Proyecto Educativo que representa para el niño la posibilidad de ampliar su relación con el mundo." />
        <meta name="author" content="Adaptar.ME">
        <!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
  function initialize() {
    var myLatlng = new google.maps.LatLng(-27.22023494885893, -61.19181730757907);
    var map_options = {
      zoom: 16,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      center: myLatlng,
      scrollwheel: false,
      disableDefaultUI: true
    }

    var map = new google.maps.Map(document.getElementById('map_canvas'), map_options)
    var image = '<?php echo get_stylesheet_directory_uri(); ?>/img/icon-google-maps-marker.png';
    var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      icon: image
    });

    map.panBy(-230,0);
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>
<!-- Google Map Ends! -->
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
        <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Indie+Flower'>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/base.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/skeleton.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/jquery.flexslider.css">
        <link rel="stylesheet/less" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/layout.less">
    </head>
    <body>
        <div class="background-header">
                <header role="banner"><!-- CABECERA -->
                        <div class="container"><!-- CONTENEDOR -->
                            <div class="sixteen columns">
                                <nav id="navigation-menu" class="clearfix der" role="navigation">
                                    <h3 class="ocultar"><?php _e('Menu', 'PH'); ?></h3>
                                    <?php //mostrar_menu('menu_principal'); ?>
                                    <ul id="navigation-menu">
                                        <li><a href="#nosotros">Nosotros</a></li>
                                        <li><a href="#servicios">Servicios</a></li>
                                        <li><a href="#contacto">Contacto</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <h1><a href="#top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" class="scale-with-grid"/></a></h1>
                        </div>
                </header><!-- /CABECERA -->
        </div>
        <div class="container"><!-- CONTENEDOR -->
            <div class="clearfix" role="main"><!-- CONTENIDO -->