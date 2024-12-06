<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutritional Calculator</title>
    <link rel="stylesheet" href="css/calculator.css">
</head>
<body>
    <div class="container">
        <h1>Nutritional Calculator</h1>
        <div class="description">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor.</p>
        </div>
        <div class="stats">
            <div class="stat-box">
                <div class="image-placeholder"></div>
                <p>Calories</p>
            </div>
            <div class="stat-box">
                <div class="image-placeholder"></div>
                <p>Total Fat</p>
            </div>
            <div class="stat-box">
                <div class="image-placeholder"></div>
                <p>Total Carbs</p>
            </div>
            <div class="stat-box">
                <div class="image-placeholder"></div>
                <p>Protein</p>
            </div>
        </div>
        <h2>Nutritional Information for current Item(s)</h2>
        <hr>
        <div class="meal-section">
            <div class="meal-info">
                <div class="image-placeholder large"></div>
                <p>Meal 1</p>
            </div>
            <div class="meal-actions">
                <button class="edit-button" type="button" onclick="location.href='AddIngredients.php'">Edit Meal</button>
                <a href="#" class="remove-link">Remove</a>
                <a href="#" class="undo-link">Undo</a>
            </div>
        </div>
    </div>
</body>
</html>
