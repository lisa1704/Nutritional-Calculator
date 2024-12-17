<?php
// Define nutritional data for Sides and Soft Drinks
$items = [
    // Sides
    "fries" => [
        "title" => "French Fries",
        "image" => "images/fries.webp",
        "calories" => 350,
        "protein" => "4g",
        "carbs" => "50g",
        "fats" => "17g",
        "ingredients" => [
            "Potatoes" => [
                "info" => "Freshly cut potatoes, fried in vegetable oil.",
                "calories" => 300,
                "allergens" => "Allergens: None."
            ],
            "Salt" => [
                "info" => "Light seasoning of salt.",
                "calories" => 0,
                "allergens" => "Allergens: None."
            ],
            "Oil" => [
                "info" => "Vegetable oil used for frying.",
                "calories" => 50,
                "allergens" => "Allergens: None."
            ]
        ]
    ],
    "onion_rings" => [
        "title" => "Onion Rings",
        "image" => "images/onionrings.avif",
        "calories" => 400,
        "protein" => "5g",
        "carbs" => "45g",
        "fats" => "20g",
        "ingredients" => [
            "Onions" => [
                "info" => "Freshly sliced onions.",
                "calories" => 50,
                "allergens" => "Allergens: None."
            ],
            "Batter" => [
                "info" => "Contains flour, milk, and egg.",
                "calories" => 300,
                "allergens" => "Allergens: Wheat, Milk, Egg."
            ],
            "Oil" => [
                "info" => "Vegetable oil used for frying.",
                "calories" => 50,
                "allergens" => "Allergens: None."
            ]
        ]
    ],
    "mozarella_sticks" => [
        "title" => "Mozzarella Sticks",
        "image" => "images/mozarella.jpg",
        "calories" => 450,
        "protein" => "12g",
        "carbs" => "40g",
        "fats" => "22g",
        "ingredients" => [
            "Mozzarella Cheese" => [
                "info" => "Contains: Milk.",
                "calories" => 200,
                "allergens" => "Allergens: Milk."
            ],
            "Batter" => [
                "info" => "Contains flour, milk, and egg.",
                "calories" => 200,
                "allergens" => "Allergens: Wheat, Milk, Egg."
            ],
            "Oil" => [
                "info" => "Vegetable oil used for frying.",
                "calories" => 50,
                "allergens" => "Allergens: None."
            ]
        ]
    ],
    // Soft Drinks
    "coca_cola" => [
        "title" => "Coca-Cola",
        "image" => "images/cola.jpeg",
        "calories" => 150,
        "protein" => "0g",
        "carbs" => "39g",
        "fats" => "0g",
        "ingredients" => [
            "Carbonated Water" => [
                "info" => "Water infused with carbon dioxide.",
                "calories" => 0,
                "allergens" => "Allergens: None."
            ],
            "Sugar" => [
                "info" => "Sweetened with natural sugar.",
                "calories" => 150,
                "allergens" => "Allergens: None."
            ],
            "Flavoring" => [
                "info" => "Natural flavors and caramel color.",
                "calories" => 0,
                "allergens" => "Allergens: None."
            ]
        ]
    ],
    "sprite" => [
        "title" => "Sprite",
        "image" => "images/sprite.jpg",
        "calories" => 140,
        "protein" => "0g",
        "carbs" => "38g",
        "fats" => "0g",
    ],
    "fanta_orange" => [
        "title" => "Fanta Orange",
        "image" => "images/fanta.jpeg",
        "calories" => 160,
        "protein" => "0g",
        "carbs" => "44g",
        "fats" => "0g",
    ]
];

// Get the item ID from the query string
$itemId = $_GET['item'] ?? 'fries';
$currentItem = $items[$itemId] ?? null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $currentItem['title'] ?? 'Nutritional Calculator'; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/nutritional-calculator-sides-drinks.css">
    <script>
        function toggleIngredients() {
            document.getElementById('ingredients-section').classList.toggle('hidden');
        }
    </script>
</head>
<body>
    <div class="container">
        <?php if ($currentItem): ?>
            <header>
                <h1><?php echo $currentItem['title']; ?></h1>
            </header>

            <div class="nutrition-section">
                <div class="image-container">
                    <img src="<?php echo $currentItem['image']; ?>" alt="<?php echo $currentItem['title']; ?>">
                </div>
                <div class="nutrition-facts">
                    <h2>Nutrition Facts</h2>
                    <ul>
                        <li><strong>Calories:</strong> <?php echo $currentItem['calories']; ?> kcal</li>
                        <li><strong>Protein:</strong> <?php echo $currentItem['protein']; ?></li>
                        <li><strong>Carbs:</strong> <?php echo $currentItem['carbs']; ?></li>
                        <li><strong>Fats:</strong> <?php echo $currentItem['fats']; ?></li>
                    </ul>
                </div>
            </div>

            <!-- Size Selection -->
            <div class="size-section">
                <h2>Choose Size</h2>
                <label><input type="radio" name="size" value="Small" checked> Small</label>
                <label><input type="radio" name="size" value="Medium"> Medium</label>
                <label><input type="radio" name="size" value="Large"> Large</label>
            </div>

            <!-- Edit Ingredients -->
            <?php if (isset($currentItem['ingredients'])): ?>
                <button class="toggle-button" onclick="toggleIngredients()">Edit Ingredients</button>
                <div id="ingredients-section" class="hidden">
                    <h2>Ingredients</h2>
                    <?php foreach ($currentItem['ingredients'] as $ingredient => $details): ?>
                        <div class="ingredient-item">
                            <input type="checkbox" id="<?php echo strtolower(str_replace(' ', '-', $ingredient)); ?>" checked>
                            <label for="<?php echo strtolower(str_replace(' ', '-', $ingredient)); ?>">
                                <strong><?php echo $ingredient; ?></strong>
                            </label>
                            <p><?php echo $details['info']; ?></p>
                            <p><strong>Calories:</strong> <?php echo $details['calories']; ?> kcal</p>
                            <p><?php echo $details['allergens']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        <?php else: ?>
            <h2>Item not found!</h2>
        <?php endif; ?>
    </div>
</body>
</html>
