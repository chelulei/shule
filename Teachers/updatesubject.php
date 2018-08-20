<?php
include 'connect.php';

if (isset($_POST['update'])) {
    $id=$_POST['id'];
    $Name=$_POST['Name'];
    $Code=$_POST['Code'];
    $Type=$_POST['Type'];
    $Description=$_POST['Description'];
    $Class=$_POST['Class'];
    $Term=$_POST['Term'];

    $sql = "UPDATE subject SET Name='$Name', 
                                 Code='$Code', 
                                 Type='$Type', 
                                 Description='$Description',
                                  Class='$Class',
                                  Term='$Term'
				                 WHERE SubIdNo='$id'";

    $run= mysqli_query($con,$sql);

    if ($run){
        header("Location:page-subjects.php?success=Subject successfully Updated");
    }

    else {
        header("Location:page-subjects.php?error=Error!!!!!");
    }
}
?>