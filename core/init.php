<?php

define('SITE_TITLE', 'Interactive Map');


try {

	$db_name = 'site_db';
	$db_user = 'root';
	$db_pass = '';

	$dbc = new PDO('mysql:host=127.0.0.1; dbname=' . $db_name, $db_user, $db_pass);
	$dbc -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$dbc -> exec("SET CHARACTER SET utf8");
} catch (PDOException $err) {
	$error -> getMessage() . "<br/>";
	echo $error;
	die();
}

require_once('results.class.php');

?>

<?php

require_once('core/init.php');

$results = new results($dbc);

//$results->get_speed("US");

?>