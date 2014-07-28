(function(afmap, undefined ) {

    //Private inner API methods. 
    var bubbleTextStorage = "";
    var mapDivName = "map-canvas";

    function codeAddress(address) {
        var geocoder = new google.maps.Geocoder();
        var geo = null;
        geocoder.geocode({ 'address': address }, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                initialize(results[0].geometry.location, address, bubbleTextStorage);
            } else {
                return null;
            }
        });
    }

    function initialize(loc, locName, bubbleText) {
        var mapOptions = {
            center: loc,
            zoom: 16
        };
        var map = new google.maps.Map($('#' + mapDivName).get(0),
            mapOptions);

        var marker = new google.maps.Marker({
            position: loc,
            map: map,
            title: locName
        });
		
		if (bubbleText.length > 0)
		{
			var infowindow = new google.maps.InfoWindow({
				content: bubbleText
			});
			infowindow.open(map, marker);
		}

    }

    //Public exposed start method.

    afmap.InitMapByAddress = function(modelLocation, bubbleText, containerDiv) 
    {
        mapDivName = containerDiv;
        bubbleTextStorage = bubbleText;
        codeAddress(modelLocation);
    }
	
	afmap.InitMapByLatLong = function(lat, long, bubbleText, containerDiv)
	{
		var geoCoords = new google.maps.LatLng(lat, long); 
		mapDivName = containerDiv;
		bubbleTextStorage = bubbleText;
		initialize(geoCoords, "", bubbleTextStorage);
	}

	afmap.test = function () { alert("test"); }

}(window.afmap = window.afmap || {}));