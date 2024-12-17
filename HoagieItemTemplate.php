<?php
    // Define hoagie data
    $hoagies = [
        "hoagie1" => [
            "image" => "images/hoagie4.webp",
            "title" => "Bacon Crispy Hoagie",
            "description" => "This is a description of Hoagie 1. Enjoy the fresh ingredients and perfect taste.",
        ],
        "hoagie2" => [
            "image" => "images/hoagie5.webp",
            "title" => "Hoagie 2",
            "description" => "This is a description of Hoagie 2. A delicious blend of flavors to savor.",
        ],
        "hoagie3" => [
            "image" => "images/hoagie6.webp",
            "title" => "Hoagie 3",
            "description" => "This is a description of Hoagie 3. The ultimate sandwich experience.",
        ],
        "hoagie4" => [
            "image" => "images/hoagie10.png",
            "title" => "Hoagie 4",
            "description" => "This is a description of Hoagie 4. Perfect for any occasion.",
        ],
        "hoagie5" => [
            "image" => "images/hoagie8.jpeg",
            "title" => "Hoagie 5",
            "description" => "This is a description of Hoagie 5. Fresh and delicious every time.",
        ],
        "hoagie6" => [
            "image" => "images/hoagie9.png",
            "title" => "Hoagie 5",
            "description" => "This is a description of Hoagie 5. Fresh and delicious every time.",
        ],
    ];

    // Get hoagie ID from the URL
    $hoagieId = $_GET['hoagie'] ?? 'hoagie1'; // Default to hoagie1 if no ID is provided
    $currentHoagie = $hoagies[$hoagieId];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $currentHoagie['title']; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/hoagie_item.css">
</head>
<body>
    <div class="container">
        <!-- Hoagie Image -->
        <div class="image-section">
            <img src="<?php echo $currentHoagie['image']; ?>" alt="<?php echo $currentHoagie['title']; ?>">
        </div>

        <!-- Hoagie Content -->
        <div class="content-section">
            <h1><?php echo $currentHoagie['title']; ?></h1>
            <p><?php echo $currentHoagie['description']; ?></p>
        </div>

        <!-- Nutritional Calculator Button -->
        <div class="button-section">
            <button onclick="location.href='nutritional-calculator.php?hoagie=<?php echo $hoagieId; ?>';">Nutritional Calculator</button>
        </div>
    </div>
</body>
</html>
