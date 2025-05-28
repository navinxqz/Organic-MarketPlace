<?php
include "../model/rdb.php";
session_start();

if (isset($_POST["Submit"])) {
    $conobj = createCon();
    $name = $_POST["buyer_name"];
    $password = $_POST["buyer_password"];
    $result = checkLogin($conobj, $name, $password);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION["fname"] = $name;
        header("Location: ../view/rprofile.php");
        exit();
    } else {
        echo "Invalid username or password";
    }
    closeCon($conobj);
}

?>