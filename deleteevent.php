<?php
session_start(); 
$pdo = include './dbcon-inc.php';
$event_id = $_GET['event_id'];
// echo $event_id; 
try{
$sql = "DELETE FROM `event_details` WHERE `event_details`.`event_id`=?";
$stmt = $pdo->prepare($sql);
$result = $stmt->execute([$event_id]);
if(!$result){
    header("Location: ../eachevent.php?error=Event  Can not be deleted");
}else{
    header("Location: ../eventpage.php");
}
}catch(PDOException $e){
 print "Error: " . $e->getMessage();
}









  
