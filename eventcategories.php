<?php
session_start(); 
$pdo = include_once './includes/dbcon-inc.php';
$event_category=$_GET['event_category'];

$sql = 'SELECT *  FROM `event_details` WHERE event_category=:event_category';
$stm = $pdo->prepare($sql);
$stm->execute(['event_category'=>$event_category]);
$etc = $stm->fetchAll(PDO::FETCH_OBJ);

?>
<?php include_once "./header.php";?>
<section class="event-hero">
    <div class="event-hero-content">
        <h1><?php echo $event_category;?> </h1>
    </div>
</section>
    <div class="eventdetails-section">
        <?php foreach($etc as $event): ?>
        <div class="evnt-item">
                <div class="evnt-img">
                    <img src="<?=$event->image_url;?>" alt="">
                </div>
                <div class="evnt-content">
                    <div class="info">
                        <span class="startdate"><i class="fa fa-calendar" aria-hidden="true"></i><?=$event->start_date?></span>
                        <span>-</span>
                        <span class="enddate"><i class="fa fa-calendar" aria-hidden="true"></i><?=$event->end_date?></span>   
                        <span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i><?=$event->event_location?></span>       
                    </div>
                    <h5><?=$event->event_name?></h5>
                    <p class="event-desc"><?=$event->event_description?></p>
                    <div class="event-detail">
                        <span class="readmore"><a href="./eachevent.php?event_id=<?=$event->event_id?>">Read More</a></span>
                        <span class="category"><?=$event->event_category?></span>
                    </div>
                </div>
        </div>
        <?php endforeach; ?>
    </div>
<?php
    include_once "./footer.php";
?>




























































