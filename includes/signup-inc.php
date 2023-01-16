<?php
$pdo = require './dbcon-inc.php';
if (isset($_POST['submit'])) {
    // print_r($_POST['submit']);
    function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
    $username = validate($_POST['username']);
    $password = validate(password_hash($_POST["password"], PASSWORD_DEFAULT));
    $title = validate($_POST['title']);
    $firstname = validate($_POST['firstname']);
    $lastname =  validate($_POST['lastname']);
    $gender =  validate($_POST['gender']);
    $address1 = validate( $_POST['address1']);
    $address2 =  validate($_POST['address2']);
    $address3 =  validate($_POST['address3']);
    $postcode =  validate($_POST['postcode']);
 // $description = $_POST['description'];
    $email = validate( $_POST['email']);
    $telephone =  validate($_POST['telephone']);
    // $profile_url = validate( $_POST['profile_url']);
    // print_r($_POST);
    
    $sql = "INSERT INTO  users(username,`password`,title,firstname,lastname,gender,address1,address2,address3,postcode,email,telephone)
    VALUES(:username,:password,:title,:firstname,:lastname,:gender,:address1,:address2,:address3,:postcode,:email,:telephone)";
    try {
    $stmt= $pdo->prepare($sql);
    $stmt->bindParam(':username',$username);
    $stmt->bindParam(':password',$password);
    $stmt->bindParam(':title',$title);
    $stmt->bindParam(':firstname',$firstname);
    $stmt->bindParam(':lastname',$lastname);
    $stmt->bindParam(':gender',$gender);
    $stmt->bindParam(':address1',$address1);
    $con->bindParam(':address2',$address2);
    $stmt->bindParam(':address3',$address3);
    $stmt->bindParam(':postcode',$postcode);
    $con->bindParam(':description',$description);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':telephone',$telephone);
    // $stmt->bindParam(':profile_url',$profile_url);
    $stmt->execute();
    // header('Location : ../login.php');
    echo "sign up succefull";      
    // print_r($_POST);
    // echo 'Workings';
    } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    die();
}

} else {
     echo "something went wrong";  
    header('Location : ../register.php');
}
// 