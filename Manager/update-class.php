<?php
include 'connect.php';

if(isset($_POST['update'])){

$id=$_POST['id'];

$Class=$_POST['Class'];
$Classteacher=$_POST['Classteacher'];
$Nostudents=$_POST['Nostudents'];
$students=$_POST['students'];

$sql_update=mysqli_query($con,"UPDATE class SET
                Class='$Class' ,
                Classteacher='$Classteacher' ,
                Nostudents='$Nostudents' ,
                students='$students' 
                WHERE classId='$id'");
if($sql_update==true)

        header("Location:page-classes.php?success=Class Updated successfully");

   else
header("Location:page-classes.php?error=Error!!!");

}
?>