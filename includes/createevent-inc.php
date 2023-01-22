<?php
session_start(); 
$pdo = include_once './dbcon-inc.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Server side data Validation
    function validate($data){
        $data = trim($data);
	      $data = stripslashes($data);
        $data = htmlspecialchars($data);
	    return $data;
    }

    // user_id	
    // collect value of input field
    
    //sever side error  checking
    // print_r($_SERVER["REQUEST_METHOD"]);
    // echo  $_SESSION["userid"];
    $userid = $_SESSION["userid"];
    // echo $userid;
    $slt = $pdo->prepare("SELECT user_id, username FROM `events_users` WHERE user_id=:user_id");
    $slt->execute(['user_id' => $userid]);
    $user = $slt->fetch();
    // echo $user['username'];
    // echo $user['user_id'];


    // $user_id = userid;
    $event_name = validate($_POST['event_name']);
    $event_description = validate($_POST['event_description']);
    $event_location = validate($_POST['event_location']);
    $event_category = validate($_POST['event_category']);
    $keywords= validate($_POST['keyword']);
    $video_url = validate($_POST['video_url']);
    $image_url = validate($_POST['image_url']);
    $start_date =validate($_POST['startdate']);
    $end_date = validate($_POST['enddate']);

     //sever side error  checking
    $user_data='event_name='.$event_name.
    '&event_descriptio='.$event_description.
    '&event_location='.$event_location.
    '&event_category='.$event_category.
    '&keywords='.$keywords.
    '&video_url='.$video_url. 
    '&image_url='.$image_url. 
    '&start_date='.$start_date.
    '&end_date='.$end_date;


    if(empty($event_name)){
     header("Location: ../addevent.php?error=Event Name is required&$user_data");
    exit();
    }else if(empty($event_description)){
     header("Location: ../addevent.php?error=Event Description is required&$user_data");
     exit();
     }else if(empty($event_location)){
     header("Location: ../addevent.php?error=Event Location required&$user_data");
     exit();
    }else if(empty($event_category)){
     header("Location: ../addevent.php?error=Event Category is required&$user_data");
     exit();
    }else if(empty($keywords)){
     header("Location: ../addevent.php?error=Keyword required&$user_data");
     exit();
    }else if(empty($image_url)){
     header("Location: ../addevent.php?error=Image url is required&$user_data");
     exit();
    }else if(empty($start_date)){
     header("Location: ../addevent.php?error=Starting Date is required&$user_data");
     exit();
    }else if(empty($end_date)){
     header("Location: ../addevent.php?error=End Date is required&$user_data");
     exit();
    }else{
        $sql = "INSERT INTO event_details(user_id,event_name,event_description,event_location,event_category,keywords,video_url,image_url,start_date,end_date)
         VALUES(:user_id,:event_name,:event_description,:event_location,:event_category,:keywords,:video_url,:image_url,:start_date,:end_date)";
        $stmt= $pdo->prepare($sql);
        $stmt->bindParam(':user_id',$userid);
        $stmt->bindParam(':event_name',$event_name);
        $stmt->bindParam(':event_description',$event_description);
        $stmt->bindParam(':event_location',$event_location);
        $stmt->bindParam(':event_category',$event_category);
        $stmt->bindParam(':keywords',$keywords);
        $stmt->bindParam(':video_url',$video_url);
        $stmt->bindParam(':image_url',$image_url);
        $stmt->bindParam(':start_date',$start_date);
        $stmt->bindParam(':end_date',$end_date);
        $result1 = $stmt->execute();
         if(!$result1){
            echo "cant insert";
            header("Location: ../createevent.php?error=unknown error occurred&$user_data");
          exit();
          }else{
            echo "inserted";
            header("Location: ../eventpage.php");
            exit();
  }

    }
    }
