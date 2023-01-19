<?php
session_start(); 
include_once "./header.php";
?>
<section class="event-hero">
    <div class="event-hero-content">
        <h1>Event Details </h1>
    </div>
</section>
<section class="event-area">
    <div class="event-nav">
        <ul>
            <li> <a href="addevent.php">Add Event</a> </li>
            <li> <a href="eventpage.php">View Event</a> </li>
        </ul>
    </div>
    <div class="eventdetails-section">
        
    </div>
</section>
<?php
    include_once "./footer.php";
?>