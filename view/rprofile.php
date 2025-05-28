<?php
 include "../control/rprofile_control.php";
 ?>
<!DOCTYPE html>
<html lang="en">
    <head> 
    <link rel="stylesheet" type="text/css" href="richi.css"> 
    </head>
    <body>
        <h1>User Profile</h1>
        <p>Welcome, <?php echo $_SESSION['fname']; ?>!</p>

      

      
        <a href="../view/rlogin.php">Logout</a>

       
    </body>
</html>
