<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Size Selection</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap; 
            gap: 40px; 
            justify-content: center;
            margin: 150px;
        }

        .menu-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 150px; 
            cursor: pointer;
        }

        .image-placeholder {
            width: 150px;
            height: 120px;
            background-color: #e0e0e0;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .menu-item label {
            display: flex;
            flex-direction: column;
            align-items: center;
            cursor: pointer;
        }
        .menu-item input[type="checkbox"] {
            margin-top: 5px;
            cursor: pointer;
            transform: scale(1.2); 
            accent-color: #007bff; 
        }
        .navigation {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        .navigation button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .navigation button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="processSelection.php" method="POST" style="display: flex; flex-wrap: wrap; gap: 50px;">
            <div class="menu-item">
                <div class="image-placeholder"></div>
                <label>
                    <input type="checkbox" name="sizes[]" value="size1">
                    Size 1
                </label>
            </div>
            <div class="menu-item">
                <div class="image-placeholder"></div>
                <label>
                    <input type="checkbox" name="sizes[]" value="size2">
                    Size 2
                </label>
            </div>
            <div class="menu-item">
                <div class="image-placeholder"></div>
                <label>
                    <input type="checkbox" name="sizes[]" value="size3">
                    Size 3
                </label>
            </div>
        </form>
    </div>
    <div class="navigation">
        <button type="button" onclick="location.href='breakfastMenu.php';">Back</button>
        <button type="button" onclick="location.href='AddIngredients.php'">Next</button>
    </div>
</body>
</html>
