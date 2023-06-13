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
<body>
    <div class="containerleden">
        <header>
            HEADER
        </header>
        <div id="logo"> 
            <img src="..//Webpage/images/pvda.png" alt="logo" class="partijlogo">
        </div>
        <nav>
            NAV
        </nav>
        <div class="containerleed">
        <?php
            $leden = $dbHandler->selectCharacter();
            foreach ($leden as $leed) {
        ?>
            <div id="leden">
                <h2><?= $leed['naam']?></h2>
                <img id="imgleden" src="images/<?= $leed['naam']?>.png" alt="imgclass">
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