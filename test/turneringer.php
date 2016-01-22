<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
            <h2>Påmelding til konkuranser på LAN!</h2>
            <div class="col-md-6">
              <form role="form">
                <label for="name">Spill på LANet</label>
                <div class="radio">
                   <label>
                      <input type="radio" name="optionsRadios" id="lol" 
                         value="option1" checked> League of Legends
                   </label>
                </div>
                <div class="radio">
                   <label>
                      <input type="radio" name="optionsRadios" id="wow" 
                         value="option2" checked> World of Warcraft
                   </label>
                </div>
                <div class="radio">
                   <label>
                      <input type="radio" name="optionsRadios" id="supersmash" 
                         value="option3" checked> Super Smash Bros
                   </label>
                </div>
                <div class="form-group">
                    <label for="team/player">Lag navn/Spiller:</label>
                    <input type="text" class="form-control" id="teamplayer">
                </div>
                
                <button type="submit" class="btn btn-default">Submit</button> 
              </form>
            </div>

          </div>



          </body>
          </html>