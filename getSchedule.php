<?php 
include 'connection.php';

$queryresult = $connect->query("SELECT ScheduleID,ScheduleName,TimeStart,TimeEnd FROM growth_schedule WHERE Archived = '0'");

$result = array();

    while($fetchData =$queryresult ->fetch_assoc()){
     $result[]=$fetchData;
     }
 
        echo json_encode($result);  
?>