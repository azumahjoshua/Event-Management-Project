<?php
if (isset($_POST['submit'])) {
    echo 'Workings';
} else {
    header('location : ../register.php');
}
