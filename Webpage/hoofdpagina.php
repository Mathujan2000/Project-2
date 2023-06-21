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
    <title>hoofdpagina</title>
</head>

<body>
    <div class="container">
        <header>
            <h1> De Homepagina</h1>

        </header>
        <div id="logo">
            <a href="hoofdpagina.php"><img  src="..//Webpage/images/pvda.png" alt="logo" class="partijlogo"></a>
        </div>
        <nav>
            <div class="sidenav">
                <a href="hoofdpagina.php">Home</a>
                <a href="nieuws.php">Nieuws</a>
                <a href="leden.php">Leden</a>
                <a href="create.php">Inschrijven</a>
                <a href="themas.php">Thema</a>
            </div>
        </nav>
        <div id="calltoaction1">
            <h1><a href="create.php">Schrijf je hier bij ons in!</a></h1>
            <a href="create.php"> <img src="..//Webpage/images/meedoen.jpg" alt="meedoen" class="cafoto"></a>
        </div>
        <div id="calltoaction2">
            <h1><a href="leden.php">Bekijk hier onze leden!</a></h1>
            <a href="leden.php"><img src="../Webpage/images/leden.jpg" alt="leden" class="cafoto2"></a>
        </div>
        <div id="imagecontainer">
            <div>
                <a href="nieuws.php"><img src="../Webpage/images/nb1.jpg" alt="nb" class="nb1"></a>
                <div id="nieuwsbericht">
                    <h3>Een fijne baan, plezier hebben met je collega’s en een bijdrage kunnen leveren.</h3>
                    <p>We vinden dat werk meer moet opleveren dan het eigen vermogen.</p>
                </div>
            </div>
            <div>
                <a href="nieuws.php"><img src="../Webpage/images/nb2.jpg" alt="nb" class="nb2"></a>
                <div id="nieuwsbericht1">
                    <h3>Goed en betaalbaar openbaar vervoer in héél Nederland</h3>
                    <p>We vinden dat het ov beter moet!.</p>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="iconcontainer">
                <a href="https://www.facebook.com/PartijvandeArbeid/?locale=nl_NL" class="fa fa-facebook"></a>
                <a href="https://twitter.com/PvdA?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
                    class="fa fa-twitter"></a>
                <a href="mailto:ledenadministratie@pvda.nl." class="fa fa-google"></a>
            </div>
            <p class="copyright">Copyright © 2023 PvdA</p>
            <a href="https://www.pvda.nl/doneren/" class="doneerknop">Doneer hier</a>
        </footer>
    </div>

    </div>
</body>

</html>