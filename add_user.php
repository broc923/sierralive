<?php
require_once 'config.php';

try {
$Email = $_POST['Email'];
$CPUKey = $_POST['CPUKey'];
$Time = $_POST['Time'];
	
$timezone = date_default_timezone_get();
$date = date('Y-m-d h:i:s', time());
$date2 = new DateTime($date);

if ($Time != "Life") {
date_add($date2, date_interval_create_from_date_string($Time));
$timeAdded = date_format($date2, 'Y-m-d h:i:s');
}else if ($Time == "Life") {
date_add($date2, date_interval_create_from_date_string('9999999 Days'));
$timeAdded = date_format($date2, 'Y-m-d h:i:s');
}

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
$sql = "INSERT INTO `users` (`ID`, `IP`, `Email`, `SecurityCode`, `Staff`, `CPUKey`, `Time`) VALUES (NULL, 'Added_Manually', '$Email', 'Change_This', '0', '$CPUKey', '$timeAdded')";
$q = $conn->prepare($sql);
$q->execute();



$conn = null;

header( 'Location: panel.php' ) ;
} catch (PDOException $pe) {
die("Could not connect to the database $dbname :" . $pe->getMessage());
}	
?>