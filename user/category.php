<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Page</title>
    <link rel="stylesheet" href="category-styles.css">
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

    <!-- Navigation Bar -->
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="category.php" class="active">Category</a></li>
            <li><a href="tryon.php">Virtual Try On</a></li>
            <li><a href="#">Review</a></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <main>
        <div class="category-display">
            <!-- T-Shirt Category -->
            <a href="TshirtCategory.php" class="category-item">
                <img src="images/T-shirt.png" alt="T-shirt">
                <p>T-SHIRT</p>
            </a>
            <!-- Hoodie Category -->
            <a href="HoodieCategory.php" class="category-item">
                <img src="images/Hoodie.png" alt="Hoodie">
                <p>HOODIE</p>
            </a>
            <!-- Casual Shirt Category -->
            <a href="CasualCategory.php" class="category-item">
                <img src="images/Casual.png" alt="Casual Shirt">
                <p>CASUAL</p>
            </a>
        </div>
    </main>
</body>
</html>
