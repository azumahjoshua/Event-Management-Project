<?php
include_once './header.php'
?>
<section class="login-section">
    <div class="login-form">
        <h1 class="form-title">Log in</h1>
        <form action="" method="post">
            <div class="input-text-box">
                <div class="form-group">
                    <label for="username" id="name-label">Username:</label>
                    <input type="text" id="username" class="input-text" placeholder="Enter your  user name" required>
                </div>
                <div class="form-group">
                    <label for="password" id="password-label">Password:</label>
                    <input type="password" id="password" class="input-text" placeholder="Enter your password">
                </div>
            </div>
            <div class="form-submit-btn">
                <input type="submit" value="Log in">
            </div>
        </form>
    </div>
</section>
<?php
include_once './footer.php'
?>