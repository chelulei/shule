<?php
include 'connect.php';
if (isset($_POST['update'])) {

    $category = $_POST['category'];

    $sql= "UPDATE categories SET cat_name='$category' WHERE cat_id = $_POST[id]";
    if (mysqli_query($con, $sql)) {
        header("Location:page-itemscategory.php?success=Category has been updated Successfully");
    }else{
        header("Location:page-itemscategory.php?error=Error!!!!!");
    }
}