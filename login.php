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
          <div class='row well well-lg'>
            <div class='col-md-6'>
              <h2>Login</h2>
              <form role='form'>
                <div class="row"></div>
                <div class='form-group'>
                  <lable for='email'>Email:</lable>
                  <input type='email' class='form-control' id='loginmail'>
                </div>
                <div class='form-group'>
                  <lable for='pwd'>Password:</lable>
                  <input type='password' class='form-control' id='pwdlogin'>
                </div>
                <button type="submit" class="btn btn-default">Login</button>  
              </form>
            </div>
            <div class="col-md-6">
              <img src="hioagaminglogo.jpg" class="img-thumbnail">
            </div>
          </div>

        </body>
        </html>
