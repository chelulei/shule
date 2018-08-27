<?php
include 'connect.php';
if (isset($_POST['save'])) {

    $cat=$_POST['category'];

    $sql="INSERT INTO categories (cat_name)VALUES('$cat')";
    $run=mysqli_query($con,$sql);

    if ( $run) {

        header("Location:page-itemscategory.php?success=Category successfully added");
    }else{

        header("Location:page-itemscategory.php?error=Error!!!!!");
    }
}

