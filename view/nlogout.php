<?php
session_start();
session_unset();
session_destroy();
header("Location: nlogin.php");
exit();
die("You have been logged out successfully.");
?>