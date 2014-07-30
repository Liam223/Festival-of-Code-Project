<?php 

// Connects to your Database 
mysql_connect("127.0.0.1", "root", "") or die(mysql_error()); 
mysql_select_db("foc_db") or die(mysql_error()); 
$data = mysql_query("SELECT * FROM (SELECT * FROM country_daily_speeds ORDER BY date desc) AS x GROUP BY country") 
or die(mysql_error()); 
$rows = array();
while($r = mysql_fetch_assoc($data)) {
    $rows[] = $r;
}
print json_encode($rows);
 
 
 
 
?> 

