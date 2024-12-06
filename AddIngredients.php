<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add or Remove Ingredients</title>
    <link rel="stylesheet" href="css\ingredients.css">
    </head>
    <body>
    <div class="container">
        <h1>Add or Remove Ingredients</h1>
        <div class="image-placeholder">
            <!-- Placeholder for image or design -->
        </div>
        <form action="" method="POST">
            <div class="checkbox-group">
                <?php
                $ingredients = [
                    "Ingredient 1", "Ingredient 2", "Ingredient 3", "Ingredient 4",
                    "Ingredient 5", "Ingredient 6", "Ingredient 7", "Ingredient 8",
                    "Ingredient 9", "Ingredient 10", "Ingredient 11", "Ingredient 12"
                ];
                foreach ($ingredients as $key => $ingredient) {
                    $checked = in_array($ingredient, ["Ingredient 9", "Ingredient 11", "Ingredient 10", "Ingredient 12"]) ? "checked" : "";
                    echo "<label>
                        <input type='checkbox' name='ingredients[]' value='$ingredient' $checked> $ingredient
                    </label>";
                }
                ?>
            </div>
            <div class="navigation">
                <button type="button" onclick="location.href='index.php';">Main Menu</button>
                <!-- <button type="submit">Next</button> -->
                    <button type="button" onclick="location.href='Calculator.php';">Next</button>

            </div>
        </form>

        <!-- 
        // if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ingredients'])) {
            // $selectedIngredients = $_POST['ingredients'];
            // echo "<h3>Selected Ingredients:</h3>";
        //     echo "<ul>";
        //     foreach ($selectedIngredients as $ingredient) {
        //         echo "<li>$ingredient</li>";
        //     }
        //     echo "</ul>";
        // } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     echo "<p><strong>No ingredients selected.</strong></p>";
        // }
        // ?> -->
    </div>
</body>
</html>