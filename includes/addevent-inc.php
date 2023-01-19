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
    $slt = $pdo->prepare("SELECT user_id, username FROM `events_users` WHERE user_id=:user_id");
    $slt->execute(['user_id' => $userid]);
    $user = $slt->fetch();
    // echo $user['username'];
    // echo $user['user_id'];


    // $user_id = userid;
    $event_name = $_POST['event_name'];
    $event_description = $_POST['event_description'];
    $event_location = $_POST['event_location'];
    $event_category = $_POST['event_location'];
    $keywords= $_POST['event_keyword'];
    $video_url = $_POST['video_url'];
    $image_url = $_POST['image_url'];
    $start_date = $_POST['startdate'];
    $end_date = $_POST['enddate'];

     //sever side error  checking
    $user_data='event_name='.$event_name.
    '&event_descriptio='.$event_descriptio.
    '&event_location='.$event_location.
    '&event_category='.$event_category.
    '&keywords='.$keywords.
    '&video_url='.$video_url. 
    '&image_url='.$image_url. 
    '&start_date='.$start_date.
    '&end_date='.$end_date;

    

    }
