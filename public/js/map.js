function init_map(){
    var var_location = new google.maps.LatLng(40.763034, -111.881774);
    
    var var_mapoptions = {
        center: var_location,
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    
    var var_marker = new google.maps.Marker({
        position: var_location,
        icon: '/img/e3transparent.png',
        map: var_map,
        title:"E3 Modern"
    });
    
    var var_map = new google.maps.Map(document.getElementById("map-container"), var_mapoptions);
    
    var_marker.setMap(var_map);
    
    
}

google.maps.event.addDomListener(window, 'load', init_map);


