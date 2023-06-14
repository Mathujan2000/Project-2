<?php
include_once "./dbHandler.php";
$dbHandler = new dbHandler();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="leden.css">
    <title>Document</title>
</head>
<body class="standpuntpage">
    <div class="containerleden">
        <header>
        <h1>Standpunt Pagina</h1>
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
        <div class="containerleed">
        <?php
            $leden = $dbHandler->selectCharacter();
            foreach ($leden as $leed) {
        ?>
            <div id="leden">
                <h2><?= $leed['standpunt']?></h2>
                <img id="imgleden" src="images/<?= $leed['standpunt']?>.png" alt="imgclass">
            </div>
        <?php
            }
        ?>
        </div>
        <footer>
            FOOTER
        </footer>
    </div>  
</body>
</html>