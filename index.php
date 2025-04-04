<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signup</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="img">   <img src="Screenshot_2025-03-10_212203-removebg-preview.png" alt="Logo">
    <h1>المعهد العالي للدراسات النوعيه</h1>
    <h1>نزله البطران -الجيزه</h1>
</div>

    <div class="container">
        <h2>Welcome</h2>
        <!-- Show session messages -->
        <?php if(isset($_SESSION['message'])) { 
            echo "<p>{$_SESSION['message']}</p>"; 
            unset($_SESSION['message']); 
        } ?>

        <!-- Button to go to Login Page -->
        <button onclick="window.location.href='login.php';">Go to Login</button>

        <h2>Signup</h2>
        <form action="signup.php" method="POST" onsubmit="return validateSignup()">
            <input type="text" id="username" name="username" placeholder="Username" required>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <button type="submit">Sign Up</button>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
