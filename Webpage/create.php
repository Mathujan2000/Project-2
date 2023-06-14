<?php
include "./dbHandler.php";
$db = new DbHandler();

if(isset($_POST["create"])){
    $db->MaakGebruiker($_POST["naam"], $_POST["geboortedatum"], $_POST["email"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="leden.css">
    <title>Document</title>
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
            <ul>
                <li class="menu"><a href="hoofdpagina.php">Home</a></li>
                <li class="menu"><a href="#">Nieuws</a></li>
                <li class="menu"><a href="#">Leden</a></li>
            </ul>
        </nav>
        <div class="create">
         <form method="POST" action="create.php">
            <label for="naam">Naam:</label>
            <input id="naam" name="naam" placeholder="naam" type="text" required/>
            <label for="geboortedatum">Geboortedatum:</label>
            <input id="geboortedatum" name="geboortedatum" placeholder="geboortedatum" type="date" required/>
            <label for="email">E-mail:</label>
            <input id="email" name="email" placeholder="email@mail.com" type="email" required/>
            <button type="submit" name="create" value="create">Create</button>
         </form>
        </div>
        <footer>
            FOOTER
        </footer>
    </div>  
</body>
</html>