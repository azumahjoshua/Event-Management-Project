<?php
session_start(); 
$pdo = include_once './includes/dbcon-inc.php';

// $stm = $pdo->prepare("SELECT * FROM `$pdo->prepare("SELECT ``, username FROM `events_users` WHERE user_id=:user_id");event_details` WHERE user_id=:user_id");
$sql = 'SELECT *  FROM `event_details`';
$stm = $pdo->prepare($sql);
$stm->execute();
$events = $stm->fetchAll(PDO::FETCH_OBJ);

?>
<?php include_once "./header.php";?>
<section class="event-hero">
    <div class="event-hero-content">
        <h1>Event Details </h1>
    </div>
</section>
    <div class="event-nav">
        <ul class="horizontal-list">
            <li> <a href="createevent.php">Add Event</a> </li>
            <li> <a href="eventpage.php">Category</a> </li>
            <li> <a href="viewevnt.php">View All Event</a> </li>
        </ul>
    </div>
    <div class="eventdetails-section">
        <?php foreach($events as $event): ?>
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