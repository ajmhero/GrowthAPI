<?php 
include 'connection.php';

$GoalName = $_POST['GoalName'];
$Status = $_POST['Status'];
$Archived = $_POST['Archived'];

$stmt = $connect->prepare("INSERT INTO growth_goals(GoalName,Status,Archived)VALUES(?,?,?) ");
$stmt->bind_param("sss", $GoalName, $Status, $Archived);
$stmt->execute();

?>