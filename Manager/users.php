<?php
  include 'connect.php';

  if (isset($_POST['save'])) {

      $Firstname=$_POST['Firstname'];
      $Middlename=$_POST['Middlename'];
      $Surname=$_POST['Surname'];
      $Phone=$_POST['Phone'];
      $Email=$_POST['Email'];
      $status=$_POST['status'];
      $role=$_POST['role'];
      


      //username and password is auto generated when adding new user. 
    $username = $Firstname[0].$Middlename[0].$Surname;
    $password = md5($role);
    

$sql = "INSERT INTO user (username, Firstname,Middlename,Surname, Phone,Email, password,role,status) 
    VALUES ('$username', '$Firstname','$Middlename', '$Surname', '$Phone','$Email', '$password', '$role', 'active')";
      $run=mysqli_query($con,$sql);
      if ($run){
          header("Location:page-allusers.php?success=successfully Updated");
      }

      else {
          header("Location:page-allusers.php?error=There was an Error! please try again");
      }
  }
?>