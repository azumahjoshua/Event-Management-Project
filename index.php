<?php
session_start(); 
// echo  $_SESSION["userid"];
include_once './header.php';
$pdo = include_once './includes/dbcon-inc.php';
$sql = 'SELECT *  FROM `event_details` LIMIT 6';
$stm = $pdo->prepare($sql);
$stm->execute();
$ets = $stm->fetchAll(PDO::FETCH_OBJ);
?>
<section class="hero">
    <div class="hero-content">
        <h1>SIST Student Union </h1>
        <p>Welcome to SIST student Union portal <br> where you can create events and
            more ... <br>Do you have an account? </p>
        <div class="button-2">
            <a href="./register.php"> <button type="button"><span class="buton-20-span"></span> Register</button> </a>
            <a href="./login.php"> <button type="button"><span class="buton-20-span"></span> Log in</button> </a>
        </div>
        
    </div>
</section>
<section class="event-area">
    <div class="event-nav event-category">
       <ul class="horizontal-list">
           <li> <a href="./eventcategories.php?event_category=Business">Business</a> </li>
           <li> <a href="./eventcategories.php?event_category=Tech">Tech</a> </li>
           <li> <a href="./eventcategories.php?event_category=Education">Education</a> </li>
           <li> <a href="./eventcategories.php?event_category=Entertainment">Entertainment</a> </li>
       </ul>
   </div>
   <div class="section-head">
        <h5>Events</h5>
        <h3>Popular Event</h3>
    </div>
   <div class="eventdetails-section">
        <?php foreach($ets as $ent): ?>
       <div class="evnt-item">
           <div class="evnt-img">
               <img src="<?=$ent->image_url;?>">
           </div>
           <div class="evnt-content">
               <div class="info">
                   <span class="startdate"><i class="fa fa-calendar" aria-hidden="true"></i><?=$ent->start_date?></span>
                   <span>-</span>
                   <span class="enddate"><i class="fa fa-calendar" aria-hidden="true"></i><?=$ent->end_date?></span>                
                   <span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i><?=$ent->event_location?></span>
               </div>
               <h5><?=$ent->event_name?></h5>
               <p class="event-desc"><?=$ent->event_description?></p>
              <!-- <span class="readmore"><a href="">Read More</a> </span> -->
              <span class="category"><?=$ent->event_category?></span>
           </div>
           <div class="start">
            <i class="fa fa-star-o" style="font-size:36px"></i>
            <i class="fa fa-star-o" style="font-size:24px"></i>
            <i class="fa fa-star-o" ></i>
           </div>
       </div> 
    <?php endforeach; ?>
   </div>
</section>

<?php
include_once './footer.php'
?>