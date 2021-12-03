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
  <body background="data:image/jpeg;base64,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"></body>


    </br>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
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
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->


    <!-- https://www.google.ch/search?q=Arosa+ski&tbm=isch&ved=2ahUKEwjxmqKVuKX0AhWD0oUKHVluDgwQ2-cCegQIABAA&oq=Arosa+ski&gs_lcp=CgNpbWcQAzIFCAAQgAQyBAgAEB4yBAgAEB4yBAgAEB4yBggAEAUQHjIGCAAQCBAeMgYIABAIEB4yBggAEAgQHjIGCAAQCBAeMgQIABAYOgcIIxDvAxAnOgoIIxDvAxDqAhAnOgQIABBDOggIABCxAxCDAToICAAQgAQQsQM6BwgAELEDEENQoQtYtBdgkxhoAXAAeACAAVmIAcEFkgECMTCYAQCgAQGqAQtnd3Mtd2l6LWltZ7ABCsABAQ&sclient=img&ei=SSCYYbHSGoOllwTZ3Llg&bih=937&biw=1920&hl=de#imgrc=yipu5o7LbF9HWM -->
<center>
    <div id="carouselExampleCaptions" class="carousel slide col-10" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="bilder/logo.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h4>Top-Service</h4>
              <p></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="bilder/arosa1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="color:black;">Für viel Skispass</h5>
              <p style="color:black;">Lassen sie sich Ihre Skies machen</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="bilder/arosa.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="color:black;">Schneller Service und ab auf die Piste</h5>
              <p style="color:black;">Jetzt mit Expressauftrag</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</center>



    </br>
      <center>
        <div class="container bg-dark text-white p-5 my-5 border"">

        <h1 >JetStream-Services</h1>
        <h2>Herzlich willkommen zu unserer Firma </h2>
        <p>Ihr Professionelles Ski Service Team. </br> Wir arbeiten mit viel Praxiserfahrung. Wir arbeiten mit viel Professionalität. Wir arbeiten mit viel Liebe. Wir arbeiten mit einer Top-Perfomance. </br> 
          damit sie ein tolles Skierlebnis haben. Einen tollen Kundendienst können wir ihnen auch bieten sowie verschiedenste Services. Schauen sie sich unten mal um.</p>
        </div>
      </center>

<div class="container p-5 my-5 border justify-content-center bg-dark">
    <div class="row">
      
                  <div class="card " style="width: 36rem;">
            <img src="bilder/kleinerservice.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Kleiner Service</h5>
              <p class="card-text">Gönnen sie sich einen kleinen Service</p>
            </div>
          </div>
    
    
          <div class="card" style="width: 36rem;">
            <img src="bilder/grosserservice.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Grosser Service</h5>
              <p class="card-text">Der Grosse Service für eine grossartige Leistung </br> Empfohlen alle 3 Jahre machen.</p>
            </div>
          </div>
        </div>
        <div class="row">
    
            <div class="card" style="width: 36rem;">
                    <img src="bilder/rennservice.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Renn Service</h5>
                      <p class="card-text">Für echte Raser. </p>
                    </div>
                  </div>
            
                  <div class="card" style="width: 36rem;">
                      <img src="bilder/skibindung.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Bindung montieren und einstellen</h5>
                        <p class="card-text">Eine gute Bindung ist wichtig.</p>
                      </div>
                    </div>
        </div>
        <div class="row">    
      
                    <div class="card" style="width: 36rem;">
                            <img src="bilder/fell.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Fell zuschneiden</h5>
                              <p class="card-text">Sieht gut aus</p>
                            </div>
                          </div>
                  
                          <div class="card" style="width: 36rem;">
                            <img src="bilder/wachsen.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Heisswachsen</h5>
                              <p class="card-text">Qualität für Ihre Skie </p>
                            </div>
                          </div>                
        </div>

  </br>
</br>
</br>

<form method="get" action="formular.php">
  <div class="d-grid gap-2">
  <button class="btn btn-success" type="submit">Auftrag Anmelden</button>
</div>
</form>

    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <img src="bilder/rahelschaad.png" class="rounded me-2" alt="...">
        <strong class="me-auto">Rahel Schaad</strong>
        <small>1 day ago</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        Ich bin sehr positiv überrascht vom Service und von der Professionalität in der Auftragsabwicklung.
      </div>
    </div>
  </body>
  <script type="text/javascript" src="snowflakes.js"></script>
</html>
