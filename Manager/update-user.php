<?php

include 'connect.php';

if (isset($_POST['update'])) {

    $id=$_POST['id'];

    $Firstname = $_POST['Firstname'];
    $Middlename = $_POST['Middlename'];
    $Surname = $_POST['Surname'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['Email'];
    $role = $_POST['role'];

    $update  = "UPDATE user SET Firstname='$Firstname',
                                    Middlename='$Middlename',
                                    Surname='$Surname',
                                    Phone='$Phone',
                                    Email='$Email',
                                    role='$role'
                                  WHERE id='$id'";

                        $run=mysqli_query($con,$update);

                        if ($run){
                            header("Location:page-allusers.php?success=successfully UpMiddlenamed");
                        }

                        else {
                            header("Location:page-editusers.php?error=There was an Error! please try again");
                        }
                    }


?>