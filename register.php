<?php
include_once './header.php'
?>
<section class="register-section">
    <div class="registeration-form">
        <h1 class="form-title">Registration From</h1>
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
                <div class="form-group">
                    <label for="repeat-password" id="password-label">Password:</label>
                    <input type="password" id="repeat-password" class="input-text" placeholder="Repeat your password">
                </div>
                <div class="form-group">
                    <label for="title" id="title-label">Title:</label>
                    <input type="text" id="title" class="input-text" placeholder="Enter your title">
                </div>
                <div class="form-group">
                    <label for="firstname" id="firstname-label">First Name:</label>
                    <input type="text" id="firstname" class="input-text" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <label for="lastname" id="lastname-label">Last Name:</label>
                    <input type="text" id="lastname" class="input-text" placeholder="Last Name" required>
                </div>
                <div class="form-group">
                    <label for="gender" id="dropdown-label">Gender:</label>
                    <select id="dropdown" name="position" class="input-text">
                        <option disabled value>
                            chose your gender
                        </option>
                        <option value="other">Other</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="address1" id="address1-label">Address 1:</label>
                    <input type="text" id="address1" class="input-text" placeholder="Enter your Address 1" required>
                </div>
                <div class="form-group">
                    <label for="address2" id="address2-label">Address 2:</label>
                    <input type="text" id="address2" class="input-text" placeholder="Enter your Address 2">
                </div>
                <div class="form-group">
                    <label for="post-code" id="post-code-label">Post Code:</label>
                    <input type="text" id="post-code" class="input-text" placeholder="Enter your post-code">
                </div>
                <div class="form-group">
                    <label for="description" id="description-label">Description:</label>
                    <textarea style="height:50px;resize:vertical;" rows="2" cols="80"></textarea>
                </div>
                <div class="form-group">
                    <label for="email" id="email-label">Email:</label>
                    <input type="email" id="email" class="input-text" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="phone" id="phone-label">Enter a phone number:</label>
                    <input type="tel" id="phone" class="input-text" placeholder="0123-456-789" pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" required>
                </div>
                <div class="form-group">
                    <label for="profile" id="profile-label">Profile Url:</label>
                    <input type="text" id="profile" class="input-text" placeholder="Enter your profile Url">
                </div>
            </div>
            <div class="form-submit-btn">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
</section>
<?php
include_once './footer.php'
?>