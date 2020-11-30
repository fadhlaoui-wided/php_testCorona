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
   $sql = "SELECT * FROM user where type=0 ";
   $result = $conn->query($sql);

   $sql1 = "SELECT *  FROM statcorona where malade=0";
   $result1 = $conn->query($sql1);

   $sql2 = "SELECT *  FROM statcorona where malade=1";
   $result2 = $conn->query($sql2);

   $sql3 = "SELECT *  FROM statcorona where malade=2";
   $result3 = $conn->query($sql3);

   $sum0 = 0;
   $sum1 = 0;
   $sum2 = 0;

   while($row = mysqli_fetch_array($result3)){
    $sum0 += $row['malade'];
   }
   while($row = mysqli_fetch_array($result3)){
    $sum1 += $row['malade'];
   }
   while($row = mysqli_fetch_array($result3)){
    $sum2 += $row['malade'];
   }

?>
 <!-- $query = "SELECT count(id) from table where toto='1'"; $result = mysql_query($query) or die (mysql_error()); $resultat=mysql_fetch_row($result); -->

 <html>
<head>
<meta charset="utf-8">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
  
    <title></title>
</head>
<body>

<div style="display:flex;margin-top: 50px;">

<button  style="margin-left: 15%;" type="button" class="login100-form-btn" data-toggle="modal" data-target="#exampleModal">
  Ajouter Patient
</button>
<button  style="margin-left: 15%;" type="button" class="login100-form-btn" data-toggle="modal" data-target="#exampleModal2">
  Delete Patient
</button> 
<button  style="margin-left: 15%;" type="button" class="login100-form-btn" data-toggle="modal" data-target="#exampleModal3">
  Modifier Patient
</button>
</div>

       <div  class="container" style="margin-top: 50px;"> 
        <table id="user_data" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Datedenaissance</th>
                <th scope="col">Email</th>
                <th scope="col">NumeroCIN</th>
                <th scope="col">Login</th>
                <th scope="col">pass</th>
                <th scope="col">numtel</th>
                <th scope="col">Date Rendez VOOUS</th>

              </tr>
            </thead>
            <tbody>
              <?php

               while ($row  = mysqli_fetch_array($result)){

                echo  ' 
              <tr>
                  <td>'  .$row["Id"].'</td>
                  <td>'  .$row["Nom"].'</td>
                  <td>'  .$row["Prenom"].'</td>
                  <td>'  .$row["Datedenaissance"].'</td>
                  <td>'  .$row["Email"].'</td>
                  <td>'  .$row["NumeroCIN"].'</td>
                  <td>'  .$row["Login"].'</td>             
                  <td>'  .$row["pass"].'</td>
                  <td>'  .$row["numtel"].'</td>
                  <td>'  .$row["rdv"].'</td>
 
              </tr>
              ';
               }
              
            ?>
            
            </tbody>
          </table>
       </div>
     <!-- modale add  -->
     <!-- Button trigger modal -->


<!-- Modal -->
<form class="login100-form validate-form" method="POSt" action="add.php">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajout Patient</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  
				
				<!--Nom  -->
				<div class="wrap-input100 validate-input m-b-26" data-validate="Nom est required">
						<span class="label-input100">Nom</span>
						<input class="input100" type="text" name="Nom" placeholder="Enter Nom">
						<span class="focus-input100"></span>
					</div>
				<!--Prenom  -->
				<div class="wrap-input100 validate-input m-b-26" data-validate="Prenom is required">
						<span class="label-input100">Prénom</span>
						<input class="input100" type="text" name="Prenom" placeholder="Enter Prénom">
						<span class="focus-input100"></span>
					</div>
				<!--Datedenaissance  -->
				<div class="wrap-input100 validate-input m-b-26" data-validate="Date de naissance is required">
						<span class="label-input100">Date de naissance</span>
						<input class="input100" type="text" name="Datedenaissance" placeholder="Enter Date de naissance">
						<span class="focus-input100"></span>
					</div>
				<!--Numéro CIN  -->
				<div class="wrap-input100 validate-input m-b-26" data-validate="Numéro CIN  is required">
						<span class="label-input100">Numéro CIN</span>
						<input class="input100" maxlength="11" minlength="8"  type="number" name="NumeroCIN" placeholder="Enter Numéro CIN">
						<span class="focus-input100"></span>
					</div>
				<!--Numéro téléphone  -->
				<div class="wrap-input100 validate-input m-b-26" data-validate="Numéro téléphone is required">
						<span class="label-input100">Numéro téléphone</span>
						<input class="input100" maxlength="8" type="text" name="numtel" placeholder="Enter Numéro téléphone">
						<span class="focus-input100"></span>
					</div>
				<!--Email  -->
				<div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="Email" placeholder="Enter Email">
						<span class="focus-input100"></span>
					</div>
				<!--Login -->
				<div class="wrap-input100 validate-input m-b-26" data-validate="Login is required">
						<span class="label-input100">Login</span>
						<input class="input100" type="text" name="Login" placeholder="Enter Login">
						<span class="focus-input100"></span>
					</div>
				<!--Mot de passe -->

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Mot de passe</span>
						<input class="input100" type="password" minlength="8" name="pass" placeholder="Enter Mot de passe">
						<span class="focus-input100"></span>
					</div>
					

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Rendez vous is required">
						<span class="label-input100"> Rendez vous </span>
						<input class="input100" type="text" minlength="8" name="rdv" placeholder="Enter Rendez vous">
						<span class="focus-input100"></span>
					</div>
					

				
		
      </div>
      <div class="modal-footer">
       
        <div class="container-login100-form-btn">
						<button class="login100-form-btn" name="ajout">
							Ajouter
						</button>
					</div>
      </div>
    </div>
  </div>
</div>
</form>    

<!-- delete modal -->


<!-- Modal -->
<form class="login100-form validate-form" method="POSt" action="add.php">
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">supprimer Patient</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  
				
			
				<!--Numéro CIN  -->
				<div class="wrap-input100 validate-input m-b-26" data-validate="Numéro CIN  is required">
						<span class="label-input100">Numéro CIN</span>
						<input class="input100" maxlength="11" minlength="8"  type="number" name="NumeroCIN" placeholder="Enter Numéro CIN">
						<span class="focus-input100"></span>
					</div>
		
      </div>
      <div class="modal-footer">
       
        <div class="container-login100-form-btn">
						<button class="login100-form-btn" name="Suprimer">
							Suprimer
						</button>
					</div>
      </div>
    </div>
  </div>
</div>
</form>                
<form class="login100-form validate-form" method="POSt" action="add.php">
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">modifier les coordonees des patients </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  
      <!--Numéro CIN  -->
				<div class="wrap-input100 validate-input m-b-26" data-validate="Numéro CIN  is required">
						<span class="label-input100">Numéro CIN</span>
						<input class="input100" maxlength="11" minlength="8"  type="number" name="NumeroCIN" placeholder="Entrer le Numéro CIN">
						<span class="focus-input100"></span>
					</div>
				
				<!--Rendez vous -->

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Rendez vous is required">
						<span class="label-input100"> Rendez vous </span>
						<input class="input100" type="text" minlength="8" name="rdv" placeholder="Enter Entrer le nouveau Rendez vous">
						<span class="focus-input100"></span>
					</div>
			
			
    
      </div>
      <div class="modal-footer">
       
        <div class="container-login100-form-btn">
						<button class="login100-form-btn" name="Modif">
							Modifier 
						</button>
					</div>
      </div>
    </div>
  </div>
</div>
</form>      
<div>
        <nav aria-label="navigation">
            <ul class="pager">
              <button class="previous" style="    background-color: #e10f00  
              "><a href="index.php" title="Précédent" style="color: white;
            
                text-decoration: blink;">Deconnexion</a></button>
            </ul>
          </nav>
        </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
<script>
$(document).ready(function(){
$('#user_data').DataTable();
});

</script>