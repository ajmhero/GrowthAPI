<?php 
include 'connection.php';

$ToDoID = $_POST['ToDoID'];
$ItemName = $_POST['ItemName'];
$Status = $_POST['Status'];
$Archived = $_POST['Archived'];

$stmt = $connect->prepare("UPDATE growth_todolist SET ItemName = ? ,Status = ? , Archived = ? WHERE ToDoID = ? ");
$stmt->bind_param("ssii", $ItemName,$Status, $Archived,$ToDoID);
$stmt->execute();

?>