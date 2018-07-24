<?php 
include 'connection.php';

$ItemName = $_POST['ItemName'];
$Status = $_POST['Status'];
$Archived = $_POST['Archived'];

$stmt = $connect->prepare("INSERT INTO growth_todolist(ItemName,Status,Archived)VALUES(?,?,?) ");
$stmt->bind_param("sss", $ItemName, $Status, $Archived);
$stmt->execute();

?>