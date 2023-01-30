<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="JavaScript\script.js" defer></script>
    <link rel="stylesheet" type="text/css" href="CSS\aboutusstyle.css">
    <link rel="icon" href="Images\logo.png">
</head>
<body>
    <nav class="navbar">
        <a href="index.php"><img src="Images\logo.png" class="brand-title" width="50" height="50" ></a>
        
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
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
          </a>
      </div>
      </nav>
    <div class="about-us-container">
        <h1>About Us</h1>
        <p>At Chickanji, we are dedicated to bringing you the best quality chicken dishes from around the world. Our menu features a variety of flavors and styles, all made with fresh ingredients and cooked to perfection. We believe that food is a universal language and our goal is to bring people together through the love of delicious chicken dishes.</p>
        <p>Our team is made up of experienced chefs and passionate foodies who work tirelessly to create new and exciting menu items. We pride ourselves on our attention to detail and commitment to using only the freshest and highest quality ingredients. Whether you're in the mood for a classic dish or something new and exciting, we have something for everyone at Chickanji.</p>
        <p>We are constantly striving to improve and innovate our menu, so be sure to check back often to see what new dishes we have in store. We can't wait to share our love of chicken with you!</p>
    </div>

</body>
</html>
