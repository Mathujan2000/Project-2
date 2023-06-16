<?php
include "./dbHandler.php";
$db = new DbHandler();

if (isset($_POST["create"])) {
    $db->MaakGebruiker($_POST["naam"], $_POST["geboortedatum"], $_POST["email"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="leden.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Inschrijven</title>
</head>

<body class="createpage">
    <div class="containerleden">
        <header>
            <h1>Inschrijven</h1>
        </header>
        <div id="logo">
            <img src="..//Webpage/images/pvda.png" alt="logo" class="partijlogo">
        </div>
        <nav>
            <div class="sidenav">
                <a href="hoofdpagina.php">Home</a>
                <a href="nieuws.php">Nieuws</a>
                <a href="leden.php">Leden</a>
                <a href="standpunt.php">Standpunt</a>
            </div>
        </nav>
        <div class="create">
            <form method="POST" action="create.php">
                <label for="naam">Naam:</label>
                <input id="naam" name="naam" placeholder="naam" type="text" pattern="[A-Za-z]{3,50}" required />
                <label for="geboortedatum">Geboortedatum:</label>
                <input id="geboortedatum" name="geboortedatum" placeholder="geboortedatum" type="date" required />
                <label for="email">E-mail:</label>
                <input id="email" name="email" placeholder="email@mail.com" type="email" required />
                <button type="submit" name="create" value="create">Create</button>
            </form>
        </div>
        <footer>
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