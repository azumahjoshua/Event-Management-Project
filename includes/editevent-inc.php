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
    // var_dump($_POST);
    $event_name = validate($_POST['event_name']);
    $user_id = $_SESSION['userid'];
    // var_dump($_POST['event_name']);
    $event_description = validate($_POST['event_description']);
    // echo $event_description;
    $event_location = validate($_POST['event_location']);
    $event_category = validate($_POST['event_category']);
    $keywords= validate($_POST['keyword']);
    $video_url = validate($_POST['video_url']);
    $image_url = validate($_POST['image_url']);
    $start_date =validate($_POST['startdate']);
    $end_date = validate($_POST['enddate']);
    // echo $event_name;

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
     header("Location: ../editevent.php?error=Event Name is required&$user_data");
    exit();
    }else if(empty($event_description)){
     header("Location: ../editevent.php?error=Event Description is required&$user_data");
     exit();
     }else if(empty($event_location)){
     header("Location: ../editevent.php?error=Event Location required&$user_data");
     exit();
    }else if(empty($event_category)){
     header("Location: ../editevent.php?error=Event Category is required&$user_data");
     exit();
    }else if(empty($keywords)){
     header("Location: ../editevent.php?error=Keyword required&$user_data");
     exit();
    }else if(empty($image_url)){
     header("Location: ../editevent.php?error=Image url is required&$user_data");
     exit();
    }else if(empty($start_date)){
     header("Location: ../editevent.php?error=Starting Date is required&$user_data");
     exit();
    }else if(empty($end_date)){
     header("Location: ../editevent.php?error=End Date is required&$user_data");
     exit();
    }else{
        $event_id = $_GET["event_id"];
        $sql = "UPDATE `event_details` SET
        user_id=:user_id,
        event_name=:event_name,
        event_description=:event_description,
        event_location=:event_location,
        event_category=:event_category,
        keywords=:keywords,
        video_url=:video_url,
        image_url=:image_url,
        start_date=:start_date,
        end_date=:end_date
        WHERE `event_details`.`event_id`=:event_id";
        $stmt= $pdo->prepare($sql);
        $result = $stmt->execute(
        ['event_id'=>$event_id,
        ':user_id'=>$$user_id,
        ':event_name'=>$event_name,
        ':event_description'=>$event_description,
        ':event_location'=>$event_location,
        ':event_category'=>$event_category,
        ':keywords'=>$keywords,
        ':video_url'=>$video_url,
        ':image_url'=>$image_url,
        ':start_date'=>$start_date,
        ':end_date'=>$end_date]);
        if(!$result){
            header("Location: ../editevent.php?error=unknown error occurred&$user_data");
            exit();
        }else{
          header("Location: ../eventpage.php?");
          exit();
        }
  }
}
  
