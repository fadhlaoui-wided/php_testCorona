
<?php


header( 'content-type: text/html; charset=utf-8' );

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "loginsysteme";
   
   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }


   $sql1 = "SELECT *  FROM statcorona where malade=0";
   $result1 = $conn->query($sql1);

   $sql2 = "SELECT *  FROM statcorona where malade=1";
   $result2 = $conn->query($sql2);

   $sql3 = "SELECT *  FROM statcorona where malade=2";
   $result3 = $conn->query($sql3);

   $sum0 = 0;
   $sum1 = 0;
   $sum2 = 0;

   while($row = mysqli_fetch_array($result1)){
    $sum0 = $sum0 +1 ;
   }
   while($row = mysqli_fetch_array($result2)){
    $sum1 = $sum1 +1 ;
   }
   while($row = mysqli_fetch_array($result3)){
    $sum2 = $sum2 + 1;
   }

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" style="    margin-top: -237px;
    width: 839px;">
				<div class="login100-form-title" style="background-image: url(images/mira.jpg);">
					
				</div>

				<form class="login100-form validate-form" method="POSt" action="login.php" style="height: 287px;">
					<div class="wrap-input100 validate-input m-b-26" data-validate="CIN is required">
						<span class="label-input100">CIN</span>
						<input class="input100" type="text" name="cin" placeholder="Enter CIN">
						<span class="focus-input100"></span>
					</div>

				

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Mot de passe is required">
						<span class="label-input100">Mot de passe</span>
						<input class="input100" type="password" name="pass" placeholder="Enter Mot de passe">
						<span class="focus-input100"></span>
					</div>

				

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
						
						
					
							<a href='inscription.php' class="txt1" style="font-size: 13px;">
								Crée un compte
							</a>
							</label>
						</div>

						
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login" style="    background-color: #2196F3;    margin-left: 28%;">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

    <div style="        margin-bottom: 208px;
    margin-top: -277px;
 
">
	<h1 style="      padding-top: 39px;
    font-family: cursive;
    background: white;
    padding-left: 43%;
    color: #a7a7a7;"> Statistique </h1>
</div>
    
	<div style="       padding-top: 65px;
    height: 207px;
    margin-top: -208px;
    /* margin-bottom: 50px; */
    margin-left: -26%;
    display: flex;
    padding-left: 19%;
    background: white;
">
<div class="container-login100-form-btn" style= "padding-left: 510px;">
						<button class="login100-form-btn" name="login" type="button"  data-toggle="modal" data-target="#exampleModal1" style="    ">
						<span> 	Test Negative -    </span>	
						</button>
			</div>
		<div class="container-login100-form-btn" style="padding-left: 44px;">
							<button class="login100-form-btn" name="login" type="button"  data-toggle="modal" data-target="#exampleModal0" style="    background-color: #FF9800;">
						 <span>   Besoin de consultation   </span>	
							</button>
		</div>
		
		<div class="container-login100-form-btn" style="padding-right: 320px;">
			<button class="login100-form-btn" name="login" type="button"  data-toggle="modal" data-target="#exampleModal2" style=    "background-color: #d01204;">
			<span> Test Positive +   </span>
			</button>
		</div>
	</div>

	<div class="modal fade" id="exampleModal0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel" style=" text-align: center; padding-left: 36%;"><span style="
    font-size: 32px;"><?php   echo $sum0  ;  ?></span> Personnes<span></span></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				
				
				</div>
			</div>
	</div>
	<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel" style=" text-align: center; padding-left: 36%;"><span style="
    font-size: 32px;"><?php   echo $sum1  ;  ?></span> Personnes<span></span></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				
			</div>
		</div>
	</div>
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel" style=" text-align: center; padding-left: 36%;"><span style="
    font-size: 32px;"><?php   echo $sum2  ;  ?></span> Personnes<span></span></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				</div>	
			</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>