<?php
include "../model/ndb.php";

session_start();
$conobj= createCon();
$result=checkLogin($conobj, $_REQUEST["username"], $_REQUEST["password"]);
if($result->num_rows > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "id: ".$row["id"]."- Name: ".$row["FNAME"]
    }
    $_SESSION["user"] = $_REQUEST["username"];
    header("Location: ../view/seller_dashboard.php");
}else{
    echo "User not found";
}
?>