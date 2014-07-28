<?php

class results {
	
	function __construct($dbc) {
		$this->dbc = $dbc;
	}
	
	function get_speed($country_code) {
		$query = $this->dbc->prepare("SELECT download_kbps, upload_kbps FROM country_daily_speeds WHERE country_code = :country_code");
		$query->execute(array(':country_code' => $country_code));
		$results = $query->fetchAll(PDO::FETCH_ASSOC);
		
		$downloadCount = $query->rowCount();
		$resultCount = $query->rowCount();
		
		echo $resultCount;
		
		
		
		print_r($results);
	}
}

?>