<?php
include 'connect.php';
if(isset($_POST['save'])){

    $Student =$_POST['Student'];
    $class=$_POST['Class'];
    $term=$_POST['Term'];
    $year=$_POST['Year'];
    $amount =$_POST['Amount'];


    $dues=$tution-$amount;

    $balance=$amount-$tution;

   echo  $ins= mysqli_query($con,"INSERT INTO  payments(Student,Class,Term,Year,Amount,Date) 
                                  VALUES ('$Student','$class','$term','$year','$amount',NOW())");

    if($ins){

        header("Location:page-fess.php?success=Fees successfully added");
    }else

        header("Location:page-fess.php?error=Error!!!!");
}