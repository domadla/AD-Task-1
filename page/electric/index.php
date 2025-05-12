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
    </header>
    <main>
        <h2>Explore Our Collection</h2>

        <?php
        $guitars = [
            [
                "image" => "assets/img/FenderTele.png",
                "name" => "1954 Telecaster",
                "description" => "The Fender Telecaster is widely used for its sharp, twangy sound that cuts through mixes, making it a go-to for country and rock guitarists. Its smooth playability and strong tone also suit blues, punk, and indie styles. Many players use it for both rhythm and lead due to its versatility and reliability."
            ],
            [
                "image" => "assets/img/GibLesPaul.png",
                "name" => "1954 Les Paul Black Beauty",
                "description" => "Gibson Les Paul guitars are known for their warm, rich tone and long sustain, making them popular in rock, blues, and metal. They're often used for heavy riffs and expressive solos thanks to their humbucker pickups. Many iconic guitarists use Les Pauls for their powerful, full-bodied sound on stage and in the studio."
            ],
            [
                "image" => "assets/img/JazzMaster.png",
                "name" => "1963 Jazzmaster Relic",
                "description" => "The Fender Jazzmaster is favored in surf rock, indie, and alternative music for its smooth, mellow tone and unique offset body. Its floating tremolo system allows for expressive pitch bends and subtle vibrato. Players often use it for ambient textures, clean rhythms, and experimental sounds."
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