<?php

include_once('dbconfig.php');

$phone_mac = urldecode($_GET['phone_mac']);
$ssid0 = urldecode($_GET['ssid0']);
$rssi0 = urldecode($_GET['rssi0']);

$sql = "INSERT INTO rssi_data (phone_mac,ssid0,rssi0) VALUES ('$phone_mac','$ssid0','$rssi0')";

$retval = mysql_query($sql, $conn);
?>