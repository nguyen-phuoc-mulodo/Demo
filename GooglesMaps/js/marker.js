var map;
var places = [
        {
                'name': 'EchPay',
                'lat': 37.4900318,
                'lng': 136.4664008,
                'image': '#',
        },
        {
                'name': 'Shin Nguyen',
                'lat': 38.4900318,
                'lng': 136.4664008,
                'image': '#',
        },
];
var markers = [];

function initialize() {

        //*** Config mapOptions
        var mapOptions = {
                zoom: 10,
                center: new google.maps.LatLng(37.4900318,136.4664008),
        };

        //*** Define a map
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
       //Add map styles
        map.setOptions({styles: styles});

        //*** Initialize marker
        get_markers();
}

google.maps.event.addDomListener(window, 'load', initialize);
// === onload="initialize()" on the HTML

function get_markers() {
        for ( i = 0; i < places.length; i++ ) {
                image = "images/location-geekboy.png";
                var marker = new google.maps.Marker({
                        title: places[i].name,
                        position: new google.maps.LatLng( places[i].lat, places[i].lng ),
                        map: map,
                        icon: image
                });
                //Set events for marker
                var listener1 = google.maps.event.addListener(marker, 'dblclick', function() {
                    map.setZoom(8);
                    map.setCenter(marker.getPosition());
                });
                //google.maps.event.removeListener(listener1);
        }
}
function get_location() {
    // Try HTML5 geolocation
        if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);

                var infowindow = new google.maps.InfoWindow({
                  map: map,
                  position: pos,
                  content: 'I found you!'
                });

                map.setCenter(pos);
            }, function() {
                 handleNoGeolocation(true);
            });
          } else {
            // Browser doesn't support Geolocation
            handleNoGeolocation(false);
        }
}