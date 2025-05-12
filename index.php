<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1>Sixth String</h1>
        <nav>
            <ul>
                <li><a href="/index.php">Home</a></li>
                <li><a href="/page/acoustic/index.php">Acoustic Guitars</a></li>
                <li><a href="/page/electric/index.php">Electric Guitars</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Welcome to Sixth String</h2>
        <p>Check out our guitars:</p>

        <?php
        $guitar_types = array("Acoustic", "Electric");

        foreach ($guitar_types as $type) {
            echo "<div class='guitar-box'>";
            echo "<strong>$type Guitar</strong><br>";

            if ($type == "Electric") {
                echo "<a href='/page/electric/index.php'>View $type Guitars</a>";
            } elseif ($type == "Acoustic") {
                echo "<a href='/page/acoustic/index.php'>View $type Guitars</a>";
            } else {
                echo "More info coming soon!";
            }

            echo "</div>";
        }
        ?>
    </main>

    <footer>
        <p>&copy; 2025 Sixth String. All rights reserved.</p>
    </footer>
</body>
</html>