<?php 
include 'connection.php';

$GoalID = $_POST['GoalID'];
$GoalName = $_POST['GoalName'];
$Status = $_POST['Status'];
$Archived = $_POST['Archived'];


$stmt = $connect->prepare("UPDATE growth_goals SET GoalName = ? ,Status = ? , Archived = ? WHERE GoalID = ? ");
$stmt->bind_param("ssii", $GoalName,$Status, $Archived,$GoalID);
$stmt->execute();

?>