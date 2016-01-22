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
    $sql = "SELECT FROM microsoft.user (alias, passord, medlemsnummer)
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