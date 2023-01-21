<?php
session_start(); 
$pdo = include_once './includes/dbcon-inc.php';
$sql = 'SELECT *  FROM `event_details`';
$stm = $pdo->prepare($sql);
$stm->execute();
$events = $stm->fetchAll(PDO::FETCH_OBJ);

?>
<?php include_once "./header.php";?>
<section class="event-hero">
    <div class="event-hero-content">
        <h1> View All Events </h1>
    </div>
</section>










<?php
    include_once "./footer.php";
?>