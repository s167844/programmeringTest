<?php

//parse data fra side 1, if isse fordi why not?
// legger all POST data fra test.php inn til variabler det er enklere � jobbe med
if (isset($_POST["submit"])) {
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
    $sql = "INSERT INTO microsoft.user (alias, passord, medlemsnummer)
VALUES ('$alias','$passord','$medlemsnummer')";
    //sjekker om $conn er true, s� kj�rer (objektorientert) query med all data fra $sql inn til databasen. Relativt #SWAG
    if ($conn->query($sql) === TRUE) {
        echo "Din data ble lagt inn i databasen, great success! Du la inn f�lgende data: <br>
    Alias = ".$alias."<br>Passord = ".$passord."<br>Medlemsnummer: "."$medlemsnummer" ;
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
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
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h1>Hioa Gaming LAN</h1>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-12'>
                    <ul class="nav nav-tabs">
                        <li><a class='active' href="index.php">Hjem</a></li>
                        <li><a class='active' href="reservering.php">Reserver Plass</a></li>
                        <li><a class='active' href="turneringer.php">Turneringer</a></li>
                        <li><a class='active' href="minside.php">Min Side</a></li>
			<li><a class='active' href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
            <div class="row well well-lg">
                <h2>Min profil</h2>
                <div class="col-md-6">
                    <form role="form">
            	        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" value="<?php print $alias; ?>">
                	</div>
                        <div class="form-group">
                            <label for="ages">Age:</label>
                            <input type="text" class="form-control" id="age" >
                	</div>
                	<div class="form-group">
            		    <label for="medlemsnummer">Medlemsnummer:</label>
            		    <input type="medlemsnummer" class="form-control" id="medlemsnummer" value="<?php print $medlemsnummer; ?>">
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
                <div class="col-md-6">
                    <img src="no_image.png" class="img-responsive" alt="No image found "> 
                </div>
            </div>   
        </div>
    </body>
</html>

