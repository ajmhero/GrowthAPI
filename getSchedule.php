<?php 
include 'connection.php';

$queryresult = $connect->query("SELECT ScheduleName,TimeStart,TimeEnd FROM growth_schedule WHERE Archived = '0'");

$result = array();

    while($fetchData =$queryresult ->fetch_assoc()){
     $result[]=$fetchData;
     }
    if($result == null){
     echo "No records found";
     }
        else{
        echo json_encode($result);  
    }
?>