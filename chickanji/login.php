<?php
    // Start the session
    session_start();

    // Connect to the database
    require 'connectdb.php';

    // Check if the form has been submitted
    if (isset($_POST['login'])) {


        $sql = "SELECT * FROM customers_db WHERE Email = :Email AND Password = :Password";

        // Get the user's input
        $email = $_POST['Email'];
        $password = $_POST['Password'];
        // Prepare the SELECT statement

        $statement = $pdo->prepare($sql);
        $statement->bindParam(':Email', $email, PDO::PARAM_STR);
        $statement->bindParam(':Password', $password, PDO::PARAM_STR);

        // Execute the statement
        $statement->execute();

        // Fetch the result
        $result = $statement->fetch();

        // Check if the result is empty
        if (!$result) {
            // The user's information is not in the table

            echo "<p>Invalid email or password.</p>";
        } else {
            // The user's information is in the table
            // Store the user's information in the session
            $_SESSION['user'] = $result;

            // Redirect the user to the welcome page
            header('Location: ..\HTML\index.php');
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="JavaScript\script.js" defer></script>
    <link rel="icon" href="Images\logo.png">
    <link rel="stylesheet" type="text/css" href="CSS\loginstyle.css">
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

        </div>
        <div class="cart-icon-container">
          <a href="cart.php" class="cart-icon">
              <img src="Images\cart.jpg" width="30" height="30" alt="cart">
          </a>
      </div>
      </nav>
    <div class="login-container">
        <form method="post">
            <h1>Login</h1>
            <input type="text" placeholder="Email" name="Email" required>
            <input type="password" placeholder="Password" name="Password" required>
            <input type="submit" value="Login" name="login">
            <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
        </form>
    </div>
</body>
</html>
