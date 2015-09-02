<?php

include_once('dbconfig.php');
include_once('formula.php');
$phone_mac = "bc:d1:d3:cc:b5:df";

$ssid0 = "c0:a0:bb:01:5b:69";
$ssid1 = "00:1e:a6:28:18:50";
$ssid2 = "c0:a0:bb:01:5e:71";
$ssid3 = "";

$query0 = "SELECT `rssi0` FROM rssi_data WHERE `phone_mac` = '$phone_mac' AND `ssid0` = '$ssid0' ORDER BY id DESC LIMIT 1";
$query1 = "SELECT `rssi0` FROM rssi_data WHERE `phone_mac` = '$phone_mac' AND `ssid0` = '$ssid1' ORDER BY id DESC LIMIT 1";
$query2 = "SELECT `rssi0` FROM rssi_data WHERE `phone_mac` = '$phone_mac' AND `ssid0` = '$ssid2' ORDER BY id DESC LIMIT 1";
$query3 = "SELECT `rssi0` FROM rssi_data WHERE `phone_mac` = '$phone_mac' AND `ssid0` = '$ssid3' ORDER BY id DESC LIMIT 1";



$retval = mysql_query($query0, $conn);
$row = mysql_fetch_array($retval);
$rssi0 = $row['rssi0'];

$retval = mysql_query($query1, $conn);
$row = mysql_fetch_array($retval);
$rssi1 = $row['rssi0'];

$retval = mysql_query($query2, $conn);
$row = mysql_fetch_array($retval);
$rssi2 = $row['rssi0'];

$retval = mysql_query($query3, $conn);
$row = mysql_fetch_array($retval);
$rssi3 = $row['rssi0'];

echo calculateDistance($conn,$ssid0,$rssi0); 
echo "<br>";
echo calculateDistance($conn,$ssid1,$rssi1); 
echo "<br>";
echo calculateDistance($conn,$ssid2,$rssi2); 
echo "<br>";
?>