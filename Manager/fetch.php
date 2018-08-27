<?php

include 'connect.php';

 if(isset($_POST['stud_id']))
 {
 	 $id=$_POST['stud_id'];

      $query = mysqli_query($con,"SELECT * FROM students WHERE adm_No = '$id'");

     $row1 = mysqli_fetch_array($query);

     echo json_encode($row1);

 }

if(isset($_POST['teach_id']))
 {
 	 $id=$_POST['teach_id'];
 	 
      $sql = mysqli_query($con,"SELECT * FROM teacher WHERE Idno = '$id'");

     $row = mysqli_fetch_array($sql);
      echo json_encode($row);
 }


if(isset($_POST['c_id']))
{
    $id=$_POST['c_id'];

    $cat = mysqli_query($con,"SELECT * FROM categories WHERE cat_id = '$id'");

    $rows = mysqli_fetch_array($cat);
    echo json_encode($rows);

}


if(isset($_POST['g_id']))
{
    $id=$_POST['g_id'];

    $grp= mysqli_query($con,"SELECT * FROM usergroup WHERE groupid = '$id'");

    $rs = mysqli_fetch_array($grp);
    echo json_encode($rs);



}

