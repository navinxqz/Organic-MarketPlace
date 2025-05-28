<?php
  include "../model/rdb.php"; 
    $nameError = $emailError = $passwordError = $dobError = $genderError = $profilePictureError = $checkboxError = "";
    $name = $email = $password = $dob =$file =$gender = $offers  ="";
    $output = ""; 
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $isValid = true;

      
        if (empty($_POST["buyer_name"])) {
            $nameError = "Full Name is required.";
            $isValid = false;
        } else {
            $name = htmlspecialchars($_POST["buyer_name"]);
        }

      
        if (empty($_POST["buyer_email"])) {
            $emailError = "Email Address is required.";
            $isValid = false;
        } elseif (!filter_var($_POST["buyer_email"], FILTER_VALIDATE_EMAIL)) {
            $emailError = "Enter a valid email address.";
            $isValid = false;
        } else {
            $email = htmlspecialchars($_POST["buyer_email"]);
        }

      
        if (empty($_POST["buyer_password"])) {
            $passwordError = "Password is required.";
            $isValid = false;
        } elseif (strlen($_POST["buyer_password"]) < 6) {
            $passwordError = "Password must be at least 6 characters.";
            $isValid = false;
        } else {
            $password = htmlspecialchars($_POST["buyer_password"]);
        }

      
        if (empty($_POST["buyer_dob"])) {
            $dobError = "Date of Birth is required.";
            $isValid = false;
        } else {
            $dob = htmlspecialchars($_POST["buyer_dob"]);
        }

    
        if (empty($_POST["buyer_gender"])) {
            $genderError = "Please select your gender.";
            $isValid = false;
        } else {
            $gender = htmlspecialchars($_POST["buyer_gender"]);
        }


        if (empty($_FILES["buyer_profile"]["name"])) {
    $profilePictureError = "Profile picture is required.";
    $isValid = false;
   } else {
    $target_dir = "../uploads/";
    // Just use email + original file name for uniqueness
    $file = $_POST["buyer_email"] . "-" . $_FILES["buyer_profile"]["name"];
    $target_path = $target_dir . $file;
    if (move_uploaded_file($_FILES["buyer_profile"]["tmp_name"], $target_path)) {
        $profilePictureError = "Profile picture uploaded successfully.";
        // $file already has the correct value for DB
    } else {
        $profilePictureError = "Failed to upload the profile picture.";
        $isValid = false;
        $file = ""; // Set to empty if upload fails
    }
}

     
        if (empty($_POST["buyer_offers"])) {
            $checkboxError = "You must agree to the terms and conditions.";
            $isValid = false;
        } else {
            $offers = htmlspecialchars($_POST["buyer_offers"]);
        }

    if ($isValid) {
  
       $conn = createCon();
       $result = insertData($conn, $name, $email, $password, $dob, $gender, $file);
    if ($result) {
      $output = "Registration successful!";
    } else {
      $output = "Error: " . mysqli_error($conn);
    }
      closeCon($conn);
   }
}
?>