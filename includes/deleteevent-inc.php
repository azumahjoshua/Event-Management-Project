<?php
session_start(); 
$pdo = include './dbcon-inc.php';
$event_id = $_GET['event_id'];
// echo $event_id; 
try{
$sql = "DELETE FROM `event_details` WHERE  event_id=:event_id AND user_id=:user_id";
$user_id = $_SESSION['userid'];
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':event_id', $event_id, PDO::PARAM_INT);
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
$result = $stmt->execute(
    [':event_id'=>$event_id,
    ':user_id'=>$user_id]);
    if(!$result){
        header("Location: ../eachevent.php?error=Event  Can not be deleted");
    }else{
        header("Location: ../eventpage.php");
    }
}catch(PDOException $e){
    print "Error: " . $e->getMessage();
}

  
