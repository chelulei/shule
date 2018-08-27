<?php
  include 'connect.php';

  if (isset($_POST['save'])) {

      $Productname = $_POST['Productname'];
      $Category = $_POST['Category'];
      $Quantity = $_POST['Quantity'];
      $Unitprice = $_POST['Unitprice'];
      $Total = $Quantity * $Unitprice ;
      $Person = $_POST['Person'];
      $Receipt = $_POST['Receipt'];
      $Receipt = $_POST['Receipt'];
      $Description= $_POST['Description'];
      $sql = "INSERT INTO items ( Date, Productname,Category, Quantity, Unitprice, Person, Total, Receipt, Description) 
              VALUES (NOW(),'$Productname','$Category','$Quantity','$Unitprice', '$Person', '$Total', '$Receipt', '$Description' )";
$run= mysqli_query($con, $sql);
      if ($run) {
          header("Location:page-items.php?success=Item successfully added");
      } else {
          header("Location:Page-addstock.php?error=There was an Error please try again!!");
      }
  }
