<?php
session_start();
require 'connectdb.php';


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="JavaScript\script.js" defer></script>
    <title>Chickanji - Cart</title>
    <link rel="stylesheet" type="text/css" href="CSS\cartstyle.css">
    <link rel="icon" href="Images\logo.png">
  </head>
  <body>
    <header>
      <nav class="navbar">
        <a href="index.php">
          <img src="Images\logo.png" class="brand-title" width="50" height="50">
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
    <div class="cart-container">
      <h1>Shopping Cart</h1>
      <table>
        <tr>
          <th>Item</th>

          <th>Price</th>
        </tr>
        <?php
try {
  $stmt = $pdo->prepare("SELECT name, price, ID FROM cart");
  $stmt->execute();
  $results = $stmt->fetchAll();
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

if (!empty($results)) {
  foreach ($results as $row) {
      echo "<tr>
              <td>" . $row['name'] . "</td>
              <td>" . $row['price'] . "</td>
              <td>
              <form action='removeitem.php' method='post' onsubmit='return confirmRemove();'>
                <input type='hidden' name='id' value='" . $row['ID'] . "'>
                <input type='submit' value='Remove' >
              </form>
            </td>
            </tr>";
  }
} else {
  echo "<td name='empty' colspan='2'>Your cart is currently empty.</td>";
}
          ?>
      </table>

      
        

      </div>
      <div class="checkout-container">
        <a href="checkout.php" class="checkout-btn">Checkout</a>
       </div>
    </div>
    <script>
function confirmRemove() {
  return confirm('Are you sure you want to remove this item?');
}
</script>

  </body>
</html>
