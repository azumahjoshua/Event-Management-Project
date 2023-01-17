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
    // collect value of input field
    $username = validate($_POST['username']);
    $password = validate($_POST["password"]);
    $repeat_password = validate($_POST["repeat_password"]);
    $title = validate($_POST['title']);
    $first_name = validate($_POST['firstname']);
    $last_name =  validate($_POST['lastname']);
    $gender =  validate($_POST['gender']);
    $adress1 = validate( $_POST['address1']);
    $adress2 =  validate($_POST['address2']);
    $adress3 =  validate($_POST['address3']);
    $postcode =  validate($_POST['postcode']);
    $described = validate($_POST['described']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telephone =  validate($_POST['telephone']);
    $profile_url = validate( $_POST['profile_url']);
    
    //sever side error  checking
    $user_data='username='.$username.
    '&first_name='.$first_name.
    '&last_name='.$last_name.
    '&title='.$title.
    '&adress1='.$adress1.
    '&adress2='.$adress2. 
    '&adress3='.$adress3. 
    '&postcode='.$postcode.
    '&email='.$email.
    '&telephone='.$telephone.
    '&profile_url='.$profile_url;

    if(empty($username)){
        header("Location: ../register.php?error=User Name is required&$user_data");
	    exit();
    }else if(empty($last_name)){
        header("Location: ../register.php?error=Last name is required&$user_data");
        exit();
    }else if(empty($first_name)){
        header("Location: ../register.php?error=First name is required&$user_data");
        exit();
    }else if(empty($title)){
        header("Location: ../register.php?error=Title is required&$user_data");
        exit();
    }else if(empty($adress1) || empty($adress2) ||empty($adress3)){
        header("Location: register.php?error=Address is required&$user_data");
        exit();
    }else if(empty($postcode)){
        header("Location: register.php?error=Post code is required&$user_data");
        exit();
    }else if(empty($email)){
        header("Location: ../register.php?error=Email is required&$user_data");
        exit();
    }else if(empty($telephone)){
        header("Location: ../register.php?error=Telephone number is required&$user_data");
        exit();
    }else if(empty($profile_url)){
        header("Location: ../register.php?error=Profile url is required&$user_data");
        exit();
    }else if(empty($password)){
        header("Location: ../register.php?error=Password is required&$user_data");
        exit();
    }else if(empty($repeat_password)){
        // "../register.php"
        header("Location: ../register.php?error=Password confrimation is required&$user_data");
        exit();
    }else if($password !== $repeat_password){
        header("Location: ../register.php?error=Confrimation is match&$user_data");
        exit();
    }else {
        $password = validate(password_hash($_POST["password"], PASSWORD_DEFAULT));
        // check if user name alread exist in the database
        $slt = $pdo->prepare("SELECT * FROM events_users WHERE username =:username and first_name=:first_name and last_name=:last_name and email=:email");
        $slt->bindParam(':username', $username);
        $slt->bindParam(':first_name', $first_name);
        $slt->bindParam(':last_name', $last_name);
        $slt->bindParam(':email', $email);
        $slt->execute();
        if ($slt->rowCount() > 0) {
             header("Location: ../register.php?error=Error: User Has already registered.&$user_data");
             exit();
        } else {
        // insert new user data into the database
            $sql = "INSERT INTO events_users(username,pass,title,first_name,last_name,gender,adress1,adress2,adress3,postcode,described,email,telephone,profile_url)
            VALUES(:username,:pass,:title,:first_name,:last_name,:gender,:adress1,:adress2,:adress3,:postcode,:described,:email,:telephone,:profile_url)";
            $stmt= $pdo->prepare($sql);
            $stmt->bindParam(':username',$username);
            $stmt->bindParam(':pass',$password);
            $stmt->bindParam(':title',$title);
            $stmt->bindParam(':first_name',$first_name);
            $stmt->bindParam(':last_name',$last_name);
            $stmt->bindParam(':gender',$gender);
            $stmt->bindParam(':adress1',$adress1);
            $stmt->bindParam(':adress2',$adress2);
            $stmt->bindParam(':adress3',$adress3);
            $stmt->bindParam(':postcode',$postcode);
            $stmt->bindParam(':described',$described);
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':telephone',$telephone);
            $stmt->bindParam(':profile_url',$profile_url);
            $result1 = $stmt->execute();
            if(!$result1){
                 header("Location: ../register.php?error=unknown error occurred&$user_data");
                 exit();
             }else{
                header("Location: ../register.php?success=Your account has been created successfully");
                exit();
             }
        }
    }
    }else{
        header("Location: ../register.php");
	    exit();
    }