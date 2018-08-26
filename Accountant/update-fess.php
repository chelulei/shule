<?php
include 'connect.php';
include 'functions.php';

if (isset($_POST['update'])) {
    $id =$_POST['id'];
    $student =$_POST['Student'];
    $class=$_POST['Class'];
    $term=$_POST['Term'];
    $class=$_POST['Class'];
    $year=$_POST['Year'];
    $amount =$_POST['Amount'];
    $tuition =$_POST['Tuition'];
    $balance=$tuition-$amount;
    echo $update  = "UPDATE payments SET 
                     Student='$student',
                     Class='$class',
                     Term='$term',
                     Year='$year',
                      Amount='$amount',
                      Tuition ='$tuition'
                  WHERE id='$id'";

    $run=mysqli_query($con,$update);

    if ($run){
        header("Location:student-fees.php?success=Successfully Updated");
    }
    else {
        header("Location:student-fees.php?error=There was an Error! please try again");
    }
}


?>