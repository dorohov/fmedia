function initMap() {       
	var coordOffice = {lat: 52.9710326, lng: 36.0639794},
		zoom_map_office = 17,
		mapOptionsOffice = {
			zoom: zoom_map_office,
			center: new google.maps.LatLng(coordOffice.lat, coordOffice.lng),
			//scrollwheel: false,	
			/*styles: [{"elementType":"geometry","stylers":[{"color":"#eaeaea"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#f5f5f5"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#eeeeee"}]},{"featureType":"landscape.man_made","elementType":"geometry.stroke","stylers":[{"color":"#c1c1c1"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c4c4c4"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#dadada"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"transit.station","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#b8d8e7"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]}]*/		 
		};
	var mapElementOffice = document.getElementById('map-google-office');

	var mapOffice = new google.maps.Map(mapElementOffice, mapOptionsOffice);

	var iconOffice = '/img/default/icon-map.png';
	var iconOffice = {        
        path: "M192.981,385.963c-29.09,0-152-150.149-152-233.963s68.187-152,152-152c83.813,0,152,68.187,152,152   S222.071,385.963,192.981,385.963z M192.981,70c-45.215,0-82,36.785-82,82c0,45.215,36.785,82,82,82c45.215,0,82-36.785,82-82   C274.981,106.785,238.196,70,192.981,70z",
        fillColor: '#ff9600',
        fillOpacity: 1,
        anchor: new google.maps.Point(200,350),
        strokeWeight: 0,
        scale: 0.2
    };

	var	zenitOfficeCoord = {lat: 52.971136, lng: 36.066790};

	var 
		zenitOffice = new google.maps.Marker({
			position: zenitOfficeCoord,
			map: mapOffice,
			icon: iconOffice
		});

        /*$(window).on('resize', function() {
			google.maps.event.trigger(map, "resize");
			map.setCenter(coord);
        });*/
};
$(function () {
	$(document.body).on('shown.bs.modal', '.modal', {}, function(event){
		event.preventDefault();
		$(window).trigger('resize');      
	});  
});