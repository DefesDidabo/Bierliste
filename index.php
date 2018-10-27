<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/login.js"></script>
        <script src="js/register.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- HTML5 --> 
        <meta charset="utf-8">
        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="mobile-web-app-status-bar-style" content="blue" />
        <!-- HTML 4.x --> 
        <meta http-equiv="content-type" content="text/html; charset=utf-8">    
    
        <style>
            div#load_screen {
                background: #000;
                position: fixed;
                z-index: 10;
                top: 0px;
                width: 100%;
                height: 1600px;
            }
            div#load_screen > div#loading{
                color: #FFF;
                width: 120px;
                height: 150px;
                margin: 300px auto;
                left: 50%;
                right: 50%;
                transform: translate(-50%, -50%);
            }
        </style>   
        
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

        <div id="load_screen"><div class="loader" id="loading">
            <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
            </svg>
        </div></div>

        <div class="bg-image"></div>
        <div class="content">
            <button class="button bt-big" id="bt-login">Anmelden</button>
            <button class="button bt-big" id="bt-register">Registrieren</button>
        </div>


        <div id="id01" class="modal">
            <form class="modal-content animate" action="login.php" method="POST">
                <div class="container">
                <label for="uname"><b>E-Mail</b></label>
                <input type="text" placeholder="E-Mail" name="loginmail" id="loginmail" required>

                <label for="psw"><b>Passwort</b></label>
                <input type="password" placeholder="Passwort" name="loginpw" id="loginpw" required>
                    
                <button type="submit" class="button bt-login" id="bt-anmelden" action="">Anmelden</button>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="button bt-cancel">Zurück</button>
                <span class="psw">Ich habe mein <a href="#">Passwort</a> vergessen</span>
                </div>
            </form>
        </div>
        
        <div id="id02" class="modal">
            <form class="modal-content animate" action="register.php" method="POST">
                <div class="container">
                <label for="uname"><b>E-Mail</b></label>
                <input type="text" placeholder="E-Mail" name="registermail" id="registermail" required>

                <label for="psw"><b>Passwort</b></label>
                <input type="password" placeholder="Passwort" name="registerpw" id="registerpw" required>
                    
                <button type="submit" class="button bt-login" id="bt-registireren">Registrieren</button>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="button bt-cancel">Zurück</button>
                </div>
            </form>
        </div>


    </body>
</html>