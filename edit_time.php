<?php
require_once 'config.php';

try {
$Time = $_POST['Time'];
$ID = $_POST['ID'];
$ID2 = $_POST['ID2'];
if ($ID == $ID2) {
	
$timezone = date_default_timezone_get();
$date = date('Y-m-d h:i:s', time());
$date2 = new DateTime($date);

if ($Time != "Life") {
date_add($date2, date_interval_create_from_date_string($Time));
$timeAdded = date_format($date2, 'Y-m-d h:i:s');
}else if ($Time == "Life") {
date_add($date2, date_interval_create_from_date_string('9999999 Days'));
$timeAdded = date_format($date2, 'Y-m-d h:i:s');
}else if ($Time == "None") {
date_sub($date2, date_interval_create_from_date_string('1 Day'));
$timeAdded = date_format($date2, 'Y-m-d h:i:s');
}

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
$sql = "UPDATE `users` SET Time='$timeAdded' WHERE ID='$ID'";
$q = $conn->prepare($sql);
$q->execute();
}
$conn = null;

header( 'Location: panel.php' ) ;
} catch (PDOException $pe) {
die("Could not connect to the database $dbname :" . $pe->getMessage());
}	
?>