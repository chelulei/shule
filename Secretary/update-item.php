<?php
include 'connect.php';
if (isset($_POST['update'])) {

    $Id=$_POST['id'];
    $Productname = $_POST['Productname'];
    $Quantity = $_POST['Quantity'];
    $Unitprice = $_POST['Unitprice'];
    $Total = $Quantity * $Unitprice ;
    $Person = $_POST['Person'];
    $Description = $_POST['Description'];
    $Receipt=$_FILES['Receipt']['name'];
    $image_tmp=$_FILES['Receipt']['tmp_name'];
    move_uploaded_file($image_tmp,"images/$Receipt");
    $sql = "UPDATE items SET Productname='$Productname',Quantity='$Quantity',Total='$Total',
        Person='$Person',Receipt='$Receipt',Description='$Description'
        WHERE 	itemsIdno = '$Id'";

    $run= mysqli_query($con, $sql);

    if ($run){
        header("Location:page-items.php?success= Record was updated successfully ");
    }

    else {
         header("Location:page-edititem.php?error= Error!!! ");

    }
}
?>