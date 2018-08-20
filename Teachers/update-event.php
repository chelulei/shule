<?php
include 'connect.php';

if (isset($_POST['update'])) {
    $id=$_POST['id'];
    $Title=$_POST['Title'];
    $Start=$_POST['Start'];
    $End=$_POST['End'];
    $Description=$_POST['Description'];
    $Audience=$_POST['Audience'];
    $Venue=$_POST['Venue'];


    $update  = "UPDATE events SET 
                Title='$Title',
                Start='$Start',
                    End='$End',
                Description='$Description',
                 Audience='$Audience',
                  Venue='$Venue'
                  WHERE Event_id='$id'";

    $run=mysqli_query($con,$update);

    if ($run){
        header("Location:page-viewevents.php?success=Event successfully Updated");
    }

    else {
        header("Location:page-viewevents.php?error=There was an Error! please try again");
    }
}


?>