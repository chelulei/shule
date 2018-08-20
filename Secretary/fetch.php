<?php

 require('conect.php');

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

 ?>
