<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="img">
    <img src="Screenshot_2025-03-10_212203-removebg-preview.png" alt="Logo">
    <h1>المعهد العالي للدراسات النوعيه</h1>
    <h1>نزله البطران -الجيزه</h1>
</div>
<div class="text">
    
</div>
<div class="container">
    <h2>Login</h2>

    <!-- Show session messages -->
    <?php if(isset($_SESSION['message'])) { 
        echo "<p class='error'>{$_SESSION['message']}</p>"; 
        unset($_SESSION['message']); 
    } ?>

    <form action="login_process.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <p>Don't have an account? <a href="index.php">Sign up here</a></p>
</div>

</body>
</html>