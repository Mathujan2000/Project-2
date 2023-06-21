<?php
final class dbHandler
{
    private $dataSource = "mysql:dbname=verkiezingen;host=localhost;"; //Hier dient je connection string te komen mysql:dbname=;host=;
    private $username = "root";
    private $password = "";

    public function selectall()
    {
        try {
            //Hier doe je grootendeels hetzelfde als bij SelectAll, echter selecteer je alleen alles uit de category tabel.
            $pdo = new PDO($this->dataSource, $this->username, $this->password);
            $statement = $pdo->prepare("SELECT * FROM leden;");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            //Indien er iets fout gaat kun je hier de exception var_dumpen om te achterhalen wat het probleem is.
            //Return false zodat het script waar deze functie uitgevoerd wordt ook weet dat het misgegaan is.
            return false;
        }
    }

    public function selectStandpunten($id)
    {
        try {
            //Hier doe je grootendeels hetzelfde als bij SelectAll, echter selecteer je alleen alles uit de category tabel.
            $pdo = new PDO($this->dataSource, $this->username, $this->password);
            $statement = $pdo->prepare("SELECT * FROM `themas` 
            JOIN leden ON themas.id = leden.thema_id
            JOIN standpunten ON standpunten.thema_id = leden.thema_id 
            WHERE themas.id = :id;");
            $statement->bindParam(':id', $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            //Indien er iets fout gaat kun je hier de exception var_dumpen om te achterhalen wat het probleem is.
            //Return false zodat het script waar deze functie uitgevoerd wordt ook weet dat het misgegaan is.
            return false;
        }
    }



    public function MaakGebruiker(string $naam, string $geboortedatum, string $email)
    {
        $pdo = new PDO($this->dataSource, $this->username, $this->password);

        $statement = $pdo->prepare("INSERT INTO leden(naam,geboortedatum,email) VALUES(:naam, :geboortedatum, :email)");
        $statement->bindParam("naam", $naam, PDO::PARAM_STR);
        $statement->bindParam("geboortedatum", $geboortedatum, PDO::PARAM_STR);
        $statement->bindParam("email", $email, PDO::PARAM_STR);
        $statement->execute();
    }
}

?>