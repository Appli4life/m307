<?php
    $firstname = $_GET["firstname"] ?? die("Kein Service in Auftrag gegeben");
    $prio = $_GET["prio"] ?? die("Kein Service in Auftrag gegeben");
    $dienst = $_GET["dienst"] ?? die("Kein Service in Auftrag gegeben");
    $email = $_GET["email"] ?? die("Kein Service in Auftrag gegeben");
    $tel = $_GET["tel"] ?? die("Kein Service in Auftrag gegeben");
    $lastname = $_GET["lastname"] ?? die("Kein Service in Auftrag gegeben");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danke für Ihren Auftrag</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body background="data:image/jpeg;base64,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">

<div class="container p-5  bg-dark text-white my-5 border">
      <img src="bilder/logo.png" width="500" class="rounded-circle">  
</br>
</br>
    <h2>
        Danke für Ihren Auftrag <?php require_once 'functions/helpers.php'; echo e($_GET["firstname"]. " ". $_GET["lastname"]);?>
        <br>
      </h2>

      <h4>
    <?php
    switch ($prio) {
        case '1':
            $datum = date("d.m.Y",strtotime("+12 days"));
            break;
        case '2':
            $datum = date("d.m.Y",strtotime("+7 days"));
            break;
        case '3':
            $datum = date("d.m.Y",strtotime("+5 days"));   
            break;
    }

    switch ($dienst) {
        case '1':
            echo "Ihr kleiner Service wird am $datum fertig sein";
            $dienstleistung = "Kleiner Service";
            break;
        case '2':
            echo "Ihr grosser Service wird am $datum fertig sein";
            $dienstleistung = "Grosser Service";
            break;
        case '3':
            echo "Ihr Rennski Service wird am $datum fertig sein";
            $dienstleistung = "Rennski Service";
            break;
        case '4':
            echo "Ihre Bindung wird am $datum montiert und eingestellt sein";
            $dienstleistung = "Bindung montieren und einstellen";
            break;
        case '5':
            echo "Das Fell Ihrer Ski wird am $datum zugeschnitten sein";
            $dienstleistung = "Fell zuschneiden";
            break;
        case '6':
            echo "Ihre Ski werden am $datum fertig mit Heisswachsen sein";
            $dienstleistung = "Heisswachsen";
        break;
    }   
    ?>

</h4>

<h5 style="color:rgb(84, 84, 247);">
<br>
<?php
echo "Ihre Angaben:<br><br>";

echo "Name:\t".e($firstname) ." ".e($lastname)."<br>
Email:\t".e($email)."<br>
Telefon:\t".e($tel)."<br>
Service:\t$dienstleistung<br>";

?>
</h5>
<br>
<h4>
Vielen Dank für Ihr Vertrauen in uns. <br>
Eine Bestätigungsmail mit weiteren Informationen wurde an <?php echo e($email) ?> gesendet.<br><br>
<a class="btn btn-primary" href="landing.php">Hauptseite</a>
<br><br>
So finden Sie uns:<br><br>
<a class="btn btn-primary" href="kontakt.php">Kontakt</a>

</h4>
</div>
</body>
<script type="text/javascript" src="snowflakes.js"></script>

</html>