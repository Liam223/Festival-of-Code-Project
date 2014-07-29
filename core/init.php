<?php

define('SITE_TITLE', 'Interactive Map');


try {

	$db_name = 'c0foc';
	$db_user = 'c0liam223';
	$db_pass = 'Letmein1234~ ';

	$dbc = new PDO('mysql:host=127.0.0.1; dbname=c0foc ' . $db_name, $db_user, $db_pass);
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