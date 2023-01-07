<?php
include_once './header.php'
?>
<section class="signupform">
    <h1>Registration Form</h1>
    <p>Please fill out this form with the required information</p>
    <form method="post" action=''>
        <fieldset>
            <label for="first-name">Enter Your First Name: <input class="input-text" id="first-name" name="first-name" type="text" required /></label>
            <label for="last-name">Enter Your Last Name: <input class="input-text" id="last-name" name="last-name" type="text" required /></label>
            <label for="email">Enter Your Email: <input class="input-text" id="email" name="email" type="email" required /></label>
            <label for="new-password">Create a New Password: <input class="input-text" id="new-password" name="new-password" type="password" pattern="[a-z0-5]{8,}" required /></label>
            <label for="new-password">Confirme Password: <input class="input-text" id="new-password" name="confime-password" type="password" pattern="[a-z0-5]
{8,}" required /></label>
        </fieldset>
        <button class="button-submit" type="submit">Submit</button>
    </form>
</section>
<?php
include_once './footer.php'
?>