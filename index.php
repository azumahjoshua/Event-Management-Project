<?php
session_start(); 
// echo  $_SESSION["userid"];
include_once './header.php';
?>
<section class="hero">
    <div class="hero-content">
        <h1>SIST Student Union </h1>
        <p>Welcome to SIST student Union portal <br> where you can create events and
            more ... <br>Do you have an account </p>
        <div class="button-2">
            <a href="./register.php"> <button type="button"><span class="buton-20-span"></span> Register</button> </a>
            <a href="./login.php"> <button type="button"><span class="buton-20-span"></span> Log in</button> </a>
        </div>
        
    </div>
</section>
<section class="event-area">
  <div class="section-head">
    <h5>Events</h5>
    <h3>Popular Event</h3>
  </div>
     <div class="event-nav event-category">
       <ul class="horizontal-list">
           <li> <a href="">Business</a> </li>
           <li> <a href="">Tech</a> </li>
           <li> <a href="">Education</a> </li>
       </ul>
   </div>
   <div class="eventdetails-section">
       <div class="evnt-item">
           <div class="evnt-img">
               <img src="https://cdn-az.allevents.in/events5/banners/eaf9b065f964c8593f5bec5e198c797e8578b15b1e0f34adba1e751b8f1bcffe-rimg-w960-h540-gmir.jpg">
           </div>
           <div class="evnt-content">
               <div class="info">
                   <span class="startdate"><i class="fa fa-calendar" aria-hidden="true"></i>Feb 3, 2023</span>
                   <span>-</span>
                   <span class="enddate"><i class="fa fa-calendar" aria-hidden="true"></i>Feb 5, 2023 </span>                
                   <span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>Rabat</span>
               </div>
               <h5>OMR16</h5>
               <p class="event-desc">École nationale supérieure des mines de Rabat</p>
              <span class="readmore"><a href="">Read More</a> </span>
              <span class="category">Business</span>
           </div>
           
       </div> 
       <div class="evnt-item">
           <div class="evnt-img">
               <img src="https://cdn-az.allevents.in/events5/banners/eaf9b065f964c8593f5bec5e198c797e8578b15b1e0f34adba1e751b8f1bcffe-rimg-w960-h540-gmir.jpg">
           </div>
           <div class="evnt-content">
               <div class="info">
                    <span class="startdate"><i class="fa fa-calendar" aria-hidden="true"></i>Feb 3, 2023</span>
                   <span>-</span>
                   <span class="enddate"><i class="fa fa-calendar" aria-hidden="true"></i>Feb 5, 2023 </span>          
                   <span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>Rabat</span>
               </div>
               <h5>OMR16</h5>
               <p class="event-desc">École nationale supérieure des mines de Rabat</p>
               <span class="readmore"><a href="">Read More</a> </span>
              <span class="category">Business</span>
           </div>
       </div>
       <div class="evnt-item">
           <div class="evnt-img">
               <img src="https://cdn-az.allevents.in/events5/banners/eaf9b065f964c8593f5bec5e198c797e8578b15b1e0f34adba1e751b8f1bcffe-rimg-w960-h540-gmir.jpg">
           </div>
           <div class="evnt-content">
               <div class="info">
                   <span class="startdate"><i class="fa fa-calendar" aria-hidden="true"></i>Feb 3, 2023</span>
                   <span>-</span>
                   <span class="enddate"><i class="fa fa-calendar" aria-hidden="true"></i>Feb 5, 2023 </span>          
                   <span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>Rabat</span>
               </div>
               <h5>OMR16</h5>
               <p class="event-desc">École nationale supérieure des mines de Rabat</p>
               <span class="readmore"><a href="">Read More</a> </span>
              <span class="category">Tech</span>
           </div>
       </div>
       <div class="evnt-item">
           <div class="evnt-img">
               <img src="https://cdn-az.allevents.in/events5/banners/eaf9b065f964c8593f5bec5e198c797e8578b15b1e0f34adba1e751b8f1bcffe-rimg-w960-h540-gmir.jpg">
           </div>
           <div class="evnt-content">
               <div class="info">
                   <span class="startdate"><i class="fa fa-calendar" aria-hidden="true"></i>Feb 3, 2023</span>
                   <span>-</span>
                   <span class="enddate"><i class="fa fa-calendar" aria-hidden="true"></i>Feb 5, 2023 </span>          
                   <span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>Rabat</span>
               </div>
               <h5>OMR16</h5>
               <p class="event-desc">École nationale supérieure des mines de Rabat</p>
              <span class="readmore"><a href="">Read More</a> </span>
              <span class="category">Education</span>
           </div>
       </div>
       <div class="evnt-item">
           <div class="evnt-img">
               <img src="https://cdn-az.allevents.in/events5/banners/eaf9b065f964c8593f5bec5e198c797e8578b15b1e0f34adba1e751b8f1bcffe-rimg-w960-h540-gmir.jpg">
           </div>
           <div class="evnt-content">
               <div class="info">
                   <span class="startdate"><i class="fa fa-calendar" aria-hidden="true"></i>Feb 3, 2023</span>
                   <span>-</span>
                   <span class="enddate"><i class="fa fa-calendar" aria-hidden="true"></i>Feb 5, 2023 </span>         
                   <span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>Rabat</span>
               </div>
               <h5>OMR16</h5>
               <p class="event-desc">École nationale supérieure des mines de Rabat</p>
               <span class="readmore"><a href="">Read More</a> </span>
              <span class="category">Business</span>
           </div>
       </div>
       <div class="evnt-item">
           <div class="evnt-img">
               <img src="https://cdn-az.allevents.in/events5/banners/eaf9b065f964c8593f5bec5e198c797e8578b15b1e0f34adba1e751b8f1bcffe-rimg-w960-h540-gmir.jpg">
           </div>
           <div class="evnt-content">
               <div class="info">
                   <span class="startdate"><i class="fa fa-calendar" aria-hidden="true"></i>Feb 3, 2023</span>
                   <span>-</span>
                   <span class="enddate"><i class="fa fa-calendar" aria-hidden="true"></i>Feb 5, 2023 </span>         
                   <span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>Rabat</span>                    
               </div>
               <h5>OMR16</h5>
               <p class="event-desc">École nationale supérieure des mines de Rabat</p>
               <span class="readmore"><a href="">Read More</a> </span>
              <span class="category">Education</span>
           </div>
       </div>
   </div>
</section>

<?php
include_once './footer.php'
?>