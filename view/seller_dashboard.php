<?php 
session_start();
// include "../control.npcontrol.php";
if(!isset($_SESSION["username"])) {
    header("Location: nlogin.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <body>
        HELLO <?php echo $_SESSION["username"]; ?>!
        <br>
        <a href="nlogin.php">Logout</a>
        <br>
</body>
</html>
