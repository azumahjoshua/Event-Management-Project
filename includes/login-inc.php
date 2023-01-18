<?php
session_start();
$pdo = include_once './dbcon-inc.php';
if($_SERVER["REQUEST_METHOD"] === "POST"){
     function validate($data){
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
    return $data;
 }
 // collect value of input field
$username = validate($_POST['username']);
$pass = validate($_POST["password"]);

if(empty($username)){
    header("Location: ../login.php?error=User name is requireed");
    exit();
}else if(empty($pass)){
    header("Location: ../login.php?error=User Password is requireed");
    exit();
}else {
    $slt = $pdo->prepare("SELECT * FROM `events_users` WHERE username =:username");
    $slt->execute(['username' => $username]);
    $user = $slt->fetch();
    if($user && password_verify($pass, $user['pass'])){
        session_start();
        $_SESSION['username'] = $username;
        header("Location: ../index.php?success=success");
    }else{
        header("Location: ../login.php?error=Invalid Credentials");
    }
}

}else {
    header("Location: login.php");
	exit();
}
