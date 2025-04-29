<?php
    $fnameErr = $phoneErr = $nidErr = $sellerTypeErr = $categoryErr = $areaErr = $usernameErr = $passwordErr = $termsErr = "";
    $fname = $phone = $nid = $sellerType = $category = $area = $username = $password = $terms =$sub= "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $isValid = true;

        if(empty($_POST["fname"])){
            $fnameErr = "Full Name is required";
            $isValid = false;
        } else {
        $fname = htmlspecialchars($_POST["fname"]);
        }
    if(empty($_POST["phone"])){
        $phoneErr = "Phone number is required";
        $isValid = false;
    } else {
        $phone = htmlspecialchars($_POST["phone"]);
    }
    if(empty($_POST["nid"])){
        $nidErr = "National ID is required";
        $isValid = false;
    } else {
        $nid = htmlspecialchars($_POST["nid"]);
    }
    if(empty($_POST["seller_type"])){
        $sellerTypeErr = "Seller type is required";
        $isValid = false;
    } else {
        $sellerType = htmlspecialchars($_POST["seller_type"]);
    }
    if(empty($_POST["seller_category"])){
        $categoryErr = "Seller category is required";
        $isValid = false;
    } else {
        $category = htmlspecialchars($_POST["seller_category"]);
    }
    if(empty($_POST["seller_area"])){
        $areaErr = "Business area is required";
        $isValid = false;
    } else {
        $area = htmlspecialchars($_POST["seller_area"]);
    }
    if(empty($_POST["username"])){
        $usernameErr = "Username is required";
        $isValid = false;
    } else {
        $username = htmlspecialchars($_POST["username"]);
    }
    if(empty($_POST["password"])){
        $passwordErr = "Password is required";
        $isValid = false;
    } else {
        $password = htmlspecialchars($_POST["password"]);
        if(strlen($password) < 6){
            $passwordErr = "Password must be at least 6 characters long";
            $isValid = false;
        }
    }
    if(empty($_POST["agree_terms"])){
        $termsErr = "You must agree to the terms and conditions";
        $isValid = false;
    } else {
        $terms = htmlspecialchars($_POST["agree_terms"]);
    }
    if($isValid){
        // header("Location: ../view/submit.php?fname=$fname&phone=$phone&nid=$nid&sellerType=$sellerType&category=$category&area=$area&username=$username&password=$password");
        // exit();
        $sub = "Submitted";
        $sub = htmlspecialchars($_POST["submitinfo"]);
    }
}
?>