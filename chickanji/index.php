<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="JavaScript\script.js" defer></script>
    <meta name="description" content="Discover the delicious taste of Chickanji's chicken dishes. Our menu includes a variety of options, from traditional fried chicken to gourmet
     sandwiches. Order online now and enjoy the best chicken in town!">
    <title>Chickanji</title>
    <link rel="icon" href="Images\logo.png">
    
    <link rel="stylesheet" href="CSS\style.css">
</head>
<body>
    <header>
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
</header>
<section>
  <div class="video">
   <video loop muted autoplay id="video">
    <source src="Images\video.mp4" type="video/mp4">
        
</video>
</section>
<section>
</div>
  <div class="content">
    <h1>WELCOME TO Chickanji</h1>
    
  </div>
</section>
<footer>
  <div class="footer-container">
      <p>Copyright © Chickanji. All Rights Reserved.</p>

  </div>
</footer>

</body>
</html>