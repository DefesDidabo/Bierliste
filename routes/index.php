<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rover Heilig Kreuz Bierliste</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <link rel="manifest" href="img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Rover Heilig Kreuz</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#eintragen">Eintragen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#abfragen">Guthaben</a> <!-- Hier können Scroll-Animationen rein -->
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#hinzufuegen">Registrieren</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <img class="img-fluid" src="img/profile.png" alt="">
        <div class="intro-text">
          <span class="name">Bierliste Pro</span>
          <hr class="star-light">
<!--           <span class="skills">Unter Header</span> -->
        </div>
      </div>
    </header>

    <!-- Contact Section -->
    <section id="eintragen">
      <div class="container">
        <h2 class="text-center">Bier eintragen</h2>
        <hr class="star-primary">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form name="eintragen" id="biereintragen" action="/eintragen/submit" method="post" novalidate>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Name</label>
                  <input class="form-control" id="eintrage_name_txt" type="text" placeholder="Name" required data-validation-required-message="Du bist kein Mitglied bei den Rovern. Bitte erstell dir einen Nutzer und sag Juli bescheid">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Preis</label>
                  <input class="form-control" id="eintragen_preis_txt" type="number" placeholder="Preis" required data-validation-required-message="Bitte gib einen Preis ein, der wie folgt aussieht: X.XX">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
               <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Anzahl Bier</label>
                  <input class="form-control" id="eintragen_anzahl_txt" type="number" placeholder="Anzahl Bier" required data-validation-required-message="Bitte gib einen Anzahl ein">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg" id="liste_eintragen_btn" >In Liste eintragen</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
<!-- Guthaben abfragen -->
    <section id="credit">
      <div class="container">
        <h2 class="text-center">Guthaben abfragen</h2>
        <hr class="star-primary">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form name="abfragen" id="abfragen" action="/guthaben/submit" method="post" novalidate>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Name</label>
                  <input class="form-control" id="guthaben_name_txt" name="name" type="text" placeholder="Name" required data-validation-required-message="Bitte gib einen Namen ein">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg" id="guthaben_abfragen_btn">Guthaben abfragen</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
<!-- Registrieren -->
    <section id="register">
      <div class="container">
        <h2 class="text-center">Zu den Rovern hinzufügen</h2>
        <hr class="star-primary">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form name="hinzufuegen" id="hinzufuegen" action="/hinzufuegen/submit" novalidate>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Name</label>
                  <input class="form-control" id="rover_hinzufuegen_txt" type="text" placeholder="Name" required data-validation-required-message="Bitte gib einen Namen ein">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg" id="rover_hinzufuegen_btn">Zu den Rovern hinzufügen</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top d-lg-none">
      <a class="btn btn-primary js-scroll-trigger" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Service worker registration -->
    <script type="text/javascript">
    if (navigator.serviceWorker.controller) {
        console.log('[PWA Builder] active service worker found, no need to register')
        } else {
        //Register the ServiceWorker
        navigator.serviceWorker.register('pwabuilder-sw.js', {
          scope: './'
        }).then(function(reg) {
            console.log('Service worker has been registered for scope:'+ reg.scope);
          });
        }
    </script>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
<!--     <script src="js/jqBootstrapValidation.js"></script> -->
<!--     <script src="js/contact_me.js"></script> -->

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>
	<script src="js/freelancer.js"></script>
  </body>

</html>
