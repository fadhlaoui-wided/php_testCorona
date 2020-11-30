<?php
header( 'content-type: text/html; charset=utf-8' );


if (isset($_POST['inscription'])){
    
    


    $Nom  =  $_POST['Nom'];
    $Prenom  =  $_POST['Prenom'];
    $Datedenaissance  =  $_POST['Datedenaissance'];
    $NumeroCIN  =  $_POST['NumeroCIN'];
    $numtel =  $_POST['numtel'];
    $Email  =  $_POST['Email'];
    $Login  =  $_POST['Login'];
    $pass   =  $_POST['pass'];
    
    // echo ($Nom ) ;
    // echo ($Prenom ) ;
    // echo ($Datedenaissance ) ;
    // echo ($NumeroCIN ) ;
    // echo ($numtel ) ;
    // echo ($Email ) ;
    // echo ($Login ) ;
    // echo ($pass ) ;



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



$sql = "INSERT INTO user (Nom, Prenom,Datedenaissance,NumeroCIN,numtel,Email,Login,pass)
VALUES ('$Nom', '$Prenom','$Datedenaissance','$NumeroCIN','$numtel','$Email','$Login','$pass')";

if ($conn->query($sql) === TRUE) {

  header ("Refresh:0; index.php");  
  echo '<script>alert("Compte créer avec suceé");</script>';   } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


}
if (isset($_POST['ajout'])){
    
    


  $Nom  =  $_POST['Nom'];
  $Prenom  =  $_POST['Prenom'];
  $Datedenaissance  =  $_POST['Datedenaissance'];
  $NumeroCIN  =  $_POST['NumeroCIN'];
  $numtel =  $_POST['numtel'];
  $Email  =  $_POST['Email'];
  $Login  =  $_POST['Login'];
  $pass   =  $_POST['pass'];
  $pass   =  $_POST['pass'];
  $rdv =  $_POST['rdv'];
  // echo ($Nom ) ;
  // echo ($Prenom ) ;
  // echo ($Datedenaissance ) ;
  // echo ($NumeroCIN ) ;
  // echo ($numtel ) ;
  // echo ($Email ) ;
  // echo ($Login ) ;
  // echo ($pass ) ;



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



$sql = "INSERT INTO user (Nom, Prenom,Datedenaissance,NumeroCIN,numtel,Email,Login,pass,rdv)
VALUES ('$Nom', '$Prenom','$Datedenaissance','$NumeroCIN','$numtel','$Email','$Login','$pass','$rdv')";

if ($conn->query($sql) === TRUE) {
  header ("Refresh:0; medecin.php");  
  echo '<script>alert("Nouvel enregistrement créé avec succès");</script>';   
      

} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


}

if (isset($_POST['Suprimer'])){

 
  $NumeroCIN  =  $_POST['NumeroCIN'];

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


$sql1= "select * from user WHERE NumeroCIN='$NumeroCIN' ";
$data =$conn->query($sql1);
$sql = " DELETE FROM user WHERE NumeroCIN='$NumeroCIN' ";

if ( $data->num_rows > 0 && $conn->query($sql) === TRUE) {
  header ("Refresh:0; medecin.php");  
  echo '<script>alert("Enregistrement supprimé avec succès");</script>';       

} else {
  header ("Refresh:0; medecin.php");  

  echo '<script>alert("Numero de CIN invalide essayer de nouveau ");</script>';   

}

$conn->close();


}

if (isset($_POST['Modif'])){

  $NumeroCIN  =  $_POST['NumeroCIN'];
 
  $rdv =  $_POST['rdv'];

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
$sql1= "select * from user WHERE NumeroCIN='$NumeroCIN' ";
$data =$conn->query($sql1);
$sql ="UPDATE user  SET  rdv	=' $rdv' WHERE NumeroCIN='$NumeroCIN' " ;

$result = $conn->query($sql);

if ( $data->num_rows > 0 && $conn->query($sql) === TRUE) {
  header ("Refresh:0; medecin.php");  
  echo '<script>alert("mise à jour réussie");</script>';   
     

}
else {

  header ("Refresh:0; medecin.php");  
  echo '<script>alert("Numero de CIN invalide essayer de nouveau ");</script>';   
}

$conn->close();


}

?> 