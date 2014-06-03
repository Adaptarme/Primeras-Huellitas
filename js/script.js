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
    var myLatlng = new google.maps.LatLng(-27.220237334026375, -61.19179853211597);
    var map_options = {
      zoom: 16,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      center: myLatlng,
      scrollwheel: false,
      disableDefaultUI: true
    }

    var map = new google.maps.Map(document.getElementById('map_canvas'), map_options)
    var marker = new google.maps.Marker({
      position: myLatlng,
      map: map
    });

    map.panBy(-230,0);
  }

  google.maps.event.addDomListener(window, 'load', initialize);