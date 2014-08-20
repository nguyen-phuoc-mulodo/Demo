/*
 * This is Documentation for using Google Maps
 * Written by: EchPay.
 */

//*** Set a new location
var latLng = google.maps.LatLng(37.4900318,136.4664008);

//*** Set a new map
var mapOptions = {
    zoom: 10,
    center: new google.maps.LatLng(37.4900318,136.4664008),
};
var map = google.maps.Map(document.getElementById(''), mapOptions);

//*** Set a marker
var maker = google.maps.Marker({
    position: new google.maps.LatLng(38.472381, 140.0831493),
    title: '',
    icon: image,
    zIndex: 3,
    draggable:true,
    animation: google.maps.Animation.DROP,    
});