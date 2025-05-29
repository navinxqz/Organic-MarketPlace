<?php 
session_start();
// include "../control.npcontrol.php";
if(!isset($_SESSION["username"])) {
    header("Location: nlogin.php");
    die();
    exit();
}
include "../model/ndb.php";
$conobj = createCon();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Dashboard - Organic Food Marketplace</title>
    <link rel="stylesheet" type="text/css" href="navin.css">
</head>
    <body>
        HELLO <?php echo $_SESSION["username"]; ?>!
        <br>
        <h2>Welcome to the Seller Dashboard</h2>
        <a href="./nlogout.php">Logout</a>
        <br>
</body>
</html>
