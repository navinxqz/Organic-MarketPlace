<!DOCTYPE html>
<html>
<head>
    <title>Grocery Website - Login & Registration</title>
 <link rel="stylesheet" type="text/css" href="./style/richi.css">
</head>
<body>
    <div class="navbar">
        <h2>Organic Food Marketplace</h2>
    </div>
    <div id="banner">
        <img src="./assets/abc.jpeg" alt="Organic Food Marketplace">
    </div>

    <?php
    // Initialize error messages and variables
    $nameError = $emailError = $passwordError = $dobError = $genderError = $checkboxError = "";
    $name = $email = $password = $dob = $gender = $offers = "";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $isValid = true;

        // Full Name Validation
        if (empty($_POST["buyer_name"])) {
            $nameError = "Full Name is required.";
            $isValid = false;
        } else {
            $name = htmlspecialchars($_POST["buyer_name"]);
        }

        // Email Validation
        if (empty($_POST["buyer_email"])) {
            $emailError = "Email Address is required.";
            $isValid = false;
        } elseif (!filter_var($_POST["buyer_email"], FILTER_VALIDATE_EMAIL)) {
            $emailError = "Enter a valid email address.";
            $isValid = false;
        } else {
            $email = htmlspecialchars($_POST["buyer_email"]);
        }

        // Password Validation
        if (empty($_POST["buyer_password"])) {
            $passwordError = "Password is required.";
            $isValid = false;
        } elseif (strlen($_POST["buyer_password"]) < 6) {
            $passwordError = "Password must be at least 6 characters.";
            $isValid = false;
        } else {
            $password = htmlspecialchars($_POST["buyer_password"]);
        }

        // Date of Birth Validation
        if (empty($_POST["buyer_dob"])) {
            $dobError = "Date of Birth is required.";
            $isValid = false;
        } else {
            $dob = htmlspecialchars($_POST["buyer_dob"]);
        }

        // Gender Validation
        if (empty($_POST["buyer_gender"])) {
            $genderError = "Please select your gender.";
            $isValid = false;
        } else {
            $gender = htmlspecialchars($_POST["buyer_gender"]);
        }

        // Checkbox Validation
        if (empty($_POST["buyer_offers"])) {
            $checkboxError = "You must agree to the terms and conditions.";
            $isValid = false;
        } else {
            $offers = htmlspecialchars($_POST["buyer_offers"]);
        }

        // If all validations pass, redirect to submit.php
        if ($isValid) {
            header("Location: submit.php?name=$name&email=$email&dob=$dob&gender=$gender");
            exit();
        }
    }
    ?>

    <form id="buyer-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2 class="heading">Register as Buyer</h2>
        <fieldset>
           
        <legend>Personal Details</legend>
            
           <div class="form-group">
                <label for="buyer_name">Full Name:</label>
                <input type="text" id="buyer_name" name="buyer_name" value="<?php echo $name; ?>">
                <div class="error-message"><?php echo $nameError; ?></div>
            </div>
           
            <div class="form-group">
            <label for="buyer_email">Email Address:</label>
                <input type="email" id="buyer_email" name="buyer_email" value="<?php echo $email; ?>">
                <div class="error-message"><?php echo $emailError; ?></div>
            </div>
            <div class="form-group">
                <label for="buyer_password">Password:</label>
                <input type="password" id="buyer_password" name="buyer_password">
                <div class="error-message"><?php echo $passwordError; ?></div>
            </div>
            <div class="form-group">
                <label for="buyer_dob">Date of Birth:</label>
                <input type="date" id="buyer_dob" name="buyer_dob" value="<?php echo $dob; ?>">
                <div class="error-message"><?php echo $dobError; ?></div>
         </div>
            <div class="form-group">
                <label>Gender:</label>
                <input type="radio" name="buyer_gender" value="male" <?php echo ($gender == "male") ? "checked" : ""; ?>> Male
                <input type="radio" name="buyer_gender" value="female" <?php echo ($gender == "female") ? "checked" : ""; ?>> Female
                <div class="error-message"><?php echo $genderError; ?></div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Shopping Preferences</legend>
            <div class="form-group">
                <label for="buyer_price_range">Preferred Price Range:</label>
                <input type="range" id="buyer_price_range" name="buyer_price_range" min="10" max="1000">
            </div>
            <div class="form-group">
                <label for="buyer_diet">Dietary Preferences:</label>
                <select id="buyer_diet" name="buyer_diet">
                    <optgroup label="Vegetarian Options">
                        <option value="vegetarian">Vegetarian</option>
                        <option value="vegan">Vegan</option>
                    </optgroup>
                    <optgroup label="Special Diets">
                        <option value="gluten_free">Gluten-Free</option>
                        <option value="keto">Keto</option>
                    </optgroup>
                </select>
            </div>
            <div class="form-group">
                <label for="buyer_notes">Additional Instructions:</label>
                <textarea id="buyer_notes" name="buyer_notes" rows="4" cols="30"></textarea>
            </div>
            <div class="form-group">
                <label for="buyer_profile">Upload Profile Picture:</label>
                <input type="file" id="buyer_profile" name="buyer_profile">
            </div>
            <div class="form-group">
                <input type="checkbox" id="buyer_offers" name="buyer_offers" value="yes" <?php echo ($offers == "yes") ? "checked" : ""; ?>>
                <label for="buyer_offers">I agree to the terms and conditions</label>
                <div class="error-message"><?php echo $checkboxError; ?></div>
            </div>
      </fieldset>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
 </form>
</body>
</html>