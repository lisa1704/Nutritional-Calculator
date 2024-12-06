<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['sizes']) && !empty($_POST['sizes'])) {
        $selectedSizes = $_POST['sizes'];
        echo "<h1>Selected Sizes</h1>";
        echo "<ul>";
        foreach ($selectedSizes as $size) {
            echo "<li>$size</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No sizes selected. Please go back and choose at least one size.</p>";
    }
} else {
    echo "<p>Invalid request method.</p>";
}
?>
