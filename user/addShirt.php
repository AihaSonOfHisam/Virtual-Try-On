<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture form data when the form is submitted
    $shirtName = $_POST['shirt-name'] ?? '';
    $shirtImage = $_POST['shirt-image'] ?? '';
    $shirtDescription = $_POST['shirt-description'] ?? '';
    $category = $_POST['category'] ?? '';  // Category selected by the user

    // Logic to determine the category and save accordingly
    if ($category == 'tshirt') {
        // Save to T-shirt category (you can add your database logic here)
        echo "<h2>Added to T-shirt Category!</h2>";
    } elseif ($category == 'hoodie') {
        // Save to Hoodie category (you can add your database logic here)
        echo "<h2>Added to Hoodie Category!</h2>";
    } elseif ($category == 'casual') {
        // Save to Casual category (you can add your database logic here)
        echo "<h2>Added to Casual Category!</h2>";
    }

    // Display the product details (you can replace this with actual saving functionality)
    echo "<p>Name: $shirtName</p>";
    echo "<p>Image URL: $shirtImage</p>";
    echo "<p>Description: $shirtDescription</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Your Cloth</title>
    <link rel="stylesheet" href="addShirtStyle.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="logo">
            <img src="images/logo.png" alt="Virtual Try On Logo">
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search By Typing Keywords...">
        </div>
        <div class="account">
            <a href="userprofile.php" class="account-link">
                <img src="images/account-logo.png" alt="Account Icon">
                <span>Account</span>
            </a>
        </div>
    </header>

    <!-- Navigation Section -->
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="category.php">Category</a></li>
            <li><a href="tryon.php">Virtual Try On</a></li>
            <li><a href="#">Review</a></li>
        </ul>
    </nav>

    <!-- Main Content Section -->
    <main>
        <div class="add-shirt-container">
            <h1>Add Your Cloth</h1>
            <!-- Form to add shirt details -->
            <form class="add-shirt-form" method="POST" action="addShirt.php">
                <label for="shirt-name">Shirt Name:</label>
                <input type="text" id="shirt-name" name="shirt-name" placeholder="Enter shirt name" required>

                <label for="shirt-image">Shirt Image URL:</label>
                <input type="url" id="shirt-image" name="shirt-image" placeholder="Enter image URL" required>

                <label for="shirt-description">Description:</label>
                <textarea id="shirt-description" name="shirt-description" placeholder="Describe your shirt" required></textarea>

                <label for="category">Select Category:</label>
                <select id="category" name="category" required>
                    <option value="tshirt">T-shirt</option>
                    <option value="hoodie">Hoodie</option>
                    <option value="casual">Casual</option>
                </select>

                <button type="submit" class="add-shirt-btn">Add Shirt</button>
            </form>
        </div>
    </main>
</body>
</html>
