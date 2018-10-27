<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- HTML5 --> 
        <meta charset="utf-8">
        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="mobile-web-app-status-bar-style" content="blue" />
        <!-- HTML 4.x --> 
        <meta http-equiv="content-type" content="text/html; charset=utf-8"> 
            <form method="get" action="main.php" type="hidden">
                <input type="hidden" name="userMail" value="">
            </form>
        <script>
            window.addEventListener("load", function() {
                var load_screen = document.getElementById("load_screen");
                setTimeout(function(){
                    document.body.removeChild(load_screen);
                }, 3000);
            });
        </script>   
    </head>
    <title>
        Bierliste
    </title>
    <body>
        
    </body>
</html>

<?php
require_once('dbconnect.php');

if($_POST) {
    // Werte holen
    $email = strip_tags($_POST['loginmail']);
    $sqlIsMailValid = "SELECT email FROM Credit WHERE email = '$email';";
    $emailResultArray = $connection->query($sqlIsMailValid);
    $emailWert = mysqli_fetch_row($emailResultArray); 

    // Email ist in DB vorhanden
    if($emailWert[0] == $email) {
  
    // DB-Abfrage passend convertieren
    $pw = strip_tags($_POST['loginpw']);
    $sqlGetPW = "SELECT password FROM Credit WHERE email = '$email';";
    
    $resultValidCheck = $connection->query($sqlGetPW);
    $hashedPassword = mysqli_fetch_row($resultValidCheck); 
    $pwExtracted = $hashedPassword[0];

    // Überprüfen, ob die Passwörter stimmen
        if (password_verify($pw, $pwExtracted)) {
            // aktuelle Mail an Session übergeben & an Hauptseite weiterleiten
            session_start();
            $_SESSION['userEmail'] = $email;
            header( "Location: main.php" );
      } else {
          // Email in DB vorhanden, jedoch stimmt PW nicht überein
        $message2 = 'Das eingegebene Passwort stimmt nicht mit der eingegebenen Email überein.';
        echo "<div class='container-alert'><div class='alert alert-danger' role='alert'>$message2<a href='index.php' class='alert-link'> Versuchs nochmal</a></div></div>";
      }
    } else {
        // User mit passender Mail nicht vorhanden
        $message3 = "Die eingegebene Mailadresse ist nicht in der Datenbank hinterlegt.";
        echo "<div class='container-alert'><div class='alert alert-danger' role='alert'>$message3<a href='index.php' class='alert-link'> Versuchs nochmal</a></div></div>";
    }

}
?> 