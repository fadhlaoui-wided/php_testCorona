<?php
header( 'content-type: text/html; charset=utf-8' );

if (isset($_POST['examin'])){
    
  
    $SG       =  $_POST['SG'];  
    $fievre   =  $_POST['fievre'];
    $maux     =  $_POST['maux'];
    $fatigue  =  $_POST['fatigue'];
    $souffle  =  $_POST['souffle'];
    $toux     =  $_POST['toux'];
    $maladies =  $_POST['maladies'];
    $contact  =  $_POST['contact'];
  
$postiveAuCorona = 0 ;
    // echo ($SG);
    // echo ($fievre);
    // echo ($maux  );
    // echo ($fatigue );
    // echo ($souffle);
    // echo ( $toux );
    // echo ( $maladies);
    // echo ( $contact);
   
    $totalExamin =   $SG + $fievre + $maux + $fatigue + $souffle + $toux +  $maladies  + $contact;

    if ($SG ==1 &&  $fievre==2 &&   $maux==2 &&   $fatigue== 2 &&   $souffle== 2 && $toux == 2 &&  $maladies  == 2 && $contact == 1) {
        $postiveAuCorona =  2;
        header ("Refresh:0; testepositive.html");
    }else if ( $SG ==0  && 
     ( $fievre==0       || $fievre  ==1 ) &&  
     ( $maux==0         ||  $maux    ==1 ) && 
     ( $fatigue== 0     || $fatigue ==1 ) && 
     ( $souffle== 0     || $souffle ==1 ) && 
     ( $toux == 0       || $toux    ==1)  && 
     ( $maladies  == 0 ||  $maladies==1)  && 
     ( $contact == 0)  ) {
        $postiveAuCorona =  1;
        header ("Refresh:0; testnegative.html");   
        
        
    }else if ( $SG ==1 || $fievre==2 || $maux==2 ||  $fatigue== 2 ||  $souffle== 2 || $toux == 2 ||  $maladies  == 2 || $contact == 1  ) {
        $postiveAuCorona =  0;
        header ("Refresh:0; consulter.html");        

    }
   

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
  
  
  
  $sql = "INSERT INTO statcorona (malade)
  VALUES ('$postiveAuCorona')";
  
  if ($conn->query($sql) === TRUE) {
  
  
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  
  

}



?> 