<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Welcome to Sixth String</h1>
    <p>Check out our guitars:</p>

    <?php
    $guitar_types = array("Acoustic", "Electric");

    foreach ($guitar_types as $type) {
        echo "<div class='guitar-box'>";
        echo "<strong>$type Guitar</strong><br>";

        if ($type == "Electric") {
            echo "<a href='electric.php'>View $type Guitars</a>";
        } elseif ($type == "Acoustic") {
            echo "<a href='acoustic.php'>View $type Guitars</a>";
        } else {
            echo "More info coming soon!";
        }

        echo "</div>";
    }
    ?>
</body>
</html>