<?php 
session_start();
if(!isset($_SESSION["user"])) {
    header("Location: nlogin.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Dashboard - Organic Food Marketplace</title>
    <link rel="stylesheet" type="text/css" href="navin.css">
</head>
    <body>
        <p>Welcome to seller dashboard, <?php echo htmlspecialchars($_SESSION["fname"]); ?>!</p>
        <p>Phone: <?php echo htmlspecialchars($_SESSION["phone"]); ?></p>
        <p>National ID: <?php echo htmlspecialchars($_SESSION["nid"]); ?></p>
        <p>Seller Type: <?php echo htmlspecialchars($_SESSION["sellerType"]); ?></p>
        <p>Business Category: <?php echo htmlspecialchars($_SESSION["category"]); ?></p>
        <p>Business Area: <?php echo htmlspecialchars($_SESSION["area"]); ?></p>
        <p>Profile Logo:</p>
        <img src="../uploads/<?php echo htmlspecialchars($_SESSION["img"]); ?>" alt="Profile Logo" width="100">
        <br>
        <a href="./nlogout.php">Logout</a>
</body>
</html>
