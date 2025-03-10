<html>
<head>
    <title>Organic Food Marketplace</title> 
</head>

<body>
    <h1 align="center">Seller Registration</h1>
    <form action="seller.php" method="post">
        <table align="center" border="0" cellpadding="10" cellspacing="0">
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="fname" required></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td><input type="text" name="phone" required></td>
            </tr>
            <tr>
                <td>National ID (NID):</td>
                <td><input type="text" name="nid" required></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address" required></td>
            </tr>
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
                <td>Country:</td>
                <td><input type="text" name="country" required></td>
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
                <!-- <td><input type="submit" value="Register"></td> -->
                 <td colspan="2" align="center">
                    <input type="submit" value="Register">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
</html>