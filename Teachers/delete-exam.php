
<?php

include 'connect.php';


if(isset($_GET['delete']))

{

    $id=$_GET['delete'];

    $query= mysqli_query($con, "DELETE FROM exams WHERE exam_id='$id' ");

   if( $query):
       header("Location:page-exams.php?success=Successfully deleted");
       else:
           header("Location:page-exams.php?success=Error!!!!!");
    endif;
}?>