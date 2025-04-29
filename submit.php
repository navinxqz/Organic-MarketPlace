<!DOCTYPE html>
<html>
<head>
    <title>Submission Success</title>
</head>
<body>
    <h1>SUBMITTED SUCCESSFULLY</h1>
    <p>Thank you for registering as a buyer!</p>
    <p>Full Name: <?php echo htmlspecialchars($_GET['name']); ?></p>
    <p>Email: <?php echo htmlspecialchars($_GET['email']); ?></p>
    <p>Date of Birth: <?php echo htmlspecialchars($_GET['dob']); ?></p>
    <p>Gender:<?php echo htmlspecialchars($_GET['gender']); ?></p>
</body>
</html>
