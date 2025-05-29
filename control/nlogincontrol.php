<?php
include "../model/ndb.php";
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_POST["login"])){
    $uname = $_POST["username"];
    $pass = $_POST["password"];

    $db = new Model();
    $conobj = $db->createCon();
    $result = $db->checkLogin($conobj, $uname, $pass);

    if($result->num_rows > 0){
        // while($row = mysqli_fetch_assoc($result)){
        //     echo "id: ".$row["id"]."- Name: ".$row["FNAME"];
        // }
        // $_SESSION["user"] = $uname;
        $row = $result->fetch_assoc();
        $_SESSION['user'] = $row['USERNAME'];
        $_SESSION['fname'] = $row['FNAME'];
        $_SESSION['phone'] = $row['PHONE'];
        $_SESSION['nid'] = $row['NID'];
        $_SESSION['sellerType'] = $row['SELLERTYPE'];
        $_SESSION['category'] = $row['CATEGORY'];
        $_SESSION['area'] = $row['AREA'];
        $_SESSION['img'] = $row['LOGO'];

        setcookie("user", $row['USERNAME'], time() + 86400, "/");
        header("Location: ../view/nlogin.php");
        exit();
    }else{
        echo "User not found";
    }
}
?>