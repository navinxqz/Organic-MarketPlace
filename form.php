<!DOCTYPE html>
<html>
<head>
    <title>Grocery Website - Login & Registration</title>
</head>
<body>

    <h2>Register as Buyer</h2>
    <form action="submit.php" method="get" target="_blank">
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
                <td><label for="buyer_address">Address:</label></td>
                <td><input type="text" id="buyer_address" name="buyer_address" required></td>
            </tr>
            <tr>
                <td><label for="buyer_age">Age:</label></td>
                <td><input type="date" id="buyer_age" name="buyer_age" required></td>
            </tr>
            <tr>
                <td><label for="buyer_gender">Gender:</label></td>
                <td>
                    <select id="buyer_gender" name="buyer_gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>
                <input type="checkbox" id="buyer_offers" name="buyer_offers"> Subscribe to Offers
</td>
            </tr>
            
            <tr>
                <td ><input type="submit" value="submit"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>
