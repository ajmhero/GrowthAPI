<?php 
include 'connection.php';

$queryresult = $connect->query("SELECT GoalID,GoalName,Status FROM growth_goals WHERE Status = 'Pending' AND Archived = '0'");

$result = array();

    while($fetchData =$queryresult ->fetch_assoc()){
     $result[]=$fetchData;
     }
    if($result == null){
     echo "No records found";
     }     
        echo json_encode($result);  
?>