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
        <h2>Explore Our Acoustic Guitar Collection</h2>

        <?php
        $guitars = [
            [
                "image" => "assets/img/Taylor.png",
                "name" => "Taylor Guitars 317E",
                "description" => "The Taylor 317e is a Grand Pacific-style acoustic guitar known for its warm, rounded tone and strong low-end response. It's often used for strumming, singer-songwriter performances, and full-bodied rhythm work. The built-in electronics also make it great for live acoustic sets with clear, natural sound."
            ],
            [
                "image" => "assets/img/AcGibson.png",
                "name" => "Gibson Hummingbird Studio",
                "description" => "The Gibson Hummingbird Studio Rosewood is prized for its rich, balanced tone and stunning visual detail. It's often used by folk, rock, and country artists for both strumming and fingerpicking. Its warm projection and smooth playability make it ideal for studio recording and live acoustic performances."
            ],
            [
                "image" => "assets/img/AcEpiphone.png",
                "name" => "Epiphone AJ-100CEc",
                "description" => "The Epiphone AJ-100CE is a budget-friendly acoustic-electric guitar known for its strong projection and comfortable playability. It's commonly used by beginners and gigging musicians for strumming and light fingerpicking. With built-in electronics, it's great for casual performances and practice with amplification."
            ]
        ];

        foreach ($guitars as $guitar) {
            echo "<div class='guitar-box'>";
            echo "<img src='{$guitar['image']}' alt='{$guitar['name']}' style='width:50%; border-radius: 8px;'>";
            echo "<p><strong>{$guitar['name']}</strong></p>";
            echo "<p>{$guitar['description']}</p>";
            echo "</div>";
        }
        ?>
    </main>
    <footer>
        <p>&copy; 2025 Sixth String. All rights reserved.</p>
    </footer>
</body>
</html>