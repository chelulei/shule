<?php

include 'connect.php';

if (isset($_POST['update'])) {

    $id=$_POST['id'];
    $Name=$_POST['Name'];
    $Description=$_POST['Description'];

  echo  $update  = "UPDATE usergroup SET role='$Name',
                                    Description='$Description'
                                  WHERE groupid='$id'";

    $run=mysqli_query($con,$update);

    if ($run){
        header("Location:page-usersgroup.php?success=successfully Updated");
    }

    else {
        header("Location:page-usersgroup.php?error=There was an Error! please try again");
    }
}


?>