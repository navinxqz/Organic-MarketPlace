<?php
<<<<<<< HEAD
=======
// session_start();
>>>>>>> c3a5489174db4d917ecaf915a47d479edf971cff
    $fnameErr = $phoneErr = $nidErr = $sellerTypeErr = $categoryErr = $areaErr = $usernameErr = $passwordErr = $termsErr = "";
    $fname = $phone = $nid = $sellerType = $category = $area = $username = $password = $terms= "";

    $form_submitted = false;
    $success = '';

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
    }
     else {
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
        unset($_SESSION['registration_data']);
        $_SESSION['registration_data'] = [
            'fname' => $fname,
            'phone' => $phone,
            'nid' => $nid,
            'seller_type' => $sellerType,
            'seller_category' => $category,
            'seller_area' => $area,
            'username' => $username,
        ];
        $form_submitted = true;
    }
}
function Success(){
    if(!isset($_SESSION['registration_data']) || empty($_SESSION['registration_data'])){
        return '';
    }
    $data = $_SESSION['registration_data'];
    unset($_SESSION['registration_data']);

<<<<<<< HEAD
    $msg = '<div class="success">
=======
    $html = '
    <div class="success">
>>>>>>> c3a5489174db4d917ecaf915a47d479edf971cff
        <h2>Registration Successful!</h2>
        <p>Thank you for registering, ' . htmlspecialchars($data['fname']) . '!</p>
        <p>Your details:</p>
        <ul>
            <li>Full Name: ' . htmlspecialchars($data['fname']) . '</li>
            <li>Phone Number: ' . htmlspecialchars($data['phone']) . '</li>
            <li>National ID: ' . htmlspecialchars($data['nid']) . '</li>
            <li>Seller Type: ' . htmlspecialchars($data['seller_type']) . '</li>
            <li>Seller Category: ' . htmlspecialchars($data['seller_category']) . '</li>
            <li>Business Area: ' . htmlspecialchars($data['seller_area']) . '</li>
            <li>Username: ' . htmlspecialchars($data['username']) . '</li>
        </ul>
    </div>';
<<<<<<< HEAD
    return $msg;
=======
    return $html;
>>>>>>> c3a5489174db4d917ecaf915a47d479edf971cff
}
$success = Success();
?>