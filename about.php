<?php
include_once './header.php'
?>
<section class="about-section">
        <div class="about-overlay"></div>
    <div class="about-self-container">
      <span class="title">About Eventa</span>
        <div class="profile_text">
            <p>
           <a href="./index.php">Home</a>
            </p>
            <p>
           <span>|</span>
            </p>
           <p>About Eventa</p>
        </div>
    </div>
</section>
<section class="about-section-website">
    <div class="about-website-container">
       <div class="video-box-one">
            <?php
            $video_id="YSn7yodn2f4";
            $width = "500";
            $height = "700"; 
            echo "<iframe width='$width' height='$height' src='https://www.youtube.com/embed/$video_id' frameborder='0' allowfullscreen></iframe>";
            ?>
       </div>
       <div class="sec-title style-two">
        <span class="title">JOIN THE EVENTA</span>
        <h2>Why Attend Eventa</h2>
       </div>
    </div>
</section>
<?php
include_once './footer.php'
?>