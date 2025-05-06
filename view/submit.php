<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            background: #ffffff;
            padding: 30px 50px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #2ecc71;
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        p {
            color: #333;
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #2ecc71;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>SUBMITTED SUCCESSFULLY!</h1>
        <p>Your information has been successfully submitted.</p>

        <p>Full Name: <?php echo htmlspecialchars($_GET['fname']); ?></p>
        <p>Phone: <?php echo htmlspecialchars($_GET['phone']); ?></p>
        <p>NID: <?php echo htmlspecialchars($_GET['nid']); ?></p>
        <p>Type of Seller:<?php echo htmlspecialchars($_GET['seller_type']); ?></p>
        <p>Business Category: <?php echo htmlspecialchars($_GET['seller_category']); ?></p>
        <p>Business Area: <?php echo htmlspecialchars($_GET['seller_area']); ?></p>
        <p>Username: <?php echo htmlspecialchars($_GET['username']); ?></p>

        <a href="../seller_registration.php" class="button">Go Back</a>
    </div>
</body>
</html>