<?php
require_once 'config.php';

try {
$CPUKey = $_POST['CPUKey'];
$ID = $_POST['ID'];

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
$sql = "UPDATE `users` SET CPUKey='$CPUKey' WHERE ID='$ID'";
$q = $conn->prepare($sql);
$q->execute();

$conn = null;

header( 'Location: panel.php' ) ;
} catch (PDOException $pe) {
die("Could not connect to the database $dbname :" . $pe->getMessage());
}	
?>