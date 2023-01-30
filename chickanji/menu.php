<?php
session_start();
require 'connectdb.php';

if(isset($_POST['add-btn1'])) {
    // Retrieve the values for name, price and image for item 1
    $name = $_POST['name1'];
    $price = $_POST['price1'];
    $image = $_POST['image1'];
    // Insert the values into the cart table in the database
    insert_into_cart($name, $price, $image);
}
else if(isset($_POST['add-btn2'])) {
     // Retrieve the values for name, price and image for item 1
     $name = $_POST['name2'];
     $price = $_POST['price2'];
     $image = $_POST['image2'];
     // Insert the values into the cart table in the database
     insert_into_cart($name, $price, $image);
}
else if(isset($_POST['add-btn3'])) {
    // Retrieve the values for name, price and image for item 1
    $name = $_POST['name3'];
    $price = $_POST['price3'];
    $image = $_POST['image3'];
    // Insert the values into the cart table in the database
    insert_into_cart($name, $price, $image);
}
else if(isset($_POST['add-btn4'])) {
    $name = $_POST['name4'];
    $price = $_POST['price4'];
    $image = $_POST['image4'];
    insert_into_cart($name, $price, $image);
}

function insert_into_cart($name, $price, $image) {
    global $pdo;

    $sql = "INSERT INTO cart (name, price, image) VALUES (:name, :price, :image)";

    $stmt = $pdo->prepare($sql);
    // Bind the parameters
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':image', $image);
    // Execute the statement
    $stmt->execute();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="JavaScript\script.js" defer></script>
    

    <title>Menu</title>
    <link rel="stylesheet" href="CSS\menustyle.css">
    <link rel="icon" href="Images\logo.png">
</head>
<body>
    <nav class="navbar">
        <a href="index.php"><img src="Images\logo.png" class="brand-title" width="50" height="50"></a>
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
    <form method="post" action="menu.php">
    <div class="menu-items">
        <div class="menu-item">
            <img src="Images\chickensandwich.jpg" alt="chicken sandwich"class="item-img">
            <h2>Chicken Sandwich</h2>
            
            <div class="menu-item-options">
                
                <div  class="menu-item-price">$10.99</div>
                <div class="menu-item-add-btn">
                <input type="hidden" name="name1" value="Chicken Sandwich">
                <input type="hidden" name="price1" value="10.99">
                <input type="hidden" name="image1" value="Images\chickensandwich.jpg">
                    <button type="submit" name="add-btn1" class="add-btn">+</button>
                    
                </div>
            </div>
        </div>
        <div class="menu-item">
            <img src="Images\wings.jpg" alt="wings"class="item-img">
            <h2>Wings</h2>
            
            <div class="menu-item-options">
              
                <div class="menu-item-price">$8.99</div>
                <div class="menu-item-add-btn">
                <input type="hidden" name="name2" value="Wings">
                <input type="hidden" name="price2" value="8.99">
                <input type="hidden" name="image2" value="Images\wings.jpg">
                    <button type="submit" name="add-btn2" class="add-btn">+</button>
                    
                </div>
            </div>
        </div>
        <div class="menu-item">
            <img src="Images\bbqsandwich.jpg" alt="BBQ Chicken Sandwich" class="item-img">
            <h2>BBQ Chicken Sandwich</h2>
            
            <div class="menu-item-options">
                
                <div class="menu-item-price">$12.99</div>
                <div class="menu-item-add-btn">
                <input type="hidden" name="name3" value="BBQ Chicken Sandwich">
                <input type="hidden" name="price3" value="12.99">
                <input type="hidden" name="image3" value="Images\bbqsandwich.jpg">
                    <button type="submit" name="add-btn3" class="add-btn">+</button>
                    
                </div>
            </div>
        </div>
        <div class="menu-item">
            <img src="Images\teriyaki.jpg" alt="chicken teriyaki"class="item-img">
            <h2>Teriyaki Chicken</h2>
            
            <div class="menu-item-options">
                
                <div class="menu-item-price">$11.99</div>
                <div class="menu-item-add-btn">
                <input type="hidden" name="name4" value="Teriyaki Chicken">
                <input type="hidden" name="price4" value="11.99">
                <input type="hidden" name="image4" value="Images\teriyaki.jpg">
                    <button type="submit" name="add-btn4" class="add-btn">+</button>
                    
                </div>
            </div>
        </div>

    </div>
    </form>

        

</body>

</html>
