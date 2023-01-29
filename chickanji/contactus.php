<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="JavaScript\script.js" defer></script>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="CSS\contactusstyle.css">
    <link rel="icon" href="Images\logo.png">

</head>
<body>
    <nav class="navbar">
    <a href="index.php"><img src="Images\logo.png" class="brand-title" width="50" height="50" ></a>
    <div class="navbar-links">
        <ul>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="aboutus.php">About us</a></li>
            <li><a href="contactus.php">Contact us</a></li>
        </ul>
    </div>
    <div class="login-signup-btns">
    <?php if(!isset($_SESSION['user'])): ?>
        <a href="login.php" class="login-btn">Login</a>
        <a href="signup.php" class="signup-btn">Sign Up</a>
    <?php else: ?>
        <a href="logout.php" class="logout-btn">Log out</a>
    <?php endif; ?>
    </div>
    <div class="cart-icon-container">
        <a href="cart.php" class="cart-icon">
            <img src="Images\cart.jpg" width="30" height="30" alt="cart">
    </div>
    <a href="#" class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </a>
  </nav>
  <div class="content">
    <h1>Contact Us</h1>
    <p>Email us at: <a href="mailto:21110247@htu.edu.jo">info@chickanji.com</a></p>
    <p class="location">Dawood Complex, Amman</p>
    <p class="hours">Open Saturday-Friday 12pm-12am</p>
    <a href="https://www.instagram.com/chickanji.jo" target="_blank"><img class="insta"src="Images\instagram-icon.png" width="30" height="30" alt="Instagram"></a>
    
  </div>
  <footer class="footer">
  <p>Copyright © Chickanji. All Rights Reserved.</p>
  </footer>
</body>
</html>

