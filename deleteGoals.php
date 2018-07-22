<?php 
include 'connection.php';

$GoalID = $_POST['GoalID'];
$Archived = $_POST['Archived'];

$stmt = $connect->prepare("UPDATE growth_goals SET Archived = ? WHERE GoalID = ? ");
$stmt->bind_param("ii",$Archived,$GoalID);
$stmt->execute();

?>