<?php
define('SITE_TITLE', 'cMap');
// You may need to change the values below to login to your server.

// Web address or IP of the mysql server
$DB_HOST = "localhost";
// Database user to use
$DB_USER = "root";
// Database user password
$DB_PASS = "";
// Database to use
$DB_TABLE = "foc_db";

// Establish Connection
$dbc = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_TABLE);

// Check if successful
if (mysqli_connect_errno()) {
	// If failed, print out error.
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	// Kill the page.
	die();
} else {
	// For test purposes. Uncomment the below line to print if it was successful.
	//echo "Connection successful";
}

// What results do you want to return?
//$searchFor = "United States";

// eg
// Select ALL RESULTS from the table COUNTRY_DAILY_PROMISE where the country is the variable above: $searchFor
// Note the ' ' around the variable. This prevents $searchFor being taken literally as a country called "$searchFor".
//$query = "SELECT * FROM country_daily_promise WHERE country = '$searchFor'";
// Execute the query
//$result = mysqli_query($dbc, $query);

// While there are results...
//while ($row = mysqli_fetch_array($result)) {
	// Print on the screen the median download ratio that matched the above query. Basically, all the median download ratios that are from the United States
	//echo $row['median_download_ratio'];
	// Echo html tag <br> to create a new line
	//echo "<br>";
//}
?>