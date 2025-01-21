<?php
// Get the shirt color from the query parameter (default to 'whiteTshirt' if not provided)
$shirtColor = $_GET['shirt'] ?? 'whiteTshirt'; // Default to 'whiteTshirt' if no color is provided

// Define the image sources based on the shirt color
$shirtImages = [
    'whiteTshirt' => 'images/T-shirt.png',
    'blackTshirt' => 'images/black-tshirt.png',
    'blueTshirt' => 'images/blue-tshirt.png',
    'blackHoodie' => 'images/Hoodie.png',
    'blueHoodie' => 'images/Blue-Hoodie.png',
    'whiteHoodie' => 'images/White-Hoodie.png',
    'whiteCasual' => 'images/Casual.png',
    'blackCasual' => 'images/Black-Casual.png',
    'blueCasual' => 'images/Blue-Casual.png'
];

// Set the image source for the selected shirt
$shirtImageSrc = isset($shirtImages[$shirtColor]) ? $shirtImages[$shirtColor] : $shirtImages['whiteTshirt'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Try On</title>
    <link rel="stylesheet" href="tryon_style.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="logo">
            <img src="images/logo.png" alt="Virtual Try On Logo">
        </div>
    </header>

    <!-- Main Content Section -->
    <main>
        <div class="model-display">
            <!-- Live Camera Feed -->
            <iframe src="http://localhost:5000/video_feed" width="800" height="600" frameborder="0"></iframe>
            
            <!-- Clothing Selector -->
            <form action="http://localhost:5000/tryon" method="POST" target="hidden-frame">
                <select name="clothing">
                    <option value="T-shirt">T-Shirt</option>
                    <option value="Hoodie">Hoodie</option>
                    <option value="Casual">Casual</option>
                </select>
                <button type="submit">Apply</button>
            </form>

            <!-- Clothing Image Display (Fallback if no live feed) -->
            <div class="model">
                <img id="shirt-img" src="<?php echo $shirtImageSrc; ?>" alt="Shirt" />
            </div>

            <iframe name="hidden-frame" style="display:none;"></iframe>
        </div>
    </main>
</body>
</html>
