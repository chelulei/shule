<?php
include 'connect.php';

if(isset($_POST['update'])){
  $id=$_POST['id'];

    $Name=$_POST['Name'];
    $Description=$_POST['Description'];

$sql_update=mysqli_query($con,"UPDATE usergroup SET
                role='$Name' ,
               Description='$Description' 
                WHERE groupid='$id'");
if($sql_update==true)

        header("Location:page-usersgroup.php?success=Class Updated successfully");

   else
header("Location:page-usersgroup.php?error=Error!!!");

}
?>