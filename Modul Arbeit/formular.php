<?php
require_once 'functions/helpers.php';
require_once 'functions/sql.php';
require_once 'db/db.config.php';

$firstname = $_POST["firstname"] ?? '';
$lastname = $_POST["lastname"] ?? '';
$email = $_POST["email"] ?? '';
$tel = $_POST["tel"] ?? '';
$prio = $_POST["prio"] ?? '';
$dienst = $_POST["dienst"] ?? '';

$errors = [];

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $firstname = trim($firstname);
  $lastname = trim($lastname);
  $email = trim($email);
  $tel = trim($tel);

  if($firstname == '')
  {
    $errors[] = "Bitte Vorname eingeben!";
  }

  if($lastname == '')
  {
    $errors[] = "Bitte Nachname eingeben!";
  }

  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
    $errors[] = "Bitte gültige Email eingeben!";
  }

  if(!filter_var($tel, FILTER_SANITIZE_NUMBER_INT))
  {
    $errors[] = "Bitte gültige Telefonnummer eingeben!";
  }

  if($prio == '')
  {
    $errors[] = "Bitte Priorität auswählen!";
  }

  if($dienst == '')
  {
    $errors[] = "Bitte Diestleistung auswählen!";
  }

  if(count($errors) === 0)
    {
        insert_service($firstname, $lastname, $email, $tel, $prio, $dienst);

        header("Location: bestätigung.php?firstname=$firstname&lastname=$lastname&tel=$tel&email=$email&prio=$prio&dienst=$dienst");

        $firstname = "";
        $lastname = "";
        $email = '';
        $tel = '';

        
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Jetstream-Services</title>
  </head>
  <body background="data:image/jpeg;base64,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">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </br>
  <nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="landing.php"><img src="bilder/logo.png" class="rounded-circle" height="70" width="70"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="landing.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="formular.php">Auftrag</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kontakt.php">Kontakt</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="text" placeholder="Search">
          <button class="btn btn-primary" type="button">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <hr>

  <style type="text/css">
    fieldset {
      padding: 0;
    }

    .errors {
        border: 1px solid #E20404;
        background: #FFF3F3;
        color: #E20404;
        padding: 1em;
        border-radius: 5px;
    }
    
    .errors li {
        padding-left: 4px;
        margin-left: 14px;
    }        
     </style>  

  

    <div class="container p-5  bg-dark text-white my-5 border">
      <img src="bilder/logo.png" width="200" class="rounded-circle">  
</br>
</br>
    <h3>
        Füllen Sie das Formular aus um Ihren Service in Auftrag zu geben:
      </h3>
      <?php if(count($errors) > 0): ?>
      <ul class="errors">
          <?php foreach($errors as $error): /*Jeder Fehler anzeigen*/ ?>
              <li><?= $error ?></li>
          <?php endforeach; ?>
      </ul>
    <?php endif; ?>
</div>
   
<!-- Kundenname Email Telefon Priorität Dienstleistung -->
<form class="was-validated" novalidate action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="POST">
    <div class="container p-5 my-5 bg-dark text-white">

            <div class="input-group">
                    <span class="input-group-text">Vor und Nachname</span>
                    <input type="text" required value="<?php echo e($firstname);?>" class="form-control" name="firstname">
                    <input type="text" required value="<?php echo e($lastname);?>" class="form-control" name="lastname">
                  </div>
                </br>
                  <div class="input-group">
                      <span class="input-group-text">Telefon</span>
                      <input type="tel" name="tel" required value="<?php echo e($tel);?>" class="form-control">
                  </div>
    <br>
                  <div class="input-group">
          <span class="input-group-text">Email Adresse</span>
          <input type="email" value="<?php echo e($email);?>" required class="form-control" name="email">
        </div>
          <div id="emailHelp" class="form-text">Es werden keine Daten weitergegeben</div>
       
      </br>
    
    <h5>Priorität (Fertigstellung)</h5>
        <div class="form-check" >
                <input  class="form-check-input" type="radio" required name="prio" value="1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Tief (12 Tage)
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="prio" value="2">
                <label class="form-check-label" for="flexRadioDefault2">
                  Standard (7 Tage)
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="prio" value="3">
                <label class="form-check-label" for="flexRadioDefault2">
                  Express (5 Tage)
                </label>
              </div>
    <br>
    <br>
              <select class="form-select" name="dienst" aria-label="Default select example">
    
                <option disabled selected>Dienstleistung auswählen</option>
    
                <option value="1">kleiner Service</option>
    
                <option value="2">grosser Service</option>
    
                <option value="3">Rennski Service</option>
    
                <option value="4">Bindung montieren und einstellen</option>
    
                <option value="5">Fell zuschneiden</option>
    
                <option value="6">Heisswachsen
                </option>  
              </select>
              
              </br>
              <p>Wir Freuden uns auf Ihren Auftrag<p>
                
                  <div class="d-grid gap-2">
                    <button class="btn btn-success"  type="submit">Im Auftrag geben</button>
                  </div>
    </div>
  </form>
  </body>
  <script type="text/javascript" src="snowflakes.js"></script>
</html>