<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="favicon.ico">
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjTdBrlAB-rsD-j3VuAk0OKEtVdnjRsEc"></script>
		<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="js/af-map.js"></script>
		<script type="text/javascript">
		
			$(document).ready(function() {
				alert("Ready");
				afmap.InitMapByAddress("BT546NS", "map-canvas"); 
				
				$("#addMarker").on("click", function() {
					afmap.GeoCode("BT546NS", function(loc) {
						afmap.AddMarker(loc.lat(), loc.lng(), "Hello world!!");
					}); 
				}); 
				
				$("#addMarkerInfo").on("click", function() {
					afmap.GeoCode("BT546NS", function(loc) {
						afmap.AddMarkerWithInfoWindow(loc.lat(), loc.lng(), "Hello world!!", "this is some random info!! :-)");
					}); 
				}); 
			
			}); 
		
		</script>

	<title><?php echo SITE_TITLE; ?></title>

	<!-- Bootstrap core CSS -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">

	<!-- Map CSS -->
	<link href="/css/map.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="/js/ie-emulation-modes-warning.js"></script>

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="/js/ie10-viewport-bug-workaround.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Custom styles for this template -->
	<link href="/css/carousel.css" rel="stylesheet">
</head>