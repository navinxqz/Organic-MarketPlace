<html>
<head>
    <title>Organic Food Marketplace</title> 
</head>

<body>
    <h1 align="center">Welcome to the Registration Form</h1>
    <!-- <div align="center"> -->
    <form action="submit.php" method="post">
    <fieldset>
    <legend>Seller Information</legend>
        <table align="center" border="0" cellpadding="10" cellspacing="0">
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="fname" required></td>
            </tr>
            <!-- <tr>
                <td>Email:</td>
                <td><input type="email" name="email" required></td>
            </tr> -->
            <tr>
                <td>Phone:</td>
                <td><input type="text" name="phone" required></td>
            </tr>
            <tr>
                <td>National ID (NID):</td>
                <td><input type="text" name="nid" required></td>
            </tr>
            <!-- <tr>
                <td>Address:</td>
                <td><input type="text" name="address" required></td>
            </tr> -->
            <tr>
                <td>Type of Seller:</td>
                <td>
                    <select name="seller_type" required>
                        <option value="Farmer">Farmer</option>
                        <option value="Home-based Producer">Home-based Producer</option>
                        <option value="Other">Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="seller_category">Business Category:</label></td>
                <td>
                    <input type="radio" id="grocery" name="seller_category" value="grocery" required>
                    <label for="grocery">Grocery</label><br>
                    <input type="radio" id="organic" name="seller_category" value="organic" required>
                    <label for="organic">Organic Products</label><br>
                    <input type="radio" id="wholesale" name="seller_category" value="wholesale" required>
                    <label for="wholesale">Wholesale</label>
                </td>
            </tr>
            <tr>
                <td><label for="seller_area">Business Area:</label></td>
                <td>
                    <select id="location" name="seller_area" required>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Barisal">Barisal</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Khulna">Khulna</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><strong>Username:</strong></td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td><strong>Password:</strong></td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                 <td colspan="2" align="center">
                    <input type="submit" value="Register">
                    <input type="reset" value="Reset">
                </td>
            </tr>
            </table>
        </fieldset>
        <table>
            </table>
    </form>
<!-- </div> -->
</body> 
</html>