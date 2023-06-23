<?php
include "./dbHandler.php";
$db = new DbHandler();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["create"])) {
        $db->MaakGebruiker($_POST["naam"], $_POST["geboortedatum"], $_POST["email"]);
    
    }    
   
} 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inschrijven gelukt</title>
</head>

<body >
    <header>
        <a href="hoofdpagina.php"><img src="..//Webpage/images/pvda.png" alt="logo" class="partijlogo"></a>
    </header>
    <nav>
        <div class="sidenav">
            <a href="hoofdpagina.php">Home</a>
            <a href="nieuws.php">Nieuws</a>
            <a href="create.php">Inschrijven</a>
            <a href="themas.php">Thema</a>
        </div>
    </nav>
<div class="voltooidinfo"> 
    <h1>Uw inschrijving is voltooid!</h1>
    <h3>Bedankt voor het invullen van het formulier om lid te worden van onze politieke partij. We hebben je gegevens ontvangen en zullen deze zo snel mogelijk verwerken.</h3>
    <h3>We zullen spoedig contact met je opnemen om verdere stappen te bespreken en je op de hoogte te houden van onze activiteiten.</h3>
    <h3>Met vriendelijke groeten,</h3>
    <h3>Het PvdA-team</h3>
    </div>
</body>


</html>