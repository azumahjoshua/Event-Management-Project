<?php
session_start(); 
// echo  $_SESSION["userid"];
// include_once './header.php';

$pdo = include_once './includes/dbcon-inc.php';
$event_id = $_GET["event_id"];
$sql = 'SELECT *  FROM `event_details` WHERE event_id=:event_id';
$stm = $pdo->prepare($sql);
$stm->execute(['event_id' => $event_id]);
$et= $stm->fetch(PDO::FETCH_OBJ);
// echo $et->user_id;

?>
<?php include_once "./header.php";?>
<section class="about-section">
        <div class="about-overlay"></div>
    <div class="about-self-container">
      <span class="title">Event Page</span>
        <div class="profile_text">
            <p>
           <a href="./index.php">Home</a>
            </p>
            <p>
           <span>|</span>
            </p>
           <p>Event Page</p>
        </div>
    </div>
</section>
<section class="each-event">
    <div class="event-hero-header">
        <div class="headerimg">
            <img src="<?=$et->image_url;?>" alt="headerimage">
        </div>
        <div class="headertext">
            <h1><?=$et->event_name;?></h1>
            <p class="start-date"><i class="fa fa-calendar" aria-hidden="true"></i><?=$et->start_date;?></p>
            <p class="start-location"><i class="fa fa-map-marker" aria-hidden="true"></i><?=$et->event_location;?></p>
        </div>
    </div>

<section class="each-event-body">
    <div class="event-hero-left">
        <img src="<?=$et->image_url;?>">
        <h1><?=$et->event_name;?></h1>
        <p><?=$et->event_description;?></p>
        <p><?=$et->keywords;?></p>
    </div>
    <div class="event-hero-right">
        <div class="eventdatetime">
            <h5>Date & Time </h5>
            <span class="startdate"><i class="fa fa-calendar" aria-hidden="true"></i><?=$et->start_date?></span>
            <span>-</span>
            <span class="enddate"><i class="fa fa-calendar" aria-hidden="true"></i><?=$et->end_date?></span>   
        </div>
        <div class="eventlocation">
            <h5>Location</h5>
            <span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i><?=$et->event_location?></span>        
        </div>
        <?php 
        if($_SESSION['userid'] == $et->user_id){
            // event_id=<?=$event->event_id>
            $edit = "<a href='./editevent.php?event_id=$et->event_id'><button type='button'><span class='buton-20-span'></span>Edit</button></a>";
            $delete="<a id='deleteevetnt' href='./includes/deleteevent-inc.php?event_id=$et->event_id'><button type='button'><span class='buton-20-span'></span>Delete</button></a>";
        echo "<div class='button-2'>
        .$edit
        .$delete";
        echo "</div>";
        }
        ?>
          <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
  <?php } ?>
    </div>
</section>
</section>
<?php
    include_once "./footer.php";
?>