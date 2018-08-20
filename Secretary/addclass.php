<?php
  include 'connect.php';

  if (isset($_POST['save'])) {

      $Class=$_POST['Class'];
      $Productname=$_POST['Classteacher'];
      $Nostudents=$_POST['Nostudents'];
      $Status=$_POST['Status'];
     

$sql = "INSERT INTO items ( Class, Classteacher, Nostudents, Status) 
              VALUES ('$Class','$Classteacher','$Nostudents','$Status')";
    
    if ($run){

     header("Location:page-management.php?success=Item successfully added");
    exit();}
    else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
    $con->close();
  }
?>