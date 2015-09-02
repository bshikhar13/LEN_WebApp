<?php

function calculateDistance($conn,$ssid, $rssi){
	
	$query = "SELECT * FROM AP_data where `mac` = '$ssid'";
	$retval = mysql_query($query, $conn);
	$row = mysql_fetch_array($retval);
	//echo $query;
	$n = $row['n'];
	$A = $row['A'];
	$lat = $row['lat'];
	$long = $row['long'];
	$n = (float)$n;
	$A = (float)$A;
	$rssi = (float)$rssi;
	$distance = pow(10,(($rssi-$A)/10*$n));
	return $distance;

}

?>