<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beverages Menu</title>
    <link rel="stylesheet" href="css\style2.css">
</head>
<body>
    <div class="container">
        <div class="menu-item">
            <div class="image-placeholder-drinks">
                <img src="images/cola.jpeg" class="image-placeholder-drinks"/>
            </div>
            <form action="Item.php" method="GET">
                <button>Coca Cola</button>
            </form>

        </div>
        <div class="menu-item">
            <div class="image-placeholder-drinks">
                <img src="images/sprite.jpeg" class="image-placeholder-drinks"/>
            </div>
            <form action="Item.php" method="GET">
                <button>Sprite</button>
            </form>
        </div>
        <div class="menu-item">
            <div class="image-placeholder-drinks">
                <img src="images/fanta.jpeg" class="image-placeholder-drinks"/>
            </div>
            <form action="Item.php" method="GET">
                <button>Fanta Orange</button>
            </form>
        </div>
        <div class="main-menu button">
            <form action="index.php" method="GET">
                <button type="submit">Back to Main Menu</button>
            </form>
        </div>
    </div>
</body>
</html>
