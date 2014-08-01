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

	//*** Initialize marker
	get_marker();

}

google.maps.event.addDomListener(window, 'load', initialize);
// === onload="initialize()" on the HTML

function get_marker() {
	for ( i = 0; i < places.length; i++ ) {
		var marker = new google.maps.Marker({
			title: places[i].name,
			position: new google.maps.LatLng( places[i].lat, places[i].lng ),
			map: map,
		});
	}
}