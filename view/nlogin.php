<?php
session_start();
if(isset($_SESSION["user"])) {
    header("Location: ../view/seller_dashboard.php");
    exit();
}
include "../control/nlogincontrol.php";
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Registration - Organic Food Marketplace</title>
    <link rel="stylesheet" type="text/css" href="navin.css">
</head>
<body>
    <!-- <div class="navbar">
        <h2>Organic Food Marketplace</h2>
    </div> -->
    <div id="banner">
        <img src="../assets/top.jpeg" alt="Organic Food Marketplace">
    </div>
 
    <!-- Main Content -->
    <div class="form-container">
        <h2 class="form-title">Seller Login</h2>
        <form method="post" id="sellerForm">
            <fieldset>
                <legend>Info</legend>
                <table>
                    <tr>
                        <td>Username:</td>
                        <td>
                            <input type="text" name="username" id="username>
                            <div class="error" id="usernameErr"></div>
                            </td>
                        </td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td>
                            <input type="password" name="password" id="password">
                            <div class="error" id="passwordErr"></div>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <div name="submitinfo" value=""></div>
 
            <div class="btn-container">
                <input type="submit" value="Login" name="login">
                <!-- <input type="reset" value="Reset"> -->
            </div>
        </form>
    </div>
 
    <div id="banner">
        <img src="../assets/footer.jpeg" alt="Organic Food Marketplace">
    </div>
 
    <footer>
        <p>&copy; 2025 Organic Food Marketplace. All rights reserved.</p>
    </footer>
 
    <!-- <script src="./script/nscript.js"></script> -->
</body>
</html>