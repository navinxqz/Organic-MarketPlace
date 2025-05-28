<?php
require "../control/rlogin_control.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Grocery Website - Login & Registration</title>
    <link rel="stylesheet" type="text/css" href="richi.css">
</head>
<body>
   
    <div id="banner">
        <img src="../assets/abc.jpeg" alt="Organic Food Marketplace">
    </div>
    <form id="buyer-form" action="" method="post">
        <div class="form-group">
            <label for="buyer_name">Full Name:</label>
            <input type="text" id="buyer_name" name="buyer_name">
        </div>
        <div class="form-group">
            <label for="buyer_password">Password:</label>
            <input type="password" id="buyer_password" name="buyer_password">
        </div>
        <button type="submit" name="Submit">Login</button>
        <button type="reset">Reset</button>
    </form>
    
</body>
</html>