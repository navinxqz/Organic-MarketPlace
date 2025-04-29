<?php
$fnameErr = $phoneErr = $nidErr = $sellerTypeErr = $categoryErr = $areaErr = $usernameErr = $passwordErr = $termsErr = "";
$fname = $phone = $nid = $sellerType = $category = $area = $username = $password = $terms = "";

if($_SERVER["REQUEST_METHOD" == "POST"]){
    if(empty($_POST["fname"])){
        $fnameErr = "Full Name is required";
    } else {
        $fname = test_input($_POST["fname"]);
        if(!preg_match("/^[a-zA-Z ]*$/",$fname)){
            $fnameErr = "Only letters and white space allowed";
        }
    }
    if(empty($_POST["phone"])){
        $phoneErr = "Phone number is required";
    } else {
        $phone = test_input($_POST["phone"]);
        if(!preg_match("/^[0-9]{10}$/",$phone)){
            $phoneErr = "Invalid phone number format";
        }
    }
    if(empty($_POST["nid"])){
        $nidErr = "National ID is required";
    } else {
        $nid = test_input($_POST["nid"]);
        if(!preg_match("/^[0-9]{10}$/",$nid)){
            $nidErr = "Invalid NID format";
        }
    }
    if(empty($_POST["seller_type"])){
        $sellerTypeErr = "Seller type is required";
    } else {
        $sellerType = test_input($_POST["seller_type"]);
    }
    if(empty($_POST["seller_category"])){
        $categoryErr = "Seller category is required";
    } else {
        $category = test_input($_POST["seller_category"]);
    }
    if(empty($_POST["seller_area"])){
        $areaErr = "Business area is required";
    } else {
        $area = test_input($_POST["seller_area"]);
    }
    if(empty($_POST["username"])){
        $usernameErr = "Username is required";
    } else {
        $username = test_input($_POST["username"]);
        if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
            $usernameErr = "Only letters and numbers allowed";
        }
    }
    if(empty($_POST["password"])){
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
        if(strlen($password) < 6){
            $passwordErr = "Password must be at least 6 characters long";
        }
    }
    if(empty($_POST["agree_terms"])){
        $termsErr = "You must agree to the terms and conditions";
    } else {
        $terms = test_input($_POST["agree_terms"]);
    }

    if(empty($fnameErr) && empty($phoneErr) && empty($nidErr) && empty($sellerTypeErr) && empty($categoryErr) && empty($areaErr) && empty($usernameErr) && empty($passwordErr) && empty($termsErr)){
        echo "<h2>Registration Successful</h2>";
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Registration - Organic Food Marketplace</title>
    <link rel="stylesheet" type="text/css" href="./style/navin.css">
</head>
<body>
    <div class="navbar">
        <h2>Organic Food Marketplace</h2>
    </div>

    <div id="banner">
        <img src="./assets/top.jpeg" alt="Organic Food Marketplace">
    </div>

    <!-- Main Content -->
    <div class="form-container">
        <h2 class="form-title">Seller Registration</h2>
        <form action="submit.php" method="post" id="sellerForm">
            <fieldset>
                <legend>Info</legend>
                <table>
                    <tr>
                        <td>Full Name:</td>
                        <td>
                            <input type="text" name="fname" id="fname">
                            <div class="error" id="fnameErr"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td>
                            <input type="text" name="phone" id="phone">
                            <div class="error" id="phoneErr"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>National ID (NID):</td>
                        <td>
                            <input type="text" name="nid" id="nid">
                            <div class="error" id="nidErr"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Type of Seller:</td>
                        <td>
                            <select name="seller_type" id="seller_type">
                                <option value="">--Select--</option>
                                <option value="Farmer">Farmer</option>
                                <option value="Home-based Producer">Home-based Producer</option>
                                <option value="Other">Other</option>
                            </select>
                            <div class="error" id="sellerTypeErr"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Business Category:</td>
                        <td>
                            <input type="radio" id="grocery" name="seller_category" value="grocery">
                            <label for="grocery">Grocery</label>
                            <input type="radio" id="organic" name="seller_category" value="organic">
                            <label for="organic">Organic Products</label>
                            <input type="radio" id="wholesale" name="seller_category" value="wholesale">
                            <label for="wholesale">Wholesale</label>
                            <div class="error" id="categoryErr"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Business Area:</td>
                        <td>
                            <select name="seller_area" id="seller_area">
                                <option value="">--Select--</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Sylhet">Sylhet</option>
                                <option value="Barisal">Barisal</option>
                                <option value="Chittagong">Chittagong</option>
                                <option value="Khulna">Khulna</option>
                            </select>
                            <div class="error" id="areaErr"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Username:</td>
                        <td>
                            <input type="text" name="username" id="username">
                            <div class="error" id="usernameErr"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td>
                            <input type="password" name="password" id="password">
                            <div class="error" id="passwordErr"></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <legend>Terms and Conditions</legend>
                                <div class="terms-box">
                                    1. Sellers must ensure that all products listed are organic and meet the marketplace's quality standards.<br>
                                    2. Sellers are responsible for accurate product descriptions and timely order fulfillment.<br>
                                    3. Any disputes or complaints will be resolved as per the marketplace's policies.<br>
                                    4. The marketplace reserves the right to remove any seller or product that violates the terms.<br>
                                    5. By registering, you agree to comply with all applicable laws and regulations.
                                </div><br>
                                <input type="checkbox" name="agree_terms" id="agree_terms"> I agree to the terms and conditions
                                <div class="error" id="termsErr"></div>
                            </fieldset>
                        </td>
                    </tr>
                </table>
            </fieldset>

            <div class="btn-container">
                <input type="submit" value="Register">
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>

    <div id="banner">
        <img src="./assets/footer.jpeg" alt="Organic Food Marketplace">
    </div>

    <footer>
        <p>&copy; 2025 Organic Food Marketplace. All rights reserved.</p>
    </footer>

    <!-- <script src="./script/nscript.js"></script> -->
</body>
</html>
