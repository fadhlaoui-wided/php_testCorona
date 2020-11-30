<?php
header( 'content-type: text/html; charset=utf-8' );


if (isset($_POST['login'])){
    
    $cin =  $_POST['cin'];
    $pass  =  $_POST['pass'];

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
    
    $sql = "SELECT * FROM user where NumeroCIN='$cin' ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
       // echo "id: " . $row["Id"]. " - Name: " . $row["email"]. " " . $row["password"]. "<br>";

        if ( $row["pass"] != $pass) {
          header ("Refresh:0; index.php");
          echo '<script>alert(" Mot de passe incorrect");</script>';


        }else  if ($row["pass"] == $pass) {
           
            if  ( $row["type"] == 0) {
              
              header ("Refresh:0; patient.html");
              echo '<script>alert(" Cher patient,. Nous vous souhaitons la bienvenue sur notre site");</script>';

            //header("Location:/projects/Login_v15/patient.html");

            }else if ($row["type"] == 1){

               
		header ("Refresh:0; medecin.php");
    echo '<script>alert("bienvenue docteur");</script>';
    
             // header("Location:/projects/Login_v15/medecin.php");
            }
          
        }
      }
    } else {
      header( "Refresh:0; inscription.php");
      echo '<script>alert("vous n avez pas un compte dans notre site .inscrit vous pour que vous aurai le privilége de faire le teste medical");</script>';

    }
    $conn->close();
  

}

// if (isset($_POST['inscription'])){

//     $email =  $_POST['username'];
//     $pass  =  $_POST['pass'];

//     echo  $email+  $pass ;
// }

?> 