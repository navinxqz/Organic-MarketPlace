<?php
include "../model/ndb.php";
session_start();
// if($isset($_REQUEST["Submit"])){
//     $conobj = createCon();
//     checkLogin($conobj, $_REQUEST["username"], $_REQUEST["password"]);
//     if($result->num_rows > 0){
//         $_SESSION["username"] = $_REQUEST["username"];
//         header("Location: ../view/seller_dashboard.php");
//     }else{
//         $error = "Invalid username or password";
//     }
// }
if(isset($_POST["login"])){
    $uname = $_POST["username"];
    $pass = $_POST["password"];

    $db = new Model();
    $conobj = $db->createCon();
    $result = $db->checkLogin($conobj, $uname, $pass);

    if($result->num_rows > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "id: ".$row["id"]."- Name: ".$row["FNAME"];
        }
        $_SESSION["username"] = $uname;
        header("Location: ../view/seller_dashboard.php");
    }else{
        echo "User not found";
    }
}
?>