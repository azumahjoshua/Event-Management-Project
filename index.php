<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Home Page</title>
</head>

<body>
    <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
            <div class="nav-title">
                SIST
            </div>
        </div>
        <div class="nav-btn">
            <label for="nav-check">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>

        <div class="nav-links">
            <a href="./about.php">About</a>
            <a href="./register.php">Register</a>
            <a href="./login.php">Login</a>
        </div>
    </div>
    <div class="container">
        <!-- <div class="header-image"> -->
        <!-- <img src="./images/logo.jpeg" alt="student-wih a book"> -->
        <!-- </div> -->
        <div class="header-text">
            <h1> SIST Student Union</h1>
            <hr />
            <p>Welcome to SIST student Union portal where you can create events and more ...</p>
            <p>Do you have an account </p>
            <div class="button-2">
                <button class="button-28"><a href="./register.php">Register Here </a></button>
                <button class="button-28"> <a href="./login.php">Log in</a> </button>
            </div>
        </div>
    </div>
    <script src="./script/app.js"></script>
</body>

</html>