<?php
include "./dbHandler.php";
$db = new DbHandler();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Partij</title>
</head>

<body>
    <div class="container">
        <header>
            <h1> De Homepagina</h1>

        </header>
        <div id="logo">
            <img src="..//Webpage/images/pvda.png" alt="logo" class="partijlogo">
        </div>
        <nav>
            <div class="sidenav">
                <a href="hoofdpagina.php">Home</a>
                <a href="nieuws.php">Nieuws</a>
                <a href="leden.php">Leden</a>
            </div>
        </nav>
        <div id="calltoaction1">
            <h1><a href="create.php">Schrijf je hier bij ons in!</a></h1>
            <a href="create.php">
                <img src="..//Webpage/images/meedoen.jpg" alt="meedoen" class="cafoto">
            </a>
        </div>
        <div id="calltoaction2">
            <h1><a href="leden.php">Bekijk hier onze leden!</a></h1>
            <a href="leden.php"><img src="../Webpage/images/leden.jpg" alt="leden" class="cafoto2"></a>
            </div>
        <div id="imagecontainer">
        <div>
            <a href="nieuws.php"><img src="../Webpage/images/nb1.jpg" alt="nb" class="nb1"></a>
            <div id="nieuwsbericht">
            <h3>Werk moet écht lonen</h3>
            <p>We vinden dat werk meer moet opleveren dan het eigen vermogen.</p>
        </div>
        </div>
        <div>
            <a href="nieuws.php"><img src="../Webpage/images/nb2.jpg" alt="nb" class="nb2"></a>
            <div id="nieuwsbericht1">
            <h3>Het openbaar vervoer</h3>
            <p>We vinden dat het ov beter moet!.</p>
        </div>
        </div>
    </div>
    <footer class="footer">
        FOOTER
    </footer>
    </div>

    </div>
</body>

</html>