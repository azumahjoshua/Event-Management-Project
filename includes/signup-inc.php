<?php
require './dbcon-inc.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // print_r($_POST);
    // echo 'Workings';
} else {
    header('Location : ../register.php');
}
