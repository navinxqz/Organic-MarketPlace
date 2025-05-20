<?php
include "../model/ndb.php";
// session_start();
    $fnameErr = $phoneErr = $nidErr = $sellerTypeErr = $areaErr = $imageErr = $usernameErr = $passwordErr = $termsErr = "";
    $fname = $phone = $nid = $sellerType = $area = $img = $username = $password = $terms= "";
 
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
    if(!empty($_FILES["myfile"]["name"])){
        $type = ["image/jpg", "image/jpeg", "image/png"];
        $fType = $_FILES["myfile"]["type"];

        if(!in_array($fType, $type)){
            $imageErr = "Invalid file type. Only JPG, JPEG and PNG are allowed.";
            $isValid = false;
        }else{
            $d = "../uploads/";
            $f = $_FILES["myfile"]["name"];
       
            if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $d.$_REQUEST["username"]."-".$f)){
                $imageErr= "File uploaded successfully";
            }else{
                $imageErr = "File upload failed";
                $isValid = false;
            }
        }
    }
    if(empty($_POST["agree_terms"])){
        $termsErr = "You must agree to the terms and conditions";
        $isValid = false;
    } else {
        $terms = true;
    }
    $category = isset($_POST['seller_category']) ? htmlspecialchars($_POST['seller_category']) : "";
    if($isValid){
        $model = new Model();
        $conn = $model->createCon();
        $tb = "seller_registration";
        $v = $model->addValue($conn, $tb, $fname, $phone, $nid, $sellerType, $area, $_REQUEST["username"]."-".$_FILES["myfile"]["name"], $username, $password);
        if($v === true){
            // $success = "Registration successful!";
            
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
    }else{
        echo "Database Error: " . $v;
    }
    }
}
function Success(){
    if(!isset($_SESSION['registration_data']) || empty($_SESSION['registration_data'])){
        return '';
    }
    $data = $_SESSION['registration_data'];
    unset($_SESSION['registration_data']);
 
    $html = '
    <div class="success">
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
    return $html;
}
$success = Success();
?>