<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Home Page</title>
</head>

<body>
    <header>
        <!-- nav bar -->
        <nav class="navbar">
            <div class="logo">
                <a href="./index.php">
                    <img src="./images/logo.png" alt="">
                    <!-- <h1>SIST</h1> -->
                </a>
            </div>
            <ul class="nav-links">
                <li class="nav-items"> <a href="./about.php"> <span>About</span></a> </li>
                <li class="nav-items"> <a href="./register.php"> <span> Register</span> </a> </li>
                <li class="nav-items"> <a href="./login.php"> <span> Log in </span></a> </li>
                <li class="nav-items get-tickets"> <a class="get-ticketlink" href="./register.php"> <span> Get Tickets </span></a> </li>

                <?php
                $event = '<a href="./eventpage.php"> <span> Event </span></a> </li>';
                if(isset($_SESSION['username'])){
                echo "<li class='nav-items'>".$event;
                echo "</li>";
                }
                ?>
                <?php
                $logout = '<a href="./logout.php"> <span> Logout </span></a> </li>';
                if(isset($_SESSION['username'])){
                echo "<li class='nav-items'>".$logout;
                echo "</li>";
                    }
                    ?>
            </ul>
            <div class="icon" id="togglenava">
                <i class="fa fa-bars"></i>
            </div>
        </nav>
    </header>