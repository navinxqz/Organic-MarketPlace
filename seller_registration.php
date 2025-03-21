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

    <!-- Sidebar -->
    <!-- <div class="sidebar">
        <h3>Menu</h3>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div> -->

    <!-- Main Content -->
    <div class="form-container">
        <h2 class="form-title">Seller Registration</h2>
        <form action="submit.php" method="post">
            <fieldset>
                <legend>Info</legend>
                <table>
                    <tr>
                        <td>Full Name:</td>
                        <td><input type="text" name="fname" required></td>
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
                        <td>Business Category:</td>
                        <td>
                            <input type="radio" id="grocery" name="seller_category" value="grocery" required>
                            <label for="grocery">Grocery</label>
                            <input type="radio" id="organic" name="seller_category" value="organic" required>
                            <label for="organic">Organic Products</label>
                            <input type="radio" id="wholesale" name="seller_category" value="wholesale" required>
                            <label for="wholesale">Wholesale</label>
                        </td>
                    </tr>
                    <tr>
                        <td>Business Area:</td>
                        <td>
                            <select name="seller_area" required>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Sylhet">Sylhet</option>
                                <option value="Barisal">Barisal</option>
                                <option value="Chittagong">Chittagong</option>
                                <option value="Khulna">Khulna</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" required></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" required></td>
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
                                <input type="checkbox" name="agree_terms" required> I agree to the terms and conditions
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

</body>
</html>
