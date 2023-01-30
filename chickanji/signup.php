<?php
    session_start();

require 'connectdb.php';

if(isset($_POST['insert'])){

  $sql ="INSERT INTO customers_db(Username, Email, Password) values (:Username, :Email, :Password)";

  $statement=$pdo->prepare($sql);

  $Username=$_POST['Username'];
  $Email=$_POST['Email'];
  $Password=$_POST['Password'];
  $statement->bindParam(":Username", $Username, PDO::PARAM_STR);
  $statement->bindParam(":Email", $Email, PDO::PARAM_STR);
  $statement->bindParam(":Password", $Password, PDO::PARAM_STR);

  $statement-> execute();
  $_SESSION['user'] = $user;
  $pdo=null;
  header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="JavaScript\script.js" defer></script>
    <title>Chickanji - Sign Up</title>
    <link rel="icon" href="Images\logo.png">
    <link rel="stylesheet" href="CSS\signupstyle.css">
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

  <div class="cart-icon-container">
    <a href="cart.php" class="cart-icon">
        <img src="Images\cart.jpg" width="30" height="30" alt="cart">
    </a>
</div>
  </nav>
</header>

<section>
  <div class="signup-container">
    <h1>Sign Up</h1>
    <form method ="post">
      <input type="text" placeholder="Username" name="Username" required >
      <input type="email" placeholder="Email" name="Email" required>
      <input type="password" placeholder="Password" name="Password" required>
      <button type="submit" name="insert">Sign Up</button>
      <p class="login-message" >Already have an account? <a href="login.php">Login in</a></p>
    </form>
  </div>
</section>
<footer>
  <div class="footer-container">
      <p>Copyright © Chickanji. All Rights Reserved.</p>
  </div>
</footer>
</body>
</html>