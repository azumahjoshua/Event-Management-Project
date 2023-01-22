<?php
session_start(); 
include_once './header.php';
// print_r($_POST);
?>
<section class="event-add-section">
    <div class="event-form">
        <h1 class="form-title">Event Registration</h1>
        <form  action="./includes/createevent-inc.php" method="post">
                 <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                 <?php }?>
            <div class="input-text-box">
                <div class="form-group">
                    <label for="event_name" id="event_name-label">Event Name:</label>
                    <input type="text" id="event_name" name="event_name" class="input-text" placeholder="Enter Event Name">
                    <small>Error message</small>
                </div>
                <div class="form-group">
                    <label for="event_description" id="description-label">Event Description:</label>
                    <textarea style="height:50px;resize:vertical;" id="event_description" name="event_description" rows="2" cols="80"></textarea>
                    <small>Error message</small>
                </div>
                <div class="form-group">
                    <label for="event_location" id="event_location-label">Event Location:</label>
                    <input type="text" id="event_location" name="event_location" class="input-text" placeholder="Enter Event Location">
                    <small>Error message</small>
                </div>
                <div class="form-group">
                    <label for="gender" id="dropdown-label">Event Category:</label>
                    <select id="dropdown" name="event_category" class="input-text">
                    <option disabled value>
                        chose event type
                    </option>
                    <option value="other">Other</option>
                    <option value="Business">Business</option>
                    <option value="Tech">Tech</option>
                    <option value="Education">Education</option>
                    <option value="Entertainment">Entertainment</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="event_keyword" id="keyword-label">keywords:</label>
                    <textarea style="height:50px;resize:vertical;" id="event_keyword" name="keyword" rows="2" cols="80"></textarea>
                    <small>Error message</small>
                </div>
                 <div class="form-group">
                     <label for="video_url" id="video-label">Video Url:</label>
                    <input type="url" id="video_url" class="input-text" name="video_url" placeholder="Video URl">
                    <small>Error message</small>
                 </div>
                <div class="form-group">
                    <label for="image_url" id="image-label">Image Url:</label>
                    <input type="url" id="image_url" class="event_input-text" name="image_url" placeholder="Image Url">
                    <small>Error message</small>
                </div>
                <div class="form-group">
                    <label for="startdate" id="startdate-label">Start Date:</label>
                    <input type="date" id="startdate" class="input-text" value="2000-05-05" name="startdate" placeholder="Start Date">
                    <small>Error message</small>
                </div>
                <div class="form-group">
                    <label for="end_date" id="enddata-label">End Date:</label>
                    <input type="date" id="end_date" class="input-text" value="2000-05-05" name="enddate" placeholder="End Date">
                    <small>Error message</small>
                </div>
            <div class="form-submit-btn">
                <input type="submit" name="submit" id="event-submit-form" value="Add Event" placeholder="Add Event"/>
            </div>
        </form>
    </div>
</section>
<?php
include_once './footer.php'
?>