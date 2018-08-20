<?php
include 'connect.php';

if (isset($_POST['update'])) {

    $id=$_POST['id'];

    $Surname=$_POST['Surname'];
    $Middlename=$_POST['Middlename'];
    $Firstname=$_POST['Firstname'];
    $Dateofbirth=$_POST['Dateofbirth'];
    $Gender=$_POST['Gender'];
    $Class=$_POST['Class'];
    $Homeaddress=$_POST['Homeaddress'];
    $Parentname=$_POST['Parentname'];
    $Phone=$_POST['Phone'];
    $Email=$_POST['Email'];
    $Formerschool=$_POST['Formerschool'];
    $Entrymarks=$_POST['Entrymarks'];

    $update  = "UPDATE students SET  Surname='$Surname',Firstname='$Firstname',Middlename='$Middlename',Dateofbirth='$Dateofbirth',Gender='$Gender',Class='$Class',Homeaddress='$Homeaddress',
  Parentname='$Parentname',Phone='$Phone', Email='$Email', Formerschool='$Formerschool',
  Entrymarks='$Entrymarks' WHERE adm_No='$id'";

    $run=mysqli_query($con,$update);

    if ($run){
        header("Location:page-students.php?success=User successfully Updated");
    }

    else {
        header("Location:page-students.php?error=There was an Error! please try again");
    }
}


?>