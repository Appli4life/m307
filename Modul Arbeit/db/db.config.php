<?php
require_once "db.info.php";

try
{
    $db = new PDO
    ("mysql:host=$host;dbname=$database", $username, $password);
    
}catch(pdoexception $pe)
{
    die("Konnte nicht verbinden mit Datenbank: ". $pe->getMessage());
}

?>
