<?php
include_once "Webpage/dbHandler.php";
$dbHandler = new dbHandler();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="containerleden">
        <header>

        </header>
        <nav>

        </nav>
        <div class="container">
        <?php
            $characters = $dbHandler->selectCharacter();
            foreach($characters as $character){
            ?>
            <div id="hunt">
                <h2><?=  $character['characternaam'] ?></h2>
                <img id="imgclass" src="afb/<?=  $character['characternaam'] ?>.png" alt="imgclass">
            </div>
            <?php
            }
        ?>
        <footer>

        </footer>
    </div>  
</body>
</html>