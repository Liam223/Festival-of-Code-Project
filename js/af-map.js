(function(afmap, undefined ) {

    //Private inner API methods. 
	
	//Default container
    var mapDivName = "map-canvas";
	//The map object
	var map;
	
	//GeoCodes text based addresses (i.e. street, postcode) into GPS Co-Ords
    function codeAddress(address) {
        var geocoder = new google.maps.Geocoder();
        var geo = null;
        geocoder.geocode({ 'address': address }, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                initialize(results[0].geometry.location);
            } else {
                return null;
            }
        });
    }

	//Runs the map init code. 
    function initialize(loc) {
        var mapOptions = {
            center: loc,
            zoom: 16
        };
        map = new google.maps.Map($('#' + mapDivName).get(0),
            mapOptions);
    }

    //Public exposed start method.

	//Init the map using an address. The address will be auto geo-coded. 
    afmap.InitMapByAddress = function(addressLocation, containerDiv) 
    {
        mapDivName = containerDiv;
        codeAddress(addressLocation);
    },
	
	//Init the map using a Lat and Long pair. 
	afmap.InitMapByLatLong = function(lat, lng, containerDiv)
	{
		var geoCoords = new google.maps.LatLng(lat, long); 
		mapDivName = containerDiv;
		bubbleTextStorage = bubbleText;
		initialize(geoCoords, "", bubbleTextStorage);
	},
	
	//GeoCode an address (address -> gps) and call the given function(gpsLocation) when finished
	afmap.GeoCode = function(loc, callback) {
	
		var geocoder = new google.maps.Geocoder();
        var geo = null;
        geocoder.geocode({ 'address': loc }, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                callback(results[0].geometry.location);
            } else {
                return null;
            }
        });
	
	}, 
	
	//Add a marker to the map at given co-ords. 
	afmap.AddMarker = function(lat, lng, title) {
		
		var geoCoords = new google.maps.LatLng(lat, lng); 
		var marker = new google.maps.Marker({
            position: geoCoords,
            map: map,
            title: title
        });
	},
	
	//Add a marker with info window at given co-ords. 
	afmap.AddMarkerWithInfoWindow = function(lat, lng, title, infoText) {
	
		var geoCoords = new google.maps.LatLng(lat, lng); 
		var marker = new google.maps.Marker({
            position: geoCoords,
            map: map,
            title: title
        });
	
		var infowindow = new google.maps.InfoWindow({
			content: infoText
		});
		infowindow.open(map, marker);
	}

}(window.afmap = window.afmap || {}));