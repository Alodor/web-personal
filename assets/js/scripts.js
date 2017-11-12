$(document).ready(function() {
    // Activar el menu responsive
    $(".button-collapse").sideNav();
    
    
    // Enviar Formulario Contacto
	$("#fcontacto").submit(function(event) {
		event.preventDefault();

		$.ajax({
			type: 'post',
			url: 'send.php',
			data: $(this).serialize(),
			success: function(data){
				$("#respuesta").slideDown();
				$("#respuesta").html(data);
			}
		});
		return false;
	});
});


// Gogle Map
function initMap() {
    var site = {
        lat: 10.158339, 
        lng: -64.667010
    };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: site,
        styles: [{"featureType":"administrative","stylers":[{"visibility":"off"}]},{"featureType":"poi","stylers":[{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"water","stylers":[{"visibility":"simplified"}]},{"featureType":"transit","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"visibility":"off"}]},{"featureType":"road.local","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"water","stylers":[{"color":"#0a69d9"},{"lightness":52}]},{"stylers":[{"saturation":-17},{"gamma":0.36}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#283d84"}]}]
    });
    var marker = new google.maps.Marker({
        position: site,
        map: map,
        icon: 'assets/images/map-marker.png',
        title: 'Alodor'
    });
}