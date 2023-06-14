<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <header>
        <h1> Nieuwsoverzicht</h1>

    </header>
        <img src="..//Webpage/images/pvda.png" alt="logo" class="partijlogo">
    <nav>
        <div class="sidenav">
            <a href="hoofdpagina.php">Home</a>
            <a href="nieuws.php">Nieuws</a>
            <a href="leden.php">Leden</a>
        </div>
    </nav>

    <article>


    </article>

    <?php

    $artikels = [
        [
            'image' => "../Webpage/images/nb1.jpg",
            'title' => 'Artikel 1',
            'content' => 'Werk moet écht lonen.'
        ],
        [
            'image' => "../Webpage/images/nb2.jpg",
            'title' => 'Artikel 2',
            'content' => 'Dit is een nieuwsartikel.'
        ],
    ];

    foreach ($artikels as $artikel) {

        echo '<img src="' . $artikel['image'] . '" alt="' . $artikel['title'] . '">';
        echo '<h2>' . $artikel['title'] . '</h2>';
        echo '<p>' . $artikel['content'] . '</p>';
        echo '</div>';
    }
    ?>
    </div>
    <footer>

    </footer>

</body>

</html>