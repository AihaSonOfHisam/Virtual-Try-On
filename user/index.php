<?php
// filepath: /c:/xampp/htdocs/Virtual-Try-On/user/index.php

// Start the session
session_start();

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['email']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Try On</title>
    <link rel="stylesheet" href="index-style.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/logo.png" alt="Virtual Try On Logo">
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search By Typing Keywords...">
        </div>
        <div class="account">
            <img src="images/account-logo.png" alt="Account Icon">
            <span>Account</span>
            <?php if ($isLoggedIn): ?>
                <a href="login/logoutprocess.php" class="btn">Logout</a>
            <?php else: ?>
                <a href="login/login.php" class="btn">Login</a>
            <?php endif; ?>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="#">Category</a></li>
            <li><a href="tryOn.html">Virtual Try On</a></li>
            <li><a href="review.html">Review</a></li>
        </ul>
    </nav>
    <main>
        <div class="model-display">
            <div class="model-display">
                <img src="images/model.png" alt="Models" class="models-image">
            </div>
        </div>
    </main>
</body>
</html>
