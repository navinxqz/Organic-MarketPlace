<?php
include "../model/rdb.php";
session_start();

   $conobj = createCon();
   $buyer_name = isset($_SESSION["fname"]) ? $_SESSION["fname"] : (isset($_REQUEST["buyer_name"]) ? $_REQUEST["buyer_name"] : '');
    $result=fetchUser($conobj, $buyer_name);
     if(mysqli_num_rows($result) > 0){
       while($row = mysqli_fetch_assoc($result)){
         echo "<h2> Profile</h2>";
         echo "Full Name: " . $row["fname"] . "<br>";
         echo "Email: " . $row["email"] . "<br>";
         echo "Date of Birth: " . $row["dob"] . "<br>";
         echo "Gender: " . $row["gender"] . "<br>";
         echo "File: <img src='../uploads/" . $row["file"] . "' width='100'>";
       }
     }else{
       echo  "Invalid username";
     }
     ?>