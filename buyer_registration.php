<!DOCTYPE html>
<html>
<head>
    <title>Grocery Website - Login & Registration</title>
    <link ref="stylesheet" href="../css">
</head>
<body>
   
    <form action="submit.php" method="post">
        

    
    <h2>Register as Buyer</h2>
    <form action="register_buyer.php" method="get">
        <fieldset>
            <legend>Personal Details</legend>
            <table>
                <tr>
                    <td><label for="buyer_name">Full Name:</label></td>
                    <td><input type="text" id="buyer_name" name="buyer_name" required></td>
                </tr>
                <tr>
                    <td><label for="buyer_email">Email Address:</label></td>
                    <td><input type="email" id="buyer_email" name="buyer_email" required></td>
                </tr>
                <tr>
                    <td><label for="buyer_password">Password:</label></td>
                    <td><input type="password" id="buyer_password" name="buyer_password" required></td>
                </tr>
                <tr>
                    <td><label for="buyer_dob">Date of Birth:</label></td>
                    <td><input type="date" id="buyer_dob" name="buyer_dob" required></td>
                </tr>
                <tr>
                    <td><label>Gender:</label></td>
                    <td>
                        <input type="radio" name="buyer_gender" value="male" required> Male
                        <input type="radio" name="buyer_gender" value="female" required> Female
                        <input type="radio" name="buyer_gender" value="other" required> Other
                    </td>
                </tr>
               
            </table>
        </fieldset>

        <fieldset>
            <legend>Shopping Preferences</legend>
            <table>
                <tr>
                    <td><label for="buyer_delivery">Preferred Delivery Date & Time:</label></td>
                    <td><input type="datetime-local" id="buyer_delivery" name="buyer_delivery"></td>
                </tr>
                <tr>
                    <td><label for="buyer_week">Preferred Shopping Week:</label></td>
                    <td><input type="week" id="buyer_week" name="buyer_week"></td>
                </tr>
                <tr>
                    <td><label for="buyer_price_range">Preferred Price Range:</label></td>
                    <td><input type="range" id="buyer_price_range" name="buyer_price_range" min="10" max="1000"></td>
                </tr>
                <tr>
                    <td><label for="buyer_diet">Dietary Preferences:</label></td>
                    <td>
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
                    </td>
                </tr>
                <tr>
                    <td><label for="buyer_notes">Additional Instructions:</label></td>
                    <td><textarea id="buyer_notes" name="buyer_notes" rows="4" cols="30"></textarea></td>
                </tr>
                <tr>
                    <td><label for="buyer_profile">Upload Profile Picture:</label></td>
                    <td><input type="file" id="buyer_profile" name="buyer_profile"></td>
                </tr>
               
                <tr>
                    <td><label for="buyer_offers">Subscribe to Offers:</label></td>
                    <td><input type="checkbox" id="buyer_offers" name="buyer_offers" value="yes"></td>
                </tr>
           
        <button type="submit">Register as Buyer</button>
    </form>

</body>
</html>
