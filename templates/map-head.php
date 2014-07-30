<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="favicon.ico">
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjTdBrlAB-rsD-j3VuAk0OKEtVdnjRsEc"></script>
	<script
	src="http://maps.googleapis.com/maps/api/js?libraries=geometry,visualization">
	</script>
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="/festival-of-code-project/js/af-map.js"></script>
	<script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
     google.load('visualization', '1', {'packages': ['geochart']});
     google.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Popularity'],
          ['Germany', 200],
          ['United States', 300],
          ['Brazil', 400],
          ['Canada', 500],
          ['France', 600],
          ['RU', 700]
        ]);

        var options = {};

        var chart = new google.visualization.GeoChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    };
    </script>

	<title><?php echo SITE_TITLE; ?></title>

	<!-- Bootstrap core CSS -->
	<link href="/festival-of-code-project/css/bootstrap.min.css" rel="stylesheet">

	<!-- Map CSS -->
	<link href="/festival-of-code-project/css/map.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="/festival-of-code-project/js/ie-emulation-modes-warning.js"></script>

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="/festival-of-code-project/js/ie10-viewport-bug-workaround.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Custom styles for this template -->
	<link href="/festival-of-code-project/css/carousel.css" rel="stylesheet">
</head>