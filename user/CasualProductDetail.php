<?php
$products = [
    'whiteCasual' => [
        'image' => 'images/Casual.png',
        'title' => 'WHITE CASUAL',
        'description' => 'White Casual',
    ],
    'blackCasual' => [
        'image' => 'images/Black-Casual.png',
        'title' => 'BLACK CASUAL',
        'description' => 'Black Casual',
    ],
    'blueCasual' => [
        'image' => 'images/Blue-Casual.png',
        'title' => 'BLUE CASUAL',
        'description' => 'Blue Casual',
    ]
];

$color = $_GET['color'] ?? 'whiteCasual'; // Default to 'whiteCasual' if no color is provided
$product = $products[$color] ?? $products['whiteCasual']; // Default to 'whiteCasual' if invalid color
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <link rel="stylesheet" href="product-detail-styles.css">
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

    <!-- Product Detail Section -->
    <main>
        <div class="product-detail">
            <div class="product-image">
                <img src="<?php echo $product['image']; ?>" alt="Product Image">
            </div>
            <div class="product-info">
                <h1><?php echo $product['title']; ?></h1>
                <p><?php echo $product['description']; ?></p>
                <button class="try-on-btn" onclick="redirectToTryOn()">Try On</button>
            </div>
        </div>
    </main>

    <script>
        function redirectToTryOn() {
            const color = '<?php echo $color; ?>';
            window.location.href = `tryOn.php?shirt=${color}`;
        }
    </script>
</body>
</html>
