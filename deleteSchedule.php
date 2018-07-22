<?php 
include 'connection.php';

$ScheduleID = $_POST['ScheduleID'];
$Archived = $_POST['Archived'];

$stmt = $connect->prepare("UPDATE growth_schedule SET Archived = ? WHERE ScheduleID = ? ");
$stmt->bind_param("ii",$Archived,$ScheduleID);
$stmt->execute();

?>