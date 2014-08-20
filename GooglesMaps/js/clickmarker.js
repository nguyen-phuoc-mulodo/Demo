var map;
var places = [
        {
            'id': '544887739012',
            'name': 'EchPay',
            'lat': 10.7781091,
            'lng': 106.6486143,
            'image': '#',
        },
        {
            'id': '544887739012',
            'name': 'Shin',
            'lat': 14.4900318,
            'lng': 106.6486143,
            'image': '#',
        }
];

function initialize() {
    mapOptions = {
        'zoom': 12,
        'center': new google.maps.LatLng('10.7781091','106.6486143')
    };
    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    get_markers();
}

//*** Marker function
function get_markers() {
    for (i = 0 ; i < places.length; i++ ) {
        marker = new google.maps.Marker({
            'title': places[i].name,
            'position': new google.maps.LatLng(places[i].lat,places[i].lng),
            'icon': 'images/location-geekboy.png',
            'map': map,
        });
        
        add_click_function(marker);
    }
}
function add_click_function(marker) {
    google.maps.event.addListener( marker, 'click', function() {
        //Do stuffs
        var contentString = "<div id='infowindow'><h2>Hello, "+ marker.getTitle() +"</h2></div>";
        var infowindow = new google.maps.InfoWindow({
            content: contentString,
        });
        infowindow.open( map, marker );
    });
}

//*** Load google maps
google.maps.event.addDomListener(window, 'load', initialize);