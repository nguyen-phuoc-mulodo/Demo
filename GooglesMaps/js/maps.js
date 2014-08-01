function initialize() {
  var myLatLng = new google.maps.LatLng(-25.363882, 131.044922);
  var mapOptions = {
    zoom: 4,
    center: myLatLng
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);