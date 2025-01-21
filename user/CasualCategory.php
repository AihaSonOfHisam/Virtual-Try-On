<?php
$products = [
    'whiteCasual' => [
        'image' => 'images/Casual.png',
        'title' => 'White Casual',
    ],
    'blackCasual' => [
        'image' => 'images/Black-Casual.png',
        'title' => 'Black Casual',
    ],
    'blueCasual' => [
        'image' => 'images/Blue-Casual.png',
        'title' => 'Blue Casual',
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casual Category</title>
    <link rel="stylesheet" href="TshirtStyles.css">
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
            <li><a href="category.php">Category</a></li>
            <li><a href="tryon.php">Virtual Try On</a></li>
            <li><a href="#">Review</a></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <main>
        <div class="header-wrapper">
            <h1>Explore Casual</h1>
            <!-- "Add New Shirt" Button -->
            <a href="addShirt.php">
                <button class="add-shirt-btn">Add</button>
            </a>
        </div>

        <div class="tshirt-display">
            <?php foreach ($products as $key => $product): ?>
                <div class="tshirt-item">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>">
                    <p><?php echo $product['title']; ?></p>
                    <a href="CasualProductDetail.php?color=<?php echo $key; ?>">
                        <button>Add to Cart</button>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>
