$(window).load(function() {

	$('.flexslider').flexslider({
		animation: "fade",
		controlNav: false,
		directionNav: false,
		slideshowSpeed: 2400,
		animationSpeed: 800
	});

	/* Page Scroll to id fn call */
	$("#navigation-menu a, a[href='#top'], a[rel='m_PageScroll2id']").mPageScroll2id({
		highlightSelector:"#navigation-menu a"
	});

});

function initialize() {
    var myLatlng = new google.maps.LatLng(-27.220268341198533, -61.191857540714295);
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
      //icon: image
    });

    map.panBy(-230,0);
  }

  google.maps.event.addDomListener(window, 'load', initialize);