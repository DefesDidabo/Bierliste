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
    $email = strip_tags($_POST['registermail']);
    $pw = strip_tags($_POST['registerpw']);
    $sqlCheckIfAllreadyThere = "SELECT email FROM Credit WHERE email = '$email';";
    $resultCheck = $connection->query($sqlCheckIfAllreadyThere);
    $row = mysqli_fetch_row($resultCheck); 
    if($row[0] == '') {
        $hashedPw = password_hash($pw, PASSWORD_DEFAULT);
        $sql = "INSERT INTO Credit (Credits, email, isAdmin, password) VALUES(0.00, '$email', 0, '$hashedPw');";
        $result = $connection->query($sql);
        $message1 = 'Du wurdest registriert.';
        session_start();
        $_SESSION['userEmail'] = $email;
        echo "<div class='container'><div class='alert alert-primary' role='alert'>$message1<a href='main.php' class='alert-link'> Hier gehts weiter</a></div></div>";
        header("defes.de");

    } else {
        $message2 = 'Die eingegebene Mail ist bereits vorhanden';
        echo "<div class='container'><div class='alert alert-danger' role='alert'>$message2<a href='index.php' class='alert-link'> Versuchs nochmal</a></div></div>";
        header("index.php");
    }    
}
?> 