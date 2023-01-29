<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location: pleaselogin.php');
}

?>
<!DOCTYPE html>
<html>

<head>
    
    <title>Checkout Page</title>
    <link rel="icon" href="logo.png">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway');

* {
    font-family: Raleway;
    box-sizing: border-box;
}

html {
    background-color: #DFDFDF;
    overflow: hidden;
    margin: 0;
    padding: 0;
}



body {
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: transparent;

}

h1 {
    text-align: center;
    margin-top: 50px;
    color: yellow;
    }

        /* Add styles for the thank you message */
.container {
    width: 80%;
    margin: 0 auto;
    text-align: center;
}
p {
	    font-size: 20px;
	    text-align: center;
    }
a{
    background-color: black;
    color: white;
    font-size: 16px;
    padding: 12px 20px;
    border-radius: 5px;
    display: block;
    bottom: 5px;
    margin: 0 auto;
    text-align: center;
    width: 10%;
    text-decoration:none;
}
a:hover{
    background-color:rgba(189, 189, 7, 0.849);
    color: black;
}

    </style>
</head>

<body>
<div class="container">
      <h1>Thank you for ordering from Chickanji</h1>
      <p >Your order has been received and will be processed on <span id="date"></span>.</p>
      <a href ="index.php">Home</a>
    </div>
  </body>
  <script>
    var today = new Date();
    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    document.getElementById("date").innerHTML = date;
  </script>
        </div>
    </div>
</body>

</html>
