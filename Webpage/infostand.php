<?php
include_once "./dbHandler.php";
$dbHandler = new dbHandler();

if(isset($_GET['titel'])){
    $id_titel = $_GET['titel'];
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="leden.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Leden</title>
</head>

<body class="ledenpage">
    <div class="containerleden">
        <header>
            <h1>Leden Pagina</h1>
        </header>
        <div id="logo">
            <a href="hoofdpagina.php"><img  src="..//Webpage/images/pvda.png" alt="logo" class="partijlogo"></a>
        </div>
        <nav>
            <div class="sidenav">
                <a href="hoofdpagina.php">Home</a>
                <a href="nieuws.php">Nieuws</a>
                <a href="create.php">Inschrijven</a>
                <a href="standpunt.php">Standpunten</a>
            </div>
        </nav>
        <div class="containerleed">
            <?php
            $leden = $dbHandler->selectThema();
            foreach ($leden as $leed) {
                ?>
                <div id="leden">
                    <a href="infostand.php?titel=<?= $id ?>">
                    <h2>
                        <?= $leed['titel'] ?>
                    </h2>
                    <p>
                        <?= $leed['tekst'] ?>
                    </p>
                    <img id="imgleden" src="images/<?= $leed['titel'] ?>.png" alt="imgclass">
                </div>
                <?php
            }
            ?>
        </div>
        <footer>
            <div class="iconcontainer">
                <a href="https://www.facebook.com/PartijvandeArbeid/?locale=nl_NL" class="fa fa-facebook"></a>
                <a href="https://twitter.com/PvdA?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
                    class="fa fa-twitter"></a>
                <a href="ledenadministratie@pvda.nl." class="fa fa-google"></a>
            </div>
            <p class="copyright">Copyright © 2023 PvdA</p>
            <a href="https://www.pvda.nl/doneren/" class="doneerknop">Doneer hier</a>
        </footer>
    </div>
</body>

</html>