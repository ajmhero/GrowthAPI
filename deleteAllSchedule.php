<?php 
include 'connection.php';

$Archived = $_POST['Archived'];

$stmt = $connect->prepare("UPDATE growth_schedule SET Archived = ?");
$stmt->bind_param("i",$Archived);
$stmt->execute();

?>