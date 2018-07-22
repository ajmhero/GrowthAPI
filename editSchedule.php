<?php 
include 'connection.php';

$ScheduleID = $_POST['ScheduleID'];
$ScheduleName = $_POST['ScheduleName'];
$TimeStart = $_POST['TimeStart'];
$TimeEnd = $_POST['TimeEnd'];
$Archived = $_POST['Archived'];

$stmt = $connect->prepare("UPDATE growth_schedule SET ScheduleName = ? ,TimeStart = ? ,TimeEnd = ? , Archived = ? WHERE ScheduleID = ? ");
$stmt->bind_param("sssii", $ScheduleName,$TimeStart,$TimeEnd, $Archived,$ScheduleID);
$stmt->execute();

?>