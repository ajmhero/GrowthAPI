<?php 
include 'connection.php';

$ToDoID = $_POST['ToDoID'];
$Archived = $_POST['Archived'];

$stmt = $connect->prepare("UPDATE growth_todolist SET Archived = ? WHERE ToDoID = ? ");
$stmt->bind_param("ii",$Archived,$ToDoID);
$stmt->execute();

?>