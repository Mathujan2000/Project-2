<?php
final class dbHandler{
    private $dataSource = "mysql:dbname=verkiezingen;host=localhost;"; //Hier dient je connection string te komen mysql:dbname=;host=;
    private $username = "root";
    private $password = "";

    public function selectCharacter()
    {
        try{
            //Hier doe je grootendeels hetzelfde als bij SelectAll, echter selecteer je alleen alles uit de category tabel.
            $pdo = new PDO($this->dataSource, $this->username, $this->password);
            $statement = $pdo->prepare("SELECT * FROM standpunt;");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $exception){
            //Indien er iets fout gaat kun je hier de exception var_dumpen om te achterhalen wat het probleem is.
            //Return false zodat het script waar deze functie uitgevoerd wordt ook weet dat het misgegaan is.
            return false;
        }
    }
}

?>