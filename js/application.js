
/* Google Map START  */
var map;
function initialize() {

// Create an array of styles.
var styles = [
	{
	stylers: [
		 { saturation: -100 },
		 { lightness: -8 },
		 { gamma: 1.18 }
		 ]
	},{
		featureType: "road",
		elementType: "geometry",
		stylers: [
			{ lightness: 100 },
			{ visibility: "simplified" }
		]
	},{
		featureType: "road",
		elementType: "labels",
		stylers: [
			{ visibility: "off" }
		]
	}
];

// Create a new StyledMapType object, passing it the array of styles,
// as well as the name to be displayed on the map type control.
var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});

	var mapOptions = {
		zoom: 13,
		scrollwheel: false,
		panControl: false,
		zoomControl: false,
		mapTypeControl: false,
		scaleControl: false,
		streetViewControl: false,
		overviewMapControl: false,
		center: new google.maps.LatLng(1.330000,103.831807),
		labelContent: '<i class="fa fa-send fa-3x" style="color:rgba(153,102,102,0.8);"></i>',
		mapTypeControlOptions: {
			mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
		}
	};
	http://chart.apis.google.com/chart?cht=d&chdp=mapsapi&chl=pin%27i%5c%27%5b%27-2%27f%5chv%27a%5c%5dh%5c%5do%5c000000%27fC%5c000000%27tC%5c000000%27eC%5cLauto%27f%5c&ext=.png

	map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);

	map.mapTypes.set('map_style', styledMap);
	map.setMapTypeId('map_style');

	/* MARKERS START */
	var batokWindow = new google.maps.InfoWindow({
			content: '<p class="text-center" style="margin-left:20px">Sundays 9:30 AM, #03-14</p><h3 class="text-center text-uppercase" style="margin-left:20px">WEST SERVICE</h3><p class="text-center" style="margin-left:20px">50 Bukit Batok St 23 Midview Building<p/>'
	});
	var batokMarker = new google.maps.Marker({
			position: new google.maps.LatLng(1.3395139,103.757403,17),
			map: map,
			icon: {
					path: fontawesome.markers.MAP_MARKER,
					scale: 0.8,
					strokeWeight: 0.2,
					strokeColor: 'black',
					strokeOpacity: 1,
					fillColor: '#545454',
					fillOpacity: 0.7,
			},
			title: 'Bukit Batok'
	});
	google.maps.event.addListener(batokMarker, 'click', function() {
		batokWindow.open(map,batokMarker);
	});
	
	var kembanganWindow = new google.maps.InfoWindow({
			content: '<p class="text-center" style="margin-left:20px">Saturdays 7:00 PM, Basement 1<br/>Sundays 10:00 AM, Basement 1<h3 class="text-center text-uppercase" style="margin-left:20px">EAST SERVICE</h3><p class="text-center" style="margin-left:20px">Kembangan Plaza<p/>'
	});
	var kembanganMarker = new google.maps.Marker({
			position: new google.maps.LatLng(1.32044,103.91272,17),
			map: map,
			icon: {
					path: fontawesome.markers.MAP_MARKER,
					scale: 0.8,
					strokeWeight: 0.2,
					strokeColor: 'black',
					strokeOpacity: 1,
					fillColor: '#545454',
					fillOpacity: 0.7,
			},
			title: 'Kembangan Plaza'
	});
	google.maps.event.addListener(kembanganMarker, 'click', function() {
		kembanganWindow.open(map,kembanganMarker);
	});
					
	var relcWindow = new google.maps.InfoWindow({
			content: '<p class="text-center" style="margin-left:20px">Sandays 9:30 AM, Room 502 <br/>Sundays 2:30 PM, Auditorium Level 1<br/>Wednesdays 8:00 pm, Room 502</p><h3 class="text-center text-uppercase" style="margin-left:20px">MAIN SERVICE</h3><p class="text-center" style="margin-left:20px">RELC International Hotel 30 Orange Grove Road<p/>'
	});
	var relcMarker = new google.maps.Marker({
			position: new google.maps.LatLng(1.313083,103.825881,17),
			map: map,
			icon: {
					path: fontawesome.markers.MAP_MARKER,
					scale: 0.8,
					strokeWeight: 0.2,
					strokeColor: 'black',
					strokeOpacity: 1,
					fillColor: '#545454',
					fillOpacity: 0.7,
			},
			title: 'RELC International Hotel'
	});
	/* MARKERS END */

	google.maps.event.addListener(relcMarker, 'click', function() {
		relcWindow.open(map,relcMarker);
	});
}
google.maps.event.addDomListener(window, 'load', initialize);
/* Google Map END  */

/* Yam Navigation START  */
$(function() {
	$(document).on('click', '.yamm .dropdown-menu', function(e) {
		e.stopPropagation()
	})
})
/* Yam Navigation END  */