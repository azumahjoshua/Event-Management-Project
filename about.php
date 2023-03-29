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
            $width = "350";
            $height = "700"; 
            echo "<iframe width='$width' height='$height' src='https://www.youtube.com/embed/$video_id' frameborder='0' allowfullscreen></iframe>";
            ?>
            <!-- <iframe width='400' height='700' src='https://www.youtube.com/embed/$video_id' frameborder='0' allowfullscreen></iframe> -->
       </div>
       <div class="sec-title style-two">
        <div class="sec-title-two">
            <span class="title">JOIN THE EVENTA</span>
            <h2>Why Attend Eventa</h2>
        </div>

            <div class="row">
                    <div class="inner-box col-lg-6 col-md-6 col-sm-12">
                        <img class="icon-about" src="./images/microphone.png" alt="karaoke">
                        <h4>Great Speakers</h4>
                        <p class="text">Oxford gosh blower bbamboozled posh cockup, he nicked.!</p>
                    </div>
                    <div class="inner-box col-lg-6 col-md-6 col-sm-12">
                        <img class="icon-about" src="./images/agreement.png" alt="argrement">
                        <h4>Participants</h4>
                        <p>Oxford gosh blower bbamboozled posh cockup, he nicked.!</p>
                    </div>
                    <div class="inner-box col-lg-6 col-md-6 col-sm-12">
                        <img class="icon-about" src="./images/solution.png" alt="solution">
                        <h4>Proud Sponsors</h4>
                        <p>Oxford gosh blower bbamboozled posh cockup, he nicked.!</p>
                    </div>
                    <div class="inner-box col-lg-6 col-md-6 col-sm-12">
                        <img class="icon-about" src="./images/group.png" alt="group">
                        <h4>New People</h4>
                        <p>Oxford gosh blower bbamboozled posh cockup, he nicked.!</p>
                    </div>
            </div>
       </div>
    </div>
</section>
<?php
include_once './footer.php'
?>