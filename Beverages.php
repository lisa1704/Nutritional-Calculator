<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beverages Menu</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <div class="container">
        <!-- Coca-Cola -->
        <div class="menu-item">
            <div class="image-placeholder-drinks">
                <img src="images/cola.jpeg" class="image-placeholder-drinks" alt="Coca-Cola"/>
            </div>
            <a href="Beverages_Sides_ItemTemplate.php?item=coca_cola">
                <button type="button">Coca-Cola</button>
            </a>
        </div>

        <!-- Sprite -->
        <div class="menu-item">
            <div class="image-placeholder-drinks">
                <img src="images/sprite.jpeg" class="image-placeholder-drinks" alt="Sprite"/>
            </div>
            <a href="Beverages_Sides_ItemTemplate.php?item=sprite">
                <button type="button">Sprite</button>
            </a>
        </div>

        <!-- Fanta Orange -->
        <div class="menu-item">
            <div class="image-placeholder-drinks">
                <img src="images/fanta.jpeg" class="image-placeholder-drinks" alt="Fanta Orange"/>
            </div>
            <a href="Beverages_Sides_ItemTemplate.php?item=fanta_orange">
                <button type="button">Fanta Orange</button>
            </a>
        </div>

        <!-- Back to Main Menu -->
        <div class="main-menu button">
            <form action="index.php" method="GET">
                <button type="submit">Back to Main Menu</button>
            </form>
        </div>
    </div>
</body>
</html>
