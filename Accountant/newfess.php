<?php
include 'connect.php';
if(isset($_POST['save'])){

    $Student =$_POST['Student'];
    $class=$_POST['Class'];
    $term=$_POST['Term'];
    $year=$_POST['Year'];
    $Tuition =$_POST['Tuition'];
    $Amount =$_POST['Amount'];
    $Balance=$Tuition-$Amount;
   echo  $ins= mysqli_query($con,"INSERT INTO  payments(Student,Class,Term,Year,Tuition,Amount,Balance, Date) 
                                  VALUES ('$Student','$class','$term','$year','$Tuition','$Amount','$Balance',NOW())");

    if($ins){

        header("Location:page-fess.php?success=Fees successfully added");
    }else

        header("Location:page-fess.php?error=Error!!!!");
}