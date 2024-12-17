<?php
    // Define sides and drinks data
    $items = [
        // Sides
        "fries" => [
            "image" => "images/fries.webp",
            "title" => "French Fries",
            "description" => "Crispy and golden French fries, fried to perfection.",
        ],
        "onion_rings" => [
            "image" => "images/onionrings.avif",
            "title" => "Onion Rings",
            "description" => "Crunchy onion rings with a delicious batter coating.",
        ],
        "mozarella_sticks" => [
            "image" => "images/mozarella.jpg",
            "title" => "Mozzarella Sticks",
            "description" => "Cheesy and gooey mozzarella sticks with a crispy crust.",
        ],
        // Drinks
        "coca_cola" => [
            "image" => "images/cola.jpeg",
            "title" => "Coca-Cola",
            "description" => "Refreshing Coca-Cola with its classic taste.",
        ],
        "sprite" => [
            "image" => "images/sprite.jpeg",
            "title" => "Sprite",
            "description" => "Crisp and refreshing lemon-lime flavored soda.",
        ],
        "fanta_orange" => [
            "image" => "images/fanta.jpeg",
            "title" => "Fanta Orange",
            "description" => "Zesty and sweet orange-flavored soda.",
        ],
    ];

    // Get item ID from the URL
    $itemId = $_GET['item'] ?? 'fries'; // Default to 'fries' if no ID is provided
    $currentItem = $items[$itemId];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $currentItem['title']; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/sides_drinks_item.css">
</head>
<body>
    <div class="container">
        <!-- Item Image -->
        <div class="image-section">
            <img src="<?php echo $currentItem['image']; ?>" alt="<?php echo $currentItem['title']; ?>">
        </div>

        <!-- Item Content -->
        <div class="content-section">
            <h1><?php echo $currentItem['title']; ?></h1>
            <p><?php echo $currentItem['description']; ?></p>
        </div>

        <!-- Nutritional Calculator Button -->
        <div class="button-section">
            <button onclick="location.href='nutritional-calculator-sides-drinks.php?item=<?php echo $itemId; ?>';">Nutritional Calculator</button>
        </div>
    </div>
</body>
</html>
