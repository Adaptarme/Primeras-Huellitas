$(document).ready(function() {

  var ajaxUrl = 'wp-admin/admin-ajax.php';
  
  $('#formContact').validate({
    
    rules: {
      name: { required: true, minlength: 2 },
      email: { required: true, email: true },
      content: { required: true, minlength: 2 }
    },

    messages: {
      name: 'Debe introducir su nombre.',
      email: 'Debe introducir un email válido.',
      content: 'El mensaje es obligatorio.',
    },
    
    submitHandler: function (form) { // en el evento submit del fomulario
      event.preventDefault(); // Evitamos que el formulario se envíe
      $.ajax({
        type: 'POST',
        action: 'send_email',
        url: ajaxUrl,
        data: {
          action: 'send_email',
          name: $('#name').val(),
          email: $('#email').val(),
          content: $('#content').val()
        },
        success: function(msg) {
          var alert = '.alert';
          $(form)[0].reset(); // Limpiamos los campos del form
          $(alert).html(msg).show();
          setTimeout(function(){ $(alert).hide(); }, 6000);
        },
        error: function(msg) {
          alert(msg);
        }
      });
    }

  }); // .validate

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