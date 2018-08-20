<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $Name=$_POST['Name'];
    $Description=$_POST['description'];


    $sql = "INSERT INTO usergroup (role,Description) 
    VALUES ('$Name','$Description')";

    $run= mysqli_query($con,$sql);

    if ($run){

        header("Location:page-usersgroup.php?success=successfully added");
    }

    else {
        header("Location:page-usersgroup.php?error=Error!!!!!");
    }
}
?>