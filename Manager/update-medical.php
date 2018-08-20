<?php

include 'connect.php';

if (isset($_POST['update'])) {

    $id=$_POST['id'];

    $user=$_POST['user'];
    $Student=$_POST['Student'];
    $Date=$_POST['Date'];
    $Report=$_POST['Report'];
    $Action=$_POST['Action'];
    $Description=$_POST['Description'];

    $update  = "UPDATE medical SET Student='$Student',
                                    Date='$Date',
                                    Report='$Report',
                                    Action='$Action',
                                    description='$Description',
                                    User='$user'
                                  WHERE medic_id='$id'";

                        $run=mysqli_query($con,$update);

                        if ($run){
                            header("Location:page-medical.php?success=successfully Updated");
                        }

                        else {
                            header("Location:page-medical.php?error=There was an Error! please try again");
                        }
                    }


?>