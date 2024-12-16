<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutritional Calculator</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <div class="container">
        <div class="left-section">
            <h2>Select Category</h2>
            <div class="category">
                <div class="category-card">
                <div class="image-placeholder">
                    <img src="images/hoagie2.jpg" alt="hoagie" class="image-placeholder">
                </div>

                    <form action="HoagieMenu.php" method="GET">
                        <button type="submit">Hoagies</but>
                    </form>
                </div>
                <div class="category-card">
                    <div class="image-placeholder">
                        <img src="images/sides.jpg" alt="sides" class="image-placeholder"/>
                    </div>
                    <form action="Sides.php" method="GET">
                    <button>Sides</button>
                    </form>
                </div>
                <div class="category-card">
                    <div class="image-placeholder">
                        <img src="images/drinks.jpg" alt="drinks" class="image-placeholder"/>
                    </div>
                    <form action="Beverages.php" method="GET">
                    <button>Soft Drinks</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="right-section">
            <h2>Nutritional Calculator</h2>
            <div class="large">
                <img src="images/hoagie3.jpg" class="large"/>
            </div>
            <div class="text-scroll">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
            </div>
            <div class="buttons">
                <button>About Us</button>
                <button>Link to Website</button>
                <button>Nutritional Information</button>
            </div>
        </div>
    </div>
</body>
</html>
