<?php
include_once './header.php';
?>
<section class="login-section">

    <div class="login-form">
        <h1 class="form-title">Log in</h1>
        <form class="form-registeration" action="./includes/login-inc.php" method="post">
              <?php if (isset($_GET['error'])) { ?>
             <p class="error"><?php echo $_GET['error']; ?></p>
            <?php }else ?>
            <?php  {;?>
                <p> <?php echo " ";?> </p>
            <?php }?>
        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
            <div class="input-text-box">
                <div class="form-group">
                    <label for="username" id="name-label">Username:</label>
                    <input type="text" id="username" name="username" class="input-text" placeholder="Enter your  user name">
                </div>
                <div class="form-group">
                    <label for="password" id="password-label">Password:</label>
                    <input type="password" id="password" name="password" class="input-text" placeholder="Enter your password">
                </div>
            </div>
            
            <div class="form-submit-btn">
                <input type="submit" name="submit" value="Log in" placeholder="Log in">
            </div>
        </form>
    </div>
</section>
<?php
include_once './footer.php'
?>