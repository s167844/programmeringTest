<?php
header('Content-Type: text/html; charset=utf-8');
    $alias = $_POST["alias"];
    $passord = $_POST["passord"];
    $medlemsnummer = $_POST["medlemsnummer"];

//loginkredensialer for LOCALHOST webserver,
    $servername = "localhost";
    $username = "root";
    $password = "illievski";
    $dbname = "microsoft";
 $conn = new mysqli($servername, $username, $password, $dbname); //legger logindata inn i en enkel $conn (connection) variabel
// Sjekker om vi kan koble til DB.
    if ($conn->connect_error) {
        die("Kunne ikke koble til datasen, fiks koden din n00b.: " . $conn->connect_error);
    }
//sql statement for � sette data in i database
    $sql = "SELECT FROM microsoft.user (alias, passord, medlemsnummer)
        VALUES ('$alias','$passord','$medlemsnummer')";
if ($conn->query($sql) === TRUE) {
        echo "Din data ble lagt inn i databasen, great success! Du la inn følgende data: <br>
   Alias = ".$alias."<br>Passord = ".$passord."<br>Medlemsnummer: "."$medlemsnummer" ;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
<html>
    <head>
        <title>Hioa Gaming LAN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="main.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
        <header>
        <ul>
        <li><a href="index.html">Home</a></li>
        <li>
            <a href="#">Velg emne</a>
            <ul class="dropdown">
                <li><a href="diskretMatte.html">Diskret Matematikk</a></li>
                <li><a href="programmering.html">Programmering</a></li>
                <li><a href="webprosjekt.html">Webprosjekt</a></li>
            </ul>
        </li>
        <li><a href="contacts.html">Contact</a></li>
        <li><a href="https://idp.feide.no/simplesaml/module.php/feide/login.php?asLen=262&AuthState=_26db0b5019a2d868ed27cdd0c26cea1347f13354f3%3Ahttps%3A%2F%2Fidp.feide.no%2Fsimplesaml%2Fsaml2%2Fidp%2FSSOService.php%3Fspentityid%3Dhttps%253A%252F%252Fsp.fronter.com%252Fshibboleth%26cookieTime%3D1442780413%26RelayState%3Dss%253Amem%253A56c018eb71afb2c163a597b348a67be3d21030955f18b4de660f58186505f692" target="_blank">Fronter</a></li>
        <li><a href="https://idp.feide.no/simplesaml/module.php/feide/login.php?asLen=236&AuthState=_74ad39426305cb417b8d05d5ffa61fd512ee7a6a62%3Ahttps%3A%2F%2Fidp.feide.no%2Fsimplesaml%2Fsaml2%2Fidp%2FSSOService.php%3Fspentityid%3Durn%253Amace%253Afeide.no%253Aservices%253Ano.uio.usit.fs_studweb%26cookieTime%3D1442781473%26RelayState%3DHiOA%2526cookies%253D1%2526fnromgjor%253D" target="blank">Studentweb</a></li>
        </ul>
        </header>
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h1>Hioa Gaming LAN</h1>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-12'>
                    <ul class="nav nav-tabs">
                       <li><a class='active' href="file:///E:/Coding%20Hackthon/reservering.html#">Reservasjon</a></li>
                       <li><a href="#">Turneringer</a></li>
                       <li><a class='active' href="file:///E:/Coding%20Hackthon/index.html#">Min Side</a></li>
                    </ul>
                </div>
            </div>
            <div class="row well well-lg">
                <div class="col-md-6">
                    <form role="form">
                        <div class="form-group">
                            <img src="no_image.png" class="img-responsive" alt="No image found "> 
                        </div>
            	        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" value="navn">
                	</div>
                        <div class="form-group">
                            <label for="ages">Age:</label>
                            <input type="text" class="form-control" id="age">
                	</div>
                	<div class="form-group">
            		    <label for="email">Email address:</label>
            		    <input type="email" class="form-control" id="email">
                	</div>
                	<div class="form-group">
                            <label for="compSpecs">Computer specs:</label>
                            <textarea class="form-control" rows="5" id="compSpecs"></textarea>
                	</div>
                	<div class="form-group">
                            <label for="Games">Games:</label>
                            <textarea class="form-control" rows="5" id="Games"></textarea>
                	</div>
                    </form>
                </div>
            </div>   
        </div>
    </body>
</html>

