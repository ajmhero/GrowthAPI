<?php 
include 'connection.php';

$queryresult = $connect->query("SELECT * FROM users");

$result = array();

while($fetchData =$queryresult ->fetch_assoc()){
    $result[]=$fetchData;
}
echo json_encode($result);
?>