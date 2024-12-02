<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Size Selection</title>
    <link rel="stylesheet" href="css/item.css">
</head>
<body>
    <div class="container">
        <div class="menu-item">
            <div class="image-placeholder"></div>
            <label for="size1">
                <input type="radio" id="size1" name="size" value="size1">
                <button type="button">Size 1</button>
            </label>
        </div>
        <div class="menu-item">
            <div class="image-placeholder"></div>
            <label for="size2">
                <input type="radio" id="size2" name="size" value="size2">
                <button type="button">Size 2</button>
            </label>
        </div>
        <div class="menu-item">
            <div class="image-placeholder"></div>
            <label for="size3">
                <input type="radio" id="size3" name="size" value="size3">
                <button type="button">Size 3</button>
            </label>
        </div>
    </div>
    <div class="navigation">
            <form action="breakfastMenu.php" method="GET">
                <button>Back</button>
            </form>
            <button id="next">Next</button>
    </div>
    <script>
        const nextButton = document.getElementById("next");
        nextButton.disabled = true;

        document.querySelectorAll('input[name="size"]').forEach(radio => {
            radio.addEventListener('change', () => {
                nextButton.disabled = false;
            });
        });
    </script>
</body>
</html>
