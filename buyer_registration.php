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

    <form id="buyer-form" action="submit.php" method="post">
        <h2 class="heading">Register as Buyer</h2>
        <fieldset>
            <legend>Personal Details</legend>
            <div class="form-group">
                <label for="buyer_name">Full Name:</label>
                <input type="text" id="buyer_name" name="buyer_name" >
            </div>
            <div class="form-group">
                <label for="buyer_email">Email Address:</label>
                <input type="email" id="buyer_email" name="buyer_email" >
            </div>
            <div class="form-group">
                <label for="buyer_password">Password:</label>
                <input type="password" id="buyer_password" name="buyer_password">
            </div>
            <div class="form-group">
                <label for="buyer_dob">Date of Birth:</label>
                <input type="date" id="buyer_dob" name="buyer_dob" >
            </div>
            <div class="form-group">
                <label>Gender:</label>
                <input type="radio" name="buyer_gender" value="male" > Male
                <input type="radio" name="buyer_gender" value="female" > Female
                <!-- <input type="radio" name="buyer_gender" value="other" required> Other -->
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
                <input type="checkbox" id="buyer_offers" name="buyer_offers" value="yes">
                <label for="buyer_offers">I agree to the terms and condition</label>
            </div>
        </fieldset>

        <!-- Terms and Conditions Box -->
            <!-- <legend>Terms and Conditions</legend> -->
            <div id="terms-box">
                <div class="terms-content">
                    <p>1. By using this website, you agree to our terms and conditions.</p>
                    <p>2. All personal information provided must be accurate and up-to-date.</p>
                    <p>3. The website reserves the right to modify or terminate services at any time.</p>
                    <p>4. Users must comply with all applicable laws and regulations.</p>
                    <p>5. Any misuse of the website may result in account suspension.</p>
                    <p>6. Refunds and returns are subject to our refund policy.</p>
                    <p>7. The website is not responsible for third-party content or links.</p>
                    <p>8. Users are responsible for maintaining the confidentiality of their accounts.</p>
                    <p>9. The website may collect and use data as outlined in our privacy policy.</p>
                    <p>10. Continued use of the website constitutes acceptance of these terms.</p>
                </div>
            </div>

        <!-- Submit and Reset Buttons -->
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>