<?php 
include 'connection.php';

$ScheduleName = $_POST['ScheduleName'];
$TimeStart = $_POST['TimeStart'];
$TimeEnd = $_POST['TimeEnd'];
$Archived = $_POST['Archived'];

$stmt = $connect->prepare("INSERT INTO growth_schedule(ScheduleName,TimeStart,TimeEnd,Archived)VALUES(?,?,?,?) ");
$stmt->bind_param("ssss", $ScheduleName,$TimeStart,$TimeEnd, $Archived);
$stmt->execute();

?>