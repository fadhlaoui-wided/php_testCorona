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
		<div class="container-login100" style="  background: #ffffff;">
			<div class="wrap-login100" style="width: 627px;">
				<div class="login100-form-title" style="background-image: url(images/corona.jpg); height: 220px; " >
					
				</div>

			<form class="login100-form validate-form" method="POSt" action="add.php">
				
				<!--Nom  -->
				<div class="wrap-input100 validate-input m-b-26" data-validate="Nom est required">
						<span class="label-input100">Nom</span>
						<input class="input100" type="text" name="Nom" placeholder="Entrer votre Nom">
						<span class="focus-input100"></span>
					</div>
				<!--Prenom  -->
				<div class="wrap-input100 validate-input m-b-26" data-validate="Prenom is required">
						<span class="label-input100">Prénom</span>
						<input class="input100" type="text" name="Prenom" placeholder=" Entrer votre Prénom">
						<span class="focus-input100"></span>
					</div>
				<!--Datedenaissance  -->
				<div class="wrap-input100 validate-input m-b-26" data-validate="Date de naissance is required">
						<span class="label-input100">Date de naissance</span>
						<input class="input100" type="text" name="Datedenaissance" placeholder="Entrer votre Date de naissance">
						<span class="focus-input100"></span>
					</div>
				<!--Numéro CIN  -->
				<div class="wrap-input100 validate-input m-b-26" data-validate="Numéro CIN  is required">
						<span class="label-input100">Numéro CIN</span>
						<input class="input100" maxlength="11" minlength="8"  type="number" name="NumeroCIN" placeholder="Entrer votre Numéro CIN">
						<span class="focus-input100"></span>
					</div>
				<!--Numéro téléphone  -->
				<div class="wrap-input100 validate-input m-b-26" data-validate="Numéro téléphone is required">
						<span class="label-input100">Numéro téléphone</span>
						<input class="input100" maxlength="8" type="text" name="numtel" placeholder="Entrer votre Numéro téléphone">
						<span class="focus-input100"></span>
					</div>
				<!--Email  -->
				<div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="Email" placeholder="Entrer votre Email">
						<span class="focus-input100"></span>
					</div>
				<!--Login -->
				<div class="wrap-input100 validate-input m-b-26" data-validate="Login is required">
						<span class="label-input100">Login</span>
						<input class="input100" type="text" name="Login" placeholder="Entrer votre Login">
						<span class="focus-input100"></span>
					</div>
				<!--Mot de passe -->

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Mot de passe</span>
						<input class="input100" type="password" minlength="8" name="pass" placeholder=" Entrer votre Mot de passe">
						<span class="focus-input100"></span>
					</div>
					

					<div class="flex-sb-m w-full p-b-30">
						
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="inscription" >
							Inscription
						</button>
					</div>
			</form>
			
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