<?php
// Define nutritional data for hoagies
$hoagies = [
    "hoagie1" => [
        "title" => "Hoagie 1",
        "image" => "images/hoagie4.webp",
        "calories" => 450,
        "protein" => "20g",
        "carbs" => "40g",
        "fats" => "15g",
        "ingredients" => [
            "Biscuit" => [
                "info" => "Contains: Wheat, Milk, Soy.",
                "calories" => 120,
                "allergens" => "Allergens: Wheat, Milk, Soy."
            ],
            "Folded Egg" => [
                "info" => "Contains: Egg, Milk.",
                "calories" => 90,
                "allergens" => "Allergens: Egg, Milk."
            ],
            "Pasteurized Cheese" => [
                "info" => "Contains: Milk, Soy.",
                "calories" => 80,
                "allergens" => "Allergens: Milk, Soy."
            ],
            "Applewood Smoked Bacon" => [
                "info" => "No allergens.",
                "calories" => 70,
                "allergens" => "Allergens: None."
            ]
        ],
    ],
    "hoagie2" => [
        "title" => "Hoagie 2",
        "image" => "images/hoagie5.webp",
        "calories" => 520,
        "protein" => "25g",
        "carbs" => "45g",
        "fats" => "18g",
    ],
    "hoagie3" => [
        "title" => "Hoagie 3",
        "image" => "images/hoagie6.webp",
        "calories" => 480,
        "protein" => "22g",
        "carbs" => "42g",
        "fats" => "16g",
    ],
];

// Get the hoagie ID from the query string
$hoagieId = $_GET['hoagie'] ?? 'hoagie1';
$currentHoagie = $hoagies[$hoagieId];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $currentHoagie['title']; ?> Nutritional Calculator</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/nutrition_calculator.css">
    <script>
        // Toggle visibility for Edit Ingredients section
        function toggleIngredients() {
            const ingredientsSection = document.getElementById("ingredients-section");
            ingredientsSection.classList.toggle("hidden");
        }

        // Toggle visibility for Change Size section
        function toggleSize() {
            const sizeSection = document.getElementById("size-section");
            sizeSection.classList.toggle("hidden");
        }
    </script>
</head>
<body>
    <div class="container">
        <!-- Hoagie Title -->
        <header>
            <h1><?php echo $currentHoagie['title']; ?> Nutritional Calculator</h1>
        </header>

        <!-- Image and Nutrition Facts -->
        <div class="nutrition-section">
            <div class="image-container">
                <img src="<?php echo $currentHoagie['image']; ?>" alt="<?php echo $currentHoagie['title']; ?>">
            </div>
            <div class="nutrition-facts">
                <h2>Nutrition Facts</h2>
                <ul>
                    <li><strong>Calories:</strong> <?php echo $currentHoagie['calories']; ?></li>
                    <li><strong>Protein:</strong> <?php echo $currentHoagie['protein']; ?></li>
                    <li><strong>Carbohydrates:</strong> <?php echo $currentHoagie['carbs']; ?></li>
                    <li><strong>Fats:</strong> <?php echo $currentHoagie['fats']; ?></li>
                </ul>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="action-buttons">
            <button onclick="toggleIngredients()">Edit Ingredients</button>
            <button onclick="toggleSize()">Change Size</button>
        </div>

        <!-- Edit Ingredients Section -->
<div id="ingredients-section" class="hidden">
    <h2>Edit Ingredients</h2>
    <?php if (isset($currentHoagie['ingredients']) && is_array($currentHoagie['ingredients'])): ?>
        <?php foreach ($currentHoagie['ingredients'] as $ingredient => $details): ?>
            <div class="ingredient-item">
                <input type="checkbox" id="<?php echo strtolower(str_replace(' ', '-', $ingredient)); ?>" checked>
                <label for="<?php echo strtolower(str_replace(' ', '-', $ingredient)); ?>">
                    <strong><?php echo $ingredient; ?></strong>
                </label>
                <p><?php echo $details['info']; ?></p>
                <p><strong>Calories:</strong> <?php echo $details['calories']; ?> kcal</p>
                <p><strong><?php echo $details['allergens']; ?></strong></p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No ingredients available for this hoagie.</p>
    <?php endif; ?>
</div>


        <!-- Change Size Section -->
        <div id="size-section" class="hidden">
            <h2>Choose Size</h2>
            <div class="size-options">
                <label>
                    <input type="radio" name="size" value="Small">
                    Small (S)
                </label>
                <label>
                    <input type="radio" name="size" value="Medium">
                    Medium (M)
                </label>
                <label>
                    <input type="radio" name="size" value="Large">
                    Large (L)
                </label>
            </div>
        </div>
    </div>
</body>
</html>
